<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Helpers\Helper;
use App\Models\RegPolice;
use App\Models\Admin;
use App\Models\CrimeRecord;
use App\Models\Health;
use App\Models\Parole;
use App\Models\Prisoner_info;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class RegController extends Controller
{
    public function ViewPoliceRegForm(){
        return view('admin.registration.police');
    }
    public function StorPoliceForm(Request $request){
        $position='Police';
        $enc_pass=Hash::make($request->pass);
        RegPolice :: insert([
            'rank' => $request ->rank,
            'name' => $request ->name,
            'email' => $request ->email,
            'gender' => $request ->gender,
            'polic_station' => $request ->police_st,
            'age' => $request ->age,
            'blood_g' => $request ->blood_g,
            'duty_t' => $request ->duty_t,
            'join_d' => $request ->join_d,
            'position_p' => $request ->position_p,
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
    public function ViewCrimeForm(){
        $authorname=Admin::select('name')->get();
        $prioner_id=Prisoner_info::select('prisoner_id')->get();
        $case_id=Prisoner_info::select('case_id')->get();
        return view('admin.registration.crime_rc', compact('authorname','prioner_id','case_id'));
    }
    public function StoreCrime(Request $request){
        $crime_code=Helper::CaseIDGenerator(new CrimeRecord, 'crime_code', 4, 'CRIME');
        CrimeRecord::insert([
        'prisioner_id'=>$request->prisioner_id,
        'case_id'=>$request->case_id,
        'crime_code'=>$crime_code,
        'author'=>$request->author,
        'case_type'=>$request->case_type,
        'description'=>$request->description,
        'laywer_name'=>$request->laywer_name,
        'judge_name'=>$request->judge_name,
        'email'=>$request->email,
        'created_at' => Carbon :: now()
        ]);
        return Redirect()->back()->with('success','Crime Recorded Successfully');
    }
    public function ViewHealthForm(){
        $prioner_id=Prisoner_info::select('prisoner_id')->get();
        return view('admin.registration.health',compact('prioner_id'));
    }
    public function StoreHealth(Request $request){
        Health::insert([
            'prisioner_id'=>$request->prisioner_id,
            'h_stat'=>$request->h_stat,
            'disease'=>$request->disease,
            'doctor'=>$request->doctor,
            'hospital'=>$request->hospital,
            'last_check'=>$request->last_check,
            'next_checkup'=>$request->next_checkup,
            'no_visit'=>$request->no_visit,
            'created_at' => Carbon :: now()
        ]);
        return Redirect()->back()->with('success','Health Recorded Successfully');
    }
    public function HealthTable(){
        $prisoner_health= DB::table('healths')
        ->join('prisoner_infos','healths.prisioner_id','prisoner_infos.prisoner_id')
        ->select('healths.*','prisoner_infos.name AS pname','prisoner_infos.age','prisoner_infos.gender','prisoner_infos.prisoner_image','prisoner_infos.prisoner_id')
        ->latest()->paginate(5);
        return view('admin.table.health',compact('prisoner_health'));
    }
    public function ViewHeath($id){
        $details=Health::find($id);
        return view('admin.view.health',compact('details'));
    }
    public function DeleteHospital($id){
        Health::find($id)->delete();
        return Redirect()->back()->with('danger','Record Deleted Successfully');
    }
    public function UpdateHospital(Request $request,$id){
        $validateData=$request->validate([
            'next_checkup'=>'required|max:255',
        ],[
            'next_checkup.required'=>'Please write Next Checkup Date',
            'next_checkup.min'=>'Maximum value of the input section exceeded',
        ]);
        Health::find($id)->update([
            'h_stat' => $request->h_stat,
            'disease'=>$request->disease,
            'doctor'=>$request->doctor,
            'hospital'=>$request->hospital,
            'last_check'=>$request->last_check,
            'next_checkup'=>$request->next_checkup,
            'no_visit'=>$request->no_visit,
        ]);
        return Redirect()->back()->with('success','Visitor Updated Successfully');
    }
    public function ViewParoleForm(){
        $prioner_id=Prisoner_info::select('prisoner_id')->get();
        $authorname=Admin::select('name')->get();
        return view('admin.registration.parole',compact('prioner_id','authorname'));
    }
    public function StoreParole(Request $request){
        Parole::insert([
            'prisioner_id'=>$request->prisioner_id,
            'interviewer'=>$request->interviewer,
            'hearing'=>$request->hearing,
            'remand'=>$request->remand,
            'investigation'=>$request->investigation,
            'entrydate'=>$request->entrydate,
            'exitdate'=>$request->exitdate,
            'lastremandvisit'=>$request->lastremandvisit,
            'b_status'=>$request->b_status,
            'prison_duration'=>$request->prison_duration,
            'author'=>$request->author,
        ]);
        return Redirect()->back()->with('success','Parole Recorded Successfully');
    }
    public function ParoleTable(){
        $prisoner_parole= DB::table('paroles')
        ->join('prisoner_infos','paroles.prisioner_id','prisoner_infos.prisoner_id')
        ->select('paroles.*','prisoner_infos.name AS pname','prisoner_infos.age','prisoner_infos.gender','prisoner_infos.prisoner_image','prisoner_infos.prisoner_id')
        ->latest()->paginate(5);
        return view('admin.table.parole',compact('prisoner_parole'));
    }
    public function ViewParole($id){
        $details=Parole::find($id);
        return view('admin.view.parole',compact('details'));
    }
    public function UpdateParole(Request $request,$id){
        Parole::find($id)->update([
            'interviewer'=>$request->interviewer,
            'hearing'=>$request->hearing,
            'remand'=>$request->remand,
            'investigation'=>$request->investigation,
            'entrydate'=>$request->entrydate,
            'exitdate'=>$request->exitdate,
            'lastremandvisit'=>$request->lastremandvisit,
            'b_status'=>$request->b_status,
            'prison_duration'=>$request->prison_duration,
        ]);
        return Redirect()->back()->with('success','Parole Updated Successfully');
    }
    public function DeleteParole($id){
        Parole::find($id)->delete();
        return Redirect()->back()->with('danger','Record Deleted Successfully');
    }
    public function PoliceTable(){
        $police= DB::table('reg_police')->latest()->paginate(5);
        return view('admin.table.police',compact('police'));
    }
    public function ViewPolice($id){
        $details=RegPolice::find($id);
        return view('admin.view.police',compact('details'));
    }
    public function UpdatePolice(Request $request, $id){
        RegPolice::find($id)->update([
            'rank'=>$request->rank,
            'name'=>$request->name,
            'email'=>$request->email,
            'gender'=>$request->gender,
            'polic_station'=>$request->polic_station,
            'age'=>$request->age,
            'blood_g'=>$request->blood_g,
            'duty_t'=>$request->duty_t,
            'join_d'=>$request->join_d,
            'position_p'=>$request->position_p,
        ]);
        return Redirect()->back()->with('success','Police Updated Successfully');
    }
    public function DeletePolice($id){
        RegPolice::find($id)->delete();
        return Redirect()->back()->with('danger','Police Deleted Successfully');
    }
    public function CrimeTable(){
        $crime= DB::table('crime_records')->latest()->paginate(5);
        return view('admin.table.crime',compact('crime'));
    }
    public function ViewCrime($id){
        $details=CrimeRecord::find($id);
        return view('admin.view.crime',compact('details'));
    }
    public function UpdateCrime(Request $request, $id){
        CrimeRecord::find($id)->update([
            'prisioner_id'=>$request->prisioner_id,
            'case_id'=>$request->case_id,
            'author'=>$request->author,
            'case_type'=>$request->case_type,
            'description'=>$request->description,
            'laywer_name'=>$request->laywer_name,
            'judge_name'=>$request->judge_name,
            'email'=>$request->email,
        ]);
        return Redirect()->back()->with('success','Crime record Updated Successfully');
    }
    public function DeleteCrime($id){
        CrimeRecord::find($id)->delete();
        return Redirect()->back()->with('danger','Police Deleted Successfully');
    }
    //user section starts
    public function HealthTableAll(){
        $prisoner_health= DB::table('healths')
        ->join('prisoner_infos','healths.prisioner_id','prisoner_infos.prisoner_id')
        ->select('healths.*','prisoner_infos.name AS pname','prisoner_infos.age','prisoner_infos.gender','prisoner_infos.prisoner_image','prisoner_infos.prisoner_id')
        ->latest()->paginate(5);
        return view('user.table.health',compact('prisoner_health'));
    }
    public function ViewHeathAll($id){
        $details=Health::find($id);
        return view('user.view.health',compact('details'));
    }
    public function ParoleTableAll(){
        $prisoner_parole= DB::table('paroles')
        ->join('prisoner_infos','paroles.prisioner_id','prisoner_infos.prisoner_id')
        ->select('paroles.*','prisoner_infos.name AS pname','prisoner_infos.age','prisoner_infos.gender','prisoner_infos.prisoner_image','prisoner_infos.prisoner_id')
        ->latest()->paginate(5);
        return view('user.table.parole',compact('prisoner_parole'));
    }
    public function ViewParoleAll($id){
        $details=Parole::find($id);
        return view('user.view.parole',compact('details'));
    }
    public function CrimeTableAll(){
        $crime= DB::table('crime_records')->latest()->paginate(5);
        return view('user.table.crime',compact('crime'));
    }
    public function ViewCrimeAll($id){
        $details=CrimeRecord::find($id);
        return view('user.view.crime',compact('details'));
    }
    //user prisoner and visitor
    public function HealthTableP(){
        $email=Auth::user()->email;
        $prisoner_health= DB::table('healths')
        ->join('prisoner_infos','healths.prisioner_id','prisoner_infos.prisoner_id')
        ->select('healths.*','prisoner_infos.name AS pname','prisoner_infos.age','prisoner_infos.gender','prisoner_infos.prisoner_image','prisoner_infos.prisoner_id')
        ->where('prisoner_infos.email',$email)
        ->latest()->paginate(5);
        return view('user.table.healthp',compact('prisoner_health'));
    }
    public function ParoleTableP(){
        $email=Auth::user()->email;
        $prisoner_parole= DB::table('paroles')
        ->join('prisoner_infos','paroles.prisioner_id','prisoner_infos.prisoner_id')
        ->select('paroles.*','prisoner_infos.name AS pname','prisoner_infos.age','prisoner_infos.gender','prisoner_infos.prisoner_image','prisoner_infos.prisoner_id')
        ->where('prisoner_infos.email',$email)
        ->latest()->paginate(5);
        return view('user.table.parolep',compact('prisoner_parole'));
    }
    public function CrimeTableP(){
        $email=Auth::user()->email;
        $crime= DB::table('crime_records')
        ->join('prisoner_infos','crime_records.prisioner_id','prisoner_infos.prisoner_id')
        ->select('crime_records.*','prisoner_infos.email')
        ->where('prisoner_infos.email',$email)->latest()->paginate(5);
        return view('user.table.crimep',compact('crime'));
    }
    public function HealthTableV(){
        $email=Auth::user()->email;
        $prisoner_health= DB::table('healths')
        ->join('prisoner_infos','healths.prisioner_id','prisoner_infos.prisoner_id')
        ->join('prisoner_visitors','prisoner_infos.prisoner_id','prisoner_visitors.prisoner_id')
        ->select('healths.*','prisoner_infos.name AS pname','prisoner_infos.age','prisoner_infos.gender','prisoner_infos.prisoner_image','prisoner_infos.prisoner_id','prisoner_visitors.email AS visitormail')
        ->where('prisoner_visitors.email',$email)
        ->latest()->paginate(5);
        return view('user.table.healthv',compact('prisoner_health'));
    }
    public function ParoleTableV(){
        $email=Auth::user()->email;
        $prisoner_parole= DB::table('paroles')
        ->join('prisoner_infos','paroles.prisioner_id','prisoner_infos.prisoner_id')
        ->join('prisoner_visitors','prisoner_infos.prisoner_id','prisoner_visitors.prisoner_id')
        ->select('paroles.*','prisoner_infos.name AS pname','prisoner_infos.age','prisoner_infos.gender','prisoner_infos.prisoner_image','prisoner_infos.prisoner_id','prisoner_visitors.email AS visitormail')
        ->where('prisoner_visitors.email',$email)
        ->latest()->paginate(5);
        return view('user.table.parolev',compact('prisoner_parole'));
    }
    public function CrimeTableV(){
        $email=Auth::user()->email;
        $crime= DB::table('crime_records')
        ->join('prisoner_infos','crime_records.prisioner_id','prisoner_infos.prisoner_id')
        ->join('prisoner_visitors','prisoner_infos.prisoner_id','prisoner_visitors.prisoner_id','prisoner_visitors.email AS visitormail')
        ->select('crime_records.*','prisoner_infos.email')
        ->where('prisoner_visitors.email',$email)->latest()->paginate(5);
        return view('user.table.crimev',compact('crime'));
    }
}
