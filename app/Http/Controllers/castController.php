<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cast;

class castController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $cast = cast::all();

       return view('cast.index', ['cast' =>$cast]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cast.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate([
            'name' => 'required|min:4',
            'umur' => 'required',
            'bio' => 'required',
        ]);
        
        $cast = new cast;
 
        $cast->name = $request->name;
        $cast->umur = $request->umur;
        $cast->bio= $request->bio;
 
        $cast->save();

        return redirect('/cast');
 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cast = cast::find($id);
        
        return view('cast.detail', ['cast' =>$cast]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cast = cast::find($id);
        
        return view('cast.edit', ['cast' =>$cast]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|min:4',
            'umur' => 'required',
            'bio' => 'required',
        ]);
    
        cast::where('id', $id)
            ->update(
                [
                    'name' => $request->input('name'),
                    'umur' => $request->input('umur'),
                    'bio' => $request->input('bio'),
                ]
            );
            return redirect('/cast');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cast = cast::find($id);
        $cast->delete();

        return redirect('/cast');
    }
}
