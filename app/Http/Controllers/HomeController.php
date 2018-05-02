<?php

namespace App\Http\Controllers;

use App\Colors;
use App\Models\Clothes;
use App\Models\Prints;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $path = public_path() . '/img/templates/';
        $images = self::getFiles($path);
        $shirts = Clothes::all();
        $colors = Colors::all();
        $prints = Prints::all();
        return view('welcome',compact('colors','images','shirts','prints'));
    }

    private static function getFiles($path)
    {
        if (is_dir($path)) {
            $files = array_diff(scandir($path), array('.', '..'));
        } else {
            $files = [];
        }
        return $files;
    }
}
