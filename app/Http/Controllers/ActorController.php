<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ActorController extends Controller
{
    public function index()
    {
        $actors = Actor::all();
        return view('home', ['actors' => $actors]);
    }

    public function index1()
    {
        $actors = Actor::all();
        return view('adminActor/actor', ['actors' => $actors]);
    }

    public function index2()
    {
        $actors = Actor::all();
        return view('adminActor/adminActor', ['actors' => $actors]);
    }

    public function show(string $id)
    {
        $actor = Actor::find($id);
        return view('adminActor/actorDetail', ['actor' => $actor]);
    }

    public function create()
    {
        return view('adminActor/adminAddActor');
    }

    public function edit($id)
    {
        $actor = Actor::find($id);
        return view('adminActor/adminEditActor', ['actor' => $actor]);
    }

    public function destroy($id)
    {
        $actor = Actor::find($id);
        $actor->delete();
        return redirect('/admin/actor')->with('success', 'actor deleted successfully.');
    }
    
    public function update(Request $request, $id)
    {
        $actor = Actor::find($id);
        $actor->Name = $request->Name;
        $actor->Product = $request->Product;
        $actor->Sex = $request->Sex;
        $actor->BirthDate = $request->BirthDate;

        // $imageName = 'cs_' . Str::slug($request->Name, '_') . '.' . $request->file('Img')->getClientOriginalExtension();
        // $actor->Img = $imageName;

        if ($request->hasFile('Img') && $request->file('Img')->isValid()) {
            $imageName = 'dv_' . Str::slug($request->Name, '_') . '.' . $request->file('Img')->getClientOriginalExtension();
            $actor->Img = $imageName;
            $request->file('Img')->move(public_path('images'), $imageName);
        }

        // $request->file('Img')->move(public_path('images'), $imageName);

        $actor->Price = $request->Price;
        $actor->Description = $request->Description;

        $actor->save();
        return redirect('/admin/actor')->with('success', 'Actor updated successfully.');
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

        $actor = new Actor();
        $actor->Name = $request->Name;
        $actor->Product = $request->Product;
        $actor->Sex = $request->Sex;
        $actor->BirthDate = $request->BirthDate;

        $imageName = 'dv_' . Str::slug($request->Name, '_') . '.' . $request->file('Img')->getClientOriginalExtension();
        $actor->Img = $imageName;

        // if ($request->hasFile('Img') && $request->file('Img')->isValid()) {
        //     $imageName = 'cs_' . Str::slug($request->Name, '_') . '.' . $request->file('Img')->getClientOriginalExtension();
        //     $actor->Img = $imageName;
        //     $request->file('Img')->move(public_path('images'), $imageName);
        // }

        $request->file('Img')->move(public_path('images'), $imageName);

        $actor->Price = $request->Price;
        $actor->Description = $request->Description;

        $actor->save();
        return redirect('/admin/actor')->with('success', 'Actor created successfully.');
    }
 
}
