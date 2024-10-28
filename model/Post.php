<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all() {
        return [
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
    }

    public static function find($slug):array {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if(! $post) {
            abort(404);
        }

        return $post;
    }
}