<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Community a Corporate Multipurpose Flat Bootstrap responsive Website Template | Classified Detail Photos :: w3layouts</title>
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
    		<li class="current_page"><a href="classified.html">Classified Ads</a></li>
			<li><a href="classified_database.html">Database</a></li>
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
		<h2>Classified About</h2>
		<span class="breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a> / <a href="classified.html" class="home_desc">Classified</a> / <a href="classified_detail.html" class="home_desc">Classified_Detail</a> / <span>Classified_Photos</span></span>
	</div>
</div>
<div class="about_top">
 <div class="container">
	<div class="col-md-3 column-1">
	    <a href="#" class="btn btn_3 btn-primary" data-toggle="modal" data-target="#applyModal_1">Sign Up
          <span style="font-size: 20px;">Join Now</span>
          <h3>Click Here</h3>
        </a>
        <div class="list-group">
	       <a href="classified_detail-about.html" class="list-group-item">About</a>
	       <a href="classified_detail-network.html" class="list-group-item">Network <span class="badge badge_1">2</span></a>
	       <a href="classified_detail-photos.html" class="list-group-item active_1">Photos <span class="badge badge_1">3</span></a>
	       <a href="classified_detail-videos.html" class="list-group-item">Videos <span class="badge badge_1">4</span></a>
        </div>
	</div>
	<div class="col-md-9 column-15">
	   <h6>Photos</h6> 
	   <ul class="photos_list">
	   	 <li><div class="column-inner_layout">
         		<div class="column-inner">
         			<div class="team layout">
                       <img class="img-responsive" src="images/c5.jpg" alt=""/>
                       <div class="team-body-info">
					     <div class="team-body">
					        <div class="team-body-content">
					              <h3 class="team-name">Slightly</h3>
					              <div class="team-job">CEO</div>
					        </div>                          
					     </div>  
					     <div class="photos_social-icons">
					        <a href="#"> <i class="fa fa-facebook"></i> </a>
					        <a href="#"><i class="fa fa-twitter"></i> </a>
					        <a href="#"><i class="fa fa-pinterest"></i> </a>
					        <a href="#"> <i class="fa fa-google"></i></a>
					     </div>   
					   </div>  
              </div></div>
            </div>
          </li>
          <li><div class="column-inner_layout">
         		<div class="column-inner">
         			<div class="team layout">
                       <img class="img-responsive" src="images/c6.jpg" alt=""/>
                       <div class="team-body-info">
					     <div class="team-body">
					        <div class="team-body-content">
					              <h3 class="team-name">Combined</h3>
					              <div class="team-job">CEO</div>
					        </div>                          
					     </div>  
					     <div class="photos_social-icons">
					        <a href="#"> <i class="fa fa-facebook"></i> </a>
					        <a href="#"><i class="fa fa-twitter"></i> </a>
					        <a href="#"><i class="fa fa-pinterest"></i> </a>
					        <a href="#"> <i class="fa fa-google"></i></a>
					     </div>   
					   </div>  
                     </div></div>
               </div>
          </li>
          <li class="last"><div class="column-inner_layout">
         		<div class="column-inner">
         			<div class="team layout">
                       <img class="img-responsive" src="images/c7.jpg" alt=""/>
                       <div class="team-body-info">
					     <div class="team-body">
					        <div class="team-body-content">
					              <h3 class="team-name">Popular</h3>
					              <div class="team-job">CEO</div>
					        </div>                          
					     </div>  
					     <div class="photos_social-icons">
					        <a href="#"> <i class="fa fa-facebook"></i> </a>
					        <a href="#"><i class="fa fa-twitter"></i> </a>
					        <a href="#"><i class="fa fa-pinterest"></i> </a>
					        <a href="#"> <i class="fa fa-google"></i></a>
					     </div>   
					   </div>  
              </div></div>
            </div>
          </li>
          <li><div class="column-inner_layout">
         		<div class="column-inner">
         			<div class="team layout">
                       <img class="img-responsive" src="images/c8.jpg" alt=""/>
                       <div class="team-body-info">
					     <div class="team-body">
					        <div class="team-body-content">
					              <h3 class="team-name">Handful</h3>
					              <div class="team-job">CEO</div>
					        </div>                          
					     </div>  
					     <div class="photos_social-icons">
					        <a href="#"> <i class="fa fa-facebook"></i> </a>
					        <a href="#"><i class="fa fa-twitter"></i> </a>
					        <a href="#"><i class="fa fa-pinterest"></i> </a>
					        <a href="#"> <i class="fa fa-google"></i></a>
					     </div>   
					   </div>  
                     </div></div>
               </div>
          </li>
          <li><div class="column-inner_layout">
         		<div class="column-inner">
         			<div class="team layout">
                       <img class="img-responsive" src="images/c9.jpg" alt=""/>
                       <div class="team-body-info">
					     <div class="team-body">
					        <div class="team-body-content">
					              <h3 class="team-name">Humour</h3>
					              <div class="team-job">CEO</div>
					        </div>                          
					     </div>  
					     <div class="photos_social-icons">
					        <a href="#"> <i class="fa fa-facebook"></i> </a>
					        <a href="#"><i class="fa fa-twitter"></i> </a>
					        <a href="#"><i class="fa fa-pinterest"></i> </a>
					        <a href="#"> <i class="fa fa-google"></i></a>
					     </div>   
					   </div>  
                     </div></div>
               </div>
          </li>
          <li class="last"><div class="column-inner_layout">
         		<div class="column-inner">
         			<div class="team layout">
                       <img class="img-responsive" src="images/c10.jpg" alt=""/>
                       <div class="team-body-info">
					     <div class="team-body">
					        <div class="team-body-content">
					              <h3 class="team-name">English</h3>
					              <div class="team-job">CEO</div>
					        </div>                          
					     </div>  
					     <div class="photos_social-icons">
					        <a href="#"> <i class="fa fa-facebook"></i> </a>
					        <a href="#"><i class="fa fa-twitter"></i> </a>
					        <a href="#"><i class="fa fa-pinterest"></i> </a>
					        <a href="#"> <i class="fa fa-google"></i></a>
					     </div>   
					   </div>  
                     </div></div>
               </div>
          </li>
          <div class="clearfix"> </div>
	   </ul>
       <!--light-box-files -->
		<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('#example1 a').Chocolat();
		});
		</script>
		 <!-- requried-jsfiles-for owl -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<script src="js/owl.carousel.js"></script>
			<script>
				$(document).ready(function() {
					$("#owl-demo").owlCarousel({
						items : 3,
						lazyLoad : true,
						autoPlay : true,
						pagination : false,
					});
				});
			</script>
		<!-- //requried-jsfiles-for owl -->
		<!-- start content_slider -->
		  <div id="example1">
		  	<h5>Newest Members</h5>
			<div id="owl-demo" class="owl-carousel text-center">
				<div class="item">
					<a href="images/pic19.jpg" title="Rose" rel="title1">
						<img class="lazyOwl" data-src="images/pic19.jpg" alt="name">
					</a>
				</div>
				<div class="item">
					<a href="images/pic20.jpg" title="Rose" rel="title1">
						<img class="lazyOwl" data-src="images/pic20.jpg" alt="name">
					</a>
				</div>
				<div class="item">
					<a href="images/pic21.jpg" title="Rose" rel="title1">
						<img class="lazyOwl" data-src="images/pic21.jpg" alt="name">
					</a>
				</div>
				<div class="item">
					<a href="images/pic22.jpg" title="Rose" rel="title1">
						<img class="lazyOwl" data-src="images/pic22.jpg" alt="name">
					</a>
				</div>
				<div class="item">
					<a href="images/pic23.jpg" title="Rose" rel="title1">
						<img class="lazyOwl" data-src="images/pic23.jpg" alt="name">
					</a>
				</div>
		   </div>
		  </div>
		  <div class="icons_box1">
	       <div class="col-sm-6 box_1">
	        <div class="feature-box">
	         <i class="fa fa-meh-o face"></i>
		     <h4>fast and friendly</h4> 
		     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
		    </div>
		   </div>
           <div class="col-sm-6 box_3">
	        <div class="feature-box">
	         <i class="fa fa-bullseye face"></i>
		     <h4>injected humour</h4> 
		     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
		    </div>
		   </div>
		   <div class="clearfix"> </div>
		 </div>
		 <div class="icons_box2">
	       <div class="col-sm-6 box_1">
	        <div class="feature-box">
	         <i class="fa fa-html5 face"></i>
		     <h4> repeat predefined</h4> 
		     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
		    </div>
		   </div>
           <div class="col-sm-6 box_3">
	        <div class="feature-box">
	         <i class="fa fa-thumbs-o-up face"></i>
		     <h4> nulla pariatur</h4> 
		     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
		    </div>
		   </div>
		   <div class="clearfix"> </div>
		 </div>
	  </div>
   </div>
</div>
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