<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Aldo Leonard', 'title' => 'Contact']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Aldo Leonard',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum temporibus natus veniam libero quam, asperiores, neque explicabo harum nostrum excepturi animi. Molestiae et iure doloribus necessitatibus eveniet nulla molestias iste.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Aldo Leonard',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam nostrum provident ipsa quisquam magni possimus sed impedit deleniti molestias cumque. Eum officia illum dignissimos deserunt! Ea adipisci minus perferendis nemo!'
        ]
    ]] );
});

Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Aldo Leonard',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum temporibus natus veniam libero quam, asperiores, neque explicabo harum nostrum excepturi animi. Molestiae et iure doloribus necessitatibus eveniet nulla molestias iste.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Aldo Leonard',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam nostrum provident ipsa quisquam magni possimus sed impedit deleniti molestias cumque. Eum officia illum dignissimos deserunt! Ea adipisci minus perferendis nemo!'
        ]
        ];

        $post = Arr::first($posts, function($post) use ($slug) {
            return $post['slug'] == $slug;
        });

        return view('post', ['title' => 'Single post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
