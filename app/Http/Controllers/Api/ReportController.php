<?php

namespace App\Http\Controllers\Api;
use DB;
use Auth;
use Carbon\Carbon;
use App\Models\Message;
use App\Models\Report;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('report')->get();
        return response()->json($data, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  
    public function retrieveData(){
        $result = DB::table('report')->where('status','=','3')->get();
        return response()->json($result, 200);
    }
    public function login(Request $request)
    {
        $arr = [
            'username' => $request->username,
            'password' =>$request->password,
        ];
         //dd($arr);
         //dd(Auth::attempt($arr));
        if (Auth::attempt($arr)) {
            $id = $request->username;
            $puttype = DB::table('user')->where('username','=',$id)->select('type')->first();
          
            $type = $puttype->type;
            if($type == '0'){
                return response()->json(0, 201);
            }else if($type == '1'){
                return response()->json(1, 201);
            }else if($type == '2'){
                return response()->json(2, 201);
            }
            //  
        }else{
            return response()->json('Error', 201);
            // dd('thất bại');   
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {
        $result = DB::table('report')->where('username_emp','=',$username)->get();
        return response()->json($result, 200);
    }
    public function upload(Request $request){
        $username = $request->username;
        $address = $request->address;
        $descrip = $request->descrip;
        $title = $request->title;
        $report = new Report();
        $image = $request->file('image');
        if(isset($image))
        {
            $path = public_path('File/File_img');
            $name = Str::Random(5).'_'.$image->getClientOriginalName(); 
            $img->move($path,$name);
        };
        $report->username_emp =  $username;
        $report->title = $title;
        $report->address = $address;
        $report->description= $descrip;
     
        $report->status=0;
        $report->image =$name;
        $datenow = Carbon::now();
        $report->createreport =Carbon::parse($datenow)->format('Y-m-d'); ;



        if($report->save()){
            return response()->json("Success", 200);
        }else{
            return response()->json("Fail", 200);
        }
        
    }


    public function getNoti(Request $request)
    {
        $username = $request->username;
        $result = DB::table('notification')->where('username','=',$username)->get();
        return response()->json($result, 200);
    }
    public function getMess(Request $request)
    {
        $id = $request->id;
        $result = DB::table('messages')->where('id','=',$id)->get();
        return response()->json($result, 200);
    }
    
    public function postMess(Request $request)
    {
        $id = $request->id;
        $contains = $request->contains;
        $type = $request->type;
        $Messages = new Message();
        $Messages->contains =  $contains;
        $Messages->post_id =  $id;
        $Messages->user_type =  $type;
        $datenow = Carbon::now();
        $Messages->time =Carbon::parse($datenow)->format('Y-m-d'); ;
        if($Messages->save()){
            return response()->json("Success", 200);
        }else{
            return response()->json("Fail", 200);
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function clNot(Request $request)
    {
        $username =  $request->username;
        $result = DB::table('notification')->where('username','=',$username)->update([ "checkkey" => 1]);
        return response()->json($result, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
