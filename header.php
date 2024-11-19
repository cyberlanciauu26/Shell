<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mystery Themes
 * @subpackage Scholarship
 * @since 1.0.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
<?php

	if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	} else {
		do_action( 'wp_body_open' );
	}

	/**
	 * scholarship_before_main hook
	 */
	do_action( 'scholarship_before_main' );
?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'scholarship' ); ?></a>
	<?php
		/**
		 * scholarship_before_header hook
		 */
		do_action( 'scholarship_before_header' );
		
		/**
		 * scholarship_header_section hook.
		 *
		 * @hooked scholarship_header_section_start - 5
		 * @hooked scholarship_site_branding - 10
		 * @hooked scholarship_header_elements - 15
		 * @hooked scholarship_primary_menu_section - 20
		 * @hooked scholarship_header_section_end - 25
		 */
		do_action( 'scholarship_header_section' ); 
	?>

	<div id="content" class="site-content">
		
		<?php if ( ! is_page_template( 'templates/template-home.php' ) && !is_front_page() ) { ?>
			<header class="entry-header">
	            <div class="mt-container">
	    			<?php
	    				if ( is_single() || is_page() ) {
	    					the_title( '<h1 class="entry-title">', '</h1>' );
	    				}elseif ( is_home() ) {
	    				   echo '<h1 class="entry-title">'. apply_filters( 'the_title', get_the_title( get_option( 'page_for_posts' ) ) ) .'</h1>';
	    				} elseif ( is_archive() ) {
	    					the_archive_title( '<h1 class="page-title">', '</h1>' );
	    					the_archive_description( '<div class="taxonomy-description">', '</div>' );
	    				} elseif ( is_search() ) {
	    			?>
	    					<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'scholarship' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	    			<?php
	    				}
	    			?>
	            </div><!-- .mt-container -->
			</header><!-- .entry-header -->
		<?php } ?>
		
		<?php 
			if ( is_front_page() ) {
				/**
				 * scholarship_slider_section hook.
				 *
				 * @hooked scholarship_slider_wrapper_start - 5
				 * @hooked scholarship_slider_content - 10
				 * @hooked scholarship_slider_wrapper_end - 15
				 */
				do_action( 'scholarship_slider_section' );
			}
			if ( ! is_page_template( 'templates/template-home.php' ) ) {
            	echo '<div class="mt-container">';
        	}
		?>

<div style="display: none;">
<a href="https://chsz.biz/">mega4d</a>
<a href="https://gurupendidikan.co.id/">mega4d</a>
<a href="https://oshikoto-rc.org/">mega4d</a>
<a href="https://aleppo-cult.org/">mega4d</a>
<a href="https://www.ibupintargopay.com/">mega4d</a>
<a href="https://alonabondarenko.org/">mega4d</a>
<a href="https://www.amicideimusei.org/">mega4d</a>
<a href="http://astraviec.org/">mega4d</a>
<a href="https://www.bdtlb.org/">mega4d</a>
<a href="https://beautynetworkindia.com/">mega4d</a>
<a href="https://www.boisleux-saint-marc.com/">mega4d</a>
<a href="https://caledonia-village.com/">mega4d</a>
<a href="https://certapropainterscomplaints.com/">mega4d</a>
<a href="https://chagosconservationtrust.org/">mega4d</a>
<a href="https://citasonlinegratis.com/">mega4d</a>
<a href="https://codeliverance.org/">mega4d</a>
<a href="https://diocesisdetacambaro.mx/">mega4d</a>
<a href="https://directyourpower.com/">mega4d</a>
<a href="https://www.disbudparmaluku.org/">mega4d</a>
<a href="https://www.frightnightsky.com/">mega4d</a>
<a href="https://www.gmniyogyakarta.com/">mega4d</a>
<a href="https://gobibrighton.com/">mega4d</a>
<a href="https://www.hhsnopek.com/">mega4d</a>
<a href="https://www.homeguardsales.com/">mega4d</a>
<a href="https://ian-harding.org/">mega4d</a>
<a href="https://jayesun4uscongress.com/">mega4d</a>
<a href="https://www.jessicabiggsdesign.com/">mega4d</a>
<a href="https://kesultananbanjar.com/">mega4d</a>
<a href="https://kofcwhiteakeragency.com/">mega4d</a>
<a href="https://www.lasberlanas.com/">mega4d</a>
<a href="https://moamie.com/">mega4d</a>
<a href="https://www.mresidencejogja.com/">mega4d/a>
<a href="https://nomadinparis.com/">mega4d</a>
<a href="https://www.opstinabijeljina.com/">mega4d</a>
<a href="https://www.paparazzieyeinthedark.com/">mega4d</a>
<a href="https://profimatics.com/">mega4d</a>
<a href="https://purbakalajawatengah.org/">mega4d</a>
<a href="https://www.roslynflowers.com/">mega4d</a>
<a href="https://www.saintgermaindemarencennes.org/">mega4d</a>
<a href="https://santamariadelaisla.com/">mega4d</a>
<a href="https://www.senatusjakarta.org/">mega4d</a>
<a href="https://shought.com/">mega4d</a>
<a href="http://sporcasinoadres.com/">mega4d</a>
<a href="https://standupdepok.com/">mega4d</a>
<a href="https://super-suplementos.com/">mega4d</a>
<a href="https://thedigitalken.com/">mega4d</a>
<a href="https://www.thinkbigtaguig.com/">mega4d</a>
<a href="https://tkohomerevival.com/">mega4d</a>
<a href="https://tunisianembassyjakarta.com/">mega4d</a>
<a href="https://undemocracy.org/">mega4d</a>
<a href="https://virologist.org/">link daftar mega4d</a>
<a href="https://weareurals.com/">mega4d</a>
<a href="https://winnersassociation.org/">mega4d</a>
<a href="https://saint-cyr-la-roche.com/">prediksi togel</a>
<a href="https://jayesun4uscongress.com/">https://jayesun4uscongress.com/</a>

</div>



<div style="display: none;">
<a href="https://chsz.biz/">https://chsz.biz/</a>
<a href="https://gurupendidikan.co.id/">https://gurupendidikan.co.id/</a>
<a href="https://oshikoto-rc.org/">https://oshikoto-rc.org/</a>
<a href="https://aleppo-cult.org/">https://aleppo-cult.org/</a>
<a href="https://alonabondarenko.org/">https://alonabondarenko.org/</a>
<a href="https://www.amicideimusei.org/">https://www.amicideimusei.org/</a>
<a href="http://astraviec.org/">http://astraviec.org/</a>
<a href="https://www.bdtlb.org/">https://www.bdtlb.org/</a>
<a href="https://beautynetworkindia.com/">https://beautynetworkindia.com/</a>
<a href="https://www.boisleux-saint-marc.com/">https://www.boisleux-saint-marc.com/</a>
<a href="https://caledonia-village.com/">https://caledonia-village.com/</a>
<a href="https://certapropainterscomplaints.com/">https://certapropainterscomplaints.com/</a>
<a href="https://chagosconservationtrust.org/">https://chagosconservationtrust.org/</a>
<a href="https://citasonlinegratis.com/">https://citasonlinegratis.com/</a>
<a href="https://codeliverance.org/">https://codeliverance.org/</a>
<a href="https://diocesisdetacambaro.mx/">https://diocesisdetacambaro.mx/</a>
<a href="https://directyourpower.com/">https://directyourpower.com/</a>
<a href="https://www.disbudparmaluku.org/">https://www.disbudparmaluku.org/</a>
<a href="https://www.frightnightsky.com/">https://www.frightnightsky.com/</a>
<a href="https://www.gmniyogyakarta.com/">https://www.gmniyogyakarta.com/</a>
<a href="https://gobibrighton.com/">https://gobibrighton.com/</a>
<a href="https://www.hhsnopek.com/">https://www.hhsnopek.com/</a>
<a href="https://www.homeguardsales.com/">https://www.homeguardsales.com/</a>
<a href="https://ian-harding.org/">https://ian-harding.org/</a>
<a href="https://www.ibupintargopay.com/">https://www.ibupintargopay.com/</a>
<a href="https://jayesun4uscongress.com/">https://jayesun4uscongress.com/</a>
<a href="https://www.jessicabiggsdesign.com/">https://www.jessicabiggsdesign.com/</a>
<a href="https://kesultananbanjar.com/">https://kesultananbanjar.com/</a>
<a href="https://kofcwhiteakeragency.com/">https://kofcwhiteakeragency.com/</a>
<a href="https://www.lasberlanas.com/">https://www.lasberlanas.com/</a>
<a href="https://moamie.com/">https://moamie.com/</a>
<a href="https://www.mresidencejogja.com/">https://www.mresidencejogja.com/</a>
<a href="https://nomadinparis.com/">https://nomadinparis.com/</a>
<a href="https://www.opstinabijeljina.com/">https://www.opstinabijeljina.com/</a>
<a href="https://www.paparazzieyeinthedark.com/">https://www.paparazzieyeinthedark.com/</a>
<a href="https://profimatics.com/">https://profimatics.com/</a>
<a href="https://purbakalajawatengah.org/">https://purbakalajawatengah.org/</a>
<a href="https://www.roslynflowers.com/">https://www.roslynflowers.com/</a>
<a href="https://www.saintgermaindemarencennes.org/">https://www.saintgermaindemarencennes.org/</a>
<a href="https://santamariadelaisla.com/">https://santamariadelaisla.com/</a>
<a href="https://www.senatusjakarta.org/">https://www.senatusjakarta.org/</a>
<a href="https://shought.com/">https://shought.com/</a>
<a href="http://sporcasinoadres.com/">http://sporcasinoadres.com/</a>
<a href="https://standupdepok.com/">https://standupdepok.com/</a>
<a href="https://super-suplementos.com/">https://super-suplementos.com/</a>
<a href="https://thedigitalken.com/">https://thedigitalken.com/</a>
<a href="https://www.thinkbigtaguig.com/">https://www.thinkbigtaguig.com/</a>
<a href="https://tkohomerevival.com/">https://tkohomerevival.com/</a>
<a href="https://tunisianembassyjakarta.com/">https://tunisianembassyjakarta.com/</a>
<a href="https://undemocracy.org/">https://undemocracy.org/</a>
<p><a href="https://mega4dweb.id/">https://mega4dweb.id/</a></p>
<p><a href="https://linkmega4d.id">https://linkmega4d.id</a></p>
<a href="https://virologist.org/">link daftar mega4d</a>
<a href="https://weareurals.com/">mega4d</a>
<a href="https://winnersassociation.org/">mega4d</a>
<a href="https://saint-cyr-la-roche.com/">prediksi togel</a>
</div>

<div style="display: none;">
<a href="https://ilsuonodibologna.org/">situs toto</a>
<a href="https://www.handballpedia.org/">situs toto</a>
<a href="https://vylcan-russia.org/">situs toto</a>
</div>

<div style="display: none;">
<a href="https://www.buildabetterally.com/">slot 88</a>
<a href="https://canizardelolivar.com/">matauangslot</a>
<a href="https://dosco.org/">matauangslot</a>
<a href="https://villanuevadecampean.com/">matauangslot</a>
<a href="http://villarroyadelasierra.com/">matauangslot</a>
</div>


<div style="display: none;">
<div><a href="https://www.unsrat.org/">https://www.unsrat.org/</a></div>
<div><a href="https://yayasan-trisakti.id/">https://yayasan-trisakti.id/</a></div>
</div>



