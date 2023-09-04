<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use Illuminate\Support\Facades\DB;

use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class ApiCRUDController extends Controller
{
    public function index(){

        $subject = Subject::all();

        return response()->json(['message'=> 'Success', 'data' => $subject], 200);
    }

    public function show ($id){
        
        $subject=Subject::find($id);

        return response()->json(['message'=> 'Success', 'data' => $subject], 200);
    }

    public function store(Request $request){
        
        $subject=Subject::create($request->all());

        return response()->json(['message'=> 'Success', 'data' => $subject], 200);
    }

    public function update(Request $request, $id){
        $subject=Subject::find($id);
        $subject->update($request->all());

        return response()->json(['message'=> 'Success', 'data' => $subject], 200);
    }

    public function destroy($id){
        $subject=Subject::find($id);
        $subject->delete();

        return response()->json(['message'=> 'Success', 'data' => null], 200);
    }













    


















    
    public function getStatus(){
        $subStatus=DB::select(DB::raw("SELECT sub_status FROM subject"));

        return response()->json(['message'=> 'Success', 'data' => $subStatus], 200);

        //$result = DB::Table('subject')->select('sub_status');
    }

     public function chart(){

        $subData=DB::select(DB::raw("select count(*) as total_sub, sub_status from subject group by sub_status"));
        
        $chartData="";
        foreach($subData as $list){
            $chartData.="{ 'status' : '$list->sub_status', 'count' : $list->total_sub},";
        }
        $arr[]=$chartData;

        return  response()->json(['message'=> 'Success', 'data' => $arr], 200);
    } 


}
