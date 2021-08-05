import "slick-carousel";
import simpleParallax from 'simple-parallax-js';
import "lity";
import sal from "sal.js";
import copy from 'copy-to-clipboard';

let hack = {};

( function( $ ) {

	const scrollAnimations = sal();

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
		var $self = $( this );
		var slider_id = $( this ).data( 'slick-id' );
		var $pagination = $( '.slick-carousel-pagination[data-slick-id="' + slider_id + '"]' );
		var append_arrows = null;

		if ( slider_id && $pagination.length ) {
			append_arrows = $pagination;
			
			$( this ).on( 'init reInit afterChange', function( event, slick ) {
				$pagination.find( 'div' ).text(
					$pagination.data( 'label' ) + ' ' +
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

		$pagination.find( '.slick-prev' ).on( 'click', function( e ) {
			$self.slick( 'slickPrev' );
		} );

		$pagination.find( '.slick-next' ).on( 'click', function( e ) {
			console.log( '123' );
			$self.slick( 'slickNext' );
		} );

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

	hack.intrinsicRatioVideos = {
		init: function() {
			this.makeFit();
			
			$( window ).on( 'resize orientationchange', this.makeFit() );
		},
		makeFit: function() {
			$( 'iframe, object, video' ).each( function( video ) {
				var ratio, iTargetWidth,
					$container = $( this ).parent();
		
				if ( ! $( this ).data( 'origwidth' ) ) {
					// Get the video element proportions.
					$( this ).data( 'origwidth', $( this ).width() );
					$( this ).data( 'origheight', $( this ).height() );
				}
		
				iTargetWidth = $container.width();
		
				// Get ratio from proportions.
				ratio = iTargetWidth / $( this ).data( 'origwidth' );
		
				// Scale based on ratio, thus retaining proportions.
				$( this ).css( 'width', iTargetWidth + 'px' );
				$( this ).css( 'height', ( $( this ).data( 'origheight' ) * ratio ) + 'px' );
			} );
		}
	};

	hack.intrinsicRatioVideos.init();

	const parallaxImages = document.querySelectorAll( '.is-parallax' );

	new simpleParallax( parallaxImages, {
		scale: 1.1
	} );

	$( '.accordion' ).each( function() {
		let $content = $( this ).children( '.accordion-content' );

		if ( $content.length ) {
			$( this ).addClass( 'has-children' );
		}
	} );

	$( '.accordion-header' ).on( 'click', function( e ) {
		let $content = $( this ).siblings( '.accordion-content' );

		if ( $content.length ) {
			e.preventDefault();

			$content.slideToggle();
			$( this ).parent().toggleClass( 'is-active' );
		}
	} );

	$( '.toggle-trigger' ).on( 'click', function( e ) {
		e.preventDefault();

		if ( $( this ).hasClass( 'is-active' ) ) {
			return true;
		}

		const id = $( this ).data( 'section-id' );

		$( '.toggle-trigger' ).removeClass( 'is-active' );
		$( '.toggle-content' ).slideUp();

		$( '.toggle-content[data-section-id="' + id + '"]' ).slideToggle();
		$( this ).toggleClass( 'is-active' );
	} ).filter( ':first-child' ).trigger( 'click' );

	$( '.share' ).on( 'click', function( e ) {
		e.preventDefault();

		let $this = $( this );
		let contentToShare = $this.data( 'share' );

		copy( contentToShare, {
			debug : false,
			format: 'text/plain',
			onCopy: function( object ) {
				console.log( hack_i18n );
				$this.append( '<div class="share-prompt" data-sal="fade">' + hack_i18n.share_confirmation + '</div>' );
				scrollAnimations.update();
			}
		  } );
	} );

} )( jQuery );
