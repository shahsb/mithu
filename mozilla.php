<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mozilla-PICT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- <link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> -->
  <link href='https://fonts.googleapis.com/css?family=Ubuntu:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="mozilla.css">
 <link rel="stylesheet" type="text/css" href="animate.css">

 <script type="text/javascript" src="jquery.js"></script>


 <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
              <script>
              new WOW().init();
</script>

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default navbar-top-fixed wow slideInDown">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
         <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" id="leftNavbar">mozilla</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#About">About</a></li>
        <li><a href="#Rock">Rock</a></li>
        <li><a href="#Join">Join</a></li>
         <li><a href="#Contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container-fluid bg-1 text-center" id="About">
  <h3 class="margin">Who We Are?</h3>
  <img src="logo2.png" class="img-responsive margin wow bounce" style="display:inline" alt="Mozilla" width="220" height="220">
  <p>Mozillians are individuals who are passionate about Mozilla, the open web, and the many benefits of Firefox and its products. 
They are a global pack of do-gooders and dedicated defenders of the Web! Creative and resourceful, Mozillians lead campaigns and projects at their colleges and in their communities to encourage others to contribute to the Mozilla mission and utilize our products. Not just that, Mozillians are web educators and strives to keep the power of the Web in hands of users everywhere. 
Mozillians are given the opportunity to learn new skills, earn recognition, and advance their leadership in not just the Mozilla community, but in their college and local community. </p>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center" id="Rock">
  <h3 class="margin">Why We Rock?</h3>
  <p>Sure we're called Mozillians, but there's a lot more to us than meets the eye. While Mozillians promote our products, they are also on a mission to promote openness, innovation, and opportunity on the Web. They throw events teaching people how to code, build apps, and create awesome things online. They are web educators and seek to help people of all age and race. 
We don't control our ambassadors, we empower them to do good and to go above and beyond. Mozillians have a purpose, a mission, and a whole lot of heart! Each day this program grows and we become closer and closer to changing the world.
<br>
<br>
The Firefox Student Ambassadors program exists to empower students with the tools and resources needed to: 
<ul>
  <li>Educate others about Mozilla's mission</li>
   <li>Teach the web and increase web literacy </li>
   <li>Do good and change the world </li>
</ul>
 </p>
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center" id="Join">    
  <h3 class="margin">Why Join Us?</h3><br>
 <p>The Firefox Student Ambassadors provide an opportunity for YOU to: 
 <ul>
   <li>Obtain leadership roles on your campus and in your community </li>
     <li>Work with our global community and Mozilla staff to throw some big events </li>
       <li>Create all kinds of content you love including videos, graphics, webpages, apps, and more</li>
         <li>Receive a bunch of cool rewards (did someone say swag?) and recognition opportunities </li>
           <li>Gain experience in the field of marketing, business, and tech </li>
           <li>Meet Firefox Student Ambassadors from all over the world (you're never alone)</li>
           <li>Potential for a Mozilla internship </li>
           <li>Do good, and change the world</li>
 </ul>
<br>
<br>
<strong><em>What are you waiting for? Become a Firefox Student Ambassador today!</em></strong>

 </p>

   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Join Us</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Join Us</h4>
        </div>
        <div class="modal-body">
<?php

if(isset($_REQUEST["submit"]))
{
   $roll=$_REQUEST["roll"];
   $name=$_REQUEST["name"];
   $class=$_REQUEST["class"];
   $div=$_REQUEST["div"];
   $email=$_REQUEST["email"];
   $mo=$_REQUEST["mo"];

   echo"$roll $name $class $div $email $mo";

   $link=mysql_connect("localhost","root","");
   if(!$link)
     die("not connected".mysql_error());

   $db=mysql_select_db("mozilla",$link);
   if(!$db)
     die("db not selected".mysql_error());
  
   $q1="insert into form values('$name','$class',$div,'$email','$mo',$roll)";
   $res=mysql_query($q1);
   if(!$res)
     die("error".mysql_error());
  }

}
?>
          <form method="post">
<table>
<tr>
<td>Roll No:</td>
<td><input type="text" name="roll" required></td>
</tr>

<tr>
<td>Name</td>
<td><input type="text" name="name" required></td>
</tr>

<tr>
<td>Class:</td>
<td> <select type=text name="class">
     <option>FE</option>
     <option>SE</option>
     <option>TE</option>
     <option>BE</option>
    </select> </td>
</tr>

<tr>
<td>Divison:</td>
<td><select type=text name="div">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
</td>
</tr>

<tr>
<td>Email Id:</td>
<td><input type="email" name="email" placeholder="Enter ur email" required></td>
</tr>

<tr>
<td>Contact No:</td>
<td><input type="text" name="mo" required></td>
</tr>

<tr>
<td><input type="submit" name="submit" value="submit"></td>
</tr>
</table>
</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center" id="Contact">
  <p>Website Designed by <a href="#">Students@PICT</a></p> 
</footer>

</body>
</html>

