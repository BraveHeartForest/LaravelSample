<?php

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

/*文字表示*/
// Route::get(
//     '/',function(){
//         return 'Hello World';
//     }
// );

/*viewルート表示 */
Route::get('/', function () {
    return view('welcome');
});

// /* Controllerへのルート定義メソッド*/
// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);

// Route::match(['get', 'post'],$uri, $callback);

use App\Http\Middleware\HelloMiddleware;

Route::get('hello', 'HelloController@index'); //helloにアクセスした際、HelloControllerのindexメソッドを実行せよ
Route::post('hello', 'HelloController@post'); //helloにPOSTでアクセスした際、HelloControllerのpostメソッドを実行せよ

//myviewにアクセスした際、メソッドを実行して値をviewに返しなさい
Route::get('myview', function(){
    $name = 'Hayakawa';
    return View::make('myview')->with('name', $name);
});

Route::get('/login', 'LoginsController@getIndex');
Route::post('/login', 'LoginsController@postIndex');


Route::get('/data', 'LoginsController@getIndex');
// Route::get('/data', 'Article\ArticlesController@index');


//一覧画面表示




//新規登録画面表示
Route::get('/article', 'Article\ArticlesController@getIndex');
// Route::post('/article', 'Article\ArticlesController@confirm_newdata');
//新規登録内容確認画面表示
Route::get('/article/confirm', 'Article\ArticlesController@getIndex');
Route::post('/article/confirm', 'Article\ArticlesController@confirm_newdata');
//新規登録実行
Route::post('/article/complete','Article\ArticlesController@store');
//一覧に戻る/一覧表示
Route::get('/index', 'Article\ArticlesController@index');
Route::post('/index', 'Article\ArticlesController@index');

//編集画面へ遷移
Route::get('/article/edit/{id}', 'Article\ArticlesController@send_data');
//編集内容確認画面へ遷移

Route::post('/article/editconfirm', 'Article\ArticlesController@confirm_editdata');
//編集実行


Route::post('/article/edit_complete','Article\ArticlesController@edit');

//削除確認画面へ遷移
Route::get('/article/deleteconfirm/{id}', 'Article\ArticlesController@confirm_deletedata');
//削除実行
Route::post('/article/delete_complete','Article\ArticlesController@destroy')->name('article_destroy');



Route::get('hello/{msg?}', function($msg="no message.") {
$html = <<<EOF
<html>
<head>
<title>
Hello
</title>
<style>
body {font-size: 16px; color:#999;}
h1 {font-size: 100px; text-align: right; color:#eee; margin: -40px 0px -50px 0px;}
</style>
</head>
<body>
    <h1>Hello</h1>
    <p>{$msg}</p>
    <p>これはサンプルで作ったページです。</p>
</body>
</html>
EOF;

    return $html;
});