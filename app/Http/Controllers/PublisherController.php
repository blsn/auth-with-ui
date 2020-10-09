<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\User;


class PublisherController extends Controller
{
    // public function __construct()
    // {
    //     // $this->middleware('auth');
    //     $this->middleware('auth', ['except' => ['index', 'show']]);
    // }

    // public function index() {
    //     return 'publisher';
    // }

    public function __invoke()
    {
        return 'publisher';
    }
}
