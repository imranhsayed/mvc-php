<?php

Route::set( 'about-us', function () {
	AboutUs::CreateView( 'AboutUs' );
} );

Route::set( 'contact-us', function () {
	ContactUs::CreateView( 'ContactUs' );
} );


