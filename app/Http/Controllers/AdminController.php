<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;
use App\Models\Report;
use App\Models\Employee;
use App\Models\Technicians;
use App\Models\Message;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index ()
    {
        
        $data = DB::table('user')->where('type','!=','2')->get();;

        return view('pages.admins.admin', ['data' => $data]);
    }
    public function add ()
    {
        return view('pages.admins.add');
    }

    public function add_submit(Request $request)
    {
        $account = new User();
        $account->username = $request->get('code');
        $account->type = $request->get('type');
        $account->password = bcrypt($request->get('password'));
        $account->save();
        if($request->get('type')==0){
            $employee = new Employee();
            $employee->username= $request->get('code');
            $employee->fullname=$request->get('fullname');
            $employee->sex=$request->get('sex');
            $employee->position=$request->get('position');
            $employee->save();
        }
        else{
            $Technicians = new Technicians();
            $Technicians->username= $request->get('code');
            $Technicians->fullname=$request->get('fullname');
            $Technicians->sex=$request->get('sex');
            $Technicians->position=$request->get('position');
            $Technicians->save();
        }
        return redirect('admin')->with('success', 'Add Success');

    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('pages.admins.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $data=[
                'password'    => bcrypt($request->get('password')),
    ];
        DB::table('user')
            ->where('id','=', $request->id)
            ->update($data);
        
        return redirect('admin')->with('success', 'Update Success');
    }
    public function delete($id)
    {
        $data = user::findOrFail($id);
        $data->delete();
        // dd($data);
        return back()->with('success', 'Delete Success!');
    }

    // ===============================Report==========================

    public function report ()
    {
        
          
        $data = DB::table('report')->orderBy('report.createreport', 'DESC')->get();;

        return view('pages.admins.report', ['data' => $data]);
    }

    public function deletereport($id)
    {
        $data = report::findOrFail($id);
        $data->delete();
        // dd($data);
        return back()->with('success', 'Delete Success!');
    }
    public function reportdetail(Request $request)
    {
        $id = $request->id ;
        $report = DB::table('report')->where('id','=',$id)->first();
        $technicians=DB::table('technicians')->join('report','report.username_tech','=','technicians.username')->where('report.id','=',$id)->first();
        $employee=DB::table('employee')->join('report','report.username_emp','=','employee.username')->where('report.id','=',$id)->first();
        $tech= DB::table('user')->join('technicians','technicians.username','=','user.username')->where('user.type','=',1)->get();
        $messages=DB::table('messages')->where('post_id','=',$id)->orderBy('messages.time', 'ASC')->get();
        return view('pages.admins.reportdetail',compact('id','report','technicians','employee','tech','messages'));
    }

    public function confirm(Request $request)
    {
        $data=['username_tech' =>$request->get('username_tech'),
                'status' => 1,
    ];
        DB::table('report')
            ->where('id','=', $request->id)
            ->update($data);
        
        return redirect('admin/report')->with('success', 'Confirm Success');
    }

    public function feedback(Request $request)
    {    
        $Message = new Message();
        $Message->contains = $request->feedback;
        $Message->post_id =  $request->id;
        $Message->user_type = 2;
        $Message->time =  Carbon::now();
        $Message->save();

        $messages=DB::table('messages')->where('post_id','=',$request->id)->orderBy('messages.time', 'ASC')->get();
    

         return view('pages.admins.componentadmin',compact('messages'));
    }
    public function mess(Request $request)
    {    
        $messages=DB::table('messages')->where('post_id','=',$request->id)->orderBy('messages.time', 'ASC')->get();
 
         return view('pages.admins.componentadmin',compact('messages'));
    }
}
