<?php

namespace App\Http\Controllers;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware( 'auth' );
    }
    public function index()
    {
        $images = Image::where( 'user_id' , '=' , Auth::id() )->get();
        return view('images' , compact('images') );
    }

    public function store( Request $request )
    {   
        $this->validate( $request, [
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image = $request->file('file');
        
        $path = $image->store('public');

        Image::create([
                'user_id' => Auth::id(),
                'path' => $image->hashName(),
                'name' => $image->getClientOriginalName(),
                'type' => $image->extension(),
                'size' => $image->getClientSize()
        ]);
        return back()->with('success' , 'uploaded done');
    }
}
