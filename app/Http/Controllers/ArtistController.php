<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArtistController extends Controller
{
    public function index()
    {
        $artists = Artist::all();
        return view('home', ['artists' => $artists]);
    }

    public function index1()
    {
        $artists = Artist::all();
        return view('adminArtist/artist', ['artists' => $artists]);
    }

    public function index2()
    {
        $artists = Artist::all();
        return view('adminArtist/adminArtist', ['artists' => $artists]);
    }

    public function show(string $id)
    {
        $artist = Artist::find($id);
        return view('adminArtist/artistDetail', ['artist' => $artist]);
    }

    public function create()
    {
        return view('adminArtist/adminAddArtist');
    }

    public function edit($id)
    {
        $artist = Artist::find($id);
        return view('adminArtist/adminEditArtist', ['artist' => $artist]);
    }

    public function destroy($id)
    {
        $artist = Artist::find($id);
        $artist->delete();
        return redirect('/admin/artist')->with('success', 'artist deleted successfully.');
    }
    
    public function update(Request $request, $id)
    {
        $artist = Artist::find($id);
        $artist->Name = $request->Name;
        $artist->Product = $request->Product;
        $artist->Sex = $request->Sex;
        $artist->BirthDate = $request->BirthDate;

        $imageName = 'casi_' . Str::slug($request->Name, '_') . '.' . $request->file('Img')->getClientOriginalExtension();
        $artist->Img = $imageName;

        $request->file('Img')->move(public_path('images'), $imageName);

        $artist->Price = $request->Price;
        $artist->Description = $request->Description;

        $artist->save();
        return redirect('/admin/artist')->with('success', 'Artist updated successfully.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Product' => 'required',
            'Sex' => 'required',
            'BirthDate' => 'required',
            'Img' => 'required|image|mimes:jpeg,png,jpg,gif',
            'Price' => 'required',
            'Description' => 'required',
        ], [
            'required' => 'Vui lòng điền đầy đủ thông tin.',
            'image' => 'Tệp phải là hình ảnh.',
            'mimes' => 'Định dạng hình ảnh không hợp lệ.',
        ]);

        $artist = new Artist();
        $artist->Name = $request->Name;
        $artist->Product = $request->Product;
        $artist->Sex = $request->Sex;
        $artist->BirthDate = $request->BirthDate;

        $imageName = 'casi_' . Str::slug($request->Name, '_') . '.' . $request->file('Img')->getClientOriginalExtension();
        $artist->Img = $imageName;

        $request->file('Img')->move(public_path('images'), $imageName);

        $artist->Price = $request->Price;
        $artist->Description = $request->Description;

        $artist->save();
        return redirect('/admin/artist')->with('success', 'Artist created successfully.');
    }
 
}
