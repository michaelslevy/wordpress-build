<? get_header(); ?>
<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
    <?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); 
				the_title("<h1>","</h1>");
				the_content();
				
			} // end while
		} // end if
		?>
  </div>
</main>
<? get_footer(); ?>