<?php

use App\Models\Post;
use App\Models\Fitur;
use App\Models\Contact;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Events\Routing;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'fitur' => Fitur::all(),
    ]);
});

Route::get('/fitur/{slug}', function ($slug) {
    $fiturDetail = Arr::first(Fitur::all(), function ($fiturDetail) use ($slug) {
        return $fiturDetail['slug'] == $slug;
    });

    return view('fitur', ['title' => 'Fitur Kami', 'fitur' => $fiturDetail]);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function ($slug) {
    // Tampilkan 1 artikel / postingan
    $post = Arr::first(Post::all(), function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Article Page', 'post' => $post]);
});

Route::get('/profile', function () {
    return view('profile', ['title' => 'Profile']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact', 'contact' => Contact::all()]);
});
