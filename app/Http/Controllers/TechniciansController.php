<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;
use App\Models\Report;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class TechniciansController extends Controller
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
        $technicians = DB::table('technicians')->where('username','=',$user)->first();
        $data = DB::table('user')->join('technicians', 'technicians.username','=', 'user.username')->select('technicians.fullname')->first();
        return view('pages.tech.technicians',compact('user','data'));
    }
    public function edit(Request $request)
    {
        $user = $request->session()->get('user');
        $technicians = DB::table('technicians')->where('username','=',$user)->first();
        $data = DB::table('user')->join('technicians', 'technicians.username','=', 'user.username')->select('technicians.fullname')->first();
        return view('pages.tech.edit',compact('user','data','technicians'));
    }
    public function editpost(Request $request)
    {
        $user = $request->session()->get('user');
        $data=['username' => $user,
                'fullname' => $request->get('fullname'),
                'phone'    => $request->get('phone'),
                'email'    => $request->get('email'),
                'address'  => $request->get('address')];
        //dd($data);
        $datauser=['username' => $user,
                'password' => Hash::make($request->get('password'))];
        DB::table('user')
                ->where('username','=', $user)
                ->update($datauser);
        DB::table('technicians')
              ->where('username','=', $user)
              ->update($data);
       
        return redirect()->back()->with('name', 'Update successfully');
    }

    public function history(Request $request)
    {
        $user = $request->session()->get('user');
        $technicians = DB::table('technicians')->where('username','=',$user)->first();
        $data = DB::table('user')->join('technicians', 'technicians.username','=', 'user.username')->select('technicians.fullname')->first();
        $report = DB::table('report')->where('username_tech','=',$user)->orderBy('report.solve', 'DESC')->paginate(5);
        return view('pages.tech.history',compact('user','data','report'));
    }
    public function detail(Request $request)
    {
        $id = $request->id;
        $user = $request->session()->get('user');
        $technicians = DB::table('technicians')->where('username','=',$user)->first();
        $data = DB::table('user')->join('technicians', 'technicians.username','=', 'user.username')->select('technicians.fullname')->first();
        $report = DB::table('report')->where('id','=',$id)->first();
        $technicians=DB::table('technicians')->join('report','report.username_tech','=','technicians.username')->where('report.id','=',$id)->first();
        $employee=DB::table('employee')->join('report','report.username_emp','=','employee.username')->where('report.id','=',$id)->first();

        return view('pages.tech.detail',compact('user','data','report','employee'));
    }
    public function work(Request $request)
    {
        $user = $request->session()->get('user');
        $technicians = DB::table('technicians')->where('username','=',$user)->first();
        $data = DB::table('user')->join('technicians', 'technicians.username','=', 'user.username')->select('technicians.fullname')->first();
        return view('pages.tech.work',compact('user','data'));
    }
}
