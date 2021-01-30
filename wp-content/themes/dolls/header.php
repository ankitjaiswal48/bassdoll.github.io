<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<link href="http://localhost/bassdoll\wp-content\themes\dolls/css/default.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="http://localhost/bassdoll\wp-content\themes\dolls/bootstrap/bootstrap.css">
<link rel="stylesheet" href="http://localhost/bassdoll\wp-content\themes\dolls/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
    .back {background-image: url();
        background-size: 100% 100%;}
        #zjscroll{width: 99%!important;}
    
    .navbar-expand-md .navbar-nav li {
    padding-right: 60px;
    padding-left: 30px;
    font-size: 23px;
    font-weight: 400;
     line-height:60px;
}
    .navbar-expand-md .navbar-nav li a{
        color:black;
        text-decoration: none;
    }
    .bg-light{
        background-color:none!important;
    }
    .navbar-expand-md .navbar-nav li:hover{
        background-color:aliceblue;
    }
</style>
</head>
<body>
	<!------------------Header Part Start---------------------------->
	<div class="container_fluid">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-12 col-md-12 col-xs-12">
					<center><a href="<?= site_url(); ?>"><img src="<?php echo of_get_option('ratina_logo'); ?>" class="img-responsive" style="height: 127px;"></a></center>
				</div>
			</div>
		</div>
	</div>
  

    
        <nav class="navbar navbar-expand-md navbar-light" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>
 
    	<h1>Hello</h1>