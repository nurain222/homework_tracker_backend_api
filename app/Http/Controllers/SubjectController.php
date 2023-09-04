<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    public function index(){
        $allData = Subject::all();

        return view('subject.index', compact('allData'));
    }

    public function create(){
        return view ('subject.create');
    }

    public function store(Request $request){

        Subject::create($request->all());
        return view ('subject.index');
    }

    public function edit(Subject $subject){
        return view ('subject.edit', compact('subject'));
    }

    public function update(Request $request, $id){
        $subject=Subject::find($id);
        $subject->update($request->all());
        return view ('subject.index');
    }

    public function destroy($id){
        $subject=Subject::find($id);
        $subject->delete();
        return view ('subject.index');
    }

    public function chart(){

        $subData=DB::select(DB::raw("select count(*) as total_sub, sub_status from subject group by sub_status"));
        
        $chartData="";

        foreach($subData as $list){
            $chartData.="{ 'status' : '$list->sub_status', 'count' : $list->total_sub},";
        }

        $arr[]=$chartData;

        return dd($arr[1]);
    }

}
