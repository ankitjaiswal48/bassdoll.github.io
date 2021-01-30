<?php 
/**
/*Template Name: Home 
*
*Displays Only Home Page
*
*@package Only Home Template
*@subpackage dolls
*@since dolls 1.0
*/
get_header();


?>

<style>
   html,body
{
    width: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden; 
}

</style>

	<!---------------------------------------------Inner Part Start--------------------------------------------------------------------->
	<div class="container_fluid">
		<div class="container">
			<div class="row mar">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<!--<p style="font-size: 17px;"><b><span>Sex Doll Criteria: </span>-->
					<div class="tab">
						<button class="tablinks" onclick="openCity(event, '')"><strong>Sex Doll Criteria: </strong></button>
  <button class="tablinks" onclick="openCity(event, 'Mature')" id="defaultOpen"><?php echo $redux_demo['tab1']; ?> /</button>
  <button class="tablinks" onclick="openCity(event, 'Milf')"><?php echo $redux_demo['tab2']; ?> /</button>
  <button class="tablinks" onclick="openCity(event, 'White')"><?php echo $redux_demo['tab3']; ?> /</button>
  <button class="tablinks" onclick="openCity(event, 'Ebony')"><?php echo $redux_demo['tab4']; ?> /</button>
  <button class="tablinks" onclick="openCity(event, 'Latina')"><?php echo $redux_demo['tab5']; ?> /</button>
  <button class="tablinks" onclick="openCity(event, 'Bbw')"><?php echo $redux_demo['tab6']; ?></button>
</div>
</span>
</b>
</p>

<div id="Mature" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3><?php echo $redux_demo['tab1']; ?></h3>
  <p><?php echo $redux_demo['tab1a']; ?></p>
</div>

<div id="Milf" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3><?php echo $redux_demo['tab2']; ?></h3>
  <p><?php echo $redux_demo['tab2a']; ?></p> 
</div>

<div id="White" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3><?php echo $redux_demo['tab3']; ?></h3>
  <p><?php echo $redux_demo['tab3a']; ?></p>
</div>
<div id="Ebony" class="tabcontent">
	<span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
	<h3><?php echo $redux_demo['tab4']; ?></h3>
	<p> <?php echo $redux_demo['tab4a']; ?></p>
</div>
<div id="Latina" class="tabcontent">
	<span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
	<h3><?php echo $redux_demo['tab5']; ?></h3>
	<p><?php echo $redux_demo['tab5a']; ?></p>
</div>	
<div id="Bbw" class="tabcontent">
	<span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
	<h3><?php echo $redux_demo['tab6']; ?></h3>
    <p><?php echo $redux_demo['tab6a']; ?></p>
</div>				
				</div>
			</div>
		</div>
	</div>



<div class="container_fluid">
	<div class="container">
		<div class="row">
			
			<div class="col-xs-12 col-sm-12 col-lg-12 col-xs-12">
				<h2>FAVOURITES</h2>
				<p>Shop Criteria Only available for Admin</p>
				<section>

  <!-- Section: Filters -->
  <section>

    
    <section class="col-xs-12 col-lg-12 col-md-12 col-sm-12" style="width: 100%; height: auto; border: 1px solid #000; padding: 15px;">
    	<div class="">
     <table cellspacing="2" cellpadding="2" style="width: 90%; height: auto; ">
     	<tr>
      <td><h6 class="font-weight-bold ">Shop</h6></td>

     <td>
        &nbsp;&nbsp;&nbsp;<input type="button" class="form-check-input filled-in" id="new" placeholder="Shop 1" value="Shop 1" style="margin:auto; float:left;">
        <!--<label class="form-check-label small text-uppercase card-link-secondary" for="new" >Shop 1</label>-->
     </td>
     <td>
       &nbsp;&nbsp;&nbsp; <input type="button" class="form-check-input filled-in" id="used" placeholder="Shop 2" value="Shop 2" style="margin:auto; float:left;">
        <!--<label class="form-check-label small text-uppercase card-link-secondary" for="used">Shop 2</label>-->
     </td>
      <td>
        &nbsp;&nbsp;&nbsp;<input type="button" class="form-check-input filled-in" id="collectible" placeholder="Shop 3" value="Shop 3" style="margin:auto; float:left;">
        <!--<label class="form-check-label small text-uppercase card-link-secondary" for="collectible">Shop 3</label>-->
      </td>
      <td>
        &nbsp;&nbsp;&nbsp;<input type="button" class="form-check-input filled-in" id="renewed" placeholder="Shop 4" value="Shop 4" style="margin:auto; float:left;">
       <!-- <label class="form-check-label small text-uppercase card-link-secondary" for="renewed">Shop 4</label>-->
     </td>
      <td>
        &nbsp;&nbsp;&nbsp;<input type="button" class="form-check-input filled-in" id="renewed" placeholder="Shop 4" value="Shop 4" style="margin:auto; float:left;">
       <!-- <label class="form-check-label small text-uppercase card-link-secondary" for="renewed">Shop 4</label>-->
     </td>
      <td>
        &nbsp;&nbsp;&nbsp;<input type="button" class="form-check-input filled-in" id="renewed" placeholder="Shop 4" value="Shop 4" style="margin:auto; float:left;">
       <!-- <label class="form-check-label small text-uppercase card-link-secondary" for="renewed">Shop 4</label>-->
     </td>
 </tr>
</table>
</div>
    </section>
    <!-- Section: Condition -->

    <!-- Section: Average -->
    
   

    
</section>
   
  <!-- Section: Filters -->

</section>
<!-- Section: Sidebar -->
			</div>
			
		</div>
		<div class="row" style="margin-top: 20px;">
<!--<br>
				<div class="col-md-2 col-lg-2 col-sm-4 col-xs-4">
				<h6>&nbsp;&nbsp;&nbsp;Gender</h6> 
				</div>
<div class="col-md-1 col-lg-1 col-sm-3 col-xs-3">
					<input type="radio" class="form-check-input filled-in" id="male" name="gender" value="Male">
				<label class="form-check-label small text-uppercase card-link-secondary" for="male">Male</label>
			</div>
			<div class="col-md-1 col-lg-1 col-sm-3 col-xs-3">
				<input type="radio" class="form-check-input filled-in" id="female" name="gender"  value="Female">
				<label class="form-check-label small text-uppercase card-link-secondary" for="female">Female</label>
</div>-->
			
<div class="">
	
	
	
	<form>
		<fieldset class="form__options">
			<div class="row">
			<div class="col-md-2 col-lg-2 col-sm-4 col-xs-4">
			<p class="form__answer" style="font-size: 16px;">&nbsp;&nbsp;Gender:-</p>
		</div>
		<div class="col-md-1 col-lg-1 col-sm-3 col-xs-3">
			<p class="form__answer"> 

				<input type="radio" name="match" id="match_1" value="male" checked="checked"> 
				<label for="match_1" style="margin-left: 15px; border: 1px solid #000; padding:5px; width:100px; height:45px!important;">
					
					Male
				</label> 
			</p>
			</div>
			<div class="col-md-2 col-lg-2 col-sm-4 col-xs-4">
			<p class="form__answer"> 
				<input type="radio" name="match" id="match_2" value="girl"> 
				<label for="match_2" style="margin-left: 115px; border: 1px solid #000; padding:5px; width:100px; height:45px!important;">
					
					Female
				</label> 
			</p>
			
			</div>
			
						
		</fieldset>
		
	</form>
</div>

</div>
<div class="row">
	<div class="col-lg-2">
		<p>Age:-</p>
	</div>
	<div class="checkbox-buttons-conta">
  <div class="col-lg-2">
  <input type="checkbox" id="CheckboxButton1" style="width:120px; height:45px!important; float: left;">
  <label for="CheckboxButton1" style="width:120px; height:45px!important; float: left;">Granny</label>
</div>
<div class="col-lg-2">
  <input type="checkbox" id="CheckboxButton2" style="width:120px; height:45px!important; float: left;">
  <label for="CheckboxButton2" style="width:120px; height:45px!important; float: left; margin-left: 125px; margin-top: -53px;">Mature</label>
</div>
<div class="col-lg-2">
  <input type="checkbox" id="CheckboxButton3" style="width:120px; height:45px!important; float: left;">
  <label for="CheckboxButton3" style="width:120px; height:45px!important;float: left; margin-left: 250px; margin-top: -53px;">Milf</label>
</div>
  <div class="col-lg-2">
  <input type="checkbox" id="CheckboxButton4" style="width:120px; height:45px!important; float: left;">
  <label for="CheckboxButton4" style="width:120px; height:45px!important; float: left; margin-left: 375px; margin-top: -53px;">Teen</label>
</div>
<div class="col-lg-2">
  <input type="checkbox" id="CheckboxButton5" style="width:120px; height:45px!important; float: left;">
  <label for="CheckboxButton5" style="width:120px; height:45px!important; float: left; margin-left: 500px; margin-top: -53px;">Teenager</label>
</div>
</div>
			</div>



			<div class="row">
	<div class="col-lg-2">
		<p>Ethniticy:-</p>
	</div>
	<div class="checkbox-buttons-conta">
  <div class="col-lg-2">
  <input type="checkbox" id="CheckboxButton6" style="width:120px; height:45px!important; float: left;">
  <label for="CheckboxButton6" style="width:120px; height:45px!important; float: left;">White</label>
</div>
<div class="col-lg-2">
  <input type="checkbox" id="CheckboxButton7" style="width:120px; height:45px!important; float: left;">
  <label for="CheckboxButton7" style="width:120px; height:45px!important; float: left; margin-left: 125px; margin-top: -53px;">ebony</label>
</div>
<div class="col-lg-2">
  <input type="checkbox" id="CheckboxButton8" style="width:120px; height:45px!important; float: left;">
  <label for="CheckboxButton8" style="width:120px; height:45px!important;float: left; margin-left: 250px; margin-top: -53px;">Latina</label>
</div>
  <div class="col-lg-2">
  <input type="checkbox" id="CheckboxButton9" style="width:120px; height:45px!important; float: left;">
  <label for="CheckboxButton9" style="width:120px; height:45px!important; float: left; margin-left: 375px; margin-top: -53px;">Japanese</label>
</div>

			</div>
	</div>


		<div class="row">
	<div class="col-lg-2">
		<p>Body Type:-</p>
	</div>
	<div class="checkbox-buttons-conta">
  <div class="col-lg-2">
  <input type="checkbox" id="CheckboxButton10" style="width:120px; height:45px!important; float: left;">
  <label for="CheckboxButton10" style="width:120px; height:45px!important; float: left;">Skinny</label>
</div>
<div class="col-lg-2">
  <input type="checkbox" id="CheckboxButton11" style="width:120px; height:45px!important; float: left;">
  <label for="CheckboxButton11" style="width:120px; height:45px!important; float: left; margin-left: 125px; margin-top: -53px;">BBW</label>
</div>
<div class="col-lg-2">
  <input type="checkbox" id="CheckboxButton12" style="width:120px; height:45px!important; float: left;">
  <label for="CheckboxButton12" style="width:120px; height:45px!important;float: left; margin-left: 250px; margin-top: -53px;">Will be</label>
</div>
  <div class="col-lg-2">
  <input type="checkbox" id="CheckboxButton13" style="width:120px; height:45px!important; float: left;">
  <label for="CheckboxButton13" style="width:120px; height:45px!important; float: left; margin-left: 375px; margin-top: -53px;">Will be</label>
</div>

			</div>
	</div>
</div>
</div>

<div class="container_fluid">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
				<br>
			<h3 align="center">Best Match</h3>
			<br>
		</div>
		</div>
		<div class="row" style="border:1px solid #000;">
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
         	<p align="center">Name</p>
         <img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
         <p align="center">Price</p>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
         	<p align="center">Name</p>
         	<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
         	<p align="center">Price</p>
         </div>

         <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>
			<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
			<p align="center"><a href="#">Load More..</a></p>
		    </div>
		</div>
      <h3 align="center" style="padding: 15px">Other Choices to your Criterias </h3>
		<div class="row" style="border:1px solid #000;">
			<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<h3 align="center">1. Criteria is different</h3>
		    </div>
			 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
         	<p align="center">Name</p>
         <img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
         <p align="center">Price</p>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
         	<p align="center">Name</p>
         	<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
         	<p align="center">Price</p>
         </div>


         <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>
          <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
           <h3 align="center">2.Criterias are Different</h3>
           </div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>



			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
         	<p align="center">Name</p>
         <img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
         <p align="center">Price</p>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
         	<p align="center">Name</p>
         	<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
         	<p align="center">Price</p>
         </div>


         <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<p align="center">Name</p>
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width:100%; height: auto;">
				<p align="center">Price</p>
			</div>
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
			<h3 align="center">3.Criterias are Different... and so on, until showing every models </h3>
			<p align="center"><a href="#" style="text-align: center;">Load More..</a></p>
		</div>
			
		</div>
    </div>
</div>

<?php get_footer(); ?>