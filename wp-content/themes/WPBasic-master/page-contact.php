<?php
if(!empty($_POST['Cemail'])
 && isset($_POST['submit1'])
){

 $my_post = array(
   'post_title' => wp_strip_all_tags($_POST['Cemail']),
   'post_status' => 'publish',
   'post_author' => get_current_user_id(),
   'post_type' => 'email'
 );

 $post_id = wp_insert_post( $my_post );

update_field('field_5924c30eb4bf6', wp_strip_all_tags($_POST['Cemail']), $post_id);



}
?>


<?php get_header(); ?>
<?php
$homes = New WP_query ([
'post_type'=> 'home',
'posts_per_page'=>20
]);
?>
<?php

$categories = get_categories( array(
'orderby' => 'name',
'parent'  => 0
) );
?>

<?php if(have_posts()): while (have_posts()) : the_post(); ?>


<?php endwhile; endif; ?>
<div class="thanks">
  We'll contact you soon, Thank You!
</div>
<div class="row">
 <div class="col-sm-6 left">
   <div class="logo">
     <h1>The Ramirez Agency</h1>
     <h4>Design + Marketing</h4>
   </div>
   <div class="estimate">
     <h2>Free Estimate</h2>
     <form class="" id="contactForm" action="" method="post">
       <input type="text" class="textInput" name="Cemail" placeholder="E-mail" value="">
       <input type="submit" class="btnSubmit submit1" name="submit1" value="submit">
     </form>

   </div>
 </div>
 <div class="col-sm-6 left">
   <div class="temp">
     <div class="tempTop" id="webDesign">


<div>
 <?php if ($homes->have_posts()) : while ($homes->have_posts()) : $homes->the_post(); ?>
  <?php foreach ( $categories as $category ) { ?>

   <img src="<?php the_field('webimg'); ?>" alt="">

 <?php } ?>
<?php endwhile; else: ?>
 <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>

</div>

     </div>
     <div class="tempBottom">
       Web Design
     </div>
   </div>
   <div class="temp">
     <div class="tempTop" id="socialMedia">
       <div class="mediaContain">
         <i class="fa fa-google" aria-hidden="true"></i>
         <i class="fa fa-instagram" aria-hidden="true"></i>
         <i class="fa fa-facebook" aria-hidden="true"></i> <br>
         <i class="fa fa-yelp" aria-hidden="true"></i>
         <i class="fa fa-youtube-play" aria-hidden="true"></i>
         <i class="fa fa-twitter" aria-hidden="true"></i>
       </div>



     </div>
     <div class="tempBottom">
       Social Media Marketing
     </div>
   </div>
   <div class="temp">
     <div  id="strategy" class="tempTop">
       <i class="fa fa-pencil" aria-hidden="true"></i>
     </div>
     <div class="tempBottom">
       Design Strategies
     </div>
   </div>
 </div>
</div>



<?php get_footer(); ?>
