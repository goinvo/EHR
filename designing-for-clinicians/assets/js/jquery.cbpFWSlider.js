/**
 * jquery.cbpFWSlider.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Codrops
 * http://www.codrops.com
 */
;( function( $, window, undefined ) {

	'use strict';

	// global
	var Modernizr = window.Modernizr;

	$.CBPFWSlider = function( options, element ) {
		this.$el = $( element );
		this._init( options );
	};

	// the options
	$.CBPFWSlider.defaults = {
		// default transition speed (ms)
		speed : 500,
		// default transition easing
		easing : 'ease'
	};

	$.CBPFWSlider.prototype = {
		_init : function( options ) {
			// options
			this.options = $.extend( true, {}, $.CBPFWSlider.defaults, options );
			// cache some elements and initialize some variables
			this._config();
			// initialize/bind the events
			this._initEvents();
		},
		_config : function() {

			// the list of items
			this.$list = this.$el.children( 'ul' );
			// the items (li elements)
			this.$items = this.$list.children( 'li' );
			// total number of items
			this.itemsCount = this.$items.length;
			// support for CSS Transitions & transforms
			this.support = Modernizr.csstransitions && Modernizr.csstransforms;
			this.support3d = Modernizr.csstransforms3d;
			// transition end event name and transform name
			// transition end event name
			var transEndEventNames = {
					'WebkitTransition' : 'webkitTransitionEnd',
					'MozTransition' : 'transitionend',
					'OTransition' : 'oTransitionEnd',
					'msTransition' : 'MSTransitionEnd',
					'transition' : 'transitionend'
				},
				transformNames = {
					'WebkitTransform' : '-webkit-transform',
					'MozTransform' : '-moz-transform',
					'OTransform' : '-o-transform',
					'msTransform' : '-ms-transform',
					'transform' : 'transform'
				};

			if( this.support ) {
				this.transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ] + '.cbpFWSlider';
				this.transformName = transformNames[ Modernizr.prefixed( 'transform' ) ];
			}
			// current and old item´s index
			this.current = 0;
			this.old = 0;
			// check if the list is currently moving
			this.isAnimating = false;
			// the list (ul) will have a width of 100% x itemsCount
			this.$list.css( 'width', 100 * this.itemsCount + '%' );
			// apply the transition
			if( this.support ) {
				this.$list.css( 'transition', this.transformName + ' ' + this.options.speed + 'ms ' + this.options.easing );
			}
			// each item will have a width of 100 / itemsCount
			this.$items.css( 'width', 100 / this.itemsCount + '%' );
			// add navigation arrows and the navigation dots if there is more than 1 item
			if( this.itemsCount > 1 ) {

				// add navigation arrows (the previous arrow is not shown initially):
				this.$navPrev = $( '<span class="cbp-fwprev"><svg version="1.1" width="26px" height="48px"> <g transform="scale(2.5)"><path fill="rgba(69, 160, 218, .9)" d="M0.493,10.078l8.686,8.687c0.24,0.24,0.628,0.24,0.868,0c0.239-0.24,0.241-0.628,0.001-0.868L1.796,9.644 l8.289-8.29c0.24-0.24,0.24-0.629,0-0.869s-0.629-0.24-0.868,0L0.493,9.209c-0.12,0.12-0.18,0.277-0.18,0.435 S0.373,9.958,0.493,10.078z"/></svg></g></span>' ).hide();
				this.$navNext = $( '<span class="cbp-fwnext"><svg version="1.1" width="26px" height="48px"> <g transform="scale(2.5)"><path fill="rgba(69, 160, 218, .9)" d="M10.085,9.173L1.399,0.486c-0.24-0.24-0.628-0.24-0.868,0C0.292,0.726,0.29,1.114,0.53,1.354l8.252,8.252 l-8.289,8.29c-0.24,0.24-0.24,0.629,0,0.869s0.629,0.24,0.868,0l8.724-8.724c0.12-0.12,0.18-0.277,0.18-0.435 S10.205,9.292,10.085,9.173z"/></svg></g></span>' );
				$( '<nav/>' ).append( this.$navPrev, this.$navNext ).appendTo( this.$el );
				// add navigation dots
				var dots = '';
				for( var i = 0; i < this.itemsCount; ++i ) {
					// current dot will have the class cbp-fwcurrent
					var dot = i === this.current ? '<span class="cbp-fwcurrent"></span>' : '<span></span>';
					dots += dot;
				}
				var navDots = $( '<div class="cbp-fwdots"/>' ).append( dots ).appendTo( this.$el );
				this.$navDots = navDots.children( 'span' );

			}

		},
		_initEvents : function() {
			
			var self = this;
			if( this.itemsCount > 1 ) {
				this.$navPrev.on( 'click.cbpFWSlider', $.proxy( this._navigate, this, 'previous' ) );
				this.$navNext.on( 'click.cbpFWSlider', $.proxy( this._navigate, this, 'next' ) );
				this.$navDots.on( 'click.cbpFWSlider', function() { self._jump( $( this ).index() ); } );
			}

		},
		_navigate : function( direction ) {

			// do nothing if the list is currently moving
			if( this.isAnimating ) {
				return false;
			}

			this.isAnimating = true;
			// update old and current values
			this.old = this.current;
			if( direction === 'next' && this.current < this.itemsCount - 1 ) {
				++this.current;
			}
			else if( direction === 'previous' && this.current > 0 ) {
				--this.current;
			}
			// slide
			this._slide();

		},
		_slide : function() {

			// check which navigation arrows should be shown
			this._toggleNavControls();
			// translate value
			var translateVal = -1 * this.current * 100 / this.itemsCount;
			if( this.support ) {
				this.$list.css( 'transform', this.support3d ? 'translate3d(' + translateVal + '%,0,0)' : 'translate(' + translateVal + '%)' );
			}
			else {
				this.$list.css( 'margin-left', -1 * this.current * 100 + '%' );	
			}
			
			var transitionendfn = $.proxy( function() {
				this.isAnimating = false;
			}, this );

			if( this.support ) {
				this.$list.on( this.transEndEventName, $.proxy( transitionendfn, this ) );
			}
			else {
				transitionendfn.call();
			}

		},
		_toggleNavControls : function() {

			// if the current item is the first one in the list, the left arrow is not shown
			// if the current item is the last one in the list, the right arrow is not shown
			switch( this.current ) {
				case 0 : this.$navNext.show(); this.$navPrev.hide(); break;
				case this.itemsCount - 1 : this.$navNext.hide(); this.$navPrev.show(); break;
				default : this.$navNext.show(); this.$navPrev.show(); break;
			}
			// highlight navigation dot
			this.$navDots.eq( this.old ).removeClass( 'cbp-fwcurrent' ).end().eq( this.current ).addClass( 'cbp-fwcurrent' );

		},
		_jump : function( position ) {

			// do nothing if clicking on the current dot, or if the list is currently moving
			if( position === this.current || this.isAnimating ) {
				return false;
			}
			this.isAnimating = true;
			// update old and current values
			this.old = this.current;
			this.current = position;
			// slide
			this._slide();

		},
		destroy : function() {

			if( this.itemsCount > 1 ) {
				this.$navPrev.parent().remove();
				this.$navDots.parent().remove();
			}
			this.$list.css( 'width', 'auto' );
			if( this.support ) {
				this.$list.css( 'transition', 'none' );
			}
			this.$items.css( 'width', 'auto' );

		}
	};

	var logError = function( message ) {
		if ( window.console ) {
			window.console.error( message );
		}
	};

	$.fn.cbpFWSlider = function( options ) {
		if ( typeof options === 'string' ) {
			var args = Array.prototype.slice.call( arguments, 1 );
			this.each(function() {
				var instance = $.data( this, 'cbpFWSlider' );
				if ( !instance ) {
					logError( "cannot call methods on cbpFWSlider prior to initialization; " +
					"attempted to call method '" + options + "'" );
					return;
				}
				if ( !$.isFunction( instance[options] ) || options.charAt(0) === "_" ) {
					logError( "no such method '" + options + "' for cbpFWSlider instance" );
					return;
				}
				instance[ options ].apply( instance, args );
			});
		} 
		else {
			this.each(function() {	
				var instance = $.data( this, 'cbpFWSlider' );
				if ( instance ) {
					instance._init();
				}
				else {
					instance = $.data( this, 'cbpFWSlider', new $.CBPFWSlider( options, this ) );
				}
			});
		}
		return this;
	};

} )( jQuery, window );