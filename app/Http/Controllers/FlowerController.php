<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use Illuminate\Http\Request;

class FlowerController extends Controller
{
    public function index(){
        $flowers = Flower::all();
        return view('flowers.index', compact('flowers'));
    }

    public function create(){
        return view('flowers.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'created_at' => 'required|date',
            'updated_at' => 'required|date|after:created_at',
        ]);

        Flower::create($request->all());
        return redirect()->route('flowers.index');
    }

    public function show(string $id){
        $flower = Flower::findOrFail($id);
        return view('flowers.show', compact('flower'));
    }

    public function edit(string $id){
        $flower = Flower::findOrFail($id);
        return view('flowers.edit', compact('flower'));
    }

    public function update(Request $request, string $id){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'created_at' => 'required|date',
            'updated_at' => 'required|date|after:created_at',
        ]);

        $flower = Flower::findOrFail($id);
        $flower->update($request->all());

        return redirect()->route('flowers.show', $flower->id);
    }

    public function destroy(string $id){
        $flower = Flower::findOrFail($id);
        $flower->delete();
        return redirect()->route('flowers.index');
    }
}
