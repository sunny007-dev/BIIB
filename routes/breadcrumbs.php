<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('frontend.homePage'));
});

Breadcrumbs::for('about', function ($trail) {
    $trail->parent('home');
    $trail->push('About Us', route('frontend.about'));
});

Breadcrumbs::for('admission', function ($trail) {
    $trail->parent('home');
    $trail->push('Admission', route('frontend.admission'));
});

Breadcrumbs::for('academics', function ($trail) {
    $trail->parent('home');
    $trail->push('Academics', route('frontend.academics'));
});

Breadcrumbs::for('industry interface', function ($trail) {
    $trail->parent('home');
    $trail->push('Industry Interface', route('frontend.industryinterface'));
});

Breadcrumbs::for('placement', function ($trail) {
    $trail->parent('home');
    $trail->push('Placement', route('frontend.placements'));
});

Breadcrumbs::for('contact us', function ($trail) {
    $trail->parent('home');
    $trail->push('Contact Us', route('frontend.contacts'));
});

Breadcrumbs::for('faculty', function ($trail) {
    $trail->parent('academics');
    $trail->push('Faculty', route('frontend.faculty'));
});