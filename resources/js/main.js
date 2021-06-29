import "slick-carousel";
import sal from "sal.js";

let hack_sliders = {};

( function( $ ) {

	sal();

	$( '.menu-toggle' ).on( 'click', function( e ) {
		e.preventDefault();

		$( this ).toggleClass( 'is-active' );
		$( '.nav-primary' ).toggleClass( 'is-active' );

		if ( $( this ).hasClass( 'is-active' ) ) {
			$( this ).attr( 'aria-expanded', 'true' );
		} else {
			$( this ).attr( 'aria-expanded', 'false' );
		}
	} );

	$( '.hack-slick' ).each( function( $el ) {
		var slider_id = $( this ).data( 'slick-id' );
		var pagination = $( '.slick-carousel-pagination[data-slick-id="' + slider_id + '"]' );
		var append_arrows = null;

		if ( slider_id && pagination.length ) {
			append_arrows = pagination;
			
			$( this ).on( 'init reInit afterChange', function( event, slick ) {
				pagination.find( 'div' ).text(
					pagination.data( 'label' ) + ' ' +
					( slick.currentSlide ? slick.currentSlide + 1 : 1 ) + ' of ' +
					slick.slideCount ?? $( '.hack-slick[data-slick-id="' + slider_id + '"]' ).find( '.slick-slide:not(.slick-cloned)' ).length
				);
			} );
		}

		var slickOpts = {
			nextArrow    : '<span class="slick-next">&rsaquo;</span>',
			prevArrow    : '<span class="slick-prev">&lsaquo;</span>',
			accessibility: false,
		};

		if ( append_arrows ) {
			slickOpts.appendArrows = append_arrows;
		}

		$( this ).on( 'init', function( event, slick ) {
			if ( slick.options.clickProgress ) {
				slick.$slideTrack.on( 'click', function( e ) {
					e.preventDefault();

					slick.slickNext();

				} );
			}
		} ).slick( slickOpts );

	} );

	$( '.language-switcher-toggle' ).on( 'click', function( e ) {
		e.preventDefault();
  
		$( '.language-switcher' ).toggleClass( 'activated' );
	} );
  
	$( '.language-switcher .wpml-ls' ).prepend( '<span class="wpml-ls-close"></span' );
  
	$( '.language-switcher .wpml-ls-close' ).on( 'click', function( e ) {
		e.preventDefault();
  
		$( this ).closest( '.language-switcher' ).removeClass( 'activated' );
	} );

} )( jQuery );
