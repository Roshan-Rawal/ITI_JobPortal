<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

     <title>Resume</title>
</head>

<body style=" font: 16px Helvetica, Sans-Serif; line-height: 24px;">

    <div id="page-wrap" style="width: 800px; margin: 40px auto 60px;">
    
        <img src="img/{{$user->photo}}" style="border:2px solid #666,float: right;" id="pic" height="140" width="120" />
    
        <div id="contact-info" class="vcard">
        
            <!-- Microformats! -->
        
            <h1 class="fn" style="margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999;">{{$user->fname}}&nbsp;{{$user->lname}}</h1>
        
            <p>
             
               
                
            </p>
        </div>
          <div class="clear" style="clear: both;"></div>
        <label><b style="font-size:25px;">Personal Details</b></label><hr />
        <dl>
            <dd class="clear" style="float: none; margin: 0; height: 15px; ;"></dd>
            
            <dt style=" font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 35px; border-right: 1px solid #999;">Mobile</dt>
            <dd style="width: 600px; float: right;">
                <h2 style=" font-size: 20px; margin: -33px 0 6px 0; position: relative; ">+91-{{$user->mobile}}</h2>
                
            </dd>  
             
        
        <dl>
            <dd class="clear" style="float: none; margin: 0; height: 15px; "></dd>
            
            <dt style=" font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 35px; border-right: 1px solid #999;">Email Id</dt>
            <dd style="width: 600px; float: right;">
               <h2 style=" font-size: 20px; margin: -33px 0 6px 0; position: relative; ">{{$user->email}}</h2>
                
            </dd>
              <dd class="clear" style="float: none; margin: 0; height: 15px; "></dd>
            
            <dt style=" font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 35px; border-right: 1px solid #999;">Age</dt>
            <dd style="width: 600px; float: right;">
            <h2 style=" font-size: 20px; margin: -33px 0 6px 0; position: relative; ">{{$user->age}}</h2>
            </dd>
            
             <dd class="clear" style="float: none; margin: 0; height: 15px; "></dd>
            
            <dt style=" font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 35px; border-right: 1px solid #999;">City</dt>
            <dd style="width: 600px; float: right;">
            <h2 style=" font-size: 20px; margin: -33px 0 6px 0; position: relative; ">{{$user->city}}</h2>
            </dd>
             <dd class="clear" style="float: none; margin: 0; height: 15px; "></dd>
            
            <dt style=" font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 35px; border-right: 1px solid #999;">Address</dt>
            <dd style="width: 600px; float: right;">
            <h2 style=" font-size: 20px; margin: -33px 0 6px 0; position: relative; ">{{$user->address}}</h2>
            </dd>
            
       
        <div class="clear" style="clear: both;"></div>
        <br />
        <label><b style="font-size:25px;">Educational Details</b></label><hr />
        
        <dl>
            <dd class="clear" style="float: none; margin: 0; height: 15px; "></dd>
            
            <dt style=" font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 35px; border-right: 1px solid #999;">Education</dt>
            <dd style="width: 600px; float: right;">
                <h2 style=" font-size: 20px; margin: -33px 0 6px 0; position: relative; ">{{$user->education}}</h2>
                
            </dd>
            
            
            <dd class="clear" style="float: none; margin: 0; height: 15px; "></dd>
            
            <dt style=" font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 35px; border-right: 1px solid #999;">Course</dt>
            <dd style="width: 600px; float: right;">
                <h2 style=" font-size: 20px; margin: -33px 0 6px 0; position: relative; ">{{$user->course}}</h2>
                
            </dd>
            
            <dd class="clear" style="float: none; margin: 0; height: 15px; "></dd>
            
            <dt style=" font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 35px; border-right: 1px solid #999;">Trade</dt>
            <dd style="width: 600px; float: right;">
                <h2 style=" font-size: 20px; margin: -33px 0 6px 0; position: relative; ">{{$user->trade}}</span></h2>
                
            </dd>
            
            <dd class="clear" style="float: none; margin: 0; height: 15px; "></dd>
            
            <dt style=" font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 35px; border-right: 1px solid #999;">ITI Institute</dt>
            <dd style="width: 600px; float: right;">
            <h2 style=" font-size: 20px; margin: -33px 0 6px 0; position: relative; ">{{$user->itiname}}</h2>
             </dd>
            
            <dd class="clear" style="float: none; margin: 0; height: 15px; ;"></dd>
            
            <dt style=" font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 35px; border-right: 1px solid #999;">Passing Year</dt>
            <dd  style="width: 600px; float: right;">
            <h2 style=" font-size: 20px; margin: -33px 0 6px 0; position: relative; ">{{$user->passyear}}</h2>
            </dd>
            
            <dd class="clear" style="float: none; margin: 0; height: 15px; "></dd>
             
            
            <dt style=" font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 35px; border-right: 1px solid #999;">Percentage</dt>
            <dd style="width: 600px; float: right;">
            <h2 style=" font-size: 20px; margin: -33px 0 6px 0; position: relative; ">{{$user->perc}}</h2>
            </dd>
             <dd class="clear" style="float: none; margin: 0; height: 15px; "></dd>
            
            <dt style=" font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 35px; border-right: 1px solid #999;">Experience Type</dt>
            <dd style="width: 600px; float: right;">
            <h2 style=" font-size: 20px; margin: -33px 0 6px 0; position: relative; ">{{$user->extype}}</h2>
            </dd>
             <dd class="clear" style="float: none; margin: 0; height: 15px; "></dd>
            
            <dt style=" font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 35px; border-right: 1px solid #999;">Experience</dt>
            <dd style="width: 600px; float: right;">
            <h2 style=" font-size: 20px; margin: -33px 0 6px 0; position: relative; ">{{$user->experience}}</h2>
            </dd>
            
           
        </dl>
        
        
        <div class="clear" style="clear: both;"></div>
    
    </div>

</body>

</html>