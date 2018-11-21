( function( root, $, undefined ) {
	'use strict';

	$( function() {

		// DOM ready, take it away
		var m = new Marka( '#menu_icon' );
		m.set( 'bars' ).size( 40 );

		// Slick example
		$( document ).ready( function() {
			$( '.slider-class' ).slick({
                nextArrow: '.next',
                prevArrow: '.prev',
                dots: false,
                autoplay: true,
                autoplaySpeed: 3000,
                speed: 500,
                responsive: [
                    {
                        breakpoint: 800,
                        settings: {
                            dots: true
                        }
                    }
                ]
            });
		});
	});
} ( this, jQuery ) );
