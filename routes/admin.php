<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {

    Route::get('login', [
        'as' => 'login',
        'uses' => 'AccountController@login'
    ]);
    Route::post('authenticate', [
        'as' => 'authenticate',
        'uses' => 'AccountController@authenticate'
    ]);
    Route::post('logout', [
        'as' => 'logout',
        'uses' => 'AccountController@logout'
    ]);

    // debug route for validation
    Route::get('/debug-sentry', function () {
        throw new Exception('My first Sentry error!');
    });

});

Route::group(['prefix' => 'admin_contactos', 'namespace' => 'AdminContactos'], function() {

    Route::get('login', [
        'as' => 'admin_contacts.login',
        'uses' => 'AccountController@login'
    ]);
    Route::post('authenticate', [
        'as' => 'admin_contacts.authenticate',
        'uses' => 'AccountController@authenticate'
    ]);
    Route::post('logout', [
        'as' => 'admin_contacts.logout',
        'uses' => 'AccountController@logout'
    ]);
    // account
    Route::get('mi-cuenta', [
        'as' => 'admin_contacts.account.my-account',
        'uses' => 'AccountController@profile'
    ]);

    Route::post('mi-cuenta/actualizar', [
        'as' => 'admin_contacts.account.update',
        'uses' => 'AccountController@update'
    ]);

    Route::get('{contact}/ver', [
        'as' => 'admin_contacts.contacts.show',
        'uses' => 'ContactController@show',
        'middleware' => ['role:contactos']
    ]);

    Route::group(['prefix' => 'contactos'], function() {
        Route::get('/', [
            'as' => 'admin_contacts.contacts.list',
            'uses' => 'ContactController@list',
            'middleware' => ['role:contactos']
        ]);

        Route::get('exportar', [
            'as' => 'contacts.export',
            'uses' => 'ContactController@export',
            'middleware' => ['role:contactos']
        ]);
    });


});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'adminauth'], function() {

    Route::get('/', function() {
        return redirect('admin/home');
    });

    Route::get('home', [
        'as' => 'admin.home',
        'uses' => 'HomeController@index'
    ]);

    // administrators
    Route::group(['prefix' => 'administradores'], function() {
        Route::get('/', [
            'as' => 'administrators.list',
            'uses' => 'AdministratorController@list',
            'middleware' => ['role:superadmin']
        ]);

        Route::post('listado-ajax', [
            'as' => 'administrators.ajax-list',
            'uses' => 'AdministratorController@ajaxList',
            'middleware' => ['role:superadmin']
        ]);

        Route::get('nuevo', [
            'as' => 'administrators.create',
            'uses' => 'AdministratorController@create',
            'middleware' => ['role:superadmin']
        ]);

        Route::post('guardar', [
            'as' => 'administrators.store',
            'uses' => 'AdministratorController@store',
            'middleware' => ['role:superadmin']
        ]);

        Route::get('{administrator}/editar', [
            'as' => 'administrators.edit',
            'uses' => 'AdministratorController@edit',
            'middleware' => ['role:superadmin']
        ]);

        Route::post('{administrator}/actualizar', [
            'as' => 'administrators.update',
            'uses' => 'AdministratorController@update',
            'middleware' => ['role:superadmin']
        ]);

        Route::get('{administrator}/borrar', [
            'as' => 'administrators.destroy',
            'uses' => 'AdministratorController@destroy',
            'middleware' => ['role:superadmin']
        ]);

        // account
        Route::get('mi-cuenta', [
            'as' => 'account.my-account',
            'uses' => 'AccountController@profile'
        ]);

        Route::post('mi-cuenta/actualizar', [
            'as' => 'account.update',
            'uses' => 'AccountController@update'
        ]);
    });

    // success stories
    Route::group(['prefix' => 'casos-de-exito'], function() {
        Route::get('/', [
            'as' => 'success-stories.list',
            'uses' => 'SuccessStoryController@list',
            'middleware' => ['role:superadmin']
        ]);

        Route::post('listado-ajax', [
            'as' => 'success-stories.ajax-list',
            'uses' => 'SuccessStoryController@ajaxList',
            'middleware' => ['role:superadmin']
        ]);

        Route::get('nuevo', [
            'as' => 'success-stories.create',
            'uses' => 'SuccessStoryController@create',
            'middleware' => ['role:superadmin']
        ]);

        Route::post('guardar', [
            'as' => 'success-stories.store',
            'uses' => 'SuccessStoryController@store',
            'middleware' => ['role:superadmin']
        ]);

        Route::get('{successStory}/editar', [
            'as' => 'success-stories.edit',
            'uses' => 'SuccessStoryController@edit',
            'middleware' => ['role:superadmin']
        ]);

        Route::post('{successStory}/actualizar', [
            'as' => 'success-stories.update',
            'uses' => 'SuccessStoryController@update',
            'middleware' => ['role:superadmin']
        ]);

        Route::get('{successStory}/borrar', [
            'as' => 'success-stories.destroy',
            'uses' => 'SuccessStoryController@destroy',
            'middleware' => ['role:superadmin']
        ]);
    });

    // solutions
    Route::group(['prefix' => 'formatos'], function() {
        Route::get('/', [
            'as' => 'solutions.list',
            'uses' => 'SolutionController@list',
            'middleware' => ['role:superadmin']
        ]);

        Route::post('listado-ajax', [
            'as' => 'solutions.ajax-list',
            'uses' => 'SolutionController@ajaxList',
            'middleware' => ['role:superadmin']
        ]);

        Route::get('nuevo', [
            'as' => 'solutions.create',
            'uses' => 'SolutionController@create',
            'middleware' => ['role:superadmin']
        ]);

        Route::post('guardar', [
            'as' => 'solutions.store',
            'uses' => 'SolutionController@store',
            'middleware' => ['role:superadmin']
        ]);

        Route::get('{solution}/editar', [
            'as' => 'solutions.edit',
            'uses' => 'SolutionController@edit',
            'middleware' => ['role:superadmin']
        ]);

        Route::post('{solution}/actualizar', [
            'as' => 'solutions.update',
            'uses' => 'SolutionController@update',
            'middleware' => ['role:superadmin']
        ]);

        Route::get('{solution}/borrar', [
            'as' => 'solutions.destroy',
            'uses' => 'SolutionController@destroy',
            'middleware' => ['role:superadmin']
        ]);
    });

    // pages
    Route::group(['prefix' => 'paginas'], function() {
        Route::get('/', [
            'as' => 'pages.list',
            'uses' => 'PageController@list',
            'middleware' => ['role:superadmin']
        ]);

        Route::post('listado-ajax', [
            'as' => 'pages.ajax-list',
            'uses' => 'PageController@ajaxList',
            'middleware' => ['role:superadmin']
        ]);

        Route::get('nuevo', [
            'as' => 'pages.create',
            'uses' => 'PageController@create',
            'middleware' => ['role:superadmin']
        ]);

        Route::post('guardar', [
            'as' => 'pages.store',
            'uses' => 'PageController@store',
            'middleware' => ['role:superadmin']
        ]);

        Route::get('{page}/editar', [
            'as' => 'pages.edit',
            'uses' => 'PageController@edit',
            'middleware' => ['role:superadmin']
        ]);

        Route::post('{page}/actualizar', [
            'as' => 'pages.update',
            'uses' => 'PageController@update',
            'middleware' => ['role:superadmin']
        ]);

        Route::get('{page}/borrar', [
            'as' => 'pages.destroy',
            'uses' => 'PageController@destroy',
            'middleware' => ['role:superadmin']
        ]);
    });

    // characteristics
    Route::group(['prefix' => 'caracteristicas'], function() {
        Route::get('/', [
            'as' => 'characteristics.list',
            'uses' => 'CharacteristicController@list',
            'middleware' => ['role:superadmin']
        ]);

        Route::post('listado-ajax', [
            'as' => 'characteristics.ajax-list',
            'uses' => 'CharacteristicController@ajaxList',
            'middleware' => ['role:superadmin']
        ]);

        Route::get('nuevo', [
            'as' => 'characteristics.create',
            'uses' => 'CharacteristicController@create',
            'middleware' => ['role:superadmin']
        ]);

        Route::post('guardar', [
            'as' => 'characteristics.store',
            'uses' => 'CharacteristicController@store',
            'middleware' => ['role:superadmin']
        ]);

        Route::get('{characteristic}/editar', [
            'as' => 'characteristics.edit',
            'uses' => 'CharacteristicController@edit',
            'middleware' => ['role:superadmin']
        ]);

        Route::post('{characteristic}/actualizar', [
            'as' => 'characteristics.update',
            'uses' => 'CharacteristicController@update',
            'middleware' => ['role:superadmin']
        ]);

        Route::get('{characteristic}/borrar', [
            'as' => 'characteristics.destroy',
            'uses' => 'CharacteristicController@destroy',
            'middleware' => ['role:superadmin']
        ]);
    });

    // insights
    Route::group(['prefix' => 'insights'], function() {
        Route::get('/', [
            'as' => 'insights.list',
            'uses' => 'InsightController@list',
            'middleware' => ['role:superadmin']
        ]);

        Route::post('listado-ajax', [
            'as' => 'insights.ajax-list',
            'uses' => 'InsightController@ajaxList',
            'middleware' => ['role:superadmin']
        ]);

        Route::get('nuevo', [
            'as' => 'insights.create',
            'uses' => 'InsightController@create',
            'middleware' => ['role:superadmin']
        ]);

        Route::post('guardar', [
            'as' => 'insights.store',
            'uses' => 'InsightController@store',
            'middleware' => ['role:superadmin']
        ]);

        Route::get('{insight}/editar', [
            'as' => 'insights.edit',
            'uses' => 'InsightController@edit',
            'middleware' => ['role:superadmin']
        ]);

        Route::post('{insight}/actualizar', [
            'as' => 'insights.update',
            'uses' => 'InsightController@update',
            'middleware' => ['role:superadmin']
        ]);

        Route::get('{insight}/borrar', [
            'as' => 'insights.destroy',
            'uses' => 'InsightController@destroy',
            'middleware' => ['role:superadmin']
        ]);
    });

    // contacts
    Route::group(['prefix' => 'contactos'], function() {
        Route::get('/', [
            'as' => 'contacts.list',
            'uses' => 'ContactController@list',
            'middleware' => ['role:superadmin']
        ]);

        Route::post('listado-ajax', [
            'as' => 'contacts.ajax-list',
            'uses' => 'ContactController@ajaxList',
            'middleware' => ['role:superadmin']
        ]);

        // Route::get('nuevo', [
        //     'as' => 'contacts.create',
        //     'uses' => 'ContactController@create',
        //     'middleware' => ['role:superadmin']
        // ]);

        // Route::post('guardar', [
        //     'as' => 'contacts.store',
        //     'uses' => 'ContactController@store',
        //     'middleware' => ['role:superadmin']
        // ]);

        Route::get('{contact}/ver', [
            'as' => 'contacts.show',
            'uses' => 'ContactController@show',
            'middleware' => ['role:superadmin']
        ]);

        // Route::get('{contact}/editar', [
        //     'as' => 'contacts.edit',
        //     'uses' => 'ContactController@edit',
        //     'middleware' => ['role:superadmin']
        // ]);

        // Route::post('{contact}/actualizar', [
        //     'as' => 'contacts.update',
        //     'uses' => 'ContactController@update',
        //     'middleware' => ['role:superadmin']
        // ]);

        Route::get('{contact}/borrar', [
            'as' => 'contacts.destroy',
            'uses' => 'ContactController@destroy',
            'middleware' => ['role:superadmin']
        ]);

        Route::get('exportar', [
            'as' => 'contacts.export',
            'uses' => 'ContactController@export',
            'middleware' => ['role:superadmin']
        ]);
    });

    // landing contacts
    Route::group(['prefix' => 'landing-contactos'], function() {
        Route::get('/', [
            'as' => 'landing_contacts.list',
            'uses' => 'LandingContactController@list',
            'middleware' => ['role:superadmin']
        ]);

        Route::post('listado-ajax', [
            'as' => 'landing_contacts.ajax-list',
            'uses' => 'LandingContactController@ajaxList',
            'middleware' => ['role:superadmin']
        ]);

        // Route::get('nuevo', [
        //     'as' => 'landing_contacts.create',
        //     'uses' => 'LandingContactController@create',
        //     'middleware' => ['role:superadmin']
        // ]);

        // Route::post('guardar', [
        //     'as' => 'landing_contacts.store',
        //     'uses' => 'LandingContactController@store',
        //     'middleware' => ['role:superadmin']
        // ]);

        Route::get('{contact}/ver', [
            'as' => 'landing_contacts.show',
            'uses' => 'LandingContactController@show',
            'middleware' => ['role:superadmin']
        ]);

        // Route::get('{contact}/editar', [
        //     'as' => 'landing_contacts.edit',
        //     'uses' => 'LandingContactController@edit',
        //     'middleware' => ['role:superadmin']
        // ]);

        // Route::post('{contact}/actualizar', [
        //     'as' => 'landing_contacts.update',
        //     'uses' => 'LandingContactController@update',
        //     'middleware' => ['role:superadmin']
        // ]);

        Route::get('{contact}/borrar', [
            'as' => 'landing_contacts.destroy',
            'uses' => 'LandingContactController@destroy',
            'middleware' => ['role:superadmin']
        ]);

        Route::get('exportar', [
            'as' => 'landing_contacts.export',
            'uses' => 'LandingContactController@export',
            'middleware' => ['role:superadmin']
        ]);
    });

});
