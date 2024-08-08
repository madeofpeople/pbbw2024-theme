const options = {
	threshold: 0.24,
};

const initScrollSpy = () => {
	const selectors = '.entry-content > section, .site-header';
	const observedElements = document.querySelectorAll( selectors );
	const pageNav = document.querySelector( '.site-header .navigation-menu' );
	let activeItem = null;

	const updatePageNav = ( anEl ) => {
		// console.log(
		// 	Array.from( observedElements ).find( ( node ) => node === anEl )
		// );
		// is anEl, one of the observedElements?
		if (
			Array.from( observedElements ).find( ( node ) => node === anEl )
		) {
			if ( activeItem ) {
				activeItem.classList.remove( 'active' );
			}

			if ( activeItem ) {
				activeItem.classList.remove( 'active' );
			}

			const link = pageNav.querySelector( `a[href="/#${ anEl.id }"]` );

			if ( link ) {
				activeItem = link;
			}

			if ( activeItem ) activeItem.classList.add( 'active' );
		}
	};

	const inViewCallback = ( entries ) => {
		entries.forEach( ( entry ) => {
			if ( entry.isIntersecting ) {
				entry.target.classList.add( 'in-view' );
				entry.target.classList.remove( 'out-of-view' );
				// console.log( '»»»»', entry.target.id, 'scrolled into view.' );

				if ( pageNav ) updatePageNav( entry.target );
			} else {
				if ( entry.target.classList.contains( 'site-header' ) ) {
					entry.target
						.querySelector( '.nav--primary' )
						.classList.add( 'alt-top' );
				}
				entry.target.classList.remove( 'in-view' );
				entry.target.classList.add( 'out-of-view' );
			}
		} );
	};

	const observer = new IntersectionObserver( inViewCallback, options );
	observedElements.forEach( ( element ) => {
		const dataDelay = element.getAttribute( 'data-delay' );
		element.classList.add( 'out-of-view' );
		element.style.transitionDelay = dataDelay + 'ms';
		observer.observe( element );
	} );
};

if (
	( 'complete' === document.readyState ||
		'loading' !== document.readyState ) &&
	! document.documentElement.doScroll
) {
	if ( ! document.body.classList.contains( 'is-mobile' ) ) {
		initScrollSpy();
	}
} else {
	document.addEventListener( 'DOMContentLoaded', function () {
		if ( ! document.body.classList.contains( 'is-mobile' ) ) {
			initScrollSpy();
		}
	} );
}
