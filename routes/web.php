<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

$car = ["mers","bugati","ferrari","toyota","lamborgini"];

$student = [
    [
        'name'=>'ali',
        'surname'=>'valiyev',
        'age'=>23,
        'img'=>"link"
    ],
    [
        'name'=>'ali',
        'surname'=>'valiyev',
        'age'=>12
    ],
    [
        'name'=>'ali',
        'surname'=>'valiyev',
        'age'=>15
    ],
    [
        'name'=>'ali',
        'surname'=>'valiyev',
        'age'=>25
    ],
    [
        'name'=>'ali',
        'surname'=>'valiyev',
        'age'=>29
    ]
];

$product=[
  [
      'name'=>'samsung',
      'price'=>1233,
      'img'=>"link"
  ],
    [
        'name'=>'samsung',
        'price'=>1233,
        'img'=>"link"
    ],
    [
        'name'=>'samsung',
        'price'=>1233,
        'img'=>"link"
    ],
    [
        'name'=>'samsung',
        'price'=>1233,
        'img'=>"link"
    ],[
        'name'=>'samsung',
        'price'=>1233,
        'img'=>"link"
    ]
];

    return view('index',['car'=>$car,'student'=>$student,'product'=>$product]);
});



