
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="images/icon5_2.gif" type="image/gif">
<link href='https://fonts.googleapis.com/css?family=Josefin+Slab:700italic,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="frontpage_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
  <link rel="stylesheet" type="text/css" href="/engine1/style.css" />
  <script type="text/javascript" src="/engine1/jquery.js"></script>
  <!-- End WOWSlider.com HEAD section -->
<title>LIGHT the FUTURE</title>

<script type="text/javascript" src="jquery-1.8.2.min.js"></script>
<!--******************************GOOGLE PIE CHART******************************-->
 
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
 <script type="text/javascript">
google.load('visualization', '1', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
     // google.setOnLoadCallback(drawChart);
     
      // Callback that creates and populates a data table, 
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart(d,e,f,h) {
      // Create the data table.

      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Ngos');
     data.addColumn('number', 'Ngos Percentage');
     data.addColumn({type:'string', role:'style'});
      for(j=0;j<f;j++)
    {
     data.addRows([
    
    [d[j],e[j], h[j]]
        
      ]);}
 /*for(j=0;j<f;j++)
  {
      data.addRows([
        [d[j], e[j]]
       
    
      ]);}
*/
    
      // Set chart options
      var options = {'title':'ACTIVITY LOG OF NGOS',
    'legend':'left',
  
  'is3D':true,
                     'width':400,
                     'height':300,backgroundColor: 'transparent' 

                   };

      // Instantiate and draw our chart, passing in some options.
      $("#chart_div").slideToggle(2000);
      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data, options);

    }
</script>





   

<script type="text/javascript">
//FOR any paragraph to fit inside div use space
//use var as identifers for return (2*5);
function fblike1()
{
	$('#fblike').slideToggle(1000);
  //$('#fblike').show(2000);
}
function showfeedback()
{
  $('#feedback1').slideToggle(1000);
}
/*
<!--GALLERY-->
<div id="gallery">
       
       <img src="Education/1.jpg" id="gallery11" style="margin-left:0.2%;"/>
       <img src="Education/2 (2).jpg" id="gallery11"/>
       <img src="Education/2 (2).jpg" id="gallery11"/>
       <img src="Education/2 (2).jpg" id="gallery11"/>
        <img src="Education/2 (2).jpg" id="gallery11" />
        <input type="button" id="gallery12" value="GALLERY"/>
      
       
     </div>*/
</script>
                
              
<style type="text/css">

* {
	margin: 0px;
	outline: 0px;
	/* [disabled]padding:0px; */
	border: 0px;  
}
body, html
{
    width:100%;
    min-height: 100%;
	background-color:#999;
	
}
#her::-webkit-scrollbar {
    width: 10px;
    background-color:#666;
    border: 0px;
}
 
#her::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
 
#her::-webkit-scrollbar-thumb {
  background-color: black;
  
  }

#feedback1{width:300px; height:300px; position:absolute; left:50px; top:100px; z-index:10000; background-color:#333; border:2px black solid; display:none;}
.feed1{width:200px; border:2px solid black; height:25px; margin-left:45px;}
.feed2{resize:none; width:200px; border:2px solid black; margin-left:45px;}
.feed3{width:100px; border:1px solid white; height:30px; background-color:black; margin-left:90px; color:white;}
#title11{min-width:200px;    width:25% ;  height:38% auto; margin-left:33%; margin-top:1.1%;  float:left;}

#title12{font-family: 'Josefin Slab', serif;  font-size:32px; width:100%; min-width:200px; height:100% auto; color:#C1C100;}



#main{width:85%; min-width:700px; height:100%; margin:auto; margin-top:-20px; }
#main2{width:100%; height:100%; min-width:700px;  float:left;}
.menu11{height:15px;line-height:15px;}
#slideshow{height:450px; width:100%; float:left;  }
#pic11{height:100%; width:100%; min-width:700px; }
#input41{position:fixed; right:0px; top:100px ; width:100px; height:40px;  border:1px solid white; background-color: black; color:white;  cursor:pointer;}
#input2{ position:fixed; left:0px; top:100px ; width:auto; height:90px; color:white; background-color:black; border-radius:0px 5px 5px 0px; font-size:10px; cursor:pointer;  }
#input3{ position:fixed; left:0px; top:250px ; width:50px; height:50px; color:white; background-color:black; border-radius:0px 5px 5px 0px; font-size:10px; cursor:pointer;  }
#fblike{position:absolute; width:100px; height:100px; left:10px; top:320px; display:none;   }
#button1{width:100%; height:37px; min-width: 700px;  float:left;}
#bodie{width:100%; height:auto; float:left;} 
<!--#gallery{width:99.8%; height:auto; background-color:#0CF;  border:1px solid #0CF; float:left;}
<!--#gallery11{width:19%; height:210px; margin-left:0.5%;  margin-top:10px; border-bottom:2px black solid; border-right:2px black solid;} 
<!--#gallery12{width:200px; height:30px; margin-left:45%; border-radius:10px; margin-top:10px; color:white; margin-bottom:10px; background-color:#03F; border-bottom:1px black outset; border-right:1px black outset; cursor:pointer; }

#heading{width:100%; min-width:700px; height:93px auto; float: left; }
#header1{width:100%; height:56px ;  background-color:#5E0000; }
#search1{width:20%; min-width:200px; height:50%; float:left; border:1px solid black; background-color:white; margin-top:10px; margin-left:3%;}
#font1{ margin-left:5%;   width:15%;   height:95%; float:left; }
#input1{ width:100%; height:95%; color:white;  background-color:black; margin-left:2px; cursor:pointer; font-weight:bold;
 border: 1px solid white; }
#input1:hover{width:100%;height:100%; color:black;  background-color:#999; font-weight:bold; text-shadow:#000; margin-left:2px; cursor:pointer; border: 1px solid white;}
#search11{width:64%; height:20px; }
#search12{width:32%; height:20px;  background-color:black;  margin-top:1.5%;  color:white;  cursor:pointer;  }

#block1{width:100%; height:auto; float: left; }
#block122{width:32%; height:100%;  float:left; margin-top:2px; box-shadow:0px 0px 1px 1px black; border:1px solid black;}
.img1{width:100%; height:200px; border-bottom: 1px solid black; }
.heg{width: 100px; height: 30px; border-radius: 7px;}
#object1{width:100%; min-width:700px; height:350px auto; float:left; margin-top:50px; border-bottom:1px solid black;  border-top:1px solid black;}
#objective11{width:100%; height:50px; float:left; }
#motive{color:#300;  width:180px; font-size:36px; font-style:oblique;}
#motive2{color:red; font-size:20px; font-style:oblique;}
#object2{width:20%; min-width:150px; height:250px auto; float:left;}
#objcontent{width:60%; height:250px auto ; min-width:550px; float:left; margin-left:40px;}
#events1{height:auto; width:100%; margin-top:10px; float:left;}

.events12{width:30%; min-width:350px; height:400px; float:left; margin-left:2%; margin-top:1%; }
.events123{width:100%;  height:200px; float:left;margin-left:2%; margin-top:1%; border-radius:9px; box-shadow:0px 0px 1px 1px black;}
#efe12{width: 90%; height: auto; float: left; margin-left: 5%;}
#efr34{width: 100%; float: left; height: auto;}
.egh56{width: 150px; border: 1px solid white; background-color: black; border-radius:5px; box-shadow: 0px 0px 1px 1px #666;  color:white; height: 40px; cursor: pointer; margin-left: 10px;}
.egh56:hover{width: 150px; border: 1px solid white; background-color: #666; border-radius:5px; box-shadow: 0px 0px 1px 1px black;  color:white; height: 40px; cursor: pointer; margin-left: 10px;}
.events13{width:60%; min-width:350px; height:400px; float:left;margin-left:2%; margin-top:2%; border-radius:9px; box-shadow:0px 0px 1px 1px black;}
.head1{width:80%; background-color:#300;  height:30px; color:white;  margin-top:5px;  box-shadow:0px 0px 1px 1px black; float:left; margin-left:auto;}

.pevent{text-align:center; margin-top:5px;  }
#foot1{width:100%; height:250px; float:left; margin-top:10px;}
#start{width:100%; height:25px; float:left; margin-top:3px; background-color:#300; color:white; text-align:center; margin-top:2px;}
#midcontent{width:100%; height:200px; float:left;}
#video11{width:30%; height: 90%; float: left;  margin-top: 5px; margin-left: 4%; }
#video22{width:auto; height: 90%; float: left;   margin-top: 5px; margin-left: 8%;}
#slider{width: auto; height: 100px; border:1px solid black; float:left; margin-top: 30px; margin-left: 1%; }
#endcontent{width:100%; height:50px auto; float:left; background-color:#300;}

.navig{color:white; text-decoration:none; }
.navig:hover{color:red; text-decoration:none; }
#nav1{width:auto; height:auto; margin-left:1%; margin-top:2%; float:left;}
.navig2{width:25px; height:25px; box-shadow:0px 0px 1px 1px #666;  border-radius:2px; margin-left:3px;   }
#nav2{ width:10%;  height:auto; margin-left:20%; margin-top:1%; float:left;}
#copyright{color:black; margin-left:20%; margin-top:1%;  width:auto; height:auto; float:left; }

</style>
<style type="text/css">
#logo456{margin:-0px; opacity:0.3; position:relative; height:220px; width:200px; 
 min-width:100px; border:2px solid orange; border-radius:50px 50px  0px 20px;}
#logo123
{ 
display:block;
//float:left;
margin:33px;
height:220px; width:200px; min-width:100px; border:2px solid orange;
position:relative;
background-color:black;
//background-image:url(images%20(1).jpg);
border-radius:50px 50px 0px 20px;
-webkit-animation:bulb 15s linear 3s infinite alternate running ;
z-index:1000;
border:2px #0000FF;
}
@-webkit-keyframes bulb
{
		0%
		{
			background-color:#000;
		}
		25%
		{
			 background-color:#666;
		}
		50%
		{
			background-color:#FFF;
		}
		75%
		{
				background-color:#DDDDDD;
		}
		100%
		{
			background-color:#EEE;
		}

		</style>
</head>

<body>
<!--FBLIKE-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 
<!--FBLIKE-->
<!--FB TAB-->
<div class="fb-like" id="fblike" style="position:fixed;" data-href="https://www.facebook.com/pages/LightThe-future/261646197361980" data-width="100px" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
<!--FB TAB-->
<!--FEEDBACK FORM-->

<img src="images/feedback_button.png" onClick="showfeedback();" id="input2"/>                                                                                                   
<img src="images/likebutton.png" onClick="fblike1();" id="input3"/>


<!--********************************GOOGLE PIE CHART******************************-->

<?php $array=array(); $array1 = array(); $array2=array(); $i=0; $j=0; $k=0;?>





 <?php 
 
foreach($ngo2 as $ngo)
 {
 $array[$i] = $ngo->non;
 $i=$i+1;
 }
 foreach($array4 as $array4)
 {
 $array1[$j] = $array4;
 
 $j=$j+1;
 }
foreach($rfe as $rfe)
 {
 $array2[$k] = $rfe->cc;
 
 $k=$k+1;
 }

 ?>


<script>

    // calling this before outputting <a href> works
   <?php  echo "var js_array = " . json_encode($array) . ";"; ?>
    <?php  echo "var js_array1 = " . json_encode($array1) . ";"; ?>
  <?php  echo "var js_array2 = " . json_encode($array2) . ";"; ?>
    
</script>
<input type="button" id="input41"  onclick="drawChart(js_array,js_array1,'<?php echo $cnt; ?>',js_array2)" value="ACTIVITY" />
<div id="chart_div" style="width:500px; display:none; height:300px auto;  position:fixed; right:0px; top:150px; background-color:#CCC; border:2px solid black; "></div>
<!--***********************************GOOGLEPIE CHART**************************-->


 
<!--FEEDBACK FORM-->
<!--FEEDBACK-->
<div id="feedback1" >
<table style="width:100%; height:100%;">
<form method="post" action="/feedback1">
<tr><td><input type="text" placeholder="NAME" class="feed1"  name="nam" required />
<tr><td><input type="email" placeholder="YOUR EMAIL ADDRESS" class="feed1"  name="ema" />
<tr><td><textarea placeholder="ANY SUGGESTION PLEASE....!" cols="40" rows="6" class="feed2"  name="suggest" required /></textarea>
 <tr><td><input type="submit" value="SUBMIT" class="feed3"  />
</form>
</table>
</div>
<!--FEEDBACK-->


<!--LOGIN-->
@extends("FINALPROJECT/index/loginform")<!--EXTENDS-->
<!--loGIN-->

<!-- MAIN DIV and WHOLE WEBSITE-->
<div id="main">
   
     <!-- HEADING -->
    <div id="heading">
             <!-- IMAGE --> <!-- margin-top create problem use float:left-->
                  `<div id="header1">
                     
                     <!--POST LARGE DATA AND SAFETY PURPOSE AND SEARCH OPTION-->
                     <div id="search1" style="display:none;">
                     <form enctype="">
                     <input type="text" placeholder="SEARCH" id="search11" style="border:0px; " onKeyUp="" /><input type="submit" value="SEARCH" id="search12"   /></form>          </div>
                     <!--POST LARGE DATA AND SAFETY PURPOSE AND SEARCH OPTION-->
                     <!--TITLE-->
                       <div id="title11">
                       <FONT  id="title12" ><strong>LIGHT    the    FUTURE</strong></FONT>
                        </div>
                        <!--TITLE-->
                       <!--LOGIN AND SIGNUP-->
                         <div id="font1">
                         <input type="button" value="LOGIN" onClick="showlogin1();" id="input1"/> 
                        
                         </div>
                         
                       <!--LOGIN AND SIGNUP-->   
                 
                 </div>
                   <!-- IMAGE --> <!-- margin-top create problem use float:left-->
           <!--BUTTON-->
      <div id="button1">
     <ul id="css3menu1" class="topmenu" style="width:100%;  margin-left:-0.04%;  height:37px;">
  <li class="topfirst"><a href="/aboutus" class="menu11" >ABOUT US</a></li>
  <li class="topmenu"><a href="/registeredngo" class="menu11" >REGISTERED NGO</a></li>
  <li class="topmenu"><a href="/upcomingevent" class="menu11" >UPCOMING EVENTS</a></li>
  <li class="topmenu"><a href="/gallery"  class="menu11">GALLERY</a></li>
  <li class="topmenu"><a href="#" class="menu11" ><span>GET INVOLVED</span></a>
  <ul>
    <li class="subfirst"><a href="newuser">AS A NGO</a></li>
    <li><a href="volunteer1">AS A VOLUNTEER</a></li>
    <li><a href="#"><span>AS A DONOR</span></a>
    <ul>
      <li class="subfirst"><a href="moneyhome">MONEY</a></li>
      <li><a href="articlehome">ARTICLE</a></li>
    </ul></li>
  </ul></li>
  <li class="topmenu"><a href="bloodappa" class="menu11" ><span>BLOOD DONATION</span></a>
  </li>
  <li class="toplast"><a href="/ourteam" class="menu11" >CONTACT US</a></li>
</ul><p class="_css3m"><a href="http://css3menu.com/">CSS input Radio Button Css3Menu.com</a></p>

       </div>
       <!--BUTTON-->
             
      </div>    
      <!-- HEADING -->
    
    
    <!---MAIN 2-->
     
          <!--<div id="main2"> -->
          <div id="main2">

        <!--PIC-->
        
        
        

                  <div id="slideshow">
                       <img src="/needy/1.jpg" alt="Rainbow lorakeets"  id="pic11"/> 
        <img src="/needy/8.jpg" alt="Butterfly" id="pic11" />
        <img src="/needy/9.jpg" alt="Cat"  id="pic11"/>
        <img src="/needy/4.jpg" alt="Crocodiles" id="pic11" />
        <img src="/needy/5.jpg" alt="Fox"  id="pic11"/>
        <img src="/needy/6.jpg" alt="Fox"  id="pic11"/>
        <img src="/needy/7.jpg" alt="Fox"  id="pic11"/>
                       
                  </div>
                 <script src="https://cdn.rawgit.com/pamelafox/a8b77c43f56da1753348/raw/slideshow.js"></script>
    <script>
var slideShow = function(container) {
    this.images = [];
    this.curImage = 0;
	
    for (i = 0; i < container.childElementCount; i++) {
        this.images.push(container.children[i]);
        this.images[i].style.display = "none";
    }
    
    // Handle going to to the next slide
    var nextSlide = function() 
	{
        for (var i = 0; i < this.images.length; i++) {
            this.images[i].style.display = "none";
        }
        this.images[this.curImage].style.display = "block";
        this.curImage++;
        if (this.curImage >= this.images.length) {
            this.curImage = 0;
        }
        window.setTimeout(nextSlide.bind(this), 2000);
		
    };
    
    nextSlide.call(this);
};

    </script>
    <script>
slideShow(document.getElementById("slideshow"));
    </script>
     <!--PIC-->
       
     <!-- BODY-->   
     <div id="bodie">
      
     <!--GALLERy ADD PHP-->
     
     <!--GALLERY-->
     
   <!--MOTIVATIONAL-->
     <div id="block1">
     <div style="width:100%; float:left; height:auto;"><p style=" color:#300; font-size:45px; font-style:italic;"><strong>TRUE STORIES</strong></p><br></div>
     <div id="block122" style="margin-left:0.4%;" >
     <img src="images/darshan.JPG" class="img1"><p  style="color:white; font-style:italic;">Education is teaching our children to desire the right things.&ldquo;  Plato. The quote holds true for the students at The Government High School in Shivnahalli, Bangalore....</p><a href="/story1" ><img src="/images/readmore.png" class="heg" /></a>
      </div>
     <div id="block122" style="margin-left:1.42%;">
     <img src="images/story_pooja.jpg" class="img1"><p style="color:white; font-style:italic;">Pooja is a happy and vivacious little girl living with her mother and sisters in a village of Madhya Pradesh. Her life today is a striking contrast from her journey with pain and sickness....</p><a href="/story4" ><img src="/images/readmore.png" class="heg" /></a>
     </div>
     <div id="block122" style="margin-left:1.42%;">
     <img src="images/soujanya.JPG" class="img1"><p style="color:white; font-style:italic;">As we walk into the Upper Primary school in Pati (Patancheru,Hyderabad), an Light The Future mid-day meal van enters the school....</p><a href="/story2" ><img src="/images/readmore.png " class="heg"   /></a>
     </div>
     </div>
     <!--MOTIVATIONAL-->
    <!--OBJECTIVE-->
    <div  id="object1">
 <div id="objective11" ><p id="motive" ><strong>OBJECTIVE</strong></div>
 <div  id="object2">
 <div id="logo123">  <img src="Unnamed Site 2/amit.jpg"  id="logo456"> </div>
 </div>
    <div id="objcontent" ><p style="color:red; font-size:36px;">``</p><p id="motive2">It is a non-profit organisation.Our intention of restricting the distribution of outdoor relief to the elderly,ill and handicapped people.The ultimate goal is to decrease poverty rate in india and increase literacy rate.We mainly concentrate on philanthrope goals as well as social well being.We provide a public benifit.<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;Financial figures are important to assess the financial sustainability of charity.Our charity
partly depend upon donations for growth of organizations.We are trying our best to alleviate the awful conditions of the working class in the slums.</p></div>
    </div>
    <!--OBJECTIVE-->
     
     <!--EVENTS-->
      <div id="events1">
      
     
      
     
      
     
      
      <div id="motivate" class="events13" style="margin-left:2.6%;" >
      <div class="head1"><p class="pevent">HIGHLIGHTS</p>
      </div>
      <div id="her" style="width:100%; height:80%; overflow:auto; ">
      @foreach($dd as $pr)
      <div style="width:50%; height:auto; margin-top:20px; margin-left:150px; border:1px solid black; float:left;">
      <p style="background-color:red; ">{{{$pr->id}}}</p>

      <p style="background-color:yellow;">{{{$pr->answer}}}</p>
      </div>
      @endforeach
      </div>
      </div>
      
      
      
      
      <div id="map" class="events12" >
      <div class="events123">
      <div class="head1"><p class="pevent">WHY TO DONATE</p>
      </div>
      <div id="efe12"><p style="color:white; margin-top:5px;  font-style:italic;">Well said by DR. LORETTA SCOTT"  We can't help everyone ,but  everyone can help someone."
<br><br>
There are so many ways you can get involved with us and support our charity organization work upto some level.</p>
      </div>
      <div id="efr34">
      <table style="width:100%; height:100%; margin-left:20%; margin-top:5px;">
      <tr><td><a href="wheywedo"><input type="button" value="READ MORE" class="egh56" >
      </table>
      </div>
      </div>
      
      <div class="events123">
      <div class="head1"><p class="pevent">DONATE NOW</p>
      </div>
      <div id="efe12">
      <p style="color:white; margin-top:5px;  font-style:italic;">Many of us have clothing and household items piling up in the closets and the corners of our homes &ndash; things that we just don&acute;t use anymore. Maybe it&acute;s an appliance that you no longer find yourself using (that bread machine sure seemed like a good idea at the time.......</p>
      </div>
      <div id="efr34">
      <table style="width:100%; height:100%; margin-left:6%; margin-top:8px;">
      <tr><td><a href="articlehome"><input type="button" value="ARTICLE" class="egh56" ></a><a href="moneyhome"><input type="button" value="MONEY" class="egh56" ></a>
      </table>
      </div>
      </div>
      
      </div>
      
      
     </div>
     <!--EVENTS-->
     </div>
     <!-- BODY-->
     
     
     <!--FOOTER-->
     <div id="foot1">
     <!--REVIEW OF PEOPLE-->
   <div id="start">
   <p>QUOTES AND MOTIVATION</p>
   </div>
   <!--MIDCONTENT-->
     <div id="midcontent">
     <!--VIDEO-->
     <div id="video11">
     <video style="width:auto; height:100%; border:1px solid white;" controls>
     <source src="/images/videodonate.mp4" type="video/mp4">
     </video>
     </div>
<!--VIDEO-->

<!--SLIDER-->
     <div id="slider">
     <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
  <div id="wowslider-container1">
  <div class="ws_images"><ul>
    <li><img src="/data1/images/abrah.jpg" alt="" title="" id="wows1_0"/></li>
    <li><img src="/data1/images/ane.jpg" alt="" title="" id="wows1_1"/></li>
    <li><img src="/data1/images/john.jpg" alt="" title="" id="wows1_2"/></li>
    <li><a href="http://wowslider.net"><img src="data1/images/mhtma.jpg" alt="http://wowslider.net/" title="" id="wows1_3"/></a></li>
    <li><img src="/data1/images/mothr.jpg" alt="" title="" id="wows1_4"/></li>
  </ul></div>
  <div class="ws_bullets"><div>
    <a href="#" title=""><span><img src="/data1/tooltips/abrah.jpg" alt=""/>1</span></a>
    <a href="#" title=""><span><img src="/data1/tooltips/ane.jpg" alt=""/>2</span></a>
    <a href="#" title=""><span><img src="/data1/tooltips/john.jpg" alt=""/>3</span></a>
    <a href="#" title=""><span><img src="/data1/tooltips/mhtma.jpg" alt=""/>4</span></a>
    <a href="#" title=""><span><img src="/data1/tooltips/mothr.jpg" alt=""/>5</span></a>
  </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">http://wowslider.com/</a> by WOWSlider.com v8.6</div>
  <div class="ws_shadow"></div>
  </div>  
  <script type="text/javascript" src="engine1/wowslider.js"></script>
  <script type="text/javascript" src="engine1/script.js"></script>
  <!-- End WOWSlider.com BODY section -->
     </div>
     <!--SLIDEr-->

      <!--VIDEO-->
     <div id="video22">
     <video style="width:auto; height:100%; border:1px solid white;" controls>
     <source src="/images/videodonate2.mp4" type="video/mp4">
     </video>
     </div>
<!--VIDEO-->
     
     </div>
     <!--MIDCONTENT-->
     <!--ENDCONTENT-->
     <div id="endcontent">
     <!--NAV-->
     <div id="nav1">
     <nav >
     <a href="" class="navig">FAQ   |  </a>
     <a href="/ourteam" class="navig">CONTACT US    | </a>
     <a href="#heading" class="navig">TOP    |</a>
     
      <a href="" class="navig">SITEMAP  </a>
     </nav>
     </div>
     <!--NAV-->
     <!--NAV2-->
     <div id="nav2" >
     
     <nav>
     <a href="http://www.google.com" target="_blank"><img src="images/images (13).jpg" class="navig2"></a>
     <a href="http://www.youtube.com" target="_blank"><img src="images/images (14).jpg" class="navig2"></a>
      <a href="http://www.twitter.com" target="_blank"><img src="images/images (12).jpg" class="navig2"></a>
     <a href="https://www.facebook.com/LightThe-future-261646197361980/timeline/?ref=hl" target="_blank"><img src="images/download.png" class="navig2"></a>
     </nav>
     
     </div>
      <!--NAV2-->
      <!--COPYRIGHT-->
      <div id="copyright">
      <p style="color:white">Privacy Policy |</p><p style="color:yellow;" > copyright&copy; bugs killer corporation </p></div>
      </div>
      <!--COPYRIGHT-->
      
      
     </div>
      <!--ENDCONTENT-->
     </div>
    <!--FOOTER-->

</div>

    <!--</div>-->
    <!---MAIN2-->

</div>
<!-- MAIN DIV and WHOLE WEBSITE-->


</body>
</html>
