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

    Post::create([
        'title' => 'created title',
        'content' => 'created content',
    ]);

});
