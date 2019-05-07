
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>yothirgamaya Peace Building Symposium</title>
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
<!-- Owl Stylesheets -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
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
              <h1><a href="{{url('welcome')}}"><span class="highlight">JOTHIR<br>GAMAYA</span><sub>PBS</sub></a></h1>
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


{{--------------------------------------------LOGIN FORM -----------------------------------------------}}
                             <form class="login" method="post" action="{{ url('/createlogins') }}">
                               <div class="section">
                                 {{ csrf_field() }}
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

{{----------------------------END OF LOGIN FORM--------------------------------------------------------}}
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

{{-- --------------------------------- REGISTRATION FORM------------------------------------------------ --}}
                 <form method="post" action="{{ url('/createlogin') }}" class="register" enctype="multipart/form-data">

                    {{ csrf_field() }}
                      <div class="section">
                     <div class="radio radio_1"> {{--type of users who are allowed to register--}}

                        <input id="volunteer" value="30" type="radio" name="utype" checked>
                        <label for="volunteer">Volunteer</label>
                        <input id="institution" type="radio" value="40" name="utype">
                        <label for="institution">Institution/Organaisation</label>     
                     </div>
                   </div>
{{-------------------------------REGISTRATION PART OF VOLUNTEER BEGNING--------------------------------------}}
                                <div class="section">
                                    <label for="name" class="field prepend-icon">
                                    <input type="text" name="name" id="name" placeholder="Your Name">
                                    <label for="name" class="field-icon">
                                    <i class="fa fa-user"></i>
                                    </label>
                                    </label>
                                </div>

                                <div class="section">
                                    <label for="username" class="field prepend-icon">
                                    <input type="text" name="emailid" id="Emailid" placeholder="Email id">
                                    <label for="emailid" class="field-icon">
                                    <i class="fa fa-user"></i>
                                    </label>
                                    </label>
                               </div>
                              
                               <div class="section">
                                    <label for="date_of_birth" class="field prepend-icon">
                                    <input type="text" name="dob" id="dob" placeholder="Date of Birth">
                                    <label for="dob" class="field-icon">
                                    <i class="fa fa-lock"></i>
                                    </label>
                                    </label>
                               </div>

                               <div class="section">
                                  <label for="country" class="field prepend-icon">
                                  <select path="country" id="country" name="country" class="form-control input-sm">
                                        <option value="1">Select Country</option>
                                        <option value="2">INDIA</option>
                                        <option value="3">SREELANKA</option>
                                        <option value="4">COSTARICA</option>
                                        
                                  </select>
                                  <label for="country" class="field-icon">
                                  <i class="fa fa-user"></i>
                                  </label>
                                  </label>
                               </div>


                               <div class="section">
                                  <label for="unique identification" class="field prepend-icon">
                                     <select  id="uidtype" name="uidtype" class="form-control input-sm">
                                        <option value="0">UNIQUE IDENTIFICATION</option>
                                        <option value="ADARNUMBER">ADAR NUMBER</option>
                                        <option value="VOTERSID">VOTERS ID</option>
                                        <option value="PASSPORTNUMBER">PASSPORT NUMBER</option>
                                     </select>
                                     <label for="name" class="field-icon">
                                     <i class="fa fa-user"></i>
                                     </label>
                                     </label>
                               </div>

                               <div class="section">
                                     <label for="u_no" class="field prepend-icon">
                                     <input type="text" name="unique_identification" id="unique_identification" placeholder="UNIQUE IDENTIFICATION NUMBER">
                                     <label for="dob" class="field-icon">
                                     <i class="fa fa-lock"></i>
                                     </label>
                                     </label>
                               </div>


                                <div class="section">
                                    <label for="resume" class="">
                                    <input type="file" name="resume" id="resume" placeholder="upload resume">
                                    <label for="resume" class="field-icon">
                                    <i class="fa fa-lock"></i>
                                    </label>
                                    </label>
                               </div>


                               <div class="checkbox check_1">
                                    <input id="check1" type="checkbox" name="check" value="1">
                                    <label for="check1">I agree to the Terms of Service and Privacy Policy</label>
                               </div>

                               <div class="section">
                               <div class="submit"><input type="submit" onclick="myFunction()" value="Register"></div>
                               </div>
        </form>
{{-- ---------------------------- END OF VOLUNTERR REGISTRATION FORM------------------------------------}}
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
            <li class="current_page"><a href="{{url('/welcome')}}">Home</a></li>
            <li><a href="{{url('/about')}}">About</a></li>
            <li><a href="{{url('classified')}}">Classifieds</a></li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">News<span class="caret"></span></a>
              <ul class="dropdown-menu drop_menu" role="menu">
                <li><a href="{{url('news')}}">News</a></li>
              <!--  <li><a href="shortcodes.html">Shortcodes</a></li>
                <li><a href="faq.html">Faq</a></li>
                <li><a href="career.html">Career</a></li>
                <li><a href="terms.html">Terms of use</a></li>
                <li><a href="sitemap.html">Sitemap</a></li>
                <li><a href="testimonials.html">Testimonials</a></li>
                <li><a href="grids.html">Grids</a></li>-->
              </ul>
            </li>
          <!--  <li><a href="{{url('article')}}">Articles</a></li>
            <li><a href="{{url('forum')}}">Forum</a></li>
            <li><a href="{{url('videos')}}">Video</a></li>
         <!--   <li><a href="{{url('advertise')}}">Advertising</a></li>-->
            <li><a href="{{url('contact')}}">Contacts</a></li>
         <!--    <li><a href="{{url('admin_home')}}">ADMIN</a></li> -->
            <li><a href="{{url('member_home')}}">member</a></li>
            <li><a href="{{url('volunteer_home')}}">Volunteer</a></li>
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
    Its easier to lead men to combat, stirring up their passion, than to restrain them and direct them toward the patient labors of peace."

- Andre Gide 
  </marquee>     
</div>