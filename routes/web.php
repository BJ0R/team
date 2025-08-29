<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $teamMembers = [
        [
            'name' => 'Name',
            'role' => 'Role',
            'bio' => 'Description',
            'image' => asset('images/BJ.jpg'),
            'portfolio_url' => 'https://bj0r.github.io/profile/'
        ],
        [
            'name' => 'Name',
            'role' => 'Role',
            'bio' => 'Description',
            'image' => asset('images/BJ.jpg'),
            'portfolio_url' => 'https://bj0r.github.io/profile/'
        ],
        [
            'name' => 'Name',
            'role' => 'Role',
            'bio' => 'Description',
            'image' => asset('images/BJ.jpg'),
            'portfolio_url' => 'https://bj0r.github.io/profile/'
        ],
        [
            'name' => 'Name',
            'role' => 'Role',
            'bio' => 'Description',
            'image' => asset('images/BJ.jpg'),
            'portfolio_url' => 'https://bj0r.github.io/profile/'
        ]
    ];

    return view('welcome', ['teamMembers' => $teamMembers]);
});