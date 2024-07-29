<?php

use Illuminate\Routing\Events\Routing;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home', 'fitur' => [
        [
            'id' => 1,
            'svg' => '<svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z" clip-rule="evenodd" />
                  </svg>',
            'title' => 'Pengiriman Cepat, Gratis Ongkir.',
            'desc' => 'Nunggu sebentar doang, lebih cepat dari Anda bisa bilang "Saya Lapar :(".',
        ],
        [
            'id' => 2,
            'svg' => '<svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                  </svg>',
            'title' => 'Sertifikasi Halal.',
            'desc' => 'Terverifikasi halal, aman dimakan tidak ada unsur haram! Sudah dicoba RizEat Review Cik!!',
        ],
        [
            'id' => 3,
            'svg' => '<svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M4.632 3.533A2 2 0 016.577 2h6.846a2 2 0 011.945 1.533l1.976 8.234A3.489 3.489 0 0016 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234z" />
                    <path fill-rule="evenodd" d="M4 13a2 2 0 100 4h12a2 2 0 100-4H4zm11.24 2a.75.75 0 01.75-.75H16a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75h-.01a.75.75 0 01-.75-.75V15zm-2.25-.75a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75h-.01z" clip-rule="evenodd" />
                  </svg>',
            'title' => 'Awet & Selalu Fresh.',
            'desc' => 'Es Krim dengan resep yang disempurnakan, tahan lama, dan rasa selalu terjamin. Simpan untuk cucu Anda!',
        ],
    ]]);
});

Route::get('/fitur/{id}', function ($id) {
    $fitur = [
        [
            'id' => 1,
            'svg' => '<svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z" clip-rule="evenodd" />
                  </svg>',
            'title' => 'Pengiriman Cepat, Gratis Ongkir.',
            'desc' => 'Nunggu sebentar doang, lebih cepat dari Anda bisa bilang "Saya Lapar :(".',
        ],
        [
            'id' => 2,
            'svg' => '<svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                  </svg>',
            'title' => 'Sertifikasi Halal.',
            'desc' => 'Terverifikasi halal, aman dimakan tidak ada unsur haram! Sudah dicoba RizEat Review Cik!!',
        ],
        [
            'id' => 3,
            'svg' => '<svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M4.632 3.533A2 2 0 016.577 2h6.846a2 2 0 011.945 1.533l1.976 8.234A3.489 3.489 0 0016 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234z" />
                    <path fill-rule="evenodd" d="M4 13a2 2 0 100 4h12a2 2 0 100-4H4zm11.24 2a.75.75 0 01.75-.75H16a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75h-.01a.75.75 0 01-.75-.75V15zm-2.25-.75a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75h-.01z" clip-rule="evenodd" />
                  </svg>',
            'title' => 'Awet & Selalu Fresh.',
            'desc' => 'Es Krim dengan resep yang disempurnakan, tahan lama, dan rasa selalu terjamin. Simpan untuk cucu Anda!',
        ],
    ];

    $fiturDetail = Arr::first($fitur, function($fiturDetail) use ($id){
        return $fiturDetail['id'] == $id;
    });

    return view('fitur', ['title'=>'Fitur Kami', 'fitur'=>$fiturDetail]);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'judul' => 'Judul Artikel 1',
            'author' => 'Admin SMK Pesat',
            'date' => '29 Juli 2024',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius consequuntur et totam optio sed, quos, nobis consectetur vitae corporis aspernatur vero! Voluptate nisi nulla, ipsa earum numquam eligendi ad et!'
        ], 
        [
            'id' => 2,
            'judul' => 'Judul Artikel 2',
            'author' => 'Da Wei',
            'date' => '27 Juli 2024',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius consequuntur et totam optio sed, quos, nobis consectetur vitae corporis aspernatur vero! Voluptate nisi nulla, ipsa earum numquam eligendi ad et!'
        ], 
        [
            'id' => 3,
            'judul' => 'Judul Artikel 3',
            'author' => 'Zaki Indomie',
            'date' => '25 Juli 2024',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius consequuntur et totam optio sed, quos, nobis consectetur vitae corporis aspernatur vero! Voluptate nisi nulla, ipsa earum numquam eligendi ad et!'
        ], 
    ]]);
});

Route::get('/posts/{id}', function ($id) {
    // dd($id);
    $posts = [
        [
            'id' => 1,
            'judul' => 'Judul Artikel 1',
            'author' => 'Admin SMK Pesat',
            'date' => '29 Juli 2024',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius consequuntur et totam optio sed, quos, nobis consectetur vitae corporis aspernatur vero! Voluptate nisi nulla, ipsa earum numquam eligendi ad et!'
        ],
        [
            'id' => 2,
            'judul' => 'Judul Artikel 2',
            'author' => 'Da Wei',
            'date' => '27 Juli 2024',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius consequuntur et totam optio sed, quos, nobis consectetur vitae corporis aspernatur vero! Voluptate nisi nulla, ipsa earum numquam eligendi ad et!'
        ],
        [
            'id' => 3,
            'judul' => 'Judul Artikel 3',
            'author' => 'Zaki Indomie',
            'date' => '25 Juli 2024',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius consequuntur et totam optio sed, quos, nobis consectetur vitae corporis aspernatur vero! Voluptate nisi nulla, ipsa earum numquam eligendi ad et!'
        ],
    ];

    // Tampilkan 1 artikel / postingan
    $post = Arr::first($posts, function($post) use ($id){
        return $post['id'] == $id;
    });

    return view('post', ['title'=>'Article Page', 'post'=>$post]);
});

Route::get('/profile', function () {
    return view('profile', ['title' => 'Profile']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
