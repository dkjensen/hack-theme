import "slick-carousel";
import sal from "sal.js";

let hack = {};

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
			
			$( window ).on( 'resize', this.makeFit() );
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

	// document.querySelectorAll( 'iframe, object, video' ).forEach( function( video ) {
	// 	var ratio, iTargetWidth,
	// 		container = video.parentNode;

	// 	// Skip videos we want to ignore.
	// 	if ( video.classList.contains( 'intrinsic-ignore' ) || video.parentNode.classList.contains( 'intrinsic-ignore' ) ) {
	// 		return true;
	// 	}

	// 	if ( ! video.dataset.origwidth ) {
	// 		// Get the video element proportions.
	// 		video.setAttribute( 'data-origwidth', video.width );
	// 		video.setAttribute( 'data-origheight', video.height );
	// 	}

	// 	iTargetWidth = container.offsetWidth;

	// 	// Get ratio from proportions.
	// 	ratio = iTargetWidth / video.dataset.origwidth;

	// 	// Scale based on ratio, thus retaining proportions.
	// 	video.style.width = iTargetWidth + 'px';
	// 	video.style.height = ( video.dataset.origheight * ratio ) + 'px';
	// } );

} )( jQuery );
