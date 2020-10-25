<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;
use App\Models\Report;
use App\Models\Employee;
use App\Models\Message;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
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
    public function index(Request $request)
    {
        $user = $request->session()->get('user');
        $employee = DB::table('employee')->where('username','=',$user)->first();
        $data = DB::table('user')->join('employee', 'employee.username','=', 'user.username')->select('employee.fullname')->first();
        return view('pages.users.home',compact('user','data'));
    }
    public function report(Request $request)
    {
        $user = $request->session()->get('user');
        $employee = DB::table('employee')->where('username','=',$user)->first();
        $data = DB::table('user')->join('employee', 'employee.username','=', 'user.username')->select('employee.fullname')->first();
        return view('pages.users.report',compact('user','data'));
    }
    public function reportfeeback(Request $request)
    {
        $this->validate($request, [
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $user = $request->session()->get('user');
        $report = new Report();
        $img = $request->file('img');
        $name="";
        if(isset($img))
        {
            $path = public_path('File/File_img');
            $name = Str::Random(5).'_'.$img->getClientOriginalName(); 
            $img->move($path,$name);
        }
        $report->username_emp =  $request->session()->get('user');
        $report->title = $request->get('title');
        $report->address = $request->get('address');
        $report->description= $request->get('description');
     
        $report->status=0;
        $report->image =$name;
        $datenow = Carbon::now();
        $report->createreport = $datenow;
        // $report->createreport =Carbon::parse($datenow)->format('Y-m-d'); 


        $report->save();
        return redirect()->back()->with('name', 'Report successfully');
    }
    public function history(Request $request)
    {
        $user = $request->session()->get('user');
        $employee = DB::table('employee')->where('username','=',$user)->first();
        $data = DB::table('user')->join('employee', 'employee.username','=', 'user.username')->select('employee.fullname')->first();
        $report = DB::table('report')->where('username_emp','=',$user)->orderBy('report.createreport', 'DESC')->get();
        return view('pages.users.history',compact('user','data','report'));
    }
    public function detail(Request $request)
    {
        $id = $request->id;
        $user = $request->session()->get('user');
        $employee = DB::table('employee')->where('username','=',$user)->first();
        $data = DB::table('user')->join('employee', 'employee.username','=', 'user.username')->select('employee.fullname')->first();
        $report = DB::table('report')->where('id','=',$id)->first();
        $technicians=DB::table('technicians')->join('report','report.username_tech','=','technicians.username')->where('report.id','=',$id)->first();
        $messages=DB::table('messages')->where('post_id','=',$id)->orderBy('messages.time', 'ASC')->get();

        return view('pages.users.detail',compact('user','data','report','technicians','id','messages'));
    }
    public function edit(Request $request)
    {
        $user = $request->session()->get('user');
        $employee = DB::table('employee')->where('username','=',$user)->first();
        $data = DB::table('user')->join('employee', 'employee.username','=', 'user.username')->select('employee.fullname')->first();
        return view('pages.users.edit',compact('user','data','employee'));
    }
    public function editpost(Request $request)
    {
        $user = $request->session()->get('user');
        $data=['username' => $user,
                'fullname' => $request->get('fullname'),
                'phone'    => $request->get('phone'),
                'email'    => $request->get('email'),
                'address'  => $request->get('address')];
        $datauser=['username' => $user,
                'password' => Hash::make($request->get('password'))];
        DB::table('employee')
              ->where('username','=', $user)
              ->update($data);
        DB::table('user')
            ->where('username','=', $user)
            ->update($datauser);
        return redirect()->back()->with('name', 'Update successfully');
    }

    public function feedback(Request $request)
    {
        $account = new Message();
        $account->contains = $request->feedback;
        $account->post_id =  $request->id;
        $account->user_type = 0;
        $account->time =  Carbon::now();
        $account->save();

        $messages=DB::table('messages')->where('post_id','=',$request->id)->orderBy('messages.time', 'ASC')->get();
        return Response::json(array(
            'messages' => $messages,  
          ));
    }
    public function changeLanguage(Request $request)
    {
        $lang = $request->language;
        $language = config('app.locale');
        if ($lang == 'en') {
            $language = 'en';
        }
        if ($lang == 'vi') {
            $language = 'vi';
        }
        Session::put('language', $language);
        return redirect()->back();
    }
}
