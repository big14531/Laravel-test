<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show()
    {
        $images = User::find( Auth::id() )->images;

        $total_file = count( $images );
        $total_size = $images->sum('size');

        $file_type =[];
        $sub_array = $images->groupBy('type');

        foreach ($sub_array as $key => $value) {
            $sub_file = count( $sub_array->get($key) );
            $sub_size = $sub_array->get($key)->sum('size');
            array_push( $file_type , [ 'name' => $key, 'count' => $sub_file ,'size' => $sub_size ] );
        }
        return compact('total_file','total_size','file_type');
    }

    public function index()
    {
        return view('layouts.app');
    }
}
