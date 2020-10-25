<?php

namespace App\Http\Controllers\Api;
use DB;
use Auth;
use Carbon\Carbon;
use App\Models\Report;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TechController extends Controller
{
    public function historytech (Request $request){
        $username =  $request->username;
        $result = DB::table('report')->where('username_tech','=',$username)->where('status','=','3')->get();
        return response()->json($result, 200);
    }
    public function approdTech (Request $request){
        $username =  $request->username;
        $result = DB::table('report')->where('username_tech','=',$username)->where('status','=','1')->get();
        return response()->json($result, 200);
    }
    public function processTech (Request $request){
        $username =  $request->username;
        $result = DB::table('report')->where('username_tech','=',$username)->where('status','=','2')->get();
        return response()->json($result, 200);
    }
    public function solution (Request $request){
        $id =  $request->id;
        $solution = $request->solution;
        $result = DB::table('report')->where('id','=',$id)->update(["solution" => $solution, "status" => 3]);
        return response()->json($result, 200);
    }
    
}
?>
