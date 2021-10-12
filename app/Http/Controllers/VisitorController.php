<?php

namespace App\Http\Controllers;

use App\Models\Prisoner_info;
use App\Models\PrisonerVisitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VisitorController extends Controller
{
    public function VisitorTable(){
        $visitor_prisonar_rel_table= DB::table('prisoner_visitors')
        ->join('prisoner_infos','prisoner_visitors.prisoner_id','prisoner_infos.prisoner_id')
        ->select('prisoner_visitors.*','prisoner_infos.name AS pname','prisoner_infos.prisoner_id')
        ->latest()->paginate(5);
        return view('admin.table.visitor',compact('visitor_prisonar_rel_table'));
    }
    public function View($id){
        $details=PrisonerVisitor::find($id);
        return view('admin.view.visitor',compact('details'));
    }
    public function Update(Request $request,$id){
        $validateData=$request->validate([
            'name'=>'required|max:255',
        ],[
            'name.required'=>'Please write Name',
            'name.min'=>'Maximum value of the input section exceeded',
        ]);
        PrisonerVisitor::find($id)->update([
            'name' => $request->name,
            'email'=> $request->email,
            'relation'=> $request->relation,
            'gender'=> $request->gender,
            'age'=> $request->age,
            'prisoner_id'=> $request->prisoner_id,
            'no_visit'=> $request->no_visit,
            'created_at' => Carbon :: now()
        ]);
        return Redirect()->back()->with('success','Visitor Updated Successfully');
    }
    public function Delete($id){
        PrisonerVisitor::find($id)->delete();
        return Redirect()->back()->with('danger','Visitor Deleted Successfully');
    }
    public function VisitorTableAll(){
        $visitor_prisonar_rel_table= DB::table('prisoner_visitors')
        ->join('prisoner_infos','prisoner_visitors.prisoner_id','prisoner_infos.prisoner_id')
        ->select('prisoner_visitors.*','prisoner_infos.name AS pname','prisoner_infos.prisoner_id')
        ->latest()->paginate(5);
        return view('user.table.visitor',compact('visitor_prisonar_rel_table'));
    }
    public function visitorAllView($id){
        $details=PrisonerVisitor::find($id);
        return view('user.view.visitor',compact('details'));
    }
}
