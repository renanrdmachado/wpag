<?php get_header() ?>

<div class="row page-interna page-erro">
	<center>
		<h2>ERRO 404</h2>
		<p>Faça sua busca abaixo.</p>
		<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
		    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'EU QUERO …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
		    <input type="submit" class="search-submit red-button" value="<?php echo esc_attr_x( 'BUSCAR', 'submit button' ) ?>" />
		</form>
	</center>
</div>

<?php get_footer() ?>