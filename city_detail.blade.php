<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Community a Corporate Multipurpose Flat Bootstrap responsive Website Template | City Detail :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Community Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<!----drop down----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<!--light-box-files -->
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
<!--light-box-files -->
<script type="text/javascript" charset="utf-8">
$(function() {
	$('#example1 a').Chocolat();
});
</script>
<script type="text/javascript" charset="utf-8">
$(function() {
	$('.gallery a').Chocolat();
});
</script>		
</head>
<body>
<div class="header">
		<div class="container">
			<div class="col-sm-3 logo">
			  <h1><a href="index.html"><span class="highlight">C</span>ommunity</a></h1>
			</div>
		    <div class="col-sm-9 logo_right">
		       <div class="social">
				  <a href="" class="link facebook" target="_parent"><span class="fa fa-facebook"></span></a>
				  <a href="" class="link twitter" target="_parent"><span class="fa fa-twitter"></span></a>
				  <a href="" class="link google" target="_parent"><span class="fa fa-google-plus"></span></a>
				  <a href="" class="link google" target="_parent"><span class="fa fa-linkedin"></span></a>
				  <a href="" class="link google" target="_parent"><span class="fa fa-tumblr"></span></a>
               </div>
			<!-- script for menu -->
			<span class="menu"></span>
			<div class="top-menu">
				<ul>
					<li><a href="#" class="btn btn-default btn-default_2 pull-left" data-toggle="modal" data-target="#applyModal">Login</a></li>
					<li><a href="#" class="btn btn-default btn-default_2 pull-left" data-toggle="modal" data-target="#applyModal_1">Register</a></li>
					<li><a href="#" class="btn btn-default btn-default_2 pull-left uls-trigger" data-toggle="modal" data-target="#applyModal_2">Select Language</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<!-- Modal -->
				<div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">
				  	<div class="modal-dialog modal-dialog_2">
				    	<div class="modal-content">
					      	<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					        	<h4 class="modal-title" id="myModalLabel">
					        		<div class="head_4">
			                          <p>Login</p>
			                        </div>
			                    </h4>
					      	</div>
	                        <div class="modal-body">
                             <form class="register">
                               <div class="section">
                                <label for="username" class="field prepend-icon">
                                    <input type="text" name="username" id="username" placeholder="Username">
                                    <label for="username" class="field-icon">
                                        <i class="fa fa-user"></i>
                                    </label>
                                </label>
                               </div>
                               <div class="section">
                                <label for="password" class="field prepend-icon">
                                    <input type="password" name="password" id="password" placeholder="Password">
                                    <label for="password" class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </label>
                                </label>
                             </div>
                             <div class="section">
                                <div class="submit"><input type="submit" onclick="myFunction()" value="Login"></div>
                             </div>
                             <ul class="new">
								<li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>
								<li class="new_right"><p class="sign">New here ?&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#applyModal_1">Sign Up</a></p></li>
								<div class="clearfix"></div>
						     </ul>
                           </form>
                        </div>
				    </div>
				 </div>
				</div>
				 <!-- Modal -->
				<div class="modal fade" id="applyModal_1" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">
				  	<div class="modal-dialog dialog_3">
				    	<div class="modal-content">
					      	<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					        	<h4 class="modal-title" id="myModalLabel"><div class="head_4">
			                         <p>Register</p>
			                        </div></h4>
					      	</div>
					      	<form name="row" method="post" class="register">
					      		<div class="radio radio_1">
									<input id="leader" type="radio" value="1">
									<label for="leader">Leader</label>
									<input id="company" type="radio" value="2">
									<label for="company">Company</label>
									<input id="trainer" type="radio" value="3">
									<label for="trainer">Trainer</label>
									<input id="software developer" type="radio" value="4">
									<label for="software developer">Software Developer</label>
									<input id="product supplier" type="radio" value="5">
									<label for="product supplier">Product Supplier</label>
									<input id="consultant" type="radio" value="6">
									<label for="consultant">Consultant</label>
									<input id="employee" type="radio" value="7">
									<label for="employee">Employee</label>
	                            </div>
	                            <div class="section">
                                  <label for="username" class="field prepend-icon">
                                    <input type="text" name="email id" id="Email id" placeholder="Email id">
                                    <label for="email id" class="field-icon">
                                        <i class="fa fa-user"></i>
                                    </label>
                                  </label>
                               </div>
                               <div class="section">
                                 <label for="password" class="field prepend-icon">
                                    <input type="password" name="password" id="password" placeholder="Password">
                                    <label for="password" class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </label>
                                 </label>
                               </div>
                               <div class="section">
                                  <label for="username" class="field prepend-icon">
                                    <input type="text" name="mobile number" id="Mobile Number" placeholder="Mobile Number">
                                    <label for="mobile number" class="field-icon">
                                        <i class="fa fa-phone"></i>
                                    </label>
                                  </label>
                               </div>
                               <div class="section">
                                  <label for="name" class="field prepend-icon">
                                    <select path="country" id="country" class="form-control input-sm">
				                        <option value="">Select Country</option>
				                        <option value="">Japan</option>
				                        <option value="">Kenya</option>
				                        <option value="">Dubai</option>
				                        <option value="">Italy</option>
				                        <option value="">Greece</option> 
				                        <option value="">Iceland</option> 
				                        <option value="">China</option> 
				                        <option value="">Doha</option> 
				                        <option value="">Irland</option> 
				                        <option value="">Srilanka</option> 
				                        <option value="">Russia</option> 
				                        <option value="">Hong Kong</option> 
				                        <option value="">Germany</option>
				                        <option value="">Canada</option>  
				                        <option value="">Mexico</option> 
				                        <option value="">Nepal</option>
				                        <option value="">Norway</option> 
				                        <option value="">Oman</option>
				                        <option value="">Pakistan</option>  
				                        <option value="">Kuwait</option> 
				                        <option value="">Indonesia</option>  
				                        <option value="">Spain</option>
				                        <option value="">Thailand</option>  
				                        <option value="">Saudi Arabia</option> 
				                        <option value="">Poland</option> 
				                    </select>
                                    <label for="name" class="field-icon">
                                        <i class="fa fa-user"></i>
                                    </label>
                                  </label>
                               </div>
                               <div class="section">
                                  <label for="name" class="field prepend-icon">
                                     <select path="country" id="country" class="form-control input-sm">
                                        <option value="">Select State</option>
                                     </select>
                                     <label for="name" class="field-icon">
                                        <i class="fa fa-user"></i>
                                     </label>
                                  </label>
                               </div>
                               <div class="section">
                                  <label for="name" class="field prepend-icon">
                                      <select path="country" id="country" class="form-control input-sm">
                                         <option value="">Select City</option>
                                      </select>
                                      <label for="name" class="field-icon">
                                        <i class="fa fa-user"></i>
                                      </label>
                                  </label>
                               </div>
                               <div class="section">
                                  <div class="submit"><input type="submit" onclick="myFunction()" value="Register"></div>
                               </div>
                               <div class="checkbox check_1">
									<input id="check1" type="checkbox" name="check" value="check1">
									<label for="check1">I agree to the Terms of Service and Privacy Policy</label>
							   </div>
						  </form>
                     </div>
		         </div>
		     </div>
			 <div class="modal fade" id="applyModal_2" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								&times;</button>
							<h4 class="modal-title" id="myModalLabel">
								Please Choose Your Location</h4>
						</div>
						<div class="modal-body">
							 <form class="form-horizontal" role="form">
								<div class="form-group">
									<select id="basic2" class="show-tick form-control" multiple>
										<optgroup label="Popular Cities">
											<option selected style="display:none;color:#eee;">All India</option>
											<option>Ahmedabad</option>
											<option>Bangalore</option>
											<option>Chandigarh</option>
											<option>Chennai</option>
											<option>Coimbatore</option>
											<option>Delhi</option>
											<option>Gurgaon</option>
											<option>Hyderabad</option>
											<option>Jaipur</option>
											<option>Kochi</option>
											<option>Kolkata</option>
											<option>Lucknow</option>
											<option>Mumbai</option>
											<option>Noida</option>
										</optgroup>
											<optgroup label="More Cities">
											<optgroup label="Andhra Pradesh">
											<option>Anantapur</option>
											<option>Chinnamandem</option>
											<option>Gudur</option><option>Guntur</option><option>Jangareddy Gudem</option><option>Kakinada</option><option>Kurnool</option><option>Martur</option><option>Parvathipuram</option><option>Rajahmundry</option><option>Tenali</option><option>Tirupati</option><option>Vijayawada</option><option>Vizag</option><option>Vizianagaram</option></optgroup><optgroup label="Arunachal Pradesh"><option>Tawang</option><option>Ziro</option></optgroup><optgroup label="Assam"><option>Dibrugarh</option><option>Guwahati</option><option>Jorhat</option><option>Silchar</option><option>Tinsukia</option></optgroup><optgroup label="Bihar"><option>Hajipur</option><option>Patna</option></optgroup><optgroup label="Chhattisgarh"><option>Bhilai</option><option>Bilaspur</option><option>Champa</option><option>Dhamtari</option><option>Durg</option><option>Jagdalpur</option><option>Kawardha</option><option>Kondagaon</option><option>Korba</option><option>Raigarh</option><option>Raipur</option><option>Tilda Neora</option></optgroup><optgroup label="Croatia"><option>Dubrovnik</option></optgroup><optgroup label="Goa"><option>Goa</option></optgroup><optgroup label="Gujarat"><option>Adipur</option><option>Ahmedabad</option><option>Anand</option><option>Ankleshwar</option><option>Bharuch</option><option>Bhavnagar</option><option>Daman</option><option>Gandhidham</option><option>Gandhinagar</option><option>Himmatnagar</option><option>Idar</option><option>Jamnagar</option><option>Jetpur</option><option>Junagadh</option><option>Kutch</option><option>Nadiad</option><option>Navsari</option><option value="PALN">Palanpur</option><option value="PATA">Patan</option><option value="RAJK">Rajkot</option><option value="SANA">Sanand</option><option value="SILV">Silvassa</option><option value="SURT">Surat</option><option value="VAD">Vadodara</option><option value="VLSD">Valsad</option><option value="VAPI">Vapi</option></optgroup><optgroup label="Haryana"><option value="AMB">Ambala</option><option value="DHRA">Dharuhera</option><option value="FARI">Faridabad</option><option value="HISR">Hisar</option><option value="JHAJ">Jhajjar</option><option value="JIND">Jind</option><option value="KAIT">Kaithal</option><option value="KARN">Karnal</option><option value="KUND">Kundli</option><option value="KURU">Kurukshetra</option><option value="PNCH">Panchkula</option><option value="PAN">Panipat</option><option value="REWA">Rewari</option><option value="ROH">Rohtak</option><option value="SISA">Sirsa</option><option value="RAIH">Sonipat</option><option value="YAMU">Yamunanagar</option></optgroup><optgroup label="Himachal Pradesh"><option value="BADD">Baddi</option><option value="DMSL">Dharamsala</option><option value="HAMI">Hamirpur (HP)</option><option value="KANG">Kangra</option><option value="KULU">Kullu</option><option value="MANA">Manali</option><option value="SMLA">Shimla</option><option value="SCO">Solan</option></optgroup><optgroup label="Jammu and Kashmir"><option value="JAMM">Jammu</option><option value="KATH">Kathua</option><option value="KATR">Katra</option><option value="LEHA">Ladakh</option></optgroup><optgroup label="Jharkhand"><option value="BOKA">Bokaro</option><option value="DOGH">Deoghar</option><option value="DHAN">Dhanbad(Jharkhand)</option><option value="JMDP">Jamshedpur</option><option value="RANC">Ranchi</option></optgroup><optgroup label="Karnataka"><option value="BELG">Belgaum</option><option value="BANG">Bengaluru</option><option value="BIDR">Bidar</option><option value="COOR">Coorg</option><option value="DAVA">Davangere</option><option value="GULB">Gulbarga</option><option value="HUBL">Hubli</option><option value="KWAR">Karwar</option><option value="MLR">Mangalore</option><option value="MANI">Manipal</option><option value="MYS">Mysore</option><option value="TUMK">Tumkur</option><option value="UDUP">Udupi</option></optgroup><optgroup label="Kerala"><option value="99">Alappuzha</option><option value="ANHL">Anchal</option><option value="ANGA">Angamaly</option><option value="ERNK">Ernakulam</option><option value="KANN">Kannur</option><option value="KARG">Karunagapally</option><option value="KOCH">Kochi</option><option value="KOLM">Kollam</option><option value="KTYM">Kottayam</option><option value="MVLR">Mavellikara</option><option value="THAL">Thalayolaparambu</option><option value="THSR">Thrissur</option><option value="TRIV">Trivandrum</option></optgroup><optgroup label="Madhya Pradesh"><option value="BLGT">Balaghat</option><option value="BETU">Betul</option><option value="BHOP">Bhopal</option><option value="CHIN">Chhindwara</option><option value="DEWAS">Dewas</option><option value="GWAL">Gwalior</option><option value="HRDA">Harda</option><option value="IND">Indore</option><option value="JABL">Jabalpur</option><option value="KHDW">Khandwa</option><option value="NMCH">Neemuch</option><option value="RATL">Ratlam</option><option value="SAMP">Sagar</option><option value="SARN">Sarni</option><option value="SEHO">Sehore</option><option value="SEON">Seoni</option><option value="SHIV">Shivpuri</option><option value="UJJN">Ujjain</option></optgroup><optgroup label="Maharashtra"><option value="AHMED">Ahmednagar</option><option value="AKOL">Akola</option><option value="ALBG">Alibaug</option><option value="AMRA">Amravati</option><option value="AURA">Aurangabad</option><option value="BARA">Baramati</option><option value="BEED">Beed</option><option value="BHIW">Bhiwandi</option><option value="BOIS">Boisar</option><option value="BULD">Buldana</option><option value="CHAN">Chandrapur</option><option value="DHLE">Dhule</option><option value="DHUL">Dhulia</option><option value="INDA">Indapur</option><option value="JALG">Jalgaon</option><option value="KHED">Khed</option><option value="KHOP">Khopoli</option><option value="KOLH">Kolhapur</option><option value="LAT">Latur</option><option value="LAVA">Lavasa</option><option value="LNVL">Lonavala</option><option value="MHAD">Mahad</option><option value="MALE">Malegaon</option><option value="MUMBAI">Mumbai</option><option value="NAGP">Nagpur</option><option value="NAND">Nanded</option><option value="NASK">Nashik</option><option value="PALG">Palghar</option><option value="PANC">Panchgani</option><option value="PARB">Parbhani</option><option value="PEN">Pen</option><option value="PHAL">Phaltan</option><option value="PIMP">Pimpri</option><option value="PUNE">Pune</option><option value="RAI">Raigad</option><option value="SANG">Sangli</option><option value="SATA">Satara</option><option value="SOLA">Solapur</option><option value="TMB">Tembhode</option><option value="UDGR">Udgir</option><option value="WARD">Wardha</option></optgroup><optgroup label="Meghalaya"><option value="RNG">Rongjeng</option><option value="SHLG">Shillong</option></optgroup><optgroup label="Nagaland"><option value="DMPR">Dimapur</option></optgroup><optgroup label="NCR"><option value="NCR">National Capital Region (NCR)</option></optgroup><optgroup label="Orissa"><option value="BLSR">Balasore</option><option value="BHUB">Bhubaneshwar</option><option value="PURI">Puri</option><option value="SAMB">Sambalpur</option></optgroup><optgroup label="Punjab"><option value="ABOR">Abohar</option><option value="AHMG">Ahmedgarh</option><option value="AMRI">Amritsar</option><option value="BNGA">Banga</option><option value="BAR">Barnala</option><option value="BHAT">Bathinda</option><option value="CHD">Chandigarh</option><option value="HOSH">Hoshiarpur</option><option value="JALA">Jalandhar</option><option value="KHAN">Khanna</option><option value="KOTK">Kotkapura</option><option value="LUDH">Ludhiana</option><option value="MNSA">Mansa</option><option value="MOGA">Moga</option><option value="MOHL">Mohali</option><option value="NAVN">Nawanshahr</option><option value="PATH">Pathankot</option><option value="PATI">Patiala</option><option value="PATR">Patran</option><option value="RUPN">Rupnagar</option><option value="SANR">Sangrur</option><option value="ZIRK">Zirakpur</option></optgroup><optgroup label="Rajasthan"><option value="ABRD">Abu Road</option><option value="AJMER">Ajmer</option><option value="ALSR">Alsisar (Rajasthan)</option><option value="ALWR">Alwar</option><option value="BANS">Banswara</option><option value="BEAW">Beawar</option><option value="BHIL">Bhilwara</option><option value="BHWD">Bhiwadi</option><option value="BIK">Bikaner</option><option value="DAUS">Dausa</option><option value="JAIP">Jaipur</option><option value="JSMR">Jaisalmer</option><option value="JODH">Jodhpur</option><option value="KISH">Kishangarh</option><option value="KOTA">Kota</option><option value="NEEM">Neemrana</option><option value="SIKR">Sikar</option><option value="SRIG">Sri Ganganagar</option><option value="UDAI">Udaipur</option></optgroup><optgroup label="Singapore"><option value="SING">Singapore</option></optgroup><optgroup label="Tamil Nadu"><option value="ARIY">Ariyalur</option><option value="ARNI">Arni</option><option value="ARUP">Aruppukottai</option><option value="CHEN">Chennai</option><option value="COIM">Coimbatore</option><option value="CUDD">Cuddalore</option><option value="DHAR">Dharapuram</option><option value="DMPI">Dharmapuri</option><option value="DIND">Dindigul</option><option value="EROD">Erode</option><option value="KNPM">Kanchipuram</option><option value="KUMB">Kumbakonam</option><option value="MADU">Madurai</option><option value="MTPM">Mettuppalayam</option><option value="OOTY">Ooty</option><option value="POND">Pondicherry</option><option value="PUDH">Pudhukottai</option><option value="SALM">Salem</option><option value="SIV">Sivakasi</option><option value="TAJO">Tanjore</option><option value="TENK">Tenkasi</option><option value="TIRV">Tirunelveli</option><option value="TIRP">Tirupur</option><option value="TRIC">Trichy</option><option value="VELL">Vellore</option></optgroup><optgroup label="Telangana"><option value="ADIL">Adilabad</option><option value="AMAN">Amangal</option><option value="HYD">Hyderabad</option><option value="KARIM">Karimnagar</option><option value="KHAM">Khammam</option><option value="MRGD">Miryalaguda</option><option value="NIZA">Nizamabad</option><option value="PEDA">Peddapalli</option><option value="POCH">Pochampally</option><option value="SDDP">Siddipet</option><option value="SURY">Suryapet</option><option value="UPPA">Uppal</option><option value="WAR">Warangal</option></optgroup><optgroup label="Tripura "><option value="AGAR">Agartala</option></optgroup><optgroup label="Uttar Pradesh"><option value="AGRA">Agra</option><option value="ALI">Aligarh</option><option value="ALLH">Allahabad</option><option value="BARE">Bareilly</option><option value="BIJ">Bijnor</option><option value="GHAR">Ghazipur</option><option value="GRKP">Gorakhpur</option><option value="KANP">Kanpur</option><option value="LUCK">Lucknow</option><option value="MATH">Mathura</option><option value="MERT">Meerut</option><option value="MORA">Moradabad</option><option value="MUZ">Muzaffarnagar</option><option value="RENU">Renukoot</option><option value="SAHA">Saharanpur</option><option value="VAR">Varanasi</option></optgroup><optgroup label="Uttarakhand"><option value="DEH">Dehradun</option><option value="HRDR">Haridwar</option><option value="MSS">Mussoorie</option><option value="NAIN">Nainital</option><option value="RAMN">Ramnagar</option><option value="RKES">Rishikesh</option><option value="ROOR">Roorkee</option><option value="RUDP">Rudrapur</option></optgroup><optgroup label="West Bengal"><option value="ASANSOL">Asansol</option><option value="BEHA">Berhampore</option><option value="BLPR">Bolpur</option><option value="BURD">Burdwan</option><option value="COBE">Cooch Behar</option><option value="DARJ">Darjeeling</option><option value="DURGA">Durgapur</option><option value="HALD">Haldia</option><option value="HOOG">Hooghly</option><option value="HWRH">Howrah</option><option value="JPG">Jalpaiguri</option><option value="KOLK">Kolkata</option><option value="RANA">Ranaghat</option><option value="SILI">Siliguri</option></optgroup>
										</optgroup>
									</select>
								</div>
							  </form>    
						</div>
					</div>
				  </div>
				</div>
				<div class="clearfix"></div>
		 </div>
	   </div>
</div>
<nav class="navbar nav_bottom" role="navigation">
 <div class="container">
 <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
   </div> 
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
    		<li><a href="classified.html">Classified Ads</a></li>
			<li class="current_page"><a href="classified_database.html">Database</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">News<span class="caret"></span></a>
              <ul class="dropdown-menu drop_menu" role="menu">
                <li><a href="news.html">News</a></li>
                <li><a href="shortcodes.html">Shortcodes</a></li>
                <li><a href="faq.html">Faq</a></li>
                <li><a href="career.html">Career</a></li>
                <li><a href="terms.html">Terms of use</a></li>
                <li><a href="sitemap.html">Sitemap</a></li>
                <li><a href="testimonials.html">Testimonials</a></li>
                <li><a href="grids.html">Grids</a></li>
              </ul>
            </li>
            <li><a href="article.html">Articles</a></li>
            <li><a href="forum.html">Forum</a></li>
            <li><a href="videos.html">Video</a></li>
            <li><a href="advertise.html">Advertising</a></li>
            <li><a href="contact.html">Contacts</a></li>
        </ul>
        <div class="help_line"><div id="txtblnk"><p>HELP LINE : (+91)-2548713984</p></div></div>
     </div><!-- /.navbar-collapse -->
   </div>
</nav>
<script type="text/javascript">
		$(function() {
		blinkeffect('#txtblnk');
		})
		function blinkeffect(selector) {
		$(selector).fadeOut('slow', function() {
		$(this).fadeIn('slow', function() {
		blinkeffect(this);
		});
		});
		}
</script>
<div class="demo">
  <marquee behavior="scroll" style="background:#F3DB28; color:#000;" direction="left" onmouseover="this.stop();" onmouseout="this.start();">				
    Mauris volutpat sagittis dolor, ac cursus nibh ultricies ac. Mauris lacinia nunc non venenatis aliquam. Aliquam id interdum risus. Integer tempor nulla suscipit congue commodo. Nam congue enim purus, non scelerisque odio mollis sed. Ut quis felis non lectus dignissim tristique. 
  </marquee> 	 
</div>
<div class="about_banner">
	<div class="container">
		<h2>classified database</h2>
		<span class="breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a> / <a href="classified_database.html" class="home_desc">Database</a> / <span>Database_City</span></span>
	</div>
</div>
<div class="about_top">
  <div class="container">
	<div class="col-md-3 column-12">
	</div>
	<div class="col-md-9 column-15">
	   <h6>Database of City</h6>
	   <p class="m_5">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
       <div class="entry_values">
          <div class="col-md-3 grid_1">
           <select class="form-control m_6 col-md-3" name="usertype" id="usertype">
              <option value="">Please Select</option>
              <option value="1">Leader</option>
              <option value="2">Trainer</option>
              <option value="3">Company</option>
              <option value="4">Software Developer</option>
              <option value="5">Products Supplier</option>
              <option value="6">Consultant</option>
              <option value="7">Employee</option>
              <option value="8">Non MLM Persons</option>
           </select>
          </div>
          <div class="col-md-3 grid_1">
            <select class="form-control grid_1 col-md-3" name="country" id="country database_country">
                <option value="">Country</option>
                                                                                <option value="Afghanistan">
                    Afghanistan                                            </option>
                                                            <option value="American samoa">
                    American samoa                                            </option>
                                                            <option value="Andorra">
                    Andorra                                            </option>
                                                            <option value="Antigua and barbuda">
                    Antigua and barbuda                                            </option>
                                                            <option value="Australia">
                    Australia                                            </option>
                                                            <option value="Austria">
                    Austria                                            </option>
                                                            <option value="Azerbaijan">
                    Azerbaijan                                            </option>
                                                            <option value="Bahrain">
                    Bahrain                                            </option>
                                                            <option value="Bangladesh">
                    Bangladesh                                            </option>
                                                            <option value="Bosnia and Herzegovina">
                    Bosnia and Herzegovina                                            </option>
                                                            <option value="Botswana">
                    Botswana                                            </option>
                                                            <option value="Brazil">
                    Brazil                                            </option>
                                                            <option value="Bulgaria">
                    Bulgaria                                            </option>
                                                            <option value="Cameroon">
                    Cameroon                                            </option>
                                                            <option value="Canada">
                    Canada                                            </option>
                                                            <option value="China">
                    China                                            </option>
                                                            <option value="Cote divoire">
                    Cote divoire                                            </option>
                                                            <option value="Croatia">
                    Croatia                                            </option>
                                                            <option value="Cyprus">
                    Cyprus                                            </option>
                                                            <option value="Czech republic">
                    Czech republic                                            </option>
                                                            <option value="Denmark">
                    Denmark                                            </option>
                                                            <option value="France">
                    France                                            </option>
                                                            <option value="French polynesia">
                    French polynesia                                            </option>
                                                            <option value="Germany">
                    Germany                                            </option>
                                                            <option value="Ghana">
                    Ghana                                            </option>
                                                            <option value="Guadeloupe">
                    Guadeloupe                                            </option>
                                                            <option value="Hungary">
                    Hungary                                            </option>
                                                            <option value="Iceland">
                    Iceland                                            </option>
                                                            <option value="India">
                    India                                            </option>
                                                            <option value="Indonesia">
                    Indonesia                                            </option>
                                                            <option value="Iran">
                    Iran                                            </option>
                                                            <option value="Ireland">
                    Ireland                                            </option>
                                                            <option value="Italy">
                    Italy                                            </option>
                                                            <option value="Latvia">
                    Latvia                                            </option>
                                                            <option value="Luxembourg">
                    Luxembourg                                            </option>
                                                            <option value="Malaysia">
                    Malaysia                                            </option>
                                                            <option value="Mexico">
                    Mexico                                            </option>
                                                            <option value="Morocco">
                    Morocco                                            </option>
                                                            <option value="Nepal">
                    Nepal                                            </option>
                                                            <option value="Netherlands">
                    Netherlands                                            </option>
                                                            <option value="New zealand">
                    New zealand                                            </option>
                                                            <option value="Nigeria">
                    Nigeria                                            </option>
                                                            <option value="Nottinghamshire">
                    Nottinghamshire                                            </option>
                                                            <option value="Pakistan">
                    Pakistan                                            </option>
                                                            <option value="Philippines">
                    Philippines                                            </option>
                                                            <option value="Romania">
                    Romania                                            </option>
                                                            <option value="Russia">
                    Russia                                            </option>
                                                            <option value="Singapore">
                    Singapore                                            </option>
                                                            <option value="Slovakia">
                    Slovakia                                            </option>
                                                            <option value="Spain">
                    Spain                                            </option>
                                                            <option value="Sweden">
                    Sweden                                            </option>
                                                            <option value="Tanzania">
                    Tanzania                                            </option>
                                                            <option value="Thailand">
                    Thailand                                            </option>
                                                            <option value="United arab emirates">
                    United arab emirates                                            </option>
                                                            <option value="United kingdom">
                    United kingdom                                            </option>
                                                            <option value="Usa" selected="">
                    Usa                                            </option>
                                                            <option value="Vietnam">
                    Vietnam                                            </option>
                </select>
          </div>
          <div class="col-md-3 grid_1">
             <select class="form-control grid_1 col-md-3" name="state" id="state">
	            <option value="">State</option>
	                                                        <option value="Andaman and nicobar">
                    Andaman and nicobar                                            </option>
                                                            <option value="Andhra pradesh">
                    Andhra pradesh                                            </option>
                                                            <option value="Arunachal pradesh">
                    Arunachal pradesh                                            </option>
                                                            <option value="Assam">
                    Assam                                            </option>
                                                            <option value="Bihar">
                    Bihar                                            </option>
                                                            <option value="Chandigarh">
                    Chandigarh                                            </option>
                                                            <option value="Chhattisgarh">
                    Chhattisgarh                                            </option>
                                                            <option value="Dadra and nagar haveli">
                    Dadra and nagar haveli                                            </option>
                                                            <option value="Delhi">
                    Delhi                                            </option>
                                                            <option value="Goa">
                    Goa                                            </option>
                                                            <option value="Gujarat">
                    Gujarat                                            </option>
                                                            <option value="Haryana">
                    Haryana                                            </option>
                                                            <option value="Himachal pradesh">
                    Himachal pradesh                                            </option>
                                                            <option value="Jammu and kashmir">
                    Jammu and kashmir                                            </option>
                                                            <option value="Jharkhand">
                    Jharkhand                                            </option>
                                                            <option value="Karnataka">
                    Karnataka                                            </option>
                                                            <option value="Kerala">
                    Kerala                                            </option>
                                                            <option value="Madhya pradesh">
                    Madhya pradesh                                            </option>
                                                            <option value="Maharashtra">
                    Maharashtra                                            </option>
                                                            <option value="Manipur">
                    Manipur                                            </option>
                                                            <option value="Meghalaya">
                    Meghalaya                                            </option>
                                                            <option value="Mizoram">
                    Mizoram                                            </option>
                                                            <option value="Nagaland">
                    Nagaland                                            </option>
                                                            <option value="Odisha">
                    Odisha                                            </option>
                                                            <option value="Pondicherry">
                    Pondicherry                                            </option>
                                                            <option value="Punjab">
                    Punjab                                            </option>
                                                            <option value="Rajasthan">
                    Rajasthan                                            </option>
                                                            <option value="Sikkim">
                    Sikkim                                            </option>
                                                            <option value="Tamil nadu">
                    Tamil nadu                                            </option>
                                                            <option value="Telangana">
                    Telangana                                            </option>
                                                            <option value="Tripura">
                    Tripura                                            </option>
                     <option value="Newyork" selected="">
                    Newyork                                          </option>
                                                            <option value="Uttar pradesh">
                    Uttar pradesh                                            </option>
                                                            <option value="Uttarakhand">
                    Uttarakhand                                            </option>
                                                            <option value="West bengal">
                    West bengal                                            </option>
                                                </select>
                </div>
                <div class="col-md-3 grid_1">
                <select class="form-control grid_1 col-md-3" name="city" id="city">
                   <option value="">City</option>
                                                    <option value="Ashoknagar">
                    Ashoknagar                                            </option>
                                                            <option value="Asola">
                    Asola                                            </option>
                                                            <option value="Bakhtawar">
                    Bakhtawar                                            </option>
                                                            <option value="Central delhi">
                    Central delhi                                            </option>
                                                            <option value="Delhi">
                    Delhi                                            </option>
                                                            <option value="Delhi ncr">
                    Delhi ncr                                            </option>
                                                            <option value="Dwarka">
                    Dwarka                                            </option>
                                                            <option value="East delhi">
                    East delhi                                            </option>
                                                            <option value="Hasanpur">
                    Hasanpur                                            </option>
                                                            <option value="Kirti nagar">
                    Kirti nagar                                            </option>
                                                            <option value="New delhi">
                    New delhi                                            </option>
                                                            <option value="North delhi">
                    North delhi                                            </option>
                                                            <option value="North west delhi">
                    North west delhi                                            </option>
                                                            <option value="Rohini">
                    Rohini                                            </option>
                                                            <option value="South delhi">
                    South delhi                                            </option>
                                                            <option value="Tilak nagar">
                    Tilak nagar                                            </option>
                                                            <option value="Trilokpuri">
                    Trilokpuri                                            </option>
                                                            <option value="West delhi">
                    West delhi                                            </option>
                                                </select>
              </div>
              <div class="clearfix"></div>
          </div>
          <div class="panel-body_3">
            <div class="pull-left" style="margin:0 5px;">
        		<a class="thumbnail" href="classified_detail.html">
        			<img src="images/c1.jpg" width="60" height="60">
        		</a>
        	</div>
        	<div class="name">
	            <a href="classified_detail.html">
	                <span>quisquam</span>
	            </a><br>
	            <a href="#">
	               <p> Company</p>                                                
	            </a>
	            <a href="#">
	                <p>Central Delhi Delhi</p>                                                
	            </a>
             </div>
             <div class="contact_btn">
             	<a href="#" class="add_btn add_btn1" data-toggle="modal" data-target="#applyModal">Contact me</a>
             </div>
             <div class="clearfix"></div><hr>
             <div class="pull-left" style="margin:0 5px;">
        		<a class="thumbnail" href="classified_detail.html">
        			<img src="images/c2.jpg" width="60" height="60">
        		</a>
        	</div>
        	<div class="name">
	            <a href="classified_detail.html">
	                <span>laudantium</span>
	            </a><br>
	            <a href="#">
	               <p> Company</p>                                                
	            </a>
	            <a href="#">
	                <p>Central Delhi Delhi</p>                                                
	            </a>
             </div>
             <div class="contact_btn">
             	<a href="#" class="add_btn add_btn1" data-toggle="modal" data-target="#applyModal">Contact me</a>
             </div>
             <div class="clearfix"></div><hr>
             <div class="pull-left" style="margin:0 5px;">
        		<a class="thumbnail" href="classified_detail.html">
        			<img src="images/c3.jpg" width="60" height="60">
        		</a>
        	</div>
        	<div class="name">
	            <a href="classified_detail.html">
	                <span>reprehenderit</span>
	            </a><br>
	            <a href="#">
	               <p> Company</p>                                                
	            </a>
	            <a href="#">
	                <p>Central Delhi Delhi</p>                                                
	            </a>
             </div>
             <div class="contact_btn">
             	<a href="#" class="add_btn add_btn1" data-toggle="modal" data-target="#applyModal">Contact me</a>
             </div>
             <div class="clearfix"></div><hr>
             <div class="pull-left" style="margin:0 5px;">
        		<a class="thumbnail" href="classified_detail.html">
        			<img src="images/c4.jpg" width="60" height="60">
        		</a>
        	</div>
        	<div class="name">
	            <a href="classified_detail.html">
	                <span> voluptas</span>
	            </a><br>
	            <a href="#">
	               <p> Company</p>                                                
	            </a>
	            <a href="#">
	                <p>Central Delhi Delhi</p>                                                
	            </a>
             </div>
             <div class="contact_btn">
             	<a href="#" class="add_btn add_btn1" data-toggle="modal" data-target="#applyModal">Contact me</a>
             </div>
             <div class="clearfix"></div><hr>
             <div class="pull-left" style="margin:0 5px;">
        		<a class="thumbnail" href="classified_detail.html">
        			<img src="images/c1.jpg" width="60" height="60">
        		</a>
        	</div>
        	<div class="name">
	            <a href="classified_detail.html">
	                <span>pleasure</span>
	            </a><br>
	            <a href="#">
	               <p> Company</p>                                                
	            </a>
	            <a href="#">
	                <p>Central Delhi Delhi</p>                                                
	            </a>
             </div>
             <div class="contact_btn">
             	<a href="#" class="add_btn add_btn1" data-toggle="modal" data-target="#applyModal">Contact me</a>
             </div>
             <div class="clearfix"></div>
          </div>
        </div>
   </div>
</div>
<section class="bg-secondary">
        <div class="container">
           <div class="col-md-6 country_list2">
              <div class="inset-3">
                <h4>
                  Why Choose Us
                </h4>
                <div class="line-inset-1">
                  <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo..... 
                  </p>
                  <div class="link_1">
                    <a href="#" class="add_btn more_btn">More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 country_list1">
              <div class="inset-3">
                <h4>
                  City in Newyork
                </h4>
                <div class="line-inset-1">
                  <ul class="col-xs-6 marked-list">
                    <li><a href="#">
                                                        Buffalo                                                  </a></li>
                    <li><a href="#">
                                                        Syracuse                                                   </a></li>
                    <li><a href="#">
                                                        Albany                                                   </a></li>
                    <li><a href="#">
                                                        Rochester                                                    </a></li>
                    <li><a href="#">
                                                        Yonkers                                                    </a></li>
                    <li><a href="#">
                                                        Binghamton                                                   </a></li>
                   
                  </ul>
                  <ul class="col-xs-6 marked-list">
                    <li><a href="#">
                                                        Niagara Falls                                                    </a></li>
                    <li><a href="#">
                                                        Schenectady                                                   </a></li>
                    <li><a href="#">
                                                        Poughkeepsie                                                   </a></li>
                    <li><a href="#">
                                                        Hawai                                                    </a></li>
                    <li><a href="#">
                                                        Utica                                                   </a></li>
                    
                  </ul>
                  <div class="clearfix"> </div>
                </div>
             </div>
          </div>
        </div>
</section>
<div class="footer_widget">
	<div class="container">
		<div class="col-md-4">
			<aside id="text-1" class="widget widget_text">
				<h3 class="widget-title"><span>COME VISIT US</span></h3>
				<div class="textwidget"><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
				   <p><em style="color: #fff;">standard chunk.,<br> Finibus Bonorum,<br> Ipsum generators, treatise</em></p>
				</div> 
			</aside>
		</div>
		<div class="col-md-4">
			<aside id="text-2" class="widget widget_text">
				<h3 class="widget-title"><span>MORE ABOUT US</span></h3>
				<div class="textwidget">
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,.</p></div>
		    </aside>
		</div>
		<div class="col-md-4">
			<aside>
				<h3 class="widget-title"><span>FLICKR FEED</span></h3>
				<ul class="gallery">
					<li><a href="images/pic5.jpg" class="img-responsive" title="Rose" rel="title1">
						<img src="images/pic5.jpg" class="img-responsive" alt="name">
					   </a>
					</li>
					<li><a href="images/pic6.jpg" class="img-responsive" title="Rose" rel="title1">
						<img src="images/pic6.jpg" class="img-responsive" alt="name">
					   </a>
					</li>
					<li><a href="images/pic11.jpg" class="img-responsive" title="Rose" rel="title1">
						<img src="images/pic11.jpg" class="img-responsive" alt="name">
					   </a>
					</li>
					<li class="last">
						<a href="images/pic12.jpg" class="img-responsive" title="Rose" rel="title1">
						<img src="images/pic12.jpg" class="img-responsive" alt="name">
					   </a>
					</li>
					<li>
						<a href="images/pic6.jpg" class="img-responsive" title="Rose" rel="title1">
						<img src="images/pic6.jpg" class="img-responsive" alt="name">
					   </a>
					</li>
					<li>
					   <a href="images/pic5.jpg" class="img-responsive" title="Rose" rel="title1">
						<img src="images/pic5.jpg" class="img-responsive" alt="name">
					   </a>
				    </li>
					<li>
						<a href="images/pic11.jpg" class="img-responsive" title="Rose" rel="title1">
						<img src="images/pic11.jpg" class="img-responsive" alt="name">
					   </a>
					</li>
					<li class="last">
						<a href="images/pic12.jpg" class="img-responsive" title="Rose" rel="title1">
						<img src="images/pic12.jpg" class="img-responsive" alt="name">
					   </a>
				    </li>
					<div class="clearfix"> </div>
				</ul>
			</aside>
		</div>
	</div>
</div>
<div class="footer_middle">
	<div class="container">
        <div class="col-sm-7">
          <div class="footer-icons"> 
          	<a href="#" class="social-icon"><i class="fa fa-twitter has-circle"></i></a> 
          	<a href="#" class="social-icon"><i class="fa fa-facebook has-circle"></i></a> 
          	<a href="#" class="social-icon"><i class="fa fa-google-plus has-circle"></i></a> 
          	<a href="#" class="social-icon"><i class="fa fa-linkedin has-circle"></i></a> 
          	<div class="clearfix"> </div>
          </div>
        </div>
        <div class="col-sm-5">
          <div class="newsletter_signup">
            <form novalidate="" target="_blank" name="newsletter-subscribe-form" id="newsletter-subscribe-form" method="post" class="form-inline validate">
              <input type="email" required="" placeholder="Subscribe to our newsletter" class="form-control" name="EMAIL" value="">
              <input type="submit" id="newsletter-subscribe" name="subscribe" value="SUBSCRIBE">
            </form>
          </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>		
<div class="footer_bottom">
	<div class="container">
		<div class="copy">
            <p>Copyright © 2016 Community. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	    </div>
	</div>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;">Top </span></a>
      <script type="text/javascript" src="js/move-top.js"></script>
      <script type="text/javascript" src="js/easing.js"></script>
      <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	  </script>
</div>	
<!----language selector----->
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link href="css/jquery.uls.css" rel="stylesheet"/>
<link href="css/jquery.uls.grid.css" rel="stylesheet"/>
<link href="css/jquery.uls.lcd.css" rel="stylesheet"/>
<!-- Source -->
<script src="js/jquery.uls.data.js"></script>
<script src="js/jquery.uls.data.utils.js"></script>
<script src="js/jquery.uls.lcd.js"></script>
<script src="js/jquery.uls.languagefilter.js"></script>
<script src="js/jquery.uls.regionfilter.js"></script>
<script src="js/jquery.uls.core.js"></script>
<script>
	$( document ).ready( function() {
		$( '.uls-trigger' ).uls( {
			onSelect : function( language ) {
				var languageName = $.uls.data.getAutonym( language );
				$( '.uls-trigger' ).text( languageName );
			},
			quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
		} );
	} );
</script>
</body>
</html>