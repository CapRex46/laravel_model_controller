<?php

namespace App\Http\Controllers;

use App\MovieModel;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    $data = MovieModel::all();
    dump($data);
    return view('movie.home', compact("data"));
}
