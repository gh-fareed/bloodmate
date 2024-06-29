<?php

namespace App\Http\Controllers;
use DateTime;
use Illuminate\Http\Request;
use App\Models\MyUsers;
use App\Models\BloodBank;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Models\BloodDrive;
class FrontendController extends Controller
{

    public function index(){
        $lastRecord = BloodDrive::where('blooddrivestatus', 'approved')->get();
        // return $lastRecord;
    	return view('home',compact('lastRecord'));
    }
    public function login(){
        return view('login');
    }
    public function logout(){
        // Artisan::call('cache:clear');
        Session::flush("uid");
        Session::save();
        return redirect('/login');
    }
    public function register(){
    	return view('register');
    }
    public function bbregister(){
        return view('bloodbankinfo');
    }
    public function donorquiz(){
        return view('layouts.1');
    }
    public function quizsubmitted(){

        if(session()->exists("bdonor"))
        {
            // return session()->get("uid");
            $abc = DB::update('update users set status=? where id=?',['Donor',session()->get("uid")]);
            
        }
        return view('layouts.quizsubmitted');
    }
    public function contactcopy(){
        return view('contactcopy');
    }
    public function contact(){
        return view('contact');
    }
    public function donorDashboard(){
        if(session()->exists('isdonor')){
        $uid = session()->get("uid");
        $dondata = DB::select("select * from donationlocations inner join users where donationlocations.dbid = users.id and donationlocations.dbid=?",[$uid]);
        $bbdata = DB::select("select * from users where status=?",['BloodBank']);

            return view('layouts.dashboard.donordashboard.donorDashboard',compact('dondata','bbdata'));
        }
        else{
            return redirect('/login');
        }
    }

public function bloodrequests(){
        if(session()->exists('isdonor')){
            $donor = session()->get("uid");
            $data =DB::table('bloodrequests')
        ->join('users', 'users.id', '=', 'bloodrequests.recid')
        ->where('dbid', $donor)
        ->orderByRaw("CASE WHEN bloodrequests.rstatus = 'requested' THEN 0 ELSE 1 END")
        ->orderBy('bloodrequests.date', 'desc')
        ->get();
            // return $data;
            return view('layouts.dashboard.donordashboard.bloodrequests',compact('data'));
        }
        else{
            return redirect('/login');
        }
    }

public function bbbloodrequests(){
        if(session()->exists('isbb')){
            $bb = session()->get("uid");
           $data = DB::table('bloodrequests')
            ->join('users', 'users.id', '=', 'bloodrequests.recid')
            ->where('dbid', $bb)
            ->orderByRaw("CASE WHEN bloodrequests.rstatus = 'requested' THEN 0 ELSE 1 END")
            ->orderBy('bloodrequests.date', 'desc')
            ->get();

            // return $data;
            return view('layouts.dashboard.bloodbankdashboard.bbbloodrequests',compact('data'));
        }
        else{
            return redirect('/login');
        }
    }

public function bbappointmentrequests(){
        if(session()->exists('isbb')){
            $bb = session()->get("uid");
            $data = DB::select("select * from donationlocations inner join users where users.id = donationlocations.dbid and bbid=? order by donationlocations.date desc",[$bb]);
            // return $data;
            return view('layouts.dashboard.bloodbankdashboard.appointmentrequests',compact('data'));
        }
        else{
            return redirect('/login');
        }
    }




    public function donorprofile(){
        return view('layouts.dashboard.donordashboard.donorprofile');
    }
    public function certifyuser(){
        return view('layouts.dashboard.donordashboard.certifyuser');
    }
    public function certifybb(){
        return view('layouts.dashboard.bloodbankdashboard.certifybb');
    }

    public function adminDashboard(){
        if(session()->exists('isadmin')){

            return view('layouts.dashboard.admindashboard.adminDashboard');
        }
    }

    public function makeCertify(){
        $myusers = MyUsers::where('status','!=','Recepient')->get();
        return view('layouts.dashboard.admindashboard.makeCertify',compact('myusers'));
    }
    public function bbDashboard(){
        if(session()->exists('isbb')){
            $uid = session()->get("uid");
            $d1 = DB::select("select sum(qty) as d1 from inventory where blood = 'A+' and bbid=?",[$uid]);
            $d2 = DB::select("select sum(qty) as d2 from inventory where blood = 'A-' and bbid=?",[$uid]);
            $d3 = DB::select("select sum(qty) as d3 from inventory where blood = 'B+' and bbid=?",[$uid]);
            $d4 = DB::select("select sum(qty) as d4 from inventory where blood = 'B-' and bbid=?",[$uid]);

            $d5 = DB::select("select sum(qty) as d5 from inventory where blood = 'O+' and bbid=?",[$uid]);
            $d6 = DB::select("select sum(qty) as d6 from inventory where blood = 'O-' and bbid=?",[$uid]);
            $d7 = DB::select("select sum(qty) as d7 from inventory where blood = 'AB+' and bbid=?",[$uid]);

            $dondata = DB::select("select * from donationlocations inner join users where donationlocations.dbid = users.id and donationlocations.bbid=?",[$uid]);
        $bbdata = DB::select("select * from users where status=?",['BloodBank']);

            // return $bbdata ;
            return view('layouts.dashboard.bloodbankdashboard.bbDashboard',compact('d1','d2','d3','d4','d5','d6','d7','dondata','bbdata'));
        }
        else{
            return redirect('/login');
        }
    }

    public function bbprofile(){
        return view('layouts.dashboard.bloodbankdashboard.bbprofile');
    }
    public function profilepicture(){
        $myusers = MyUsers::all();
        return view('layouts.dashboard.donordashboard.profilepicture', compact('myusers'));
    }
    public function bbprofilepicture(){
        $myusers = MyUsers::all();
        return view('layouts.dashboard.bloodbankdashboard.bbprofilepicture', compact('myusers'));
    }
    public function userprofiledisplay($id=""){
        $myusers = MyUsers::where('id', $id)->first();
        $rec = session()->get('uid');
        $db = DB::select("select * from bloodrequests where recid=? and dbid=?",[$rec,$id]);
        $st = false;
        foreach ($db as  $value) {
            
            if($value->rstatus=='Accepted')
            {
                $st=true;
                break;
            }
        }
       
        
        return view('userprofiledisplay', compact('myusers','st'));
    }
    public function stepone(){
        return view('layouts.donationways.stepone');
    }
    public function steptwo(){
        return view('layouts.donationways.steptwo');
    }
    public function stepthree(){
        return view('layouts.donationways.stepthree');
    }
    public function faqbasic(){
        return view('faqbasic');
    }
    public function faq1(){
        return view('layouts.faq.faq1');
    }
    public function faq2(){
        return view('layouts.faq.faq2');
    }
    public function faq3(){
        return view('layouts.faq.faq3');
    }
    public function faq4(){
        return view('layouts.faq.faq4');
    }
    public function faq5(){
        return view('layouts.faq.faq5');
    }
    public function faq6(){
        return view('layouts.faq.faq6');
    }
    public function faq7(){
        return view('layouts.faq.faq7');
    }
    public function faq8(){
        return view('layouts.faq.faq8');
    }
    public function faq9(){
        return view('layouts.faq.faq9');
    }
    public function faq10(){
        return view('layouts.faq.faq10');
    }
    public function faq11(){
        return view('layouts.faq.faq11');
    }
    public function faq12(){
        return view('layouts.faq.faq12');
    }
    // public function bbdashboard(){
    //     return view('bbdashboard');
    // }
    public function findblood(){
        
        if(Session::has("uid"))
        {
        // $date = date("Y-m-d H:i:s");
        $current = Carbon::now();
        $bc = DB::select("select * from broadcast");
        if($bc)
        {
            // $bdate = Carbon::parse($bc[0]->bdate);
        $currentDateTime = new DateTime();
        $currentDateTimeString = $currentDateTime->format('Y-m-d H:i:s');

        $targetDateTime = new DateTime($bc[0]->bdate);
        $targetDateTimeString = $targetDateTime->format('Y-m-d H:i:s');
        // $interval = $currentDateTimeString->diff($targetDateTimeString);
        // if($currentDateTimeString >= $targetDateTimeString){
        //     return "Time is Passed";
        // }
        // else
        // {
        //     return "Both Dates are Different";
        // }



// Subtract the fixed date time from the current date time
    $difference = $currentDateTime->diff($targetDateTime);
            // $difference = $bdate->diff($currentDateTime);
// return $difference;
// Access the difference in various formats

$dhour = $difference->h;
$dminutes= $difference->i;
$dseconds = $difference->s;

        }
         $myusers = DB::select("select * from users where ( status!=? or status=? ) and availability=? order by rating desc",['Recepient','Admin','Available']);
        // $myusers = MyUsers::where('status','!=','Recepient')->orWhere('status','!=','Admin')->where('availability','Available')->orderBy('rating','desc')->get();
        session()->put('broadcast',$myusers);

        return view('findblood', compact('myusers','dhour','dminutes','dseconds'));
       
        }
        else
        {
            
        return redirect("/login");
        }
    }

    public function donationlocations(Request $req)
    {
        if(Session::has("uid"))
        {
            // return "OK";
        $myusers = DB::select("select * from users where status=? and city like ?",['BloodBank','%' . $req->city . '%']);
        return view('donationlocations', compact('myusers'));
        }
        else
        {
            
        return redirect("/login");
        }
    }
    public function dodonationlocations(Request $req)
    {
        // return $req->all();
        $date = Carbon::today();
        DB::insert("insert into donationlocations values(?,?,?,?,?,?,?,?)",[null,$req->recid,$req->did,$req->purpose,$date,$req->timeslot,'Requested',$req->bdate]);
        return back()->with('breq','Appontment Request sent Successfully');
    }
    public function doregister(Request $request){
    	$request->validate([
    		"username"=>"min:8|unique:users",
    		"password"=>"min:8",
    		"rpassword"=>"same:password",
    	]);

    	$myusers = new MyUsers();
    	$myusers->id=null;
        $myusers->fname=$request->fname;
    	$myusers->lname=$request->lname;
    	$myusers->email=$request->email;
    	$myusers->city=$request->city;
        $myusers->blood = $request->bloodgroup;
    	$myusers->username=$request->username;
    	$myusers->password=$request->password;
    	$myusers->phoneno=$request->phno;
    	$myusers->status=$request->status;
    	$myusers->save();

        if($request->status == 'Donor'){
            return view("layouts.1")->with("message", "You successfully register in System");
        }
        else{
            return view("/login")->with("message", "You successfully register in System");
        }

    }

  public function dologin(Request $request){
        $myusers = MyUsers::where('username', $request->username)->where('password', $request->password)->first();
        // dd($dashboardName);
        if($myusers){
            $dashboardName=$myusers->fname . " " .  $myusers->lname;
            session()->put("username", $myusers->username);
            session()->put("dashboardName", $dashboardName);
            session()->put("uid", $myusers->id);
            session()->put('who',$myusers->status);
            if($myusers->status=='Donor'){
                session()->put("isdonor", true);

                return redirect("/donorDashboard");
            }
            elseif($myusers->status=='BloodBank'){
                session()->put("isbb", true);
                return redirect("/bbDashboard")->with("message", "You successfully login");
            }
            elseif($myusers->status=='Admin'){
                session()->put("isadmin", true);
                return redirect("/adminDashboard")->with("message", "You successfully login");
            }
            else{
                session()->put("isrecipient", true);
                return redirect("/");
            }

        }
        else{
            return redirect("/login")->with("message", "Wrong Credentials Entered");
        }
    }
    public function rank(){
        $uid = session('uid');
     $data = DB::select("
    SELECT users.*, bloodrequests.*
    FROM users
    INNER JOIN bloodrequests ON users.id = bloodrequests.dbid
    WHERE users.status = 'donor' 
    AND bloodrequests.rstatus = 'accepted'
    AND users.id = ?
", [$uid]);
     // return $data;
     $totalRecords = count($data);
     return redirect('/donorDashboard')->with('record', $totalRecords);



    }
    public function showquiz($q="", $ans=""){
        //x return $request->all();
        $myquiz = DB::select('select * from donorquiz where id=? and ans=?',[$q,$ans]);
        if($myquiz){
            $q++;
            return view("layouts.".$q);
        }
        //return $myquiz;

        return view("layouts.noteligible");
    }
    public function donordonated($data){
    DB::table('donationlocations')
        ->where('did', $data)
        ->update(['rstatus' => 'Donated']);
        return back()->with('data donated');
}

    public function dobbregister(Request $request){
        $bloods=implode(', ',$request->blood);
        $days=implode(', ',$request->days);

        $request->validate([
            "bbname"=>"unique:bloodbank",
    // 		"fulname"=>"min:8|unique:bloodbank",
    		"password"=>"min:8",
    // 		"rpassword"=>"same:password",
    // 		"rpassword"=>"required",
    // 		"rpassword"=>"required",
    	]);
        $musers = new MyUsers();
        $musers->id=null;
    /* values from column name in db */
        $musers->fname=$request->bbname;/* values from input name attribute */
    	$musers->lname=$request->fulname;
        $musers->blood="";
        $musers->password = $request->bbpassword;
    	$musers->email=$request->bbemail;
    	$musers->city=$request->city;
    	$musers->username=$request->bbname;
    	$musers->password=$request->bbpassword;
    	$musers->phoneno=$request->phno;
    	$musers->status='BloodBank';
    	$musers->blood=$bloods;
    	$musers->save();

        $data = DB::select('SELECT id FROM users ORDER BY id DESC LIMIT 1');
        // return $data;
    	$myusers = new BloodBank();
    	$myusers->id=null;
        $myusers->uid=$data[0]->id;
    	$myusers->bbname=$request->bbname;
    	$myusers->bbemail=$request->bbemail;
    	$myusers->fulname=$request->fulname;
        $myusers->password = $request->bbpassword;
    	$myusers->phno=$request->phno;
    	$myusers->address=$request->address;
    	$myusers->city=$request->city;
    	$myusers->state=$request->state;
        $myusers->zipcode=$request->zipcode;
        $myusers->country=$request->country;
        $myusers->daysOn=$days;
        $myusers->blood=$bloods;
        $myusers->inventory=$request->inventory;
        $myusers->certificate=$request->certificate;
        $myusers->epname=$request->epname;
        $myusers->ephone=$request->ephone;
    	$myusers->save();
    	return redirect('/login');

    }
    public function dosearchdb(Request $request){
        if($request->identity=="BloodBank")
        {
        $myusers = DB::select('select * from users inner join bloodbank where users.id = bloodbank.uid and users.city=? and bloodbank.blood like ? and users.status=?',
        [$request->city,'%' . $request->bloodgroup . '%',$request->identity]);
        session()->put('broadcast',$myusers);    
        }
        else
        {
        $myusers = DB::select('select * from users where city=? and blood like ? and status=?',
        [$request->city,'%' . $request->bloodgroup . '%',$request->identity]);    
        session()->put('broadcast',$myusers);
        }
        // return $myusers;
        //Counter calculated

$current = Carbon::now();
        $bc = DB::select("select * from broadcast");
        if($bc)
        {
            $bdate = Carbon::parse($bc[0]->bdate);
            $currentDateTime = Carbon::now();


// Subtract the fixed date time from the current date time
     $difference = $currentDateTime->diff($bdate);
// return $difference;
// Access the difference in various formats

$dhour = $difference->h;
$dminutes= $difference->i;
$dseconds = $difference->s;

        }





         return view('findblood', compact('myusers','dhour','dminutes','dseconds'));
    }
    public function docertify(Request $request){
    $request->file('certificate')->move(public_path('certificate'), $request->file('certificate')
    ->getClientOriginalName());
    $myuser=MyUsers::find($request->id);
    $myuser->image=$request->file('certificate')->getClientOriginalName();
    $myuser->verification='Verified';
    $myuser->save();

    return redirect()->back()->with("message","You File Uploaded");

    }
    public function docertifybb(Request $request){
        $request->file('certificate')->move(public_path('certificate'), $request->file('certificate')
        ->getClientOriginalName());
        $myuser=MyUsers::find($request->id);
        $myuser->image=$request->file('certificate')->getClientOriginalName();
        $myuser->verification='Verified';
        $myuser->save();

        return redirect()->back()->with("message","You File Uploaded");

        }
    public function doeditprofile(Request $request){
        $data = MyUsers::where('id', $request->id)->first();
        $data->username=$request->username;
        $data->password=$request->password;
        $data->fname=$request->fname;
        $data->lname=$request->lname;
        $data->city=$request->city;
        $data->phoneno=$request->phoneno;

        $data->save();
        return redirect()->back()->with('message', 'Update Successfully');
    }
    public function doeditbbprofile(Request $request){
        $data = MyUsers::where('id', $request->id)->first();
        $data->username=$request->username;
        $data->password=$request->password;
        $data->fname=$request->fname;
        $data->lname=$request->lname;
        $data->city=$request->city;
        $data->phoneno=$request->phoneno;

        $data->save();
        return redirect()->back()->with('message', 'Update Successfully');
    }

    public function doapprove($value=""){
// return $value;
        $myuser=MyUsers::where('id',$value)->first();
        $myuser->verification='Verified';
        $myuser->save();
        return back();
    }
    public function dodisapprove($value=""){
        // return $value;
        $myuser=MyUsers::where('id',$value)->first();
        $myuser->verification='Not Verified';
        $myuser->save();
        return back();
    }
    public function doprofilepicture(Request $request){
        $request->file('profilepicture')->move(public_path('assets/profilepicture'), $request->file('profilepicture')
        ->getClientOriginalName());
        $myuser=MyUsers::find($request->id);
        $myuser->profilepic=$request->file('profilepicture')->getClientOriginalName();

        $myuser->save();
        return redirect('/profilepicture');
        }
        public function dobbprofilepicture(Request $request){
            $request->file('profilepicture')->move(public_path('assets/profilepicture'), $request->file('profilepicture')
            ->getClientOriginalName());
            $myuser=MyUsers::find($request->id);
            $myuser->profilepic=$request->file('profilepicture')->getClientOriginalName();

            $myuser->save();
            return redirect('/bbprofilepicture');
            }
        public function becomedonor(Request $request){
            // $myusers=MyUsers::find(session()->get('uid'));
            // $myusers->status="Donor";
            // $myusers->save();
            // session()->flush();
            session()->put('bdonor','yes');
            session()->forget('isrecipient');
            return redirect("/donorquiz")->with("message", "You Are Donor Now Please Login!");
        }

        
        public function requestblood(Request $request){
           // return $request->all(); 
           if($request->end<$request->start)
           {
            return redirect("/findblood")->with("breq", "Ending Time must be Ahead from Start Time");
             // return $request->all();
           }
            $date = Carbon::today();
            // $recid = session()->get("uid");
            // return $dbid  . ":" . $recid . ":" . $date;
            $data = DB::select("select * from bloodrequests where dbid=? and recid=? and date=?",[$request->did,$request->recid,$date]);
            if(count($data)>0)
            {
                return redirect("/findblood")->with("breq", "Blood Request to This Donor is Already Sent");
            }          
            else
            {
            if($request->type=="Schedule")
            {
            DB::insert("insert into bloodrequests values(?,?,?,?,?,?,?,?,?,?,?,?)",[null,$request->did,$request->recid,$date,'Requested',$request->type,$request->address,$request->bdate,$request->hospitals,$request->start,$request->end,0]);
            }
            else
            {
             DB::insert("insert into bloodrequests values(?,?,?,?,?,?,?,?,?,?,?,?)",[null,$request->did,$request->recid,$date,'Requested',$request->type,$request->address,$date,$request->hospitals,NULL,NULL,0]);   
            }
            return redirect("/findblood")->with("breq", "Blood Request Sent");
           }
        }

    //     public function emergencyrequest(){
    //         return session()->get('broadcast');
    //         $date = Carbon::today();
    //         $recid = session()->get("uid");
    //         $data = DB::select("select id,city from users where status!=?",['Recipient']);
    //         // return $data;
    //     $totalreq=0;
    //     foreach($data as $d)
    //     {
    //         $ndata = DB::select("select * from bloodrequests where dbid=? and recid=? and date=?",[$d->id,$recid,$date]);
    //             if(count($ndata)>0)
    //             {

    //             }
    //             else
    //             {
    //              DB::insert("insert into bloodrequests values(?,?,?,?,?,?,?,?)",[null,$d->id,$recid,$date,'Requested','Emergency',$d->city,$date]);
    //              ++$totalreq;
    //             }

    //     }
    //     if($totalreq==0)
    //     {
    //     return redirect("/findblood")->with("breq",  " You can Send Emergency Request Only Once in 24 Hours" );    
    //     }
    //     else
    //     {
    //     return redirect("/findblood")->with("breq", "Total :" . $totalreq . " Blood Request Sent to all Donors and Blood Banks " );
    //     }
    // } //end of emergency request
    
public function resetTimer(){
        $date = Carbon::now();
        $newDate = $date->subDays(1);
        DB::update("update broadcast set bdate = ? ",[$newDate]);
        return back();
    }
 public function emergencyrequest()

{
    $date = Carbon::now();
    $recid = session()->get("uid");
    $totalreq = 0;
    $data = session()->get('broadcast');

    // Check if 24 hours have passed since the last broadcast
    $lastBroadcast = DB::table('broadcast')->value('bdate');
    if ($lastBroadcast !== null && Carbon::parse($lastBroadcast)->addDay()->isFuture()) {
        return redirect("/findblood")->with("breq", "You can Send Emergency Request Only Once in 24 Hours");
    }

    foreach ($data as $d) {
        $ndata = DB::select("select * from bloodrequests where dbid=? and recid=? and date=?", [$d->id, $recid, $date]);
        if (count($ndata) > 0) {
            continue; // Skip if a request has already been made for this donor
        }

        DB::insert("insert into bloodrequests values(?,?,?,?,?,?,?,?,?,?,?,?)", [null, $d->id, $recid, $date, 'Requested', 'Emergency', $d->city, $date, NULL, NULL, NULL, 0]);
        ++$totalreq;
    }

    // Update the timestamp of the last broadcast
    DB::table('broadcast')->updateOrInsert(['broadid' => 1], ['bdate' => $date]);

    return redirect("/findblood")->with("breq", "Total: " . $totalreq . " Blood Request Sent to all Donors and Blood Banks");
}
//end of emergency request
//stories
    public function donorstory(){
        if(session()->exists('isdonor')){
            // return $data;
            return view('layouts.dashboard.donordashboard.donorstory');
        }
        else{
            return redirect('/login');
        }
    }
public function savedonorstory(Request $req)
{
    $date = Carbon::today();
    $userid = session()->get("uid");
    $storytitle = $req->storytitle;
    $story = $req->storytext;
    DB::insert("insert into stories values(?,?,?,?,?)",[null,$userid,$storytitle,$story,$date]);
    return back()->with("message","Story is Added Successfully");

}
public function stories()
{
    $stories = DB::select("select * from stories inner join users where users.id = stories.userid order by date desc");
    return view("stories",compact("stories"));
}
public function bbstories()
{
    return view("layouts.dashboard.bloodbankdashboard.stories");
}

public function bdrequest($id="")
{
    // return $id;
    DB::update("update bloodrequests set rstatus=? where brid=?",["Accepted",$id]);
    return back()->with("message","Request is 'Accepted' successfully");
    
}
public function bdrequestd($id="")
{
    // return $id;
    DB::update("update bloodrequests set rstatus=? where brid=?",["Denied",$id]);
    return back()->with("message","Request is 'denied' successfully");
    
}
public function opprequest($id="")
{
    // return $id;
    DB::update("update donationlocations set rstatus=? where did=?",["Accepted",$id]);
    return back()->with("message","Request is 'Accepted' successfully");
    
}
public function opprequestd($id="")
{
    // return $id;
    DB::update("update donationlocations set rstatus=? where did=?",["Denied",$id]);
    return back()->with("message","Request is 'denied' successfully");
    
}
public function rec_requests()
{
    $uid=session()->get("uid");
 $requests = DB::select("select * from bloodrequests inner join users where users.id = bloodrequests.recid and bloodrequests.rstatus!=? and recid=? order by date desc",['Deleted',$uid]);
 // return $requests;
 $users = DB::select("select  * from users");
 // return $requests;
    return view("rec_requests",compact("requests","users"));   
}

public function donoravailable()
{
    return view("layouts.dashboard.donordashboard.donoravailable");
}

public function dodonoravailable(Request $request)
{
    DB::update("update users set availability=? where id=?",[$request->isavailable,$request->id]);
    return back()->with("message", " Availability Status is updated successfully");
}
public function rating(Request $req)
{
    
    $result = DB::table('users')
            ->select('repeat_no')
            ->where('id', $req->uid)
            ->first();

    DB::update("update users set rating=rating+? , repeat_no=?+1  where id=?",[$req->rate,$result->repeat_no,$req->uid]);

    return back()->with("message","Rating Posted Successfully");
}

public function deleterequests($id="")
{

    $date = Carbon::today();
    $pastDate = $date->subDays(2);
    $formattedPastDate = $pastDate->format('Y-m-d');
    $data = DB::update("update bloodrequests set rstatus=? where recid=? and reqdate<? and rstatus=?",['Deleted',$id,$pastDate,'Requested']);
    return redirect("/rec_requests")->with("message", $data. " Requests are Deleted");
    
}

public function deleterequest($id="")
{

    // $date = Carbon::today();
    // $pastDate = $date->subDays(2);
    // $formattedPastDate = $pastDate->format('Y-m-d');
    $data = DB::update("update bloodrequests set rstatus=? where brid=?",['Deleted',$id]);
    return redirect("/rec_requests")->with("message","Request is Cancelled");
    
}

public function blooddrive()
{
    return view("layouts.dashboard.bloodbankdashboard.blooddrive");
}

public function saveblooddrive(Request $request)
{
    // return $request->all();
    $tody = Carbon::today();
    $blooddrive = new BloodDrive();
    $blooddrive->bdriveid = null;
    $blooddrive->blooddrivetitle = $request->blooddrivetitle;
    $blooddrive->blooddrivedate = $request->blooddrivedate;
    $blooddrive->blooddrivetime = $request->blooddrivetime;
    $blooddrive->blooddrivelocation = $request->blooddrivelocation;
    $blooddrive->blooddrivedescription = $request->Blooddrivedescription;
    $blooddrive->blooddrivetype = $request->blooddrivetype;
    $blooddrive->save();
    return back()->with("message","Blood Drive is Posted successfully");
}

public function adminblooddrives(){
        $blooddrives = BloodDrive::all();
        return view('layouts.dashboard.admindashboard.adminblooddrives',compact('blooddrives'));
    }

public function admindoapprove($value=""){
// return $value;
        $pbd = BloodDrive::where('blooddrivestatus','approved')->get();
        // return count($pbd);
        if(count($pbd)>=3)
        {
            return back()->with("message1","Only 3 Blood Drives can be Approved");
        }
        
        DB::update("update blooddrive set blooddrivestatus=? where bdriveid=?",['approved',$value]);
        // $bd=BloodDrive::where('bdriveid',$value)->first();
        
        // $bd->blooddrivestatus='approved';
        
        // $bd->save();
        
        return back()->with("message","Blood Drive is Approved Successfully");
    }
    public function admindodisapprove($value=""){
        // return $value;
        // $bd=BloodDrive::where('bdriveid',$value)->first();
        // $bd->blooddrivestatus='Posted';
        // $bd->save();
        DB::update("update blooddrive set blooddrivestatus=? where bdriveid=?",['Posted',$value]);
        return back()->with("message","Blood Drive Disapproved");
    }
    public function becomerecepient()
    {
        $id = session()->get("uid");
        DB::update("update users set status=? where id=?",['Recepient',$id]);
        return redirect("/logout");
    }

    public function received($brid="")
    {
        DB::update("update bloodrequests set done=? where brid=?",[1,$brid]);
        return back();
    }
    public function rec_history()
    {
        $who = session()->get("uid");
        $history = DB::select("select * from bloodrequests inner join users where users.id = bloodrequests.dbid and bloodrequests.done=1 and recid=?",[$who]);
        // return $history;
        return view('rec_history',compact('history'));
}
    public function donor_history()
    {
        $who = session()->get("uid");
        // return $who;
        $history = DB::select("SELECT * FROM bloodrequests 
                       INNER JOIN users ON users.id = bloodrequests.dbid 
                       WHERE bloodrequests.dbid = ? AND bloodrequests.done = 1",[$who]);

        $users = MyUsers::get();

        // return $history;
        return view('donor_history',compact('history','users'));
    
    }

//Add Inventory
    public function addinventory()
    {
        return view("layouts.dashboard.bloodbankdashboard.addinventory"); 
    }
    public function saveinventory(Request $req)
    {
        $uid = session()->get("uid");
        $data = DB::select("select * from inventory where bbid=? and blood=?",[$uid,$req->bloodgroup]);
        if($data)
        {
            DB::update("update inventory set qty=qty+? where bbid=? and blood=?",[$req->qty,$uid,$req->bloodgroup]);
            return back()->with('umsg',"Inventory is Updated Successfully");
        }
        else
        {
         DB::insert("insert into inventory values(?,?,?,?)",[null,$uid,$req->bloodgroup,$req->qty]);
            return back()->with('imsg',"Inventory is Added Successfully");   
        }
    }
    public function inventory()
    {
        $uid = session()->get("uid");
        $data = DB::select("select * from inventory where bbid=?",[$uid]);
        return view("layouts.dashboard.bloodbankdashboard.inventory",compact('data')); 
    }
public function editinventory($id="")
{
 $d = DB::select("select * from inventory where invid=?",[$id]);
 return view("layouts.dashboard.bloodbankdashboard.editinventory",compact('d')); 
}
public function updateinventory(Request $req)
{
    // return $req->all();
    DB::update("update inventory set qty=? where invid=?",[$req->qty,$req->invid]);
        $uid = session()->get("uid");
        $data = DB::select("select * from inventory where bbid=?",[$uid]);
        return view("layouts.dashboard.bloodbankdashboard.inventory",compact('data'));
}
public function deleteinventory($id="")
{
    DB::delete("delete from inventory where invid=?",[$id]);
  $uid = session()->get("uid");
        $data = DB::select("select * from inventory where bbid=?",[$uid]);
        return view("layouts.dashboard.bloodbankdashboard.inventory",compact('data'));  
}
}

