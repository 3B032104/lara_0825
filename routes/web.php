<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    /* use save() add new data
    $post = new Post();
    $post -> title = 'test title';
    $post -> content = 'test content';
    $post -> save(); //將新貼文 $post 存入 posts table
    return 'save, ok.';
    */
    /* use create() add new data
    Post::create([
        'title' => 'created title',
        'content' => 'created content',
    ]);
    */

    $post = Post::find(1); //尋找posts table id = 1 data
    echo '標題：' . $post -> title . '<br>';
    echo '內容：' . $post -> content . '<br>';
    dd($post); //dump and die
});
