if (
	( 'complete' === document.readyState ||
		'loading' !== document.readyState ) &&
	! document.documentElement.doScroll
) {
	initializeMobileMenu();
} else {
	document.addEventListener( 'DOMContentLoaded', initializeMobileMenu );
}

function initializeMobileMenu() {
	const mobileMenu = document.querySelector(
		'.nav--primary .main-navigation'
	);
	const mobileMenuToggle = document.querySelector( '.menu__toggle' );
	const mobileMenuInnerToggle = mobileMenu.querySelector(
		'.menu__inner-toggle'
	);

	const mobileMenuUnderlay = document.querySelector( '.menu__underlay' );
	console.log( 'mobileMenuUnderlay', mobileMenuUnderlay );
	mobileMenuToggle.addEventListener( 'click', ( e ) => {
		e.preventDefault();
		mobileMenu.classList.toggle( 'open' );
		mobileMenuUnderlay.classList.toggle( 'visible' );
	} );
	mobileMenuInnerToggle.addEventListener( 'click', ( e ) => {
		e.preventDefault();
		mobileMenu.classList.remove( 'open' );
		mobileMenuUnderlay.classList.remove( 'visible' );
	} );
	mobileMenuUnderlay.addEventListener( 'click', ( e ) => {
		e.preventDefault();
		mobileMenuUnderlay.classList.remove( 'visible' );
		mobileMenu.classList.remove( 'open' );
	} );
}
