<?php 
/* Template Name: page emo  
Le template de page permettant d'afficher les salons.
Appel des custom fields des custom post afin de permettre un fonctionnement compartimenter et d'ainsi crée des pages "puzzle". De reutiliser des partie dans plusieurs page
*/ 
?>


<?php get_header(); ?>

<header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
  <div class="container">        
	  <a href="http://inovo.directindustry.com/#home">
          <img src="http://wordpress.virtual-expo.com/wp-content/themes/twentyfourteen-child/img/directindustry.svg" alt="directindustry" style="margin-top:8px" class="pull-left">
        </a> 
    <div class="navbar-header pull-right">

        
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <?php wp_nav_menu( array( ) ); ?>
        </nav>
 
    </div>

  </div>
    
</header>




    <!-- IMAGE COVER TRADESHOW -->

    
<?php  
	$args = array('post_type' => 'candidature', 'category_name' => 'emo','posts_per_page' => 1 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );

?> 

<section 
		 class="headercovercandidature" 
		 id="home" 
		 style="background: url(<?php echo $src[0]; ?> )  no-repeat scroll 0% 0% / cover  transparent !important; height: 850px; ;
				background-attachment: fixed !important;">

	
    <div class="container text-center">
        <div class="row">
                <img src="http://wordpress.virtual-expo.com/wp-content/themes/twentyfourteen-child/img/i-novo-awards.svg" alt="I-Novo Awards 2015" />

        </div>
        <div class="row"  style="margin-bottom: 46px; color: #fff;">
             <h1 style="color: #fff; font-size: 3rem;"><?php the_title();?></h1>
			<p><?php the_excerpt();?></p>
         </div>
    <div>
		<a href="#submission" class="btn btn-blue btn-effect submit-icon" style=" background-color: <?php the_field('couleur', get_option('page_for_posts')); ?>;">
                  <?php the_field('cta-candidature');?> 
              </a>
		<p>
			<a href="<?php the_field('url-cta');?> " class="btn btn-effect" >
			</a> 
			<h1><?php the_field('portail');?></h1>
		</p>
    
    </div>
</div>
 </section>

<?php endwhile;?>

   <!--
/// Winners///
--> 
<section  id="winners"> 

<?php  
        $args = array(
      'category_name' => 'emo',
      'post_type' => 'winner',
      'posts_per_page' => 1 );


        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); ?>   
     <div class="container" id="submission">   
        <div class="row">
                    <div class="text-center">
                      <h2 class="wow animated bounceInLeft"><?php the_title(); ?></h2>
                     </div>            
                <p><?php the_content(); ?></p>


          </div>
        </div>
<?php endwhile;?>
</section>  




    <!--
/// PRESENTATION ///
-->  
<?php  
	$args = array(
		'post_type' => 'presentation',
		'posts_per_page' => 1 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post(); ?>    
	
<section id="presentation" style="background-color: #2e2e2e;">
  <div class="container">
      <div class="col-md-10 col-md-offset-1 wow animated fadeInRight">
        <div class="welcome-block">
          <h3 style="color: #fff;"><?php the_title(); ?></h3>
        <div class="col-md-3">
            
            <img src="http://wordpress.virtual-expo.com/wp-content/themes/twentyfourteen-child/img/i-novo-awards.svg" style="height: 230px;
width: 100%;"></div> 
            <div class="col-md-9"> <p><?php the_content(); ?></p></div>
        </div>
      </div>
  </div>
    <?php endwhile;?>
</section>
   

<!--
/// ABOUT ///
-->  

<article id="about"  class="text-justify"></br></br>
<?php  
	$args = array(
		'post_type' => 'about',
		'posts_per_page' => 1 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post(); ?>    
	
	<div class="container">
      <div class="row">
        <div class="sec-title text-center">
          <h2 class="wow animated bounceInLeft"><?php the_title(); ?></h2>
          <p style="text-align:center" class="wow animated bounceInRight">
            <?php the_content(); ?>
			  <br />
          </p>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 text-center wow animated zoomIn">
          <div class="service-item">
            <div class="service-icon rose"> 
						<img src="http://wordpress.virtual-expo.com/wp-content/themes/twentyfourteen-child/img/i-novo-design-awards-prisme.svg">   
			  </div>
            <h3>i-NOVO Design Award</h3>
            	<p style="text-align:justify">
				  <?php the_field('aboutDesignAward');?>      
			  	</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s"  >
          <div class="service-item">
            <div class="service-icon rose"> 
						<img src="http://wordpress.virtual-expo.com/wp-content/themes/twentyfourteen-child/img/i-novo-eco-awards-prisme.svg">   
    
			  </div>
            <h3>i-NOVO Eco Award</h3>
            	<p style="text-align:justify">
				  <?php the_field('aboutEcoAward');?>      
			  	</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">
          <div class="service-item">
            <div class="service-icon rose">
						<img src="http://wordpress.virtual-expo.com/wp-content/themes/twentyfourteen-child/img/i-novo-tech-awards_prisme.svg">   
			  </div>            
              <h3>i-NOVO Tech Award</h3>
            	<p style="text-align:justify">
				  <?php the_field('aboutTechAward');?>      
			  </p>
          </div>
        </div>
      </div>
    </div>
<?php endwhile;?>
</article>
    
    
<!--
/// HOW IT WORKS ///
-->  
 <?php  
                $args = array(
					'post_type' => 'how', 
					'posts_per_page' => 1 );

                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); ?>    

<section id="howitworks" class="text-justify">
    <div class="container">
                    <div class="sec-title text-center">
                      <h2 class="wow animated bounceInLeft"><?php the_title(); ?></h2>
                     </div>

                <div class="row">
                     <div class="col-md-5">  
                        <?php the_content(); ?> </br>
                    </div>
                    <div class="col-md-6 col-md-offset-1">  
                        <?php the_field('table-of-benefits');?>  
                    </div>                    
                </div>
                <div class="col-md-12">  
                    <?php the_field('table-of-benefits-part-2');?>  
                </div>
    </div>
</section>

    
<!--ELIGILIBITY-->
<section class="background-color: #ecf0f1">
    <article class="testimonial-item sec-title text-center">
        <span class="logo_awards"> </span>
        <div class="center white">
            <?php the_field('eligibility');?>  
        </div>
    </article>
</section>
<?php endwhile;?>

<!--
/// DATES///
--> 
<section  id="dates" 
         class="parallax" 
         style="background-image: url('http://wordpress.virtual-expo.com/wp-content/themes/twentyfourteen-child/img/cover.jpg');" >
    <?php  
        $args = array(
			'post_type' => 'dates',
			'category_name' => 'emo',
			'posts_per_page' => 1 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); ?>

           <?php get_template_part( 'dates' ); ?> 
           
    <?php endwhile;?>
</section>

<!--
/// SUBMIT///
--> 
<?php  
        $args = array(
			'category_name' => 'emo',
			'post_type' => 'submit',
			'posts_per_page' => 1 );


        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); ?>   
<section  id="submission"> 
     <div class="container">   
        <div class="row">
                    <div class="sec-title text-center">
                      <h2 class="wow animated bounceInLeft"><?php the_title(); ?></h2>
                     </div>            <div class="col-md-5">
                <p></br><?php the_content(); ?></p>
            </div>

            <div class="col-md-5 col-md-offset-1">
              <p></br>	<?php the_field('contact-form');?> </p>
            </div>
          </div>
        </div>
</section>  
<?php endwhile;?>


<!--
/// nominees///
--> 
<?php  
        $args = array(
			'category_name' => 'emo',
			'post_type' => 'nominees',
			'posts_per_page' => 1 );


        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); ?>   
<section  id="submission"> 
     <div class="container">   
        <div class="row">
                    <div class="sec-title text-center">
                      <h2 class="wow animated bounceInLeft"><?php the_title(); ?></h2>
                     </div>            <div class="col-md-5">
                <p></br><?php the_content(); ?></p>
            </div>

            <div class="col-md-5 col-md-offset-1">
              <p></br>	<?php the_field('contact-form');?> </p>
            </div>
          </div>
        </div>
</section>  
<?php endwhile;?>







<?php get_footer(); ?>

