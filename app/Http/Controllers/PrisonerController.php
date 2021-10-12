<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\RegPolice;
use App\Models\Prisoner_info;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Helpers\Helper;
use App\Models\PrisonerVisitor;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;

class PrisonerController extends Controller
{
    public function ViewPrisonForm(){
        $authorname=Admin::select('name')->get();
        return view('admin.registration.prisoner',compact('authorname'));
    }
    public function SavePrisoner(Request $request){
        $position='Prisoner';
        $prisoner_id=Helper::CaseIDGenerator(new Prisoner_info, 'prisoner_id', 4, 'PRI');
        $case_id=Helper::CaseIDGenerator(new Prisoner_info, 'case_id', 4, 'CASE');
        $enc_pass=Hash::make($request->pass);
        $prisoner_image = $request->file('priimage');
        $name_gen = hexdec(uniqid()).'.'.$prisoner_image->getClientOriginalExtension();
        Image::make($prisoner_image)->resize(600,400)->save('image/prisoner/'.$name_gen);
        $last_img = 'image/prisoner/'.$name_gen;
        Prisoner_info::insert([
            'case_id' => $case_id,
            'name' => $request ->name,
            'email' => $request ->email,
            'gender' => $request ->gender,
            'age' => $request ->age,
            'Blood_g' => $request ->blood_g,
            'height' => $request->height,
            'weight' => $request ->weight,
            'punishment' => $request ->punishment,
            'address' => $request ->address,
            'prison_cell' => $request ->prison_cell,
            'status' => $request ->status,
            'prisoner_image' => $last_img,
            'prisoner_id' => $prisoner_id,
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
        return Redirect()->back()->with('success','Prisoner Registered Successfully');
    }
    public function PrisonerTable(){
        $prisoner_table = DB::table('prisoner_infos')->latest()->paginate(5);
        return view('admin.table.prisoner',compact('prisoner_table'));
    }
    public function View($id){
        $details=Prisoner_info::find($id);
        return view('admin.view.prisoner',compact('details'));
    }
    public function Update(Request $request,$id){
        $validateData=$request->validate([
            'name'=>'required|max:255',
        ],[
            'name.required'=>'Please write Brand Name',
            'name.min'=>'Maximum value of the input section exceeded',
            'image.required'=> 'Please select an image for the Brand',
            'image.mimes'=>'This file is not uploadable.The brand image must be a file of type: jpg,jpeg,png',
        ]);
        $old_image= $request->old_image;
        $image = $request->file('image');
        if($image){
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,200)->save('image/prisoner/'.$name_gen);
        $last_img = 'image/prisoner/'.$name_gen;

        unlink($old_image);
        Prisoner_info::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'gender' => $request->gender,
            'Blood_g' => $request->Blood_g,
            'height' => $request->height,
            'weight' => $request->weight,
            'punishment' => $request->punishment,
            'address' => $request->address,
            'prison_cell' => $request->prison_cell,
            'status' => $request->status,
            'prisoner_image'=> $last_img,
            'prisoner_id' => $request->prisoner_id,
            'created_at' => Carbon :: now()
        ]);
        return Redirect()->back()->with('success','Prisoner Updated Successfully');
        }else{
            Prisoner_info::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'gender' => $request->gender,
                'Blood_g' => $request->Blood_g,
                'height' => $request->height,
                'weight' => $request->weight,
                'punishment' => $request->punishment,
                'address' => $request->address,
                'prison_cell' => $request->prison_cell,
                'status' => $request->status,
                'prisoner_id' => $request->prisoner_id,
                'created_at' => Carbon :: now()
            ]);
            return Redirect()->back()->with('success','Prisoner Image Updated Successfully');
        }
    }
    public function Delete($id){
        $image = Prisoner_info::find($id);
        $temp_img = $image->prisoner_image;
        unlink($temp_img);
        Prisoner_info::find($id)->delete();
        return Redirect()->back()->with('danger','Prisoner Deleted Successfully');
    }
    //user section starts
    public function AllPrisoner(){
        $prisoner_table = DB::table('prisoner_infos')->latest()->paginate(5);
        return view('user.table.prisoner',compact('prisoner_table'));
    }
    public function allView($id){
        $details=Prisoner_info::find($id);
        return view('user.view.prisoner',compact('details'));
    }
}
