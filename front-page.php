<?php 
 get_header();

 ?>

 <div id="hero">

<div class="hero-text">
 <h2><?php the_field('hero_headline'); ?></h2>
</div>

 <?php

 $hero = get_field('hero_image');

 if ( $hero ): ?>

<style>
		#hero {
			background-image: url(<?php echo $hero; ?>);
		}
</style>

<?php endif; ?>



    
</div>



</div>



<div class="cta-null">
<div class="cta-text">
    <h2>Lorem ipsum dolor</h2>
    <h3>Lorem ipsum dolor sit amet, consectetur</h3>
  <div class="cta-button">
  <a href="https://twitter.com/home"><button type="button" class="btn btn-primary twitter"><svg xmlns="http://www.w3.org/2000/svg" width="94.877" height="77.104" viewBox="0 0 94.877 77.104">
  <path id="Twitter" d="M98.451,19.453a38.73,38.73,0,0,1-11.18,3.064,19.5,19.5,0,0,0,8.559-10.77A38.965,38.965,0,0,1,83.47,16.474,19.481,19.481,0,0,0,50.3,34.227,55.268,55.268,0,0,1,10.18,13.889,19.49,19.49,0,0,0,16.2,39.878a19.41,19.41,0,0,1-8.817-2.436c0,.081,0,.164,0,.247A19.481,19.481,0,0,0,23,56.774a19.571,19.571,0,0,1-5.129.682,19.286,19.286,0,0,1-3.663-.35A19.486,19.486,0,0,0,32.392,70.624a39.277,39.277,0,0,1-28.818,8.06A55.082,55.082,0,0,0,33.413,87.43c35.805,0,55.382-29.66,55.382-55.383q0-1.265-.054-2.521A39.425,39.425,0,0,0,98.451,19.453Z" transform="translate(-3.574 -10.326)" fill="#fff"/>
</svg>
Tweet</button></a>

    <button type="button" class="btn btn-primary post facebook"> <svg xmlns="http://www.w3.org/2000/svg" width="39.374" height="84.737" viewBox="0 0 39.374 84.737">
  <path id="Facebook" d="M57.356,33.534H43.947V24.739c0-3.3,2.189-4.073,3.731-4.073H57.14V6.147L44.108,6.1c-14.467,0-17.759,10.829-17.759,17.759v9.679H17.982V48.5h8.367V90.833h17.6V48.5H55.821Z" transform="translate(-17.982 -6.096)" fill="#fff"/>
</svg>
Post</button>

    <button type="button" class="btn btn-danger play-now"><svg xmlns="http://www.w3.org/2000/svg" width="91.616" height="95.969" viewBox="0 0 91.616 95.969">
  <path id="Path_219" data-name="Path 219" d="M479.734,384.87a2.048,2.048,0,0,1-.889-.2,2.094,2.094,0,0,1-1.184-1.89c0-1.275,0-2.516,0-3.732,0-2.734-.005-5.347.006-7.958.007-1.651-.3-2.13-.433-2.26s-.56-.393-2.014-.339c-6.366.235-11.512-1.913-15.3-6.39a17.119,17.119,0,0,1-4.218-11.23l-.013-3.063c-.059-13.506-.118-27.472.011-41.213a17.674,17.674,0,0,1,17.782-17.658c20.793-.044,39-.043,55.644,0,10.479.028,18.092,7.762,18.1,18.39.013,14.737.013,29.1,0,42.686-.011,10.678-7.684,18.439-18.244,18.453h-.654c-9.1.012-18.518.025-27.779-.019a3.689,3.689,0,0,0-2.779,1.078c-3.768,3.445-7.638,6.895-11.38,10.23q-1.727,1.539-3.452,3.079c-.37.331-.745.633-1.179.984-.216.175-.453.366-.719.585A2.059,2.059,0,0,1,479.734,384.87Zm2.073-2.093h0Z" transform="translate(-455.624 -288.9)" fill="#fff"/>
</svg>
Play Now</button>

  </div>

</div>
</div>


<?php 

$images = get_field('image_gallery');
if( $images ):
?>

<div class="slider-area">

    <div class="slider-text">
    <h2>Check out the Different Version of Oricale</h2>
    </div>

    <div class="your-class">
        <div>First </div>
        <div>Second </div>
        <div>It works!</div>
        <div>WOW!</div>
    </div>

  <div class="responsive">
    <?php foreach($images as $image_ID): ?>
      <div class="image-slide">
        <?= wp_get_attachment_image($image_ID, "thumbnail") ?>
      </div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

    



</div>


<div class="faq-area">

<?php if( have_rows('faq-repeater') ): 
  $faq_count = 0; ?>
  
<div class="faq-text">
    <h1>FAQ</h1>



<div class="accordion" id="accordionExample">
<?php while( have_rows('faq-repeater') ): the_row(); 
 $faq_count++;
        $question = get_sub_field('question');
        $answer = get_sub_field('answer');
        ?>
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading<?php echo $faq_count ?>">
      <button class="accordion-button <?php if ($faq_count!=1) { echo'collapsed'; } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $faq_count ?>" aria-expanded="<?php if ($faq_count==1) {echo 'true';} else {echo 'false';} ?>" aria-controls="collapse<?php echo $faq_count ?>">
        QUESTION: <?php echo $question ?>
      </button>
    </h2>
    <div id="collapse<?php echo $faq_count ?>" class="accordion-collapse collapse <?php if ($faq_count==1) { echo 'show'; } ?>" aria-labelledby="heading<?php echo $faq_count ?>" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        ANSWER: <?php echo $answer ?>
      </div>
    </div>
  </div>

  <?php endwhile ?>

<div class="hashtag">
  <h2>#WORLDTORISE</h2>
</div>



</div>
<?php endif ?>



</div>




<?php 

get_footer();
?>