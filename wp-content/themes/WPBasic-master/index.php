 <?php
 if(!empty($_POST['Cemail'])
	&& isset($_POST['submit1'])
){

  $my_post = array(
    'post_title' => wp_strip_all_tags($_POST['Cemail']),
    'post_status' => 'publish',
    'post_author' => get_current_user_id(),
    'post_type' => 'client'
  );

  $post_id = wp_insert_post( $my_post );

  if(isset($_POST['webDesign'])){
    $WebDesignString = wp_strip_all_tags($_POST['webDesign']);
  }
  else {
    $WebDesignString = "false";
  }
  if(isset($_POST['webDesign'])){
    $brandDesignString = wp_strip_all_tags($_POST['brandDesign']);
  }
  else {
    $brandDesignString = "false";
  }
  if(isset($_POST['webDesign'])){
    $adDesignString = wp_strip_all_tags($_POST['adDesign']);
  }
  else {
    $adDesignString = "false";
  }
  if(isset($_POST['webDesign'])){
    $socialMediaString = wp_strip_all_tags($_POST['socialMedia']);
  }
  else {
    $socialMediaString = "false";
  }
  if(isset($_POST['webDesign'])){
    $internetAdvertisementString = wp_strip_all_tags($_POST['internetAdvertisement']);
  }
  else {
    $internetAdvertisementString = "false";
  }
  if(isset($_POST['webDesign'])){
    $customEmailsString = wp_strip_all_tags($_POST['customEmails']);
  }
  else {
    $customEmailsString = "false";
  }

  update_field('field_592722f267494', wp_strip_all_tags($_POST['Cemail']), $post_id);
  update_field('field_5927230267495', wp_strip_all_tags($_POST['companyName']), $post_id);
  update_field('field_5927230f67496', wp_strip_all_tags($_POST['industryType']), $post_id);
  update_field('field_5927231767497', $WebDesignString, $post_id);
  update_field('field_5927233167498', $brandDesignString, $post_id);
  update_field('field_5927235c67499', $adDesignString, $post_id);
  update_field('field_592723686749a', $socialMediaString, $post_id);
  update_field('field_592723726749b', $internetAdvertisementString, $post_id);
  update_field('field_5927237e6749c', $customEmailsString, $post_id);
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
				<input type="button" class="btnSubmit submit1" name="next" value="submit">
        <div class="moduleBack">
      		<div class="module">
      			<h1>Almost Done!</h1>
      			<h2>Complete the form below so we know how to better help you</h2>
      			<div class="col-xs-12">
      				<input type="text" class="textInput" name="companyName" placeholder="Company Name" value="">
      			</div>
      			<div class="col-xs-12">
      				<input type="text" class="textInput" name="industryType" placeholder="Industry Type" value="">
      			</div>

      			<div class="col-sm-12">
      				<h2>What Services are you interest in:</h2>
      				<div class="col-sm-6">
      					<input id='one' type='checkbox' name="webDesign" value="" />
      					<label for='one'>
      						<span></span>
      						Web Design
      					</label>
      					<input id='two' type='checkbox' name="brandDesign" value="" />
      					<label for='two'>
      						<span></span>
      						Brand Design
      					</label>
      					<input id='three' type='checkbox' name="adDesign" value="" />
      					<label for='three'>
      						<span></span>
      						Advertisement Design
      					</label>

      				</div>
      				<div class="col-sm-6">
      					<input id='four' type='checkbox' name="socialMedia" value="" />
      					<label for='four'>
      						<span></span>
      						Social Media Managment
      					</label>
      					<input id='five' type='checkbox' name="internetAdvertisement" value="" />
      					<label for='five'>
      						<span></span>
      						Internet Advertisement
      					</label>
      					<input id='six' type='checkbox' name="customEmails" value="" />
      					<label for='six'>
      						<span></span>
      						Custom E-mails
      					</label>
      				</div>
      			</div>


      			<input type="submit" class="btnSubmit submit1" name="submit1" value="submit">

      		</div>
      	</div>


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


<script type="text/javascript">
  $('.submit1').on('click', function(){
    $('.moduleBack').addClass('show');
  });
</script>
