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
    return view ('home', [
        "title" => "Home"
    ]);
});


Route::get('/about', function () {
    return view ('about', [
        "title" => "About",
        "name" => "Kareena Kardin",
        "email" => "kareenakardin032@gmail.com",
        "image" => "krdn.jpg"

    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama ",
            "author" => "Kareena Kardin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Maiores molestiae cumque, consequatur iure, obcaecati dicta 
            ipsum alias dolore eos eligendi itaque vitae porro consectetur
            ad dignissimos temporibus quas possimus qui accusantium ipsam
            quisquam neque, exercitationem numquam? Sequi provident expedita
            reiciendis, quo dolorem harum ratione voluptatum consectetur
            mollitia maxime non molestiae adipisci distinctio blanditiis 
            facilis impedit esse assumenda similique nam quae quidem
            exercitationem iure eveniet quis. Velit autem quos 
            voluptate cumque amet! Rem vitae quo maxime cum, amet illum laboriosam modi."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Zahra Dwi",
            "body" => " Lorem ipsum dolor, sit amet consectetur adipisicing
            elit. Aliquam temporibus fuga molestiae facilis cumque 
            iusto sequi, iste saepe minima eligendi nihil veniam, 
            necessitatibus doloremque velit nemo ipsam, doloribus rem. 
            Officiis, animi ipsum? Consequuntur earum, quod facere non 
            magni tempora nam veniam est error optio voluptate perferendis 
            expedita sint minus exercitationem. Atque repellendus expedita ad? 
            Labore alias repellat aspernatur, magni deserunt iste nesciunt veniam 
            assumenda minima ducimus quis perferendis, quia placeat minus sunt? 
            Consequuntur animi nemo voluptate eaque eligendi ullam ipsa autem 
            ut repellendus dignissimos culpa voluptatum, debitis a quasi dolor 
            ratione cumque quas rerum expedita, nesciunt officiis illo molestias sint!"
        ],
        
    ];
    return view ('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama ",
            "author" => "Kareena Kardin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Maiores molestiae cumque, consequatur iure, obcaecati dicta 
            ipsum alias dolore eos eligendi itaque vitae porro consectetur
            ad dignissimos temporibus quas possimus qui accusantium ipsam
            quisquam neque, exercitationem numquam? Sequi provident expedita
            reiciendis, quo dolorem harum ratione voluptatum consectetur
            mollitia maxime non molestiae adipisci distinctio blanditiis 
            facilis impedit esse assumenda similique nam quae quidem
            exercitationem iure eveniet quis. Velit autem quos 
            voluptate cumque amet! Rem vitae quo maxime cum, amet illum laboriosam modi."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Zahra Dwi",
            "body" => " Lorem ipsum dolor, sit amet consectetur adipisicing
            elit. Aliquam temporibus fuga molestiae facilis cumque 
            iusto sequi, iste saepe minima eligendi nihil veniam, 
            necessitatibus doloremque velit nemo ipsam, doloribus rem. 
            Officiis, animi ipsum? Consequuntur earum, quod facere non 
            magni tempora nam veniam est error optio voluptate perferendis 
            expedita sint minus exercitationem. Atque repellendus expedita ad? 
            Labore alias repellat aspernatur, magni deserunt iste nesciunt veniam 
            assumenda minima ducimus quis perferendis, quia placeat minus sunt? 
            Consequuntur animi nemo voluptate eaque eligendi ullam ipsa autem 
            ut repellendus dignissimos culpa voluptatum, debitis a quasi dolor 
            ratione cumque quas rerum expedita, nesciunt officiis illo molestias sint!"
        ],
        
    ];
$new_post =[];
foreach($blog_posts as $post) {
    if($post["slug"]=== $slug) {
        $new_post = $post;
    }
}

    return view ('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
