<?php

namespace VigneshAjay\TestPackage\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use VigneshAjay\TestPackage\Models\Note;

class NotesController extends Controller
{
    public function index()
    {
        $notes = Note::all();

        return response()->json($notes);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $note = new Note;

        $name = $request->name;
        $slug = $request->slug;
        $description = $request->name;

        $note->save();

        return response()->json(['message' => 'New note created Successfully'], 200);
    }

    public function show($slug)
    {
        $note = Note::where('slug', $slug)->first();

        // echo "<pre>"; echo $note; exit;
        return response()->json($note);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $slug)
    {
        if($request->isMethod('put')) {
            Note::where('slug', $slug)->update(['name' => $request->name, 'description' => $request->description, 'slug' => $request->slug]);

            return response()->json(['message' => 'Note updated Successfully'], 200);
        }else {
            
            if($request->name) {
                $patch = ['name' => $request->name];
            }elseif($request->description){
                $patch = ['description' => $request->description];
            }elseif($request->slug){
                $patch = ['slug' => $request->slug];
            }

            Note::where('slug', $slug)->update($patch);

            return response()->json(['message' => 'Patch update Successfull'], 200);
        }
    }

 
    public function destroy($slug)
    {
        Note::where('slug', $slug)->delete();

        return response()->json(['message' => 'One note removed Successfully'], 200);
    }
}
