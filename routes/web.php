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

Route::get('/', function () {
    //return view('welcome');

    /*\App\Post::create([
        'title' => 'test title',
        'content' => 'test content',
     ]);*/
    
     /*$post = new \App\Post();
     $post->title = 'test title';
     $post->content = 'test content';
     $post->save();*/

     /*$post = \App\Post::all();
     dd($post);*/

     /*$post = \App\Post::find(1);
     dd($post);*/

     /*$post = \App\Post::where('id','c',10)->orderBy('id','DESC')->get();
     dd($post);*/
   
     /*$post = \App\Post::find(4);
     $post->update([
        'title' => 'test title',
        'content' => 'test content',
     ]);*/

     /*$post = \App\Post::find(5);
     $post->title = 'saved title 5';
     $post->content = 'saved content 5';
     $post->save();*/

     /*$post = \App\Post::find(1);
     $post->delete();*/
     
     //\App\Post::destroy(2);

     //\App\Post::destroy(3, 5, 7);

     /*$allPosts = \App\Post::all();
     dd($allPosts);
     $featuredPosts = \App\Post::where('is_feature',1)->get();
     dd($featuredPosts);*/

    /*$fourthPost = \App\Post::find(4);
    dd($fourthPost);
    $lastPost = \App\Post::orderBy('id','DESC')->first();
    dd($lastPost);*/

    $post = \App\Post::find(4);
    foreach($post->comments as $comment)
    {
        echo $comment->title.'<br>';
    }

});



