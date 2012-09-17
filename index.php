<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" type="text/css" href="css/home.css" />
<link href='http://fonts.googleapis.com/css?family=Rosario:400,400italic' rel='stylesheet' type='text/css'>


<script src="js/jquery.js" type="text/javascript"></script>

<script src="js/jquery.hoverIntent.js" type="text/javascript"></script> <!-- optional -->
<script src="js/jquery.cluetip.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/jquery.cluetip.css" type="text/css" />

<script type="text/javascript">
$(document).ready(function() {
$('.maphover').cluetip({
  sticky: true,
  mouseOutClose: true,
  closePosition: 'title',
  closeText: 'Close',
showTitle:false, 
  local:true

});

});
</script>

</head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Home</title>

<body>

<div id="mainContainer"> <!--keeps everything in one box -->
  
<div id="header">
  <img src="images/pikogreenlogo.jpg" />
</div>

  <ul id="nav">
    <li id="nav-1"><a href="#"><span>&nbsp; H O M E </span></a></li>
    <li><a href="/daps" title="daps"><span>Data &amp; Products</span></a></li>
    <li><a href="/pawz" title="paws"><span>Projects &amp; Activities</span></a></li>
    <li><a href="/asmts" title="assesments"><span>Assessments</span></a></li>
    <li><a href="/orgs" title="programs"><span>Partners &amp; Programs</span></a></li>
  </ul>

  

  <?php include 'left.php'; ?>
  
 
<div id = "container" > <!--container that holds main text and map -->
   <strong>PacificIslandsClimate.org </strong> <i>(a.k.a. &#8216;piko&#8217;)</i>. This website is a gateway to a broad range of information related to climate in the Pacific Islands.  It includes summaries of programs, projects, and activities, as well as products and services.  Formed through the collaboration of and contributions from a family of agencies, institutions, and organizations, it is intended to serve as a shared resource for research scientists, service providers, and decision-makers.
     <br/>
	<div id="outermap">
     
        <img src="images/PaCIS_regions.jpg" name="map" width="500" height="385" border="1" usemap="#map1" id="map" onmouseout="javascript:document.map.src='images/PaCIS_regions.jpg'" />

     <map name="map1" id="map1" >
       
       <area class="maphover" rel="#hover1" shape="poly" coords="217,59,228,116,263,151,347,139,360,122,335,84,267,58" onmouseover="javascript:document.map.src='images/PaCIS_CNP.jpg'" onmouseout="javascript:document.map.src='images/PaCIS_regions.jpg'" title="Central North Pacific (Hawaiian Islands and other remote islands)" />
  
       
       <area class="maphover" rel="#hover2" shape="poly" coords="23,164,51,144,79,103,102,96,122,138,150,131,166,97,199,107,233,166,164,194,145,210,110,198,78,190,32,201"  onmouseover="javascript:document.map.src='images/PaCIS_WNP.jpg'" onmouseout="javascript:document.map.src='images/PaCIS_regions.jpg'" title="Western North Pacific (Guam, Northern Mariana Islands, Federated States of Micronesia, Marshall Islands, and Palau)"/>
       
       
       <area class="maphover" rel="#hover3" shape="poly" coords="158,322,286,299,372,331,421,321,457,319,481,291,476,269,430,268,409,206,360,213,346,188,315,148,271,162,301,215,260,176,215,173,161,195,118,240"  onmouseover="javascript:document.map.src='images/PaCIS_CSP.jpg'"  onmouseout="javascript:document.map.src='images/PaCIS_regions.jpg'" title="Central South Pacific (American Samoa, Samoa, Tonga, Fiji, Cook Islands, Solomon Islands, Vanuatu, Tuvalu, Kiribati, Tokelau, Niue, Nauru, French Polynesia, New Caledonia, Wallis & Futuna)" />
       
    </map>
     
 </div>

  <div id="hover1"><a href="/daps/CNP">Data and Products</a><br><a href="/pawz/CNP">Projects and Activities</a></div>
  <div id="hover2"><a href="/daps/WNP">Data and Products</a><br><a href="/pawz/WNP">Projects and Activities</a></div>
  <div id="hover3"><a href="/daps/SP">Data and Products</a><br><a href="/pawz/SP">Projects and Activities</a></div>	 		

   <p><i>This developmental website was put together by representatives of the NOAA NCDC working in support of the Pacific Climate Information System (PaCIS).</i> </p>
  
</div><!--ends container-->

	<div id="top-footer">


	</div>
 <div id="footer">

 <?php include 'marquee.php'; ?> 
</div> 

	<div id="bottom">


	</div> <!--ends footer-->
   
   
</div><!--ends mainContainer-->
  
</body>
</html>