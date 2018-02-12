<?php

namespace App\Http\Controllers;
use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware( 'auth' );
    }
    public function index()
    {
        return view('images');
    }
    public function store( Request $request )
    {   
        $this->validate( $request, [
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $path = $request->file('file')->store( 'file' );
    
        return back()->with($path);
    }
}
