<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',                 'FrontController@getIndex');
Route::get('/about',            'FrontController@getAbout');
Route::get('/composition',      'FrontController@getComposition');
Route::get('/utility',          'FrontController@getUtility');
Route::get('/influence',        'FrontController@getInfluence');
Route::get('/mission',          'FrontController@getMission');
Route::get('/factory',          'FrontController@getFactory');
Route::get('/process',          'FrontController@getProcess');
Route::get('/news',             'FrontController@getNews');
Route::get('/news/{slug}',      'FrontController@getNewsItem');
Route::get('/contacts',         'FrontController@getContacts');
Route::get('/catalog',          'FrontController@getCatalog');
Route::get('/order',            'FrontController@getOrder');



Route::get('/setlocale/{locale}', function ($locale) {

    if (in_array($locale, \Config::get('app.locales'))) {   # Проверяем, что у пользователя выбран доступный язык
        Session::put('locale', $locale);                    # И устанавливаем его в сессии под именем locale
    }

    return redirect()->back();                              # Редиректим его <s>взад</s> на ту же страницу

});

Route::post('/captcha',          'Back\MailController@Captcha');
Route::post('/feedback/mail',    'Back\MailController@send');


Route::auth();
Route::group(['middleware' => 'auth', 'prefix' => 'adm'],function(){

    Route::get('/',         'AdminController@getIndex');


    Route::get('/all',              'AdminController@getAll');
    Route::get('/home-slider',      'AdminController@getHomeSlider');
    Route::get('/home-utility',     'AdminController@getHomeUtility');
    Route::get('/home-influence',   'AdminController@getHomeInfluence');
    Route::get('/home-process',     'AdminController@getHomeProcess');
    Route::get('/seo',              'AdminController@getSeo');
    Route::get('/about',            'AdminController@getAbout');
    Route::get('/composition',      'AdminController@getComposition');
    Route::get('/utility',          'AdminController@getUtility');
    Route::get('/influence',        'AdminController@getInfluence');
    Route::get('/mission',          'AdminController@getMission');
    Route::get('/factory',          'AdminController@getFactory');
    Route::get('/process',          'AdminController@getProcess');
    Route::get('/news',             'AdminController@getNews');
    Route::get('/news/{id}',        'AdminController@getNewsItem');
    Route::get('/contacts',         'AdminController@getContacts');
    Route::get('/contacts/{id}',    'AdminController@getCity');
    Route::get('/goods',            'AdminController@getGoods');
    Route::get('/post',             'AdminController@getPost');
    Route::get('/orders',           'AdminController@getOrders');


    // Таксономия проекта. Визуальная зависимость данных.
    Route::get('/taxonomy', 'Back\TaxonomyController@showTaxonomy');

    // Служебные роуты
    Route::post('/save', 'Back\SaveController@save');

    // Создание нового элемента группы
    Route::post('/newItemRow', 'Back\GroupItemController@newRow');
    Route::post('/newItemBox', 'Back\GroupItemController@newBox');
    Route::post('/newImage', 'Back\GroupItemController@newImageItem');

    // Роут удаление элемента группы
    Route::post('/removeItem', 'Back\GroupItemController@removeItem');
});

