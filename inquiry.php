<?php 
//require_once 'admin/database.php';
require_once 'admin-creativekey/showblog.php';
require_once 'admin-creativekey/showTest.php';
require_once 'admin-creativekey/show_members.php';
if (isset($_POST['SubmitBtn'])) {
       
    $name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["contact"];
$profile=$_POST["type"];
        //The form has been submitted, prep a nice thank you message
        $output = '<h1>Thanks for your file and message!</h1>';
        //Set the form flag to no display (cheap way!)
        $flags = 'style="display:none;"';

        //Deal with the email
        $to = 'subhi6300@gmail.com';
        $subject = 'Work With us';
 $message .= 'Hello Sir/Maam, '. "\r\n";
   $message .= ' '. "\r\n";
   $message .= 'New User Contacts you,Details are mention below ' . "\r\n";
  $message .= ' '. "\r\n";
   $message .= 'Name- '.$name . "\r\n";
   $message .= 'Mobile no- '.$phone . "\r\n";
   $message .= 'Email- '.$email . "\r\n";
   $message .= 'Content- '.$profile . "\r\n";
  
   $message .= ' '. "\r\n";
  
   $msg .= 'Thanks & Regards '."\r\n";

      
        $attachment = chunk_split(base64_encode(file_get_contents($_FILES['fileupload1']['tmp_name'])));
       $filename = $_FILES['fileupload1']['name'];

        $boundary =md5(date('r', time())); 

        $headers = "From:CreativeKey";
        $headers .= "\r\nMIME-Version: 1.0\r\nContent-Type: multipart/mixed; boundary=\"_1_$boundary\"";

        $message="This is a multi-part message in MIME format.

--_1_$boundary
Content-Type: multipart/alternative; boundary=\"_2_$boundary\"

--_2_$boundary
Content-Type: text/plain; charset=\"iso-8859-1\"
Content-Transfer-Encoding: 7bit

$message

--_2_$boundary--
--_1_$boundary
Content-Type: application/octet-stream; name=\"$filename\" 
Content-Transfer-Encoding: base64 
Content-Disposition: attachment 

$attachment
--_1_$boundary--";

       if(mail($to, $subject, $message, $headers))
       {
  echo '<script language="javascript">';
echo 'alert("We Will Contact You Soon")';
echo '</script>';
 }
else
{
 echo '<script language="javascript">';
echo 'alert("Unable To Send Mail")';
echo '</script>';
}

    }



//error_reporting(0);
if (isset($_POST['SubmitBtn2'])) {
    $to = "careers@thecreativekey.com.test-google-a.com";
   
    

     $name = $_POST["name"];
   
     $mobile_no = $_POST["contact_no"];
   
     $email = $_POST["email"];
   

    $message = $_POST["message"];
   
  $subject='contact us';

   $msg .= 'Hello Sir/Maam, '. "\r\n";
   $msg .= ' '. "\r\n";
   $msg .= 'New User Contacts you,Details are mention below ' . "\r\n";
   $msg .= ' '. "\r\n";
   $msg .= 'Name- '.$name . "\r\n";
   $msg .= 'Mobile no- '.$mobile_no . "\r\n";
   $msg .= 'Email- '.$email . "\r\n";
   $msg .= 'Query- ' .$message . "\r\n";
   $msg .= ' '. "\r\n";
  
   $msg .= 'Thanks & Regards '."\r\n";
     $headers = "From:Creativekey";
    if (mail($to,$subject , $msg,$headers)) {
 echo '<script language="javascript">';
echo 'alert("We Will Contact You Soon")';
echo '</script>';
    } else {
       echo '<script language="javascript">';
echo 'alert("Unable to send mail")';
echo '</script>';
    }

   
   
   
}

?>
<!DOCTYPE html>

<!--[if gt IE 8]><!--><html lang="en" class="no-js"><!--<![endif]-->
    <head>
    	<!-- meta charec set -->
        <meta charset="utf-8">
		
        <title>The Creative Key</title>		
	<link rel="shortcut icon" href="image/logo1.png">	
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css">
     <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/elastislide.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
       <script src="js/modernizr.custom.17475.js"></script>
       <link rel="stylesheet" href="http://davidstutz.github.io/bootstrap-multiselect/dist/css/bootstrap-multiselect.css" type="text/css"/>
<style>


..btn-file {
    position: relative;
    overflow: hidden;
}

.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    background: red;
    cursor: inherit;
    display: block;
}

input[readonly] {
    background-color: white !important;
    cursor: text !important;
}

</style>
        
     
    </head>
	
    <body >
	
        <header id="navigation" class="navbar-fixed-top navbar">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                    <a class="navbar-brand" href="index.php" style="margin-left:0px;margin-top:-15px;">
						
		       <img src="image/tck-stroke.jpg" style="width:50px;height:53px;float:left">
						
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse" role="navigation">
                    <ul id="nav" class="nav navbar-nav" style="padding-left:2%;">
                        <li class="current"><a href="index.php">HOME</a></li>
                        <li class=""><a href="index.php#services">SERVICES</a></li>
                        <li class=""><a href="index.php#aboutus">ABOUT US</a></li>
                         <li class=""><a href="index.php#blog">BLOGS</a></li>
                        <li class=""><a href="index.php#testimonial">TESTIMONIALS</a></li>
                        <li class=""><a href="index.php#career">CAREERS</a></li>
                        <li class=""><a href="index.php#team">TEAM</a></li>
						<li class=""><a href="index.php#contactus">CONTACT US</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
			        </header>
        
         
            <div style="position: relative; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; transition: none; line-height: 9px; border-width: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 5px;" class="hidden-sm hidden-xs">
      <video style="object-fit: cover; background-size: cover; width: 100%; height:100%; transition: none; line-height: 9px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 5px; left: 0px;  display: block; visibility: inherit; opacity: 1;" class=""  autoplay>
      <source src="res1200.mp4" type="video/mp4" style="transition: none; line-height: 9px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 5px;">
      <source src="res1200.mp4" type="video/ogg" style="transition: none; line-height: 9px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 5px;">
      <source src="res1200.mp4" type="video/webm" style="transition: none; line-height: 9px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 5px;">
      </video>
      </div>
    
<div id="myCarousel" class="carousel slide hidden-lg hidden-md" data-ride="carousel">
<div class="carousel-inner">
<div class="item active" >
<img src="image/banner.png">
</div>
</div>
</div>

    <div class="container-fluid" id="services" style="background:url('image/service6.png');padding-left:0px background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;;">
        	
          	<div class="col-md-7 col-md-offset-5 details">		
               <div class="wow fadeInUp col-md-6 pb20 mb10 ">
                <div class="col-md-3" style="float:left"><img src="image/content.png"></div>
                <div class="col-md-9">
               	<h4 class="pb10" style="color: #222222;">CONTENT</h4>
                <p>From a three worded tagline to a colossal website, if your task involves the use of words, we know how to cast an influence just right.</p>
               </div> 
               </div>
               <div class="wow fadeInUp col-md-6 pb20 mb10 ">
                <div class="col-md-3" style="float:left"><img src="image/design.png"></div>
                <div class="col-md-9">
               	<h4 class="pb10">DESIGN</h4>
                <p>The fundamentals of design guide our hands. Even your tiniest graphic need is reciprocated with creativity and an absolute perfection.</p>.
               </div> 
               </div>
                <div class="wow fadeInUp col-md-6 pb20 pt20 mt10 mb10 " data-wow-delay="1000ms">
                <div class="col-md-3" style="float:left"><img src="image/social-media.png"></div>
                <div class="col-md-9">
               	<h4 class="pb10">SOCIAL MEDIA MARKETING</h4>
                <p>To amplify your business, is our business. With innovative social media strategies, we don’t just build your potential customers, but advocates for your brand.</p>
               </div> 
               </div>
                <div class="wow fadeInUp col-md-6 pb20 pt20 mt10 mb10 " data-wow-delay="1000ms">
                <div class="col-md-3" style="float:left"><img src="image/events.png"></div>
                <div class="col-md-9">
               	<h4 class="pb10">EVENTS</h4>
                <p>Being the smart commuicators we are, we have mastered to make a small events a part of your lifetime memories. Be it a corporate meet up or a pop-up stall, we plan your 'big day' with utmost customizations and precision.</p>
               </div> 
               </div>
			</div>		
        </div>



        <div class="container-fluid studio pb20" id="aboutus">
        	<div class="row pb50">
              	<div class="col-md-10 col-md-offset-1 pb50" style="margin-top:50px;">
                	<div class="heli-typed-words">
                       We are a creative studio focused on <span id="typed-strings">
                       <span>web</span>
                       <span>graphic</span>
                       <span>Interactive</span>
                       </span>
                       <span id="typed" style="white-space:pre;color: #3aacc7;"></span>
                       design              <br>    Inspiration is the one word we love and we put it into our work everyday.
                    </div>

<script type="text/javascript">
    var text = ["graphic", "interactive", "web"];
    var counter = 0;
    var elem = document.getElementById("changeText");
    setInterval(change, 1500);
    function change() {
     elem.innerHTML = text[counter];
        counter++;
        if(counter >= text.length) { counter = 0; }
    }
	
    </script>
                </div>
                
          <div class="col-md-12 wow fadeInUp">  
          	<div class="col-md-4">     
             <div style="background:url('image/home7.jpg'); background-position: center !important; background-repeat: no-repeat !important;
    background-size: cover !important;">     
            		<div class="about text-center"> 
                	<div class="about-icon"><img src="image/pp11.png" style=""></div>
                    <div class="pb20" style="color:#fff;font-size:16px;"><h4>PERSONIFYING PERFECTION</h4></div>
                    <div class="coding wow fadeIn" style="font-size: 14px;color: #ffffff;text-align: center;text-transform: none;letter-spacing: 1.6">
                    <p>If perfection was tangible, it would sure look like the outputs we create. We consider work incomplete as long as there is scope for even slight betterment.</p>
                    </div>
            	</div>
                </div>
                </div>
            <div class="col-md-4" >
              <div style="background:url('image/home7.jpg'); background-position: center !important; background-repeat: no-repeat !important;
    background-size: cover !important;">
          		<div class="about text-center"> 
                	<div class="about-icon"><img src="image/cc11.png" style=""></div>
                    <div class="pb20" style="color:#fff;font-size:16px;"><h4>CUSTOMIZING CREATIVITY</h4></div>
                    <div class="coding" style="font-size: 14px;color: #ffffff;text-align: center;text-transform: none;letter-spacing: 1.6">
                    <p>As much we are creative, we do not let it blind us to your needs. We incorporate creativity such that our clients get no room for discontent.</p>
                    </div>
                  </div>  
            	</div> 
             </div>   
                <div class="col-md-4">
                 <div style="background:url('image/home7.jpg'); background-position: center !important; background-repeat: no-repeat !important;
    background-size: cover !important;">
          		<div class="about text-center"> 
                	<div class="about-icon"><img src="image/dd12.png" style=""></div>
                    <div class="pb20" style="color:#fff;font-size:16px;"><h4>DEDICATED DEADLINES</h4></div>
                    <div class="coding" style="font-size: 14px;color: #ffffff;text-align: center;text-transform: none;letter-spacing: 1.6">
                    <p>Deadlines are for a reason and with us, never are they violated; not even at the excuse of perfection. Your work may reach you before your need, but never late.</p>
                    </div>
            	</div> 
                </div>	
            </div>   
           </div>     
                
            </div>
        </div>
        
        <div style="background-color: #f7f7f7 !important;" id="blog">
        <div class="container pb50 pt50">
        	<div class="row wow fadeInUp ">
            	             <div class="col-md-12" style="margin-top:30px;">
                   <h2 class="mb30" style="font-size: 32px;color: #222222;font-weight: 900;text-transform: none">OUR BLOGS</h2>
        		<div class="pb50">
                  <p>Oh, and we blog sometimes. Stay updated with the latest trends in the digital space, what the team is up to and a lot of witty-humorous content.</p>
                            </div>
                           <?php foreach($row as $row) {  ?>
                            <div class="col-md-4 mb20 wow fadeInUp" data-wow-delay="400ms">
                    	<div class="update">
                        	<img src="admin-creativekey/<?php echo $row['postimage']; ?>" class="img-responsive">
                            <div class="pt30 pb30 pr30 pl30" style="background-color:#fff;font-size:12px;">
                            	<div class="update-date"><?php echo $row['postdate']; ?></div>
                                <div class="update-head mb30"><a href="#"><?php echo $row['postitle']; ?></a></div>
                                <div class="update-data"><?php echo $row['postdesc']; ?></div>
                            </div>
                        </div>
        			</div>
        			
                <?php   }   ?>    	
           </div>
              <div class="blog text-center">
                    <a href="http://thecreativekey.com/blog/" class="btn" style="">MORE</a>
                    </div>
        	</div>
        </div>
        </div>
        
        <div style="background-image:url('image/p1.jpg');" id="testimonial">
         <div style="background-color:rgba(0,0,0,.81);">
        	<div class="container people-say">
            	<div class="row">
                	<div class="col-md-6 people wow fadeInUp">
                    	<h4 class="pt30 mb20"><strong>WHAT</strong> PEOPLE SAY</h4>
                        <div>
                        <p style="color:#fff">Here it out from our clients.</p>
                        </div>
                    </div>
                    
             <div id="carousel-example-generic" class="carousel slide col-md-6 wow fadeInUp" data-ride="carousel">
          <!-- Indicators -->
         
          <!-- Wrapper for slides -->
        
          <div class="carousel-inner">
          <?php $i = 1; ?>
          <?php foreach($tests as $res) { ?>
          <?php $item_class = ($i == 1) ? 'item active' : 'item'; ?>
          
            <div class="<?php echo $item_class; ?>" >
             <div class="client">
             <blockquote class="text" style="overflow-y:scroll;">
             <p><?php echo $res['postcontent'] ?></p>
			 </blockquote>
             <img width="80" height="80" style="width:100px;height:100px;border-radius:100%" src="<?php echo "http://thecreativekey.com/admin-creativekey/".$res['image_path'] ?>" class="avatar wp-post-image col-xs-3 img-responsive" alt="02" style="border-radius:100%;">
              <div class="author col-xs-8" style="color:#fff;padding-top:20px;">
              <div itemprop="name"><?php echo $res['name'] ?></div> <div class="title"><?php echo $res['company'] ?>.</div><!--/.title-->
				</div><!--/.author-->
				</div>
            </div>
            <?php $i++; ?>
            <?php } ?>
          </div>
          
        </div>
                    
                </div>
            </div>
          </div>  
        </div>
        
        <div style="background-color: #f7f7f7 !important;">
         	<div class="container-fluid started" id="career">
            <div class="row">
        	<img src="image/started.png" class="col-md-7 img-responsive wow fadeInUp">
          		<div class="col-md-4 begin wow fadeInUp" data-wow-delay="800ms">
                	<h1 class="mb30"><strong>GET</strong> STARTED?</h1>
                    <div class="mb30">
                    <p>You don’t always get the choice of picking your family, but you can pick where you want to work. Begin with us, Grow with us.</p>
                    </div>
                    <div>
                    <button class="btn" style="" data-toggle="modal" data-target="#myModal">WORK WITH US</button>
                    </div>
                </div>
               </div>
			</div>		
        </div>
      <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Work With Us</h4>
        </div>
        <div class="modal-body">
          <form  id="form" action="index.php" method="post" enctype='multipart/form-data'>
          <label>Select Field</label>
          <select id="month" name="type">
    <option selected value='Mangagement'>CONTENT</option>
    <option value='Development'>GRAPHICS</option>
    <option value='Finance'>SOCIAL MEDIA</option>
    <option value='H.R'>EVENTS</option>
     <option value='others'>OTHERS</option>
</select>

 <div class="form-group">
    <label for="name">Name:</label>
    <input type="name" class="form-control" id="name" name="name">
  </div>   
     <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>     
          
     <div class="form-group numeric">
    <label for="contact">Contact:</label><span class="error" style="color: Red; display: none">* Input digits (0 - 9)</span>
    <input type="text" maxlength="10" class="form-control" id="contact" name="contact">
  </div>   
   <div class="col-lg-6 col-sm-6 col-12">
            <div class="fileinputs">
                <div class="input-group">
                    <span class="input-group-btn">
	                    <span class="btn btn-primary btn-file">
	                        Browse&hellip; <input type="file" name="fileupload1">
	                    </span>
                    </span>
                    <input type="text" class="form-control" readonly>
                </div>
                <br/>
            </div>
           <!-- <a href="#" id="new-btn">Add New</a> -->
            <div id="new-div"></div>
        </div>

        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         <input type="submit" class="btn btn-info" value="submit" name="SubmitBtn" >
        </div>
      </div>
        </form>
    </div>
  </div>
  </div>
  </div>
  
  
  
        <div class="container" id="team">
        	<div class="row team wow fadeInUp">
            	<h1 class="text-center pb20">OUR TEAM</h1>
                
                <div class="col-md-10 col-md-offset-1 wow fadeInUp" data-wow-delay="400ms">
                	
                	
			<?php foreach($mem as $m ) { ?>
					<div class="col-md-3 mb20 text-center">
                    	<img src="<?php echo 'http://thecreativekey.com/admin-creativekey/images/'.$m['image'] ?>"  style="width:200px;height:260px">
                        <div class="team-data col-xs-10 col-xs-offset-1 mb20" style="">
                        	
                            <div class="team-name text-center"><?php echo $m['member_name'] ?></div>
                           <div class="team-social col-xs-12">
                            	<a href="<?php echo strip_tags($m['fb_link']) ?>" class="col-xs-6" style="color:#fff;"><div style="float:right;font-size: 18px;color: #ffffff;font-weight: 200;text-transform: uppercase;letter-spacing: 0.12em"><i class="fa fa-facebook"></i></div></a>
                                <a href="<?php echo strip_tags($m['ld_link']) ?>" class="col-xs-6" style="color:#fff;"><div style="font-size: 18px;float:left;color: #ffffff;font-weight: 200;text-transform: uppercase;letter-spacing: 0.12em"><i class="fa fa-linkedin"></i></div></a>
                            </div>
                        </div>
                        
                	</div>		
                <?php } ?>
                   
                </div> 
		
        </div>
        </div>
        
        <div class="follow" style="background:url(image/home10.png)" id="contactus">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-4">
                		<div class="touch mb20">KEEP IN TOUCH</div>
                    	<div class="follow-us" style="padding-left:0px;">FOLLOW US</div>
                    	<div class="follow-social mt40" style="padding-left:0px;">
                    		<div class="col-md-6" style="padding-left:0px;">
                        		<a href="https://www.facebook.com/thecreativekeyofficial/" target="_blank" style="color:#fff!important"><div class="mb30" style="font-size: 15px;color: #ffffff;line-height: 1;text-align: left;font-weight: 700;text-transform: uppercase;letter-spacing: 0.12em"><i class="fa fa-facebook"></i> FACEBOOK</div></a>
                                        <a href="https://www.instagram.com/thecreativekey/" target="_blank" style="color:#fff"><div class="mb30" style="font-size: 15px;color: #ffffff;line-height: 1;text-align: left;font-weight: 700;text-transform: uppercase;letter-spacing: 0.12em"><i class="fa fa-instagram"></i> INSTAGRAM</div></a>
                            	
                       		 </div>
                       	    <div class="col-md-6" style="padding-left:0px;">
                                <a href="https://twitter.com/the_creativekey" target="_blank" style="color:#fff"><div class="mb30" style="font-size: 15px;color: #ffffff;line-height: 1;text-align: left;font-weight: 700;text-transform: uppercase;letter-spacing: 0.12em"><i class="fa fa-twitter"></i> TWITTER</div></a>
                            	<a href="https://www.facebook.com/thecreativekeyofficial/" target="_blank" style="color:#fff"><div class="mb30" style="font-size: 15px;color: #ffffff;line-height: 1;text-align: left;font-weight: 700;text-transform: uppercase;letter-spacing: 0.12em"><i class="fa fa-pinterest"></i> PINTEREST</div></a>
                            </div>
                   	    </div>
               	    </div>
               	  
                    
                    <div class="col-md-7 col-md-offset-1">
                    	<div class="form-head mb30">DROP A LINE</div>
                          <form action="index.php" role="form" method="post" class="form-area">
            
            <div class="form-group">
               
                <div class="col-md-6">
                <input type="text" class="form-control input-lg input-area" name="name" id="" placeholder="Your name here">
                </div>
            </div>
            
             <div class="form-group">
                  
                    <div class="col-md-6">
                      <input type="email" class="form-control input-lg input-area" name="email" id="" placeholder="Your email">
                  </div>
            </div>
           
            <div class="form-group">
               
                <div class="col-sm-12">
                <input type="number" maxlength="10" class="form-control input-lg input-area" name="contact_no" id="" placeholder="Contact No.">
                </div>
            </div>
            
            <div class="form-group">
                  
                    <div class="col-sm-12">
                      <textarea class="form-control input-lg text-area" rows="4" name="message" id="query" placeholder="Your message"></textarea>
                  </div>
            </div>
            
            <div class="form-group submit center" style="padding-left:2%;font-size:14px;">
               <input class="input-area input-submit" name="SubmitBtn2" type="submit" value="SEND MESSAGE" style="border-radius:40px;font-size:11px;">
            </div>

           </form>
                	</div>
                    
                    
            </div>
        </div>
       </div> 
        
        
       <div class="container pt30 pb30">
					<!-- Elastislide Carousel -->
					<ul id="carousel" class="elastislide-list col-md-2">
						<li><a href="#"><img src="image/1.jpg" alt="image01" /></a></li>
						<li><a href="#"><img src="image/2.jpg" alt="image02" /></a></li>
						<li><a href="#"><img src="image/3.jpg" alt="image03" /></a></li>
						<li><a href="#"><img src="image/4.jpg" alt="image04" /></a></li>
						<li><a href="#"><img src="image/5.jpg" alt="image05" /></a></li>
						<li><a href="#"><img src="image/6.jpg" alt="image06" /></a></li>
						<li><a href="#"><img src="image/7.jpg" alt="image07" /></a></li>
						<li><a href="#"><img src="image/8.jpg" alt="image08" /></a></li>
						<li><a href="#"><img src="image/9.jpg" alt="image09" /></a></li>
						<li><a href="#"><img src="image/10.jpg" alt="image10" /></a></li>
						<li><a href="#"><img src="image/11.jpg" alt="image11" /></a></li>
						<li><a href="#"><img src="image/12.jpg" alt="image12" /></a></li>
						<li><a href="#"><img src="image/13.jpg" alt="image13" /></a></li>
						<li><a href="#"><img src="image/14.jpg" alt="image14" /></a></li>
						<li><a href="#"><img src="image/15.jpg" alt="image15" /></a></li>
						<li><a href="#"><img src="image/16.jpg" alt="image16" /></a></li>
						<li><a href="#"><img src="image/17.jpg" alt="image17" /></a></li>
						<li><a href="#"><img src="image/18.jpg" alt="image18" /></a></li>
						<li><a href="#"><img src="image/19.jpg" alt="image19" /></a></li>
					</ul>
					<!-- End Elastislide Carousel -->
				</div>

    

        
        <div class="footer-wrapper">
						<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-sm-6 col-xs-12">
							<aside id="text-2" class="widget widget_text">		
                            	<div class="textwidget"><img src="image/tck-stroke.jpg" style="width:50px;height:53px;">
					<div class="office">
					<p style="font-size:13px;font-weight:100;">133, Lane No. 1, WestEnd Marg,<br>
					Saidulajab, Saket
					 </p>
					<p style="font-size:13px;font-weight:100;">New Delhi, India</p>
					<p></p>
						<div class="col-md-4" style="padding-left:0px;"><a href="https://www.facebook.com/thecreativekeyofficial/" target="_blank" style="color:#fff!important"><div class="mb30 col-xs-1" style="font-size: 18px;color: #ffffff;padding-left:0px;line-height: 1;text-align: left;font-weight: 700;text-transform: uppercase;letter-spacing: 0.12em"><i class="fa fa-facebook"></i> </div></a>
                                        <a href="https://www.instagram.com/thecreativekey/" target="_blank" style="color:#fff"><div class="mb30 col-xs-1" style="font-size: 18px;color: #ffffff;line-height: 1;text-align: left;padding-left:0px;font-weight: 700;text-transform: uppercase;letter-spacing: 0.12em"><i class="fa fa-instagram"></i> </div></a>
                        <a href="https://twitter.com/the_creativekey" target="_blank" style="color:#fff"><div class="mb30 col-xs-1" style="font-size: 18px;color: #ffffff;line-height: 1;text-align: left;font-weight: 700;padding-left:0px;text-transform: uppercase;letter-spacing: 0.12em"><i class="fa fa-twitter"></i></div></a>
                            	<a href="https://www.facebook.com/thecreativekeyofficial/" target="_blank" style="color:#fff"><div class="mb30 col-xs-1" style="font-size: 18px;color: #ffffff;line-height: 1;text-align: left;font-weight: 700;padding-left:0px;text-transform: uppercase;letter-spacing: 0.12em"><i class="fa fa-pinterest"></i></div></a></div>
		
				</div>
										
			
                                </div>
							</aside>

						
						</div>
						<div class="col-md-2 col-sm-6 col-xs-12">
						<aside class="widget better-menu-widget">
                        <h3 class="widget-title"><span>Company</span></h3>
                        <div>
                        <ul class="menu" style="color:#fff;">
                        	<li><a href="#aboutus" style="color:#fff;"><div style="font-size: 12px;color: #ffffff;line-height: 1;text-align: left;font-weight: 200;text-transform: uppercase;letter-spacing: 0.12em">About us</div></a></li>
							<li><a href="#services" style="color:#fff;"><div class="mt20"  style="font-size: 12px;color: #ffffff;line-height: 1;text-align: left;font-weight: 200;text-transform: uppercase;letter-spacing: 0.12em">Services</div></a></li>
							<li><a href="#team" style="color:#fff;"><div class="mt20" style="font-size: 12px;color: #ffffff;line-height: 1;text-align: left;font-weight: 200;text-transform: uppercase;letter-spacing: 0.12em">Team</div></a></li>
<li><a href="#career" style="color:#fff;"><div class="mt20" style="font-size: 12px;color: #ffffff;line-height: 1;text-align: left;font-weight: 200;text-transform: uppercase;letter-spacing: 0.12em">Career</div></a></li>
<li><a href="#blog" style="color:#fff;"><div class="mt20" style="font-size: 12px;color: #ffffff;line-height: 1;text-align: left;font-weight: 200;text-transform: uppercase;letter-spacing: 0.12em">Blog</div></a></li>
							</ul>
                        </div>
                        </aside>	
                    	</div>
						
					</div>
				</div>
			</footer><!-- .site-footer -->
			</div>
   
    
    <script src="js/bootstrap.js"></script>
      
       <script src="js/jquery.min.js"  type="text/javascript"></script>
<script src="js/bootstrap.min.js"  type="text/javascript"></script>
		<!-- jquery easing -->
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>
           <script>
		 new WOW().init();
	</script>
         <script src="js/typed.js"></script>
         <script type="text/javascript">
    $(document).ready(function() {
        $('#month').multiselect();
    });
</script>

        <script>
    $(function(){

        $("#typed").typed({
            // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
            stringsElement: $('#typed-strings'),
            typeSpeed: 0,
            backDelay: 1500,
            loop: true,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });

        $(".reset").click(function(){
            $("#typed").typed('reset');
        });

    });

    function newTyped(){ /* A new typed object */ }

    function foo(){ console.log("Callback"); }

    </script>
    <script>
    $(document).ready(function() {
    $('#new-btn').on('click', function() {
        $('#new-div').append($('.fileinputs').html());
    });

    $(document).on('fileselect', '.btn-file :file', function(event, numFiles, label) {
        var input = $(this).closest('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;
        if (input.length) {
            input.val(log);
        } else {
            if (log) alert(log);
        }
    });
});

$(document).on('change', '.btn-file :file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
    console.log('triggered');
});

</script>
   
    <script type="text/javascript" src="http://davidstutz.github.io/bootstrap-multiselect/dist/js/bootstrap-multiselect.js"></script>  
    <script type="text/javascript" src="js/jquerypp.custom.js"></script>
		<script type="text/javascript" src="js/jquery.elastislide.js"></script>
		<script type="text/javascript">
			
			$( '#carousel' ).elastislide( {
				minItems : 1
			} );
			
		</script> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> 
	 <script>
$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
        if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    });
});
</script> 
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
               	  <script type="text/javascript">
        var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        $(function () {
            $(".numeric").bind("keypress", function (e) {
                var keyCode = e.which ? e.which : e.keyCode
                var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
                $(".error").css("display", ret ? "none" : "inline");
                return ret;
            });
            $(".numeric").bind("paste", function (e) {
                return false;
            });
            $(".numeric").bind("drop", function (e) {
                return false;
            });
        });
    </script>
     
 
</body>
</html>
