<!DOCTYPE html>

<!--[if gt IE 8]><!--><html lang="en" class="no-js"><!--<![endif]-->
    <head>
    	<!-- meta charec set -->
        <meta charset="utf-8">
		
        <title>WITTY</title>		
		
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/font-awesome.css">
	    <link rel="stylesheet" href="css/font.css">
        <link rel="stylesheet" href="css/animate.css">
         <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/prettify.css" rel="stylesheet">
       
       <script>
		 new WOW().init();
	</script>

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
                    <a class="navbar-brand" href="index.html" style="margin-left:0px;padding-left:10px;">
						
							WITTY
						
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse" role="navigation">
                    <ul id="nav" class="nav navbar-nav" style="padding-left:2%;">
                        <li class="current"><a href="index.html">HOME</a></li>
                        <li class=""><a href="index.html#aboutus">ABOUTUS</a></li>
                        <li class=""><a href="index.html#services">SERVICES</a></li>
                        <li class=""><a href="index.html#portfolio">PORTFOLIO</a></li>
                         <li class=""><a href="index.html#team">TEAM</a></li>
                        <li class=""><a href="index.html#career">CAREER</a></li>
                        <li class=""><a href="index.html#blog">BLOG</a></li>
                        <li class=""><a href="index.html#contact">CONTACTUS</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
			        </header>
        
         
           <?php
$db=mysqli_connect('localhost','kunwaraabid567','Mybestfriend@567','thecreativekey_urjentupccodes');
$id= $_GET['postID'];
$sql="SELECT postitle,postdesc,postcontent,postdate FROM blog_post WHERE postID='$id'";
$q=mysqli_query($db,$sql);
while($row=mysqli_fetch_array($q)){
?>
       

  


        
        
        <div style="background-color: #f7f7f7 !important;">
        <div class="container-fluid pb50 pt50" id="blog">
        	<div class="row">
			<div class="col-md-6" style="margin-left:40%;margin-top:5%">
			<h2 class="mb30" style="font-size: 32px;color: #222222;text-align: left;font-weight: 900;text-transform: none"><?php echo $row['postitle']; ?></div>
			<div class="col-md-12" ><img src="./image/blog10.jpg" class="col-sm-8 img-responsive"></div>
            	             <div class="col-md-16">
                   
        		
        			
        			
                    
                    
                    <div class="col-md-16">
                    	<div class="update">
                        	
                            <div class="pt30 pb30 pr30 pl30" style="background-color:#fff;">
                            
                            	<div class="update-date"><br /><?php echo $row['postdate']; ?> / Blog</div>
                                <div class="update-head mb30"><a href="http://urjentupccodes.com/witty/#"><?php echo $row['postdesc']; ?></a></div>
                                <div class="update-data"><?php echo $row['postcontent']; }?></div>
                           
                            </div>
                        </div>
        			</div>	
           </div>
        	</div>
        </div>
        </div>
        
        
       
        <div class="follow" id="contact" style="background-color:#222">
        	<div class="container-fluid">
            	<div class="row">
                	<div class="col-md-4">
                		<div class="touch mb20">KEEP IN TOUCH</div>
                    	<div class="follow-us">FOLLOW US</div>
                    	<div class="follow-social mt40">
                    		<div class="col-md-6">
                        		<div class="mb30"><i class="fa fa-facebook"></i> FACEBOOK</div>
                                        <div class="mb30"><i class="fa fa-instagram"></i> INSTAGRAM</div>
                            	
                       		 </div>
                       	    <div class="col-md-6">
                                <div class="mb30"><i class="fa fa-twitter"></i> TWITTER</div>
                            	<div class="mb30"><i class="fa fa-linkedin"></i> LINKEDIN</div>
                            </div>
                   	    </div>
               	    </div>
                    
                    <div class="col-md-7 col-md-offset-1">
                    	<div class="form-head mb30">DROP A LINE</div>
                          <form action="http://urjentupccodes.com/witty/" role="form" method="post" class="form-area">
            
            <div class="form-group">
               
                <div class="col-md-6">
                <input type="text" class="form-control input-lg input-area" name="" id="" placeholder="Your name here">
                </div>
            </div>
            
             <div class="form-group">
                  
                    <div class="col-md-6">
                      <input type="email" class="form-control input-lg input-area" name="" id="" placeholder="Your email">
                  </div>
            </div>
           
            <div class="form-group">
               
                <div class="col-sm-12">
                <input type="number" class="form-control input-lg input-area" name="" id="" placeholder="Contact No.">
                </div>
            </div>
            
            <div class="form-group">
                  
                    <div class="col-sm-12">
                      <textarea class="form-control input-lg text-area" rows="4" name="query" id="query" placeholder="Your message"></textarea>
                  </div>
            </div>
            
            <div class="form-group submit center" style="padding-left:2%">
               <input class="input-area input-submit" type="submit" value="SEND MESSAGE" style="border-radius:40px;">
            </div>

           </form>
                	</div>
                    
                    
            </div>
        </div>
       </div> 
        
        
        <div class="container-fluid pb50 pt50">
          <div class="row pt20">

              <ul class="member" style="list-style:none;">
              	<li class="col-md-2"><img src="./image/c1.png" class="col-md-12 img-responsive"></li>
                <li class="col-md-2"><img src="./image/c2.png" class="col-md-12 img-responsive"></li>
                <li class="col-md-2"><img src="./image/c3.png" class="col-md-12 img-responsive"></li>
                <li class="col-md-2"><img src="./image/c4.png" class="col-md-12 img-responsive"></li>
                <li class="col-md-2"><img src="./image/c5.png" class="col-md-12 img-responsive"></li>
                <li class="col-md-2"><img src="./image/c6.png" class="col-md-12 img-responsive"></li>
              </ul>
            
          </div>
        </div>

    

       <div class="footer-wrapper">
						<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-7 col-sm-12">
							<aside id="text-2" class="widget widget_text">		
                            	<div class="textwidget"><h2 style="color:#fff">WITTY</h2>
									<div class="office">
									<p><i class="pe-7s-call"></i> (61 2) 9251 5600 </p>
									<p><i class="pe-7s-mail-open-file"></i> info@thememove.com</p>
									<p><i class="pe-7s-map-2"></i> No.200 Josecph, Canada 10020</p>
									</div>
                                </div>
							</aside>

						<div class="social-icons">
							<a href="https://facebook.com"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
							<a href="https://pinterest.com"><i class="fa fa-pinterest"></i></a>
							<a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
						</div>
						</div>
						<div class="col-md-2 col-sm-6">
						<aside class="widget better-menu-widget">
                        <h3 class="widget-title"><span>Company</span></h3>
                        <div>
                        <ul class="menu">
                        	<li><a href="#">About us</a></li>
							<li><a href="">Portfolio</a></li>
							<li><a href="">Contact us</a></li>
							<li><a href="">FAQ</a></li>
							<li><a href="">Blog</a></li>
						</ul>
                        </div>
                        </aside>	
                    	</div>
						<div class="col-md-3 col-sm-6">
							<aside id="recent-posts-3" class="widget widget_recent_entries">	
                            	<h3 class="widget-title"><span>News</span></h3>	
                                	<ul>
					<li>
				<a href="#">Beautiful Typography</a>
						</li>
					<li>
				<a href="#">Responsive Design Process</a>
						</li>
					<li>
				<a href="#">A Little Journey</a>
						</li>
					<li>
				<a href="#">Powerful Workflow Tips</a>
						</li>
				</ul>
		</aside>		
       	</div>
					</div>
				</div>
			</footer><!-- .site-footer -->
			</div>
   

    <style>
    #owl-demo .item{
        display: block;
        cursor: pointer;
        background: #fff;
        padding: 20px 0px;
        margin: 5px;
        color: #2da395;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
       text-align: center;
        -webkit-tap-highlight-color: rgba(255, 255, 255, 0); 
    }
    #owl-demo .item:hover{
      background:#252525;
	  color:#FFF;
    }
	.link img{height:60px;}
    </style>
    
 
   
    <script>
    $(document).ready(function() {

      $("#owl-demo").owlCarousel({
        items : 1
      });
 
      $('.link').on('click', function(event){
        var $this = $(this);
        if($this.hasClass('clicked')){
          $this.removeAttr('style').removeClass('clicked');
        } else{
          $this.css('background','#7fc242').addClass('clicked');
        }
      });


    });
    </script>
    
    <script src="js/bootstrap.js"></script>
      
       <script src="js/jquery.min.js"  type="text/javascript"></script>
<script src="js/bootstrap.min.js"  type="text/javascript"></script>
		<!-- jquery easing -->
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>
       <script src="js/owl.carousel.js"></script>
       
           <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-tab.js"></script>
        
      <script src="js/prettify.js"></script>
	  <script src="js/application.js"></script>
                
        
</body>
</html>
