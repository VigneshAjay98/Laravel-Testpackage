<?php

namespace VigneshAjay\TestPackage;

use Illuminate\Http\Request;

use VigneshAjay\TestPackage\Models\Note;

class Notes
{
    public $res;

    public function _construct() 
    {
        $this->res = '';
    }

    public static function getAllNotes() 
    { 
        return Note::all();
    }

    public static function Note($slug) 
    {
        return Note::where('slug', $slug)->first();
    }

    // Passing object for now...

    public static function create($params) 
    { 
        $note = new Note;

        $note->name = $params->name;
        $note->slug = $params->slug;
        $note->description = $params->description;

        $note->save();

        return "<h1>New record Successfully created!</h1>";

    }

    /* Failed

    public function modify($slug) 
    {
        // global $res;
        // $res = $slug;
        $this->res = $slug;
        // echo $this; exit;
        // echo $thisres; exit;
        return $this;
    }

    public function setValues($params)
    {
        echo "Hi this is non-static setValues function".$this->res; exit;

        $note = Note::where('slug', $res)->first();
        if($params->name) {
            $note->name = $params->name;
        }
        if($params->slug) {
            $note->slug = $params->slug;
        }
        if($params->description) {
            $note->description = $params->description;
        }

        $note->save();

        return "<h1>Note updated Successfully</h1>";
    } */

    public static function remove($slug) 
    {
        Note::where('slug', $slug)->delete();

        return "<h1>One Note removed Successfully</h1>";
    }

}


