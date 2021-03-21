<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\facades\DB;
use App\Models\Post;
use App\Http\Controllers\BlogController;
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

Route::get('/', function () {
    return view('profile');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('post/add', function(){
    DB::table('post')->insert([
        'title'=>'Harry Potter and the Philosopher Stone',
        'body'=>'2001 fantasy film directed by Chris Columbus and distributed by Warner Bros.'
    ]);
});
Route::get('post', function(){
    $post = Post::find(1);
    return $post;
});

Route::get('blog/index', [BlogController::class, 'index']);
