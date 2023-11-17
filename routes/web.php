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

    /* use find() select posts table id = 1 data
    $post = Post::find(1); //
    echo '標題：' . $post -> title . '<br>';
    echo '內容：' . $post -> content . '<br>';
    dd($post); //dump and die
    */

    /* use all() select posts table all data
    $post = new Post();
    $posts = Post::all(); //take out all post data
    foreach ($posts as $post){
        echo '編號：' . $post -> id . '<br>';
        echo '標題：' . $post -> title . '<br>';
        echo '內容：' . $post -> content . '<br>';
        echo '張貼時間：' . $post -> created_at . '<br>';
        echo '----------------------------' . '<br>';
    }
    dd($posts);
    */

    /*use where select posts table id < 10 data
    $posts = Post::where('id', '<', 10) -> orderby('id', 'DESC')->get();
    dd($posts);
    */

    /*use update() update posts table data
    $post = Post::find(1);
    $post->update([
        'title' => 'updated title',
        'content' => 'updated content'
    ]);
    */

    /*use save() update posts table data
    $post = Post::find(1);
    $post -> title = 'saved title';
    $post -> content = 'saved content';
    $post -> save();
    */

    /*use delete() delete posts table id is 1 data
    $post = Post::find(1);
    $post -> delete();
    */

    /*use destroy() delete posts table id is 2 data
    Post::destroy(2);
    */

    /*use destroy() delete posts table id is 3,5,7 data
    Post::destroy(3, 5, 7);
    */

    /*A collection of multiple articles
    $allPosts = Post::all();
    dd($allPosts);
    */

    /*A collection of multiple articles, where()
    $featuredPosts = Post::where('is_feature', 1) -> get();
    dd($featuredPosts);
    */

    /*Get a single post
    $fourthPost = Post::find(4);
    dd($fourthPost);
    */

    /*Get a single post, first()
    $lastPost = Post::orderBy('id', 'DESC') -> first();
    dd($lastPost);
    */

    /*Post 透過 comments() 擷取其所有評論$comments*/
    $post = Post::find(6);
    echo '標題：' . $post -> title . '<br>';
    echo '內容：' . $post -> content . '<br>';
    echo '---------------------------' . '<br>';
    $comments = $post -> comments() -> get();
    foreach ($comments as $comment) {
        echo '留言：' . $comment -> content . '<br>';
        echo '#######################' . '<br>';
    }
});
