<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<body>
<!-- header-section-starts -->
<div class="header">
	  <header class="row">
        @include('volunteer_header')
    </header>
</div>
<!--<div class="about_banner">
	<!--<div class="container">
		<h2>Forum</h2>
		<span class="breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a> / <span>Forum</span></span>
	</div>
</div>-->
<div class="about_top">
 <div class="container">
	<div class="col-md-3 forum">
     <!--------------------------- viewving members-------------------->
	        <div class="fb-like-button social-item">
	  			<a href="{{url('volunteer_view_members')}}"> <div class="social-item-inner"> 
	  				<span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> 
	  				<span class="like-count">View</span> 
	  				<span class="like-text"> Members </span> 
	  			</div></a> 
	  		</div>

	  		<!--<div class="fb-like-button social-item">
	  			<a href="#" title="" target="_blank"> <div class="social-item-inner"> 
	  				<span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> 
	  				<span class="like-count">Upgrade to </span> 
	  				<span class="like-text"> Members </span> 
	  			</div></a> 
	  		</div>-->

	  	<!--------------------------- MEMBERS viewing LINK/upgrading link-------------------->
	  	<!-------------------------------Volunteers approval and viewving--->

	  		<div class="twitter-like-button  social-item ">
	  			 <a href="volunteer_view_volunteer" > <div class="social-item-inner">
	  				<span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	  				 <span class="like-count">View</span> 
	  				<span class="like-text">Volunteer </span> 
	  			</div> </a> 
	  	    </div>

	  	  <!--  <div class="twitter-like-button  social-item ">
	  			 <a href="admin_approve_volunteer"> <div class="social-item-inner">
	  				<span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	  				 <span class="like-count">Approve</span> 
	  				<span class="like-text">Volunteer </span> 
	  			</div> </a> 
	  	    </div>-->
	  	    <!---------------- volunteers approving and viewwing--------------------------->


	  	    <!-------- section of work----------------->
	  	    <div class="youtube-subscribers-button  social-item ">
				 <a href="volunteer_view_work" ><div class="social-item-inner">
					 <span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <span class="like-count">View</span> 
					 <span class="like-text"> Work </span>
			   </div> </a> 
	  		</div>

	  		<!--<div class="youtube-subscribers-button  social-item ">
				 <a href="admin_add_work"><div class="social-item-inner">
					 <span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <span class="like-count">Add New</span> 
					 <span class="like-text"> Work</span>
			   </div> </a> 
	  		</div>-->

	  		<!---------------------------- section works ends-------------------------------->

	  <!-------- create group------------------->
	  		<div class="linkedin-button social-item ">
			 	 <a href="volunteer_view_group"> <div class="social-item-inner">
			 		<span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> 
			 		<span class="like-count">View Groups</span> <span class="like-text"> Follower </span>
			 	</div> </a> 
	  		</div>

	  <!------------------ create group section ends--------------------->
	  <!------------------EMERGENCY MESSAGE------------------------------->
	  		<div class="dribble-button social-item ">
	 			 <a href="volunteer_emergency_message" title="" target="_blank"> <div class="social-item-inner">
	 				<span class=""></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="like-count"></span> 
	 				<span class="like-text">EMERGENCY MESSAGE </span>
	 			</div> </a> 
	  		</div>
	  	<!------------------------- EMERGENCY MESSAGE---------------------->
	  		<!-------<div class="gplus-like-button  social-item">
	 			 <a href="#" title="" target="_blank"> <div class="social-item-inner">
	 				<span class="fa fa-google-plus sc-icon"></span> <span class="like-count">120</span> 
	 				<span class="like-text"> Followers </span> 
	 			</div> </a>
	  	    </div>-------------->
	</div>
	<div class="col-md-9 column-15">
			<a href="about_volunteer">ABOUT</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="">FRIENDS</a>

<br><br>


<div class="table-users">
   
   
   <table cellspacing="2" border="2" cellpadding="2">
   	<tr><td colspan="4" height="50" width="1000" bgcolor="#20B2AA"><center><b>PROFILE DETAILS</b></center></td></tr>
      <tr bgcolor="cyan">
         <th width="500" height="30">CONTACT DETAILS</th>
         <th width="500"height="30">EDUCATIONAL DETAILS</th>
                 
      </tr>

      <tr>
         <td bgcolor="#FAFAD2" > 

	 
	   <p class="m_4">"ADD YOUR CONTACT DETAILS."</p>
		   <form class="contact" action="/create" method="post">

         <font color="black">
		   	<textarea value="ADDRESS" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">ADDRESS</textarea>
			  <input type="text" class="text" name="c_name" value="Pincode/Zipcode" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Pincode/Zipcode';}">
			  <input type="text" class="text" value="street" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'street';}">
			  <input type="text" class="text" value="Location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location';}">
			   <input type="text" class="text" value="Country" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Country';}">
			    <input type="text" class="text" value="Country" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Country';}">

			  
	          <div class="submit-wrap">
	          	<input type="submit" value="SUBMIT">
	          	<input type="reset" value="Clear">
	          </div>
	     </font>
		   </form>
      		
  </td>
          <td bgcolor="#FAFAD2">  

          <p class="m_4">"ADD YOUR EDUCATIONAL DETAILS."</p>
		   <form class="contact" action="/create" method="post">

         <font color="black">
		   	<textarea value="Description" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Description</textarea>
			  <input type="text" class="text" name="c_name" value="Type of Course" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type of Course';}">
			  <input type="text" class="text" value="Specialization" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Specialization';}">
			  <input type="text" class="text" value="Year of Passing" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Year of Passing';}">
			   
			    <input type="text" class="text" value="Name of Institution" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name of Institution';}">
			    <input type="text" class="text" value="If job any" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'If job any';}">
			    
			    

			  
	          <div class="submit-wrap">
	          	<input type="submit" value="SUBMIT">
	          	<input type="reset" value="Clear">
	          </div>
	     </font>
		   </form>
</td>
         
      </tr>

     
   </table>
</div>
</div>
		

	   	 <div class="clearfix"> </div>
	   </div>

	  
	   	 <div class="clearfix"> </div>
	   </div>
	</div>		
    <div class="clearfix"> </div>
 </div>
</div>
@include('footer')
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