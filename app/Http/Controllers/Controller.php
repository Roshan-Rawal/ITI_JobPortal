<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\Controller;
use App\Pic;
use Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function trends()
    {
      $sql = 'select * from company_post INNER JOIN company ON company_post.email=company.email';
            $user =DB::select($sql);
          //echo "<pre>";
          //print_r($user);die;
            return view('trends')->with(array('trendingposts'=>$user));
    }

        function aadhar_register(Request $req)
    {
        $this->validation($req);
        
        $course=$req->input('fields');
        $age=$req->input('age');
        $city=$req->input('city');
        $address= $req->input('address');
        $perc= $req->input('perc');
        $fname=$req->input('fname');
        $lname=$req->input('lname');
        $email=$req->input('email');
        $password=$req->input('password');
        $gender=$req->input('gender');
        $education=$req->input('education');
        $mobile=$req->input('phone');
        $experience= $req->input('experience');
        $passyear=$req->input('pyear');
        $photo= $req->input('photo');
        $trade=$req->input('trade');   
        $data=array('fname'=>$fname,'lname'=>$lname,'email'=>$email,'password'=>$password,'gender'=>$gender,'course'=>$course,'trade'=>$trade,'mobile'=>$mobile,'age'=>$age,'city'=>$city,'address'=>$address,'perc'=>$perc,'experience'=>$experience,'photo'=>$photo,'education'=>$education,'passyear'=>$passyear);
        /*Mail::send(['text'=>'mail'],['name','Roshan'],function($message){
            $message->to("roshanrawal43@gmail.com","Roshan")->subject('ITI Job Portal');
            $message->from('roshanrawal143@gmail.com','Roshan Rawal');
        });*/
        DB::table('jobseeker')->insert($data);



        return view('resume');
 
    }

    function job_post(Request $req)
    {
        $data['course']=$req->input('course');
        $data['trade']=$req->input('trade');
        $data['deadline']=$req->input('deadline');
        $data['job_location']=$req->input('job_location');
        $data['salary']=$req->input('salary');
        $data['emp_type']=$req->input('emp_type');
        $data['total_post']=$req->input('total_post');
        $data['job_description']=$req->input('job_description');
        $data['email'] = session('cemail');
        //echo $job_field;die;
      
        DB::table('company_post')->insert($data);
        return redirect('/comp_profile');
    }
    public function posts()
    {
      
            $sql = 'select * from company_post where email="'.session('cemail').'"';

            $user =DB::select($sql);
          
            return view('posts')->with(array('posts'=>$user));;
            
            
    }
    public function uploadfile($image_data)
    {
        $imageName = base_convert(str_replace(' ', '', microtime()) . rand(), 10, 36) .".jpg";
            
        $filename = "img/".$imageName;
            if (!file_exists($filename)) {
                    fopen($filename,'w');
            }
            chmod($filename,0777);
           
            file_put_contents($filename, $image_data);
            
            //file_put_contents("uploads/".$filename,$imageData);
            return $imageName;
    }
    function register(Request $req)
    {
         $this->validation($req);
            require 'WAY2SMSClient.php';
          
     $data['fname'] = $req->input('fname');
     $data['lname'] = $req->input('lname');
     $data['mobile'] = $req->input('mobile');
     $data['extype'] = $req->input('extype');
     $data['experience'] = $req->input('experience');
     $data['email'] = $req->input('email');
     $data['password'] = $req->input('password');
     $data['passyear'] = $req->input('passyear');
     $data['perc'] = $req->input('perc');
     $data['education'] = $req->input('education');
     $data['course'] = $req->input('course');
     $data['trade'] = $req->input('trade');
     $data['itiname']=$req->input('itiname');
     $data['gender'] = $req->input('gender');
     $data['city'] = $req->input('city');
     $data['address'] = $req->input('address');
     $data['age'] = $req->input('age');
      $client = new WAY2SMSClient();
    $client->sendWay2SMS('7623072273', 'C8392H','8866195707', 'msg1');
     die;

    
                    $photo_data = file_get_contents($_FILES['photo']['tmp_name']);
    $data['photo']= $this->uploadfile($photo_data);
        /*Mail::send(['text'=>'mail'],['name','Roshan'],function($message){
            $message->to("roshanrawal43@gmail.com","Roshan")->subject('ITI Job Portal');
            $message->from('roshanrawal143@gmail.com','Roshan Rawal');
        });*/
    	DB::table('jobseeker')->insert($data);



        session(['uemail'=>$data['email']]);
                
                return redirect('/profile');
 
    }

     public function validation($request)
    {
        return $this->validate($request, [
            'email'=>'unique:jobseeker,email',
            'password'=>'required|confirmed|max:255',
            'mobile'=>'unique:jobseeker,mobile',
            'trade'=>'required',
            'age'=>'required',
            'city'=>'required',
            'address'=>'required',
            'perc'=>'required',
            'fname'=>'required',
            'lname'=>'required',
            'gender'=>'required',
            'course'=>'required',
             'passyear'=>'required',
            'experience'=>'required',
            'photo'=>'required',
            ]);
        
    }
    public function new_welcome()
    {
      return view('/new_welcome');
    }
    public function logout()
    {
        session(['uemail'=>'']);
       // echo session('uemail');die;
        return redirect('/new_welcome');
    }
    public function clogout()
    {
        session(['cemail'=>'']);
       // echo session('uemail');die;
        return redirect('/new_welcome');
    }
    public function company_register(Request $req)
    {
        //$n=$req->input('requirement');
        //echo $n;

        $this->C_validation($req);
        $gst=$req->input('gst');
        $cname=$req->input('cname');
        $dname=$req->input('dname');
        $email=$req->input('email');
        $website=$req->input('website');
        $password=$req->input('password');
        $mobile=$req->input('mobile');
        $address=$req->input('address');
        $city=$req->input('city');
          $aadhar_no=$req->input('aadhar_no');
        
        $data=array('aadhar_no'=>$aadhar_no,'cname'=>$cname,'address'=>$address,'city'=>$city,'director'=>$dname,'contactno'=>$mobile,'email'=>$email,'website'=>$website,'password'=>$password,'gst'=>$gst);
        
        DB::table('company')->insert($data);
        session(['cemail'=>$email]);
        return redirect('/comp_profile');
    }

    public function C_validation($request)
    {
        return $this->validate($request, [
            'password'=>'required|confirmed|max:255'
            ]);

    }
    
    public function aadhar(Request $req)
    {

        $aadhar=$req->input('adhar');
     
        $data=DB::table('aadhar')->where('aadhar_number',$aadhar)->get()->toArray();
        
        $array = json_decode(json_encode($data[0]), True);
        
        $str= '     <div class="newaadhar">
              <div  class="form">
                <h3>Personal Details:</h3><br>
                      <form id="contactform" action="/jobseeker/register" method="post" enctype="multipart/form-data"> 
                        
                        <p class="contact"><label for="fname">First Name</label></p> 
                        <input id="fname"  name="fname" placeholder="First name" value="'.$array['fname'].'" required="" tabindex="1" type="text" autofocus>

                        <p class="contact"><label for="lname">Last Name</label></p> 
                        <input id="lname" name="lname" value="'.$array['lname'].'" placeholder="Last name" required="" tabindex="2" type="text"> 
                         
                        <p class="contact"><label for="email">Email</label></p> 
                        <input id="email" value="'.$array['email'].'" name="email"  placeholder="example@domain.com" required="" type="email" tabindex="3"> 
                        <p class="contact"><label for="phone">Contact</label></p> 
                          <input id="phone"  value="'.$array['contact'].'" name="mobile" placeholder="Phone number" required="" type="text" tabindex="4"> <br> 
                        
                          <label>Age</label><br>
                          <input type="text" value="'.$array['age'].'" id="age" name="age" required="" tabindex="6"> 
                          <br> 
                          <label>Gender</label><br>

                         <input type="text" name="gender" value="'.$array['gender'].'"><br>
                          <label>City</label>
                          <br>
                        <input type="text" name="city" value="'.$array['city'].'"><br>
                        <p class="contact"><label for="address">Address</label></p> 
                        <textarea tabindex="9" rows="3" cols="30" name="address">'.$array['address'].'</textarea><br>

                         <label>Upload photo</label><br>
                          <input type="file" name="photo"> 
                          <br> 
                            <h3>Educational Details:</h3><br>
                            <label>Passout ITI Institutes: </label>
                          <input type="text" name="itiname"><br>
                          <label>Highest Education</label>
                          <select class="select-style gender" name="education" tabindex="10">
                                <option value="">Education</option>
                                <option  value="S.S.C">S.S.C.</option>
                                <option value="H.S.C.">H.S.C.</option>
                                <option value="Diploma">Diploma</option>
                          </select>
                          <label>Passout Year: </label>
                          <input type="text" name="passyear"><br>
                          <label>ITI Course</label>
                          <select class="select-style gender" name="course" tabindex="11">
                                <option value="Electricians">Electricians </option>
                                <option value="Plumber">Plumber</option>
                                <option value="Carpenter">Carpenter</option>
                                <option value="Dress_making">Dress making</option>
                                <option value="Grienders">Grienders</option>
                                <option value="Govt.Certified">Instrument Mechanics</option>
                          </select>

                            <label>ITI Trade</label>
                          <select class="select-style gender" name="trade" tabindex="11">
                                <option value="Building Maintenance">Building Maintenance </option>
                                <option value="Electronics Mechanic">Electronics Mechanic</option>
                                <option value="Excavator Operator (Mining)">Excavator Operator (Mining)</option>
                                <option value="Mechanic Repair & Maintenance of Two Wheelers">Mechanic Repair & Maintenance of Two Wheelers</option>
                                <option value="Mechanic Auto Electrical and Electronics">Mechanic Auto Electrical and Electronics</option>
                                <option value="Sanitary Hardware fitter">Sanitary Hardware fitter</option>
                          </select>
                          <label>Percentage</label><br>
                          <input type="text" name="perc" placeholder="Percentage of Course">
                          <label>Experinece (if any)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="Primary" name="extype">Primary &nbsp;&nbsp;<input type="radio" value="Advance" name="extype">Advance </label>
                          <br>
                          <textarea tabindex="13" rows="3" cols="30" name="experience"></textarea>
                          <br>
                          <br>
                        
                          <h3>Login Credentials:</h3><br>
                           <p class="contact"><label for="password">Create a password</label></p> 
                        <input type="password" id="password" name="password" required="" tabindex="5"> 
                        <p class="contact"><label for="repassword">Confirm your password</label></p> 
                        <input type="password" id="repassword" name="password_confirmation" required="" tabindex="5"><br>
                          <input class="buttom" name="submit" id="submit" tabindex="14" value="Register" type="submit" tabindex="2"> 


                      </form> 
                  </div> 
                </div>';
                  echo $str;

        //return view('jobseeker_aadhar')->with('data',$data);
    }
    function profile()
    {
        if(session('uemail')!='')
        {
            $sql = 'select * from jobseeker where email="'.session('uemail').'"';

            $user =DB::select($sql);
            
            return view('resume')->with(array('user'=>$user[0]));;
            
            
        }
        else
        {
             return redirect('new_welcome');
        }
    }
    function login(Request $req)
    {
        
        $flag="0";
        $select=$req->input('select');
        $email=$req->input('email');
        $password=$req->input('password');
        $this->validate($req,[
            'select'=>'required',
             'email'=>'required|email|max:255',
             'password'=>'required|max:255'
            ]);
        if($select=="jobseeker")
        {
            //echo "jobseeker";

            $db_password=DB::table('jobseeker')->where('email',$email)->pluck('password');
            
            foreach ($db_password as $pass) {
                if($pass==$password)
                {
                    $flag="1";
                    break;
                }
            }

            if($flag=="1")
            {
                session(['uemail'=>$email]);
                
                return redirect('/profile');
            }
            else
            {
                //echo "We don't find the data";
                return back()->withInput();
            }
        }
        else 
        {
            
            $db_password=DB::table('company')->where('email',$email)->pluck('password');
            //echo $db_password;
            foreach ($db_password as $pass) {
                if($pass==$password)
                {
                    $flag="1";
                    break;
                }
            }
            if($flag=="1")
            {

                session(['cemail'=>$email]);
                return redirect('/comp_profile');
            }
            else
            {
                //echo "We don't find the data";
                return back()->withInput();
            }

        }
    }

    public function comp_profile()
    {
       if(session('cemail')!='')
        {
            $sql = 'select * from company where email="'.session('cemail').'"';

            $user =DB::select($sql);
        
            return view('company_details')->with(array('cuser'=>$user[0]));;
            
            
        }
        else
        {
             return redirect('new_welcome');
        }
    }

    public function filter(Request $req)
    {
      $data = $req->input();
       $sql = 'select * from company_post ';
       
       if($data['fsalary']!="" or $data['fcourse']!="" or $data['ftrade']!=""or $data['flocation']!="" or $data['femp_type']!=""){ $sql.= 'INNER JOIN company ON company_post.email=company.email where ';}else{
        
       };

       if($data['fsalary']!="")
          $sql.='salary>="'.$data['fsalary'].'" && ';
       if($data['ftrade']!="")
          $sql.='trade="'.$data['ftrade'].'" && ';
       if($data['fcourse']!="")
          $sql.='course="'.$data['fcourse'].'" && ';
       if($data['flocation']!="")
          $sql.='job_location="'.$data['flocation'].'" && ';
       if($data['femp_type']!="")
          $sql.='emp_type="'.$data['femp_type'].'"';

        $sql.=' order by comp_post_id DESC';
        //echo $sql;die;

            $user =DB::select($sql);
     
            return view('trends')->with(array('trendingpostsfilter'=>$user));
    }

}
