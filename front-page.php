<?php
/**
 * The template for displaying the home page.
 *
 * @package wrcontract
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" >

    <h2 class="title"> Our Services </h2>
    <section class="our-services">
      <div class="services-desc">
        <?php echo CFS()->get( 'services_text' ); ?>
        <a class="raq" href="<?php echo get_site_url(); ?>/request-a-quote">
          Request a Quote </a>
      </div>
    </secton>

    <h2 class="title"> Our Associations </h2>
    <section class="associations-container">
      <?php
        $associations = CFS() -> get ('associations');
        foreach ($associations as $association) :
      ?>
      <div class="association-images">
        <img src="<?php echo $association['association_images'];?>"/>
        <p class="associations-description"><?php echo ['associations_description'];?></p>
      </div>
      <?php endforeach; ?>
    </section>
  </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
