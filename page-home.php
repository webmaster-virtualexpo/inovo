<?php 
/* Template Name: 2) Page deux Salon simultané
Le template de page permettant d'afficher les salons.
Appel des custom fields des custom post afin de permettre un fonctionnement compartimenter et d'ainsi crée des pages "puzzle". De reutiliser des partie dans plusieurs page
*/ 


?>
<?php get_header(); ?>

<?php get_template_part( 'nav', 'home' ); ?>



    <!-- IMAGE COVER -->
<?php  
	$args = array(
		'post_type' => 'cover', 
		'posts_per_page' => 1 );

	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post(); ?>


<section id="home-tradeshow" class="parallax" style="background-image: url('http://www.archiexpo.fr/images_ae/2ai/cover_inovo-awards.jpg');" style="padding-top: 10rem; ">
    <div class="container">
		<img class="img-responsive center-block" src="http://wordpress.virtual-expo.com/wp-content/themes/twentyfourteen-child/img/i-novo-awards.svg" alt="I-Novo Awards 2015" style="    padding-top: 21vh;
    padding-bottom: 10vh;" />
			<div class="pull-left text-left">
				<p style="color: #fff;"><?php the_field('description-cta-home');?></p>
				
				<a href="<?php the_field('cta-lien');?>" style="background-color: #ECECEC;" class="btn-effect submit-icon"> 
					<?php the_field('cta-home');?>
				</a>
			</div>
			<div class="pull-right text-right">
				<p style="color: #fff;"><?php the_field('description-cta-home2');?></p>
				<p>
					<a href="<?php the_field('cta-lien2');?>" style="background-color: #ECECEC;" class="btn-effect submit-icon" >
						   <?php the_field('cta-home2');?>
					</a>
				</p>					
			</div>
		</div>
 </section>
<?php endwhile;?>


<?php  
	$args = array('post_type' => 'presentation', 'posts_per_page' => 1 );
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
	$args = array('post_type' => 'about', 'posts_per_page' => 1 );
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
    
    
<!------------------------
/// HOW IT WORKS ///
------------------------->  
 <?php  
                $args = array('post_type' => 'how', 'posts_per_page' => 1 );
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

    
<!---ELIGILIBITY--->
<section class="background-color: #ecf0f1">
    <article class="testimonial-item sec-title text-center">
        <span class="logo_awards"> </span>
        <div class="center white">
            <?php the_field('eligibility');?>  
        </div>
    </article>
</section>
<?php endwhile;?>




</main>
<?php get_footer(); ?>

