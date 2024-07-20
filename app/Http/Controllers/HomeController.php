<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            [
                "id" => "286",
                "url" => "https://cdn2.thecatapi.com/images/286.jpg",
                "width" => 624,
                "height" => 420
            ],
            [
                "id" => "3ql",
                "url" => "https://cdn2.thecatapi.com/images/3ql.jpg",
                "width" => 458,
                "height" => 640
            ],
            [
                "id" => "5ou",
                "url" => "https://cdn2.thecatapi.com/images/5ou.jpg",
                "width" => 500,
                "height" => 333
            ],
            [
                "id" => "aa2",
                "url" => "https://cdn2.thecatapi.com/images/aa2.jpg",
                "width" => 480,
                "height" => 640
            ],
            [
                "id" => "b8o",
                "url" => "https://cdn2.thecatapi.com/images/b8o.jpg",
                "width" => 500,
                "height" => 335
            ],
            [
                "id" => "bkv",
                "url" => "https://cdn2.thecatapi.com/images/bkv.jpg",
                "width" => 800,
                "height" => 600
            ],
        ];

        return view('home', ['data' => $data]);
    }
}
