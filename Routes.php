<?php

Route::set( 'about-us', function () {
	AboutUs::CreateView();
} );

Route::set( 'contact-us', function () {
	ContactUs::CreateView();
} );


