<?php
get_header();

while (have_posts()) :
  the_post();
?>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h1><?php the_title(); ?></h1>
      <?php if (get_field('header_image')) : ?>
        <img src="<?php the_field('header_image'); ?>" alt="Property Image">
      <?php endif; ?>
      <h2>Price: <?php the_field('price'); ?></h2>
      <h3>Facts:</h3>
      <?php the_field('facts'); ?>
      <h3>Payment Plan:</h3>
      <?php the_field('payment_plan'); ?>
    </div>
  </div>
</div>

<?php
endwhile;
get_footer();
?>
