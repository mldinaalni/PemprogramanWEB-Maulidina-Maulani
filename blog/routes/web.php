<?php

use Illuminate\Support\Facades\Route;

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
    return view('home [
        "title" => "Home");
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
        "name" => "Maulidina",
        "email" => "mldinalni@gmail.com",
        "image" => 'taehyung.jpg'
    ]);
});

$blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "author" => "Budi",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sint quidem blanditiis ipsum. Aperiam vero reprehenderit nemo, fugit qui saepe dicta eius veritatis blanditiis molestias minus. Rerum quibusdam reiciendis ratione ea placeat ad sint tempore, provident ut iste eius expedita unde dicta quidem quod veniam soluta laboriosam quam officiis vel maiores ducimus et, quas ipsam? Fugit sapiente ipsum suscipit velit nihil illum sequi inventore, veniam dignissimos, alias explicabo ut dolores quae ea voluptatem nostrum sunt consequatur ad, eius quibusdam nulla."
    ],
    [

        "title" => "Judul Post Kedua",
        "author" => "Pratiwi",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur enim sequi impedit et vero laudantium laboriosam exercitationem voluptas ipsam beatae nesciunt assumenda consequatur suscipit expedita voluptate, quidem recusandae sunt minima quasi atque a? Exercitationem illum tempore fuga unde culpa accusantium doloribus dolore vel cumque? Earum corporis, odio, repudiandae, fugit mollitia natus minima error est dolores laudantium officia vero autem provident. Ab repellendus, adipisci beatae quam ea facere est quibusdam reprehenderit saepe dolore doloremque quia vitae labore quos sed quaerat laudantium, quis fugiat hic? A veniam consectetur voluptas animi aperiam voluptatibus eum reiciendis dolorem? Accusantium perferendis non debitis natus reiciendis expedita!"
    ],

        Route::get('/blog', function () {
    return view('posts', [
        "title => "Posts",
        "posts" => $blog_posts
    ]);
});