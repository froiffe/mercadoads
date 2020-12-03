<?php

use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// if( Session::has('locale') ) {
//     App::setLocale(Session::get('locale'));
// }

// 301
Route::group(['domain' => 'publicidad-mercadolibre.com'], function() {
    Route::redirect('/', 'https://mercadoads.com', 301);
    Route::redirect('/soluciones', 'https://mercadoads.com/soluciones', 301);
    Route::redirect('/soluciones/main-slider', 'https://mercadoads.com/soluciones/home-slider', 301);
    Route::redirect('/soluciones/billboard', 'https://mercadoads.com/soluciones/home-billboard', 301);
    Route::redirect('/soluciones/top-search-banner', 'https://mercadoads.com/soluciones/top-search-banner', 301);
    Route::redirect('/soluciones/search-banner', 'https://mercadoads.com/soluciones/search-skyscraper', 301);
    Route::redirect('/soluciones/brandformance', 'https://mercadoads.com/soluciones/search-brandformance', 301);
    Route::redirect('/soluciones/product-ads', 'https://mercadoads.com/soluciones/product-ads', 301);
    Route::redirect('/soluciones/display-banner', 'https://mercadoads.com/soluciones/product-page-rectangle', 301);
    Route::redirect('/soluciones/fullscreen-ads', 'https://mercadoads.com/soluciones/product-fullscreen', 301);
    Route::redirect('/soluciones/super-banner', 'https://mercadoads.com/soluciones/myml-leaderboard', 301);
    Route::redirect('/soluciones/half-banner', 'https://mercadoads.com/soluciones/myml-leaderboard', 301);
    Route::redirect('/soluciones/sponsored-deals', 'https://mercadoads.com/soluciones/deal-brand-channel', 301);
    Route::redirect('/soluciones/landings-customizadas', 'https://mercadoads.com/soluciones/landing-page-custom', 301);
    Route::redirect('/soluciones/patrocinio-eventos', 'https://mercadoads.com/soluciones/sponsored-eventos', 301);
    Route::redirect('/soluciones/servicios-relacionados', 'https://mercadoads.com/soluciones/servicios-relacionados', 301);
    Route::redirect('/audiencias', 'https://mercadoads.com/audiencias', 301);
    Route::redirect('/insights', 'https://mercadoads.com/insights', 301);
    Route::redirect('/insights/smartphones', 'https://mercadoads.com/insights/compradores-smartphones-celulares', 301);
    Route::redirect('/insights/laptops', 'https://mercadoads.com/insights/compradores-laptops-y-accesorios', 301);
    Route::redirect('/insights/cabello', 'https://mercadoads.com/insights/customer-journey-productos-para-el-cabello', 301);
    Route::redirect('/insights/limpieza', 'https://mercadoads.com/insights/compradores-productos-de-limpieza', 301);
    Route::redirect('/insights/paniales', 'https://mercadoads.com/insights/venta-de-paniales', 301);
    Route::redirect('/insights/electrodomesticos', 'https://mercadoads.com/insights/compradores-electrodomesticos', 301);
    Route::redirect('/insights/tv', 'https://mercadoads.com/insights/compradores-televisores', 301);
    Route::redirect('/insights/trends', 'https://mercadoads.com/insights/tendencias-ecommerce', 301);
    Route::redirect('/insights/covid', 'https://mercadoads.com/insights/impactos-del-covid-en-el-comportamiento-del-consumidor', 301);
    Route::redirect('/insights/hot-sale', 'https://mercadoads.com/insights/comportamiento-consumidor-hotsale', 301);
    Route::redirect('/insights/hot-sale-argentina', 'https://mercadoads.com/insights/consumidor-hotsale-argentina', 301);
    Route::redirect('/insights/kantar', 'https://mercadoads.com/insights/marketplaces-medios-efectivos-para-campañas-de-branding', 301);
    Route::redirect('/casos-de-exito', 'https://mercadoads.com/casos-de-exito', 301);
    Route::redirect('/casos-de-exito/Citroen-buscaron-audiencia-encontraron-compradores', 'https://mercadoads.com/casos-de-exito/citroen-buscaron-audiencia-encontraron-compradores', 301);
    Route::redirect('/casos-de-exito/samsung-un-lanzamiento-a-medida-del-usuario', 'https://mercadoads.com/casos-de-exito/samsung-un-lanzamiento-a-medida-del-usuario', 301);
    Route::redirect('/casos-de-exito/Huawei-un-evento-puso-a-su-marca-en-boca-de-todos', 'https://mercadoads.com/casos-de-exito/huawei-un-evento-puso-a-su-marca-en-boca-de-todos', 301);
    Route::redirect('/casos-de-exito/ford-revolucionaron-su-negocio-vendiendo-online', 'https://mercadoads.com/casos-de-exito/ford-revolucionaron-su-negocio-vendiendo-online', 301);
    Route::redirect('/por-que-nosotros', 'https://mercadoads.com/por-que-nosotros', 301);
    Route::redirect('/contacto', 'https://mercadoads.com/contacto', 301);
});

Route::group(['domain' => 'publicidade-mercadolivre.com'], function() {
    Route::redirect('/', 'https://mercadoads.com', 301);
    Route::redirect('/solucoes', 'https://mercadoads.com/solucoes', 301);
    Route::redirect('/solucoes/main-slider', 'https://mercadoads.com/solucoes/home-slider', 301);
    Route::redirect('/solucoes/billboard', 'https://mercadoads.com/solucoes/home-billboard', 301);
    Route::redirect('/solucoes/top-search-banner', 'https://mercadoads.com/solucoes/top-search-banner', 301);
    Route::redirect('/solucoes/search-banner', 'https://mercadoads.com/solucoes/search-skyscraper', 301);
    Route::redirect('/solucoes/brandformance', 'https://mercadoads.com/solucoes/search-brandformance', 301);
    Route::redirect('/solucoes/product-ads', 'https://mercadoads.com/solucoes/product-ads', 301);
    Route::redirect('/solucoes/arroba', 'https://mercadoads.com/solucoes/product-page-rectangle', 301);
    Route::redirect('/solucoes/fullscreen-ads', 'https://mercadoads.com/solucoes/product-fullscreen', 301);
    Route::redirect('/solucoes/super-banner', 'https://mercadoads.com/solucoes/myml-leaderboard', 301);
    Route::redirect('/solucoes/half-banner', 'https://mercadoads.com/solucoes/myml-leaderboard', 301);
    Route::redirect('/solucoes/sponsored-deals', 'https://mercadoads.com/solucoes/deal-brand-channel', 301);
    Route::redirect('/solucoes/landings-customizadas', 'https://mercadoads.com/solucoes/landing-page-custom', 301);
    Route::redirect('/solucoes/patrocinio-eventos', 'https://mercadoads.com/solucoes/sponsored-eventos', 301);
    Route::redirect('/solucoes/servicios-relacionados', 'https://mercadoads.com/solucoes/servicios-relacionados', 301);
    Route::redirect('/audiencias', 'https://mercadoads.com/audiencias', 301);
    Route::redirect('/insights', 'https://mercadoads.com/insights', 301);
    Route::redirect('/insights/smartphones', 'https://mercadoads.com/insights/compradores-smartphones-celulares', 301);
    Route::redirect('/insights/laptops', 'https://mercadoads.com/insights/compradores-laptops-e-acessorios', 301);
    Route::redirect('/insights/cabelo', 'https://mercadoads.com/insights/produtos-para-cabelo-da-jornada-do-cliente', 301);
    Route::redirect('/insights/limpeza', 'https://mercadoads.com/insights/comradores-produtos-de-limpieza', 301);
    Route::redirect('/insights/fraldas', 'https://mercadoads.com/insights/venda-de-fraldas', 301);
    Route::redirect('/insights/eletrodomesticos', 'https://mercadoads.com/insights/compradores-electrodomesticos', 301);
    Route::redirect('/insights/tv', 'https://mercadoads.com/insights/compradores-televisores', 301);
    Route::redirect('/insights/trends', 'https://mercadoads.com/insights/tendencias-de-comercio-eletronico', 301);
    Route::redirect('/insights/covid', 'https://mercadoads.com/insights/os-impactos-do-covid-no-comportamento-do-consumidor', 301);
    // Route::redirect('/insights/hot-sale', 'Estos reportes no estan en PT', 301);
    // Route::redirect('/insights/hot-sale-argentina', 'Estos reportes no estan en PT', 301);
    Route::redirect('/insights/kantar', 'https://mercadoads.com/insights/marketplaces-entre-os-meios-mais-eficazes-do-setor-para-campanhas-de-branding', 301);
    Route::redirect('/casos-de-sucesso', 'https://mercadoads.com/casos-de-sucesso', 301);
    Route::redirect('/casos-de-exito/Citroen-buscaron-audiencia-encontraron-compradores', 'https://mercadoads.com/casos-de-sucesso/citroen-estavam-em-busca-de-audiencias-e-encontraram-compradores', 301);
    Route::redirect('/casos-de-exito/samsung-un-lanzamiento-a-medida-del-usuario', 'https://mercadoads.com/casos-de-sucesso/um-lancamento-sob-medida-para-o-usuario', 301);
    Route::redirect('/casos-de-exito/Huawei-un-evento-puso-a-su-marca-en-boca-de-todos', 'https://mercadoads.com/casos-de-sucesso/Huawei-um-evento-coloque-sua-marca-na-boca-de-todos', 301);
    Route::redirect('/casos-de-exito/ford-revolucionaron-su-negocio-vendiendo-online', 'https://mercadoads.com/casos-de-sucesso/ford-revolucionaram-seus-negocios-vendendo-online', 301);
    Route::redirect('/por-que-nosotros', 'https://mercadoads.com/por-que-nos', 301);
    Route::redirect('/contacto', 'https://mercadoads.com/contato', 301);
});

Route::post('change-language', [
    'as' => 'change-language',
    'uses' => 'HomeController@changeLanguage'
]);

Route::group(['middleware' => 'setlocale'], function() {

    Route::get('/sitemap.xml', 'SitemapController@index')->name('sitemap.xml');

    foreach(config('languages') as $locale) {
        app()->setLocale($locale);

        Route::get('/', [
            'as' => 'home',
            'uses' => 'HomeController@home',
            // 'middleware' => 'page-cache'
        ]);

        Route::get(trans('routes.why-meli'), [
            'as' => 'why-meli',
            'uses' => 'HomeController@whyMeli',
            // 'middleware' => 'page-cache'
        ]);

        Route::get(trans('routes.contact'), [
            'as' => 'contact',
            'uses' => 'HomeController@contact',
            // 'middleware' => 'page-cache'
        ]);

        Route::get(trans('routes.landings.awards2020'), [
            'as' => 'landings.awards2020',
            'uses' => 'HomeController@landingAwards2020',
        ]);

        Route::get(trans('routes.landings.ganadores2020'), [
            'as' => 'landings.ganadores2020',
            'uses' => 'HomeController@landingGanadores2020',
        ]);

        Route::post('contact-send', [
            'as' => 'contact-send',
            'uses' => 'HomeController@doContact'
        ]);

        Route::get(trans('routes.contact-success'), [
            'as' => 'contact-success',
            'uses' => 'HomeController@contactSuccess'
        ]);

        Route::get(trans('routes.contact-success-agency'), [
            'as' => 'contact-success-agency',
            'uses' => 'HomeController@contactSuccess'
        ]);

        Route::post(trans('routes.solutions.filter'), [
            'as' => 'solutions.filter',
            'uses' => 'SolutionController@filter'
        ]);

        Route::group(['prefix' => trans('routes.solutions')], function() {
            Route::get('/', [
                'as' => 'solutions',
                'uses' => 'SolutionController@index',
                // 'middleware' => 'page-cache'
            ]);

            Route::get('{slug}', [
                'as' => 'solutions.details',
                'uses' => 'SolutionController@details'
            ]);
        });

        Route::get(trans('routes.solutions-media'), [
            'as' => 'solutions-media',
            'uses' => 'SolutionController@media',
            // 'middleware' => 'page-cache'
        ]);

        Route::get(trans('routes.solutions-supermercado-libre'), [
            'as' => 'solutions-supermercado-libre',
            'uses' => 'SolutionController@supermercadolibre',
            // 'middleware' => 'page-cache'
        ]);

        Route::get(trans('routes.solutions-audience-deals'), [
            'as' => 'solutions-audience-deals',
            'uses' => 'SolutionController@audienceDeals',
            // 'middleware' => 'page-cache'
        ]);

        Route::post(trans('routes.solutions.filtered'), [
            'as' => 'solutions.filtered',
            'uses' => 'SolutionController@index',
            // 'middleware' => 'page-cache'
        ]);

        Route::get(trans('routes.audiences'), [
            'as' => 'audiences',
            'uses' => 'AudienceController@index',
            // 'middleware' => 'page-cache'
        ]);

        Route::group(['prefix' => trans('routes.insights')], function() {
            Route::get('/', [
                'as' => 'insights',
                'uses' => 'InsightController@index',
                // 'middleware' => 'page-cache'
            ]);

            // Route::get('{slug}', [
            //     'as' => 'insights.details',
            //     'uses' => 'InsightController@details'
            // ]);
        });

        Route::post(trans('routes.insights.save-contact'), [
            'as' => 'insights.save-contact',
            'uses' => 'InsightController@saveContact'
        ]);

        Route::get(trans('routes.insights.trends'), [
            'as' => 'insights.trends',
            'uses' => 'InsightController@indexTrends',
            // 'middleware' => 'page-cache'
        ]);

        Route::get(trans('routes.insights.covid'), [
            'as' => 'insights.covid',
            'uses' => 'InsightController@indexCovid',
            // 'middleware' => 'page-cache'
        ]);

        Route::get(trans('routes.insights.covid-2'), [
            'as' => 'insights.covid-2',
            'uses' => 'InsightController@indexCovid2',
            // 'middleware' => 'page-cache'
        ]);

        Route::get(trans('routes.insights.hot-sale'), [
            'as' => 'insights.hot-sale',
            'uses' => 'InsightController@indexHotSale',
            // 'middleware' => 'page-cache'
        ]);

        Route::get(trans('routes.insights.hot-sale-argentina'), [
            'as' => 'insights.hot-sale-argentina',
            'uses' => 'InsightController@indexHotSaleArgentina',
            // 'middleware' => 'page-cache'
        ]);

        Route::get(trans('routes.insights.kantar'), [
            'as' => 'insights.kantar',
            'uses' => 'InsightController@indexKantar',
            // 'middleware' => 'page-cache'
        ]);

        Route::get(trans('routes.insights.smartphones'), [
            'as' => 'insights.smartphones',
            'uses' => 'InsightController@indexSmartphones',
            // 'middleware' => 'page-cache'
        ]);

        Route::get(trans('routes.insights.laptops'), [
            'as' => 'insights.laptops',
            'uses' => 'InsightController@indexLaptops',
            // 'middleware' => 'page-cache'
        ]);

        Route::get(trans('routes.insights.cabello'), [
            'as' => 'insights.cabello',
            'uses' => 'InsightController@indexCabello',
            // 'middleware' => 'page-cache'
        ]);

        Route::get(trans('routes.insights.limpieza'), [
            'as' => 'insights.limpieza',
            'uses' => 'InsightController@indexLimpieza',
            // 'middleware' => 'page-cache'
        ]);

        Route::get(trans('routes.insights.pañales'), [
            'as' => 'insights.pañales',
            'uses' => 'InsightController@indexPañales',
            // 'middleware' => 'page-cache'
        ]);

        Route::get(trans('routes.insights.electrodomesticos'), [
            'as' => 'insights.electrodomesticos',
            'uses' => 'InsightController@indexElectrodomesticos',
            // 'middleware' => 'page-cache'
        ]);

        Route::get(trans('routes.insights.tv'), [
            'as' => 'insights.tv',
            'uses' => 'InsightController@indexTV',
            // 'middleware' => 'page-cache'
        ]);

        Route::get(trans('routes.insights.buenfin'), [
            'as' => 'insights.buenfin',
            'uses' => 'InsightController@indexBuenfin',
            // 'middleware' => 'page-cache'
        ]);

    
        Route::get(trans('routes.insights.cybermonday'), [
            'as' => 'insights.cybermonday',
            'uses' => 'InsightController@indexCybermonday',
            // 'middleware' => 'page-cache'
        ]);
    

        Route::get(trans('routes.insights.blackfriday'), [
            'as' => 'insights.blackfriday',
            'uses' => 'InsightController@indexBlackfriday',
            // 'middleware' => 'page-cache'
        ]);

        Route::group(['prefix' => trans('routes.success-stories')], function() {
            Route::get('/', [
                'as' => 'success-stories',
                'uses' => 'SuccessStoryController@index',
                // 'middleware' => 'page-cache'
            ]);

            Route::get('{slug}', [
                'as' => 'success-stories.details',
                'uses' => 'SuccessStoryController@details'
            ]);
        });
    }

});
