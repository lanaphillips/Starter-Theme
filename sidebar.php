<aside class="aside" role="complementary">

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
    	<?php get_search_form(); ?>
	
	<?php endif; ?>

</aside>