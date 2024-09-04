<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            ['id' => 1, 'title' => 'Senior Software Engineer', 'company' => 'XYZ Corp.', 'location' => 'New York, NY'],
            ['id' => 2, 'title' => 'Junior Frontend Developer', 'company' => 'ABC Inc.', 'location' => 'Los Angeles, CA'],
            ['id' => 3, 'title' => 'Project Manager', 'company' => 'DEF Solutions', 'location' => 'Chicago, IL'],
        ],
    ]);
});

Route::get('/jobs/{id}', function ($id) {
        $jobs = [
            ['id' => 1, 'title' => 'Senior Software Engineer', 'company' => 'XYZ Corp.', 'location' => 'New York, NY'],
            ['id' => 2, 'title' => 'Junior Frontend Developer', 'company' => 'ABC Inc.', 'location' => 'Los Angeles, CA'],
            ['id' => 3, 'title' => 'Project Manager', 'company' => 'DEF Solutions', 'location' => 'Chicago, IL'],
        ];

    $job = collect($jobs)->firstWhere('id', $id);

    return view('jobs', $job);
});

Route::get('/contact', function () {
    return view('contact');
});