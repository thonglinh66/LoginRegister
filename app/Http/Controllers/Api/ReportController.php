<?php

namespace App\Http\Controllers\Api;
use DB;
use Auth;
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
                return response()->json('0', 201);
            }else if($type == '1'){
                return response()->json('0', 201);
            }else if($type == '2'){
                return response()->json('0', 201);
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
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
