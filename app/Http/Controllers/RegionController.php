<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function index(){
        $regions = Region::all();
        return view('regions.index', compact('regions'));
    }

    public function create(){
        $flowers = Flower::all();
        return view('regions.create');
    }

    public function store(Request $request){
        $request->validate([
            'flower_id' => 'required',
            'region_name' => 'required',
            'created_at' => 'required|date',
            'updated_at' => 'required|date|after:created_at',
        ]);

        Region::create($request->all());
        return redirect()->route('regions.index');
    }

    public function show(string $id){
        $region = Region::findOrFail($id);
        return view('regions.show', compact('region'));
    }

    public function edit(string $id){
        $region = Region::findOrFail($id);
        return view('regions.edit', compact('region'));
    }

    public function update(Request $request, string $id){
        $request->validate([
            'flower_id' => 'required',
            'region_name' => 'required',
            'created_at' => 'required|date',
            'updated_at' => 'required|date|after:created_at',
        ]);

        $region = Region::findOrFail($id);
        $region->update($request->all());

        return redirect()->route('regions.show', $region->id);
    }

    public function destroy(string $id){
        $region = Region::findOrFail($id);
        $region->delete();
        return redirect()->route('regions.index');
    }   
}
