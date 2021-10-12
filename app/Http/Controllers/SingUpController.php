<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Prisoner_info;
use App\Models\PrisonerVisitor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class SingUpController extends Controller
{
    public function SignUpViewer(){
        $authorname=Admin::select('name')->get();
        $prioner_id=Prisoner_info::select('prisoner_id')->get();
        return view('admin.signup.visitor',compact('authorname','prioner_id'));
    }
    public function StoreVisitor(Request $request){
        $position='Visitor';
        $enc_pass=Hash::make($request->pass);
        PrisonerVisitor::insert([
            'name' => $request ->name,
            'email' => $request ->email,
            'relation' => $request ->relation,
            'gender' => $request ->gender,
            'age' => $request ->age,
            'prisoner_id' => $request ->prisioner_id,
            'no_visit' => $request ->no_visit,
            'inserted_on' => Carbon :: now(),
            'inserted_by' => $request ->author,
            'created_at' => Carbon :: now()
        ]);
        User::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$enc_pass,
            'position'=>$position,
            'created_at' => Carbon :: now()
        ]);
        return Redirect()->back()->with('success','User Registered Successfully');
    }
    public function delete($id){
        User::find($id)->delete();
        return Redirect()->back()->with('danger','User Deleted Successfully');
    }
}
