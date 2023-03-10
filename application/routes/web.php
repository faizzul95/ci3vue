<?php

/**
 * Welcome to Luthier-CI!
 *
 * This is your main route file. Put all your HTTP-Based routes here using the static
 * Route class methods
 *
 * Examples:
 *
 *    Route::get('foo', 'bar@baz');
 *      -> $route['foo']['GET'] = 'bar/baz';
 *
 *    Route::post('bar', 'baz@fobie', [ 'namespace' => 'cats' ]);
 *      -> $route['bar']['POST'] = 'cats/baz/foobie';
 *
 *    Route::get('blog/{slug}', 'blog@post');
 *      -> $route['blog/(:any)'] = 'blog/post/$1'
 */

//  $route['^site(\/(.+)?)?'] = 'vue';

// Route::get('/', function () {
//     luthier_info();
// })->name('homepage');

Route::get('/auth/(:any)', function () {
    return render('vue/login_layout', ['title' => 'Login']);
});

Route::get('/', function () {
    return render('vue/admin_layout', ['title' => '-']);
});

Route::get('/(:any)', function () {
    return render('vue/admin_layout', ['title' => '-']);
});

Route::set('404_override', function () {
    show_404();
});

Route::set('translate_uri_dashes', FALSE);
