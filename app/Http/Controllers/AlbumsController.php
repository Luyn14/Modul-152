<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Image;

use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    //Add Image
    public function addImage()
    {
        return view('add_image', [
            'albums' => Album::all(),
        ]);
    }

    //Add Album

    public function addAlbum()
    {


        return view('add_album', [

            'images' => Image::all(),


        ]);
    }

    // Edit Album
    public function editAlbum(int $albumId)
    {


        return view('edit_album', [

            'album' => Album::find($albumId),

        ]);
    }

    //Edit Image
    public function editImage(int $imageId)
    {


        return view('edit_image', [

            'image' => Image::find($imageId),
            'albums' => Album::all(),

        ]);
    }

    //Store Album
    public function storeAlbum(Request $request)
    {
        $data = new Album();
        $dataImage = new Image();

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);


            $data['cover_image'] = $filename;
            $data->name = $request->name;
            $data->description = $request->description;
            $data->user_id = auth()->user()->id;
            $data->save();

            $dataImage['image'] = $filename;
            $dataImage->album_id = $data['id'];
        }

        $dataImage->save();
        return redirect('/home');
    }

    //Update Album
    public function updateAlbum(Request $request, int $albumId)
    {

        $data = Album::find($albumId);


        if ($request->file('image')) {
            $dataImage = new Image();
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);


            $data['cover_image'] = $filename;

            $dataImage['image'] = $filename;
            $dataImage->album_id = $data['id'];
        }

        $data->name = $request->name;
        $data->description = $request->description;
        $data->save();

        $dataImage->save();
        return redirect('/profil');
    }

    //Store Image
    public function storeImage(Request $request)
    {
        $data = new Image();

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $data['image'] = $filename;
            $data->album_id = $request->album_id;
        }
        $data->save();
        return redirect('/home');
    }

    //Update Image
    public function updateImage(Request $request, int $imageId)
    {
        $data = Image::find($imageId);
        $data->album_id = $request->album_id;
        $data->save();
        return redirect('/home');
    }


    //View image
    public function viewImage()
    {
        $imageData = Image::all();
        return view('view_image', compact('imageData'));
    }

    // View Album
    public function viewAlbum(Request $request, int $albumId)
    {


        $image = Image::where('album_id', '=', $albumId)->get();
        return view('view_album', [
            'album' => Album::find($albumId),
            'user' => auth()->user(),
        ], compact('image'));
    }
}