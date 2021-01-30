<?php 
/**
/*Template Name: Shops 
*
*Displays Only Shops Page
*
*@package Only Shops Template
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
    
 .woocommerce.post-type-archive .module-small-shop .container {
      display: table;
     position:absolute;
}
    .woocommerce.post-type-archive .module-small-shop .container .shop-with-sidebar {
display: table-footer-group;
}
    ul.products li.product:nth-child(n){
width: 30%!important;
float: left!important;
clear: both;
        
       
}

ul.products li.product:nth-child(2n) {
clear: none;
float: left;
}

ul.products li.product:nth-child(3n) {
clear: none;
float: left;
}     
</style>
<div class="container_fluid">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-12 col-md-12 col-xs-12">
				<h2 align="center">Shops</h2>
			</div>
		</div>
		<div class="row rborder">
			<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
				<a href="#" style="color: #000; text-decoration: none;">
				
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width: 100%; height: auto;">
				<p align="center">Name</p>
			    </a>
			</div>

			<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
				<a href="#" style="color: #000; text-decoration: none;">
				
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width: 100%; height: auto;">
				<p align="center">Name</p>
			    </a>
			</div>

			<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
				<a href="#" style="color: #000; text-decoration: none;">
				
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width: 100%; height: auto;">
				<p align="center">Name</p>
			    </a>
			</div>

			<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
				<a href="#" style="color: #000; text-decoration: none;">
				
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width: 100%; height: auto;">
				<p align="center">Name</p>
			    </a>
			</div>

			<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
				<a href="#" style="color: #000; text-decoration: none;">
				
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width: 100%; height: auto;">
				<p align="center">Name</p>
			    </a>
			</div>

			<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
				<a href="#" style="color: #000; text-decoration: none;">
				
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width: 100%; height: auto;">
				<p align="center">Name</p>
			    </a>
			</div>

			<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
				<a href="#" style="color: #000; text-decoration: none;">
				
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width: 100%; height: auto;">
				<p align="center">Name</p>
			    </a>
			</div>
			<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
				<a href="#" style="color: #000; text-decoration: none;">
				
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width: 100%; height: auto;">
				<p align="center">Name</p>
			    </a>
			</div>
			<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
				<a href="#" style="color: #000; text-decoration: none;">
				
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width: 100%; height: auto;">
				<p align="center">Name</p>
			    </a>
			</div>
			<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
				<a href="#" style="color: #000; text-decoration: none;">
				
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width: 100%; height: auto;">
				<p align="center">Name</p>
			    </a>
			</div>
			<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
				<a href="#" style="color: #000; text-decoration: none;">
				
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width: 100%; height: auto;">
				<p align="center">Name</p>
			    </a>
			</div>

			<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
				<a href="#" style="color: #000; text-decoration: none;">
				
				<img src="http://localhost/dolls\wp-content\themes\dolls/image/Rainbow-Rose.jpg" class="img-responsive" style="width: 100%; height: auto;">
				<p align="center">Name</p>
			    </a>
			</div>

		</div>
	</div>
</div>


<?php woocommerce_content(); ?>

<?php echo do_shortcode( '[products]' ); ?>

<div class="clearfix"></div>

<?php get_footer(); ?>