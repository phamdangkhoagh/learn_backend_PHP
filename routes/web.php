<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
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
// Route::get('/', [EmailController::class, 'index']);
Route::get('/', [HomeController::class, 'getIndex']);


// Route::prefix('tasks')->group(function () {
//     Route::get('/', [HomeController::class, 'getIndex']);
//     Route::get('/create', [HomeController::class, 'getCreate']);
//     Route::post('/store', function(){});
//     Route::get('{id}/edit}', function(){});
//     Route::get('{id}/show}', function(){});
//     Route::patch('{id}/update}', function(){});
//     Route::delete('{id}', function(){});

// });
Route::get('insert', function () {
    DB::table('posts')->insert([
        'title' => 'PHP with laravel',
        'body' => 'Laravel is the best!',
    ]);

    return 'Insert complete!';
});

Route::get('read', function () {
    $result = DB::table('user')
        ->select()
        ->where('id', '=', '2')
        ->get();
    // return $result;
    dd($result);
});

Route::get('update', function () {
    $afected = DB::table('user')
        ->where('id', '=', '2')
        ->update([
            'title' => 'New title',
        ]);

    return 'so ban ghi bi anh huong?' . $afected;
});

Route::get('delete', function () {
    $afected = DB::table('user')
        ->where('id', '=', '2')
        ->delete();
    return 'so ban ghi da bi xoa ' . $afected;
});

Route::get('readAll', function () {
    $post = Post::all();
    // return $post;
    // dd($post);

    foreach ($post as $post) {
        echo $post->title;
    }
});

Route::get('findID', function () {
    $post = Post::find(3);

    echo 'Title: ' . $post->title . '; Body: ' . $post->body;
});

Route::get('find', function () {
    $posts = Post::where('id', '<', 8)
    ->where('title','like','%laravel%')
    ->get();

    foreach ($posts as $post) {
        echo 'Title: ' . $post->title . '; Body: ' . $post->body;
        echo '<br>';
    }
});

Route::get('insertORM',function(){
    $post = new Post();

    $post->title = 'title insert orm';
    $post->body = 'body insert orm';

    $post->save();

    return 'Insert ORM successful!!!';
});

Route::get('updateORM',function(){
    $post = Post::find(1);

    $post->title = 'New update title';
    $post->body = 'New update body';

    $post->save();
});

Route::get('delete',function(){
    // Post::find(1)->delete();
    Post::destroy([7,8]);
});

Route::get('readAllWithCategory', function () {
    $post = Post::all();

    foreach ($post as $post) {
        echo 'Title: ' . $post->title . '; Body: ' . $post->body . '; Category: ' . $post->category->name;
        echo '<br>';
    }
});