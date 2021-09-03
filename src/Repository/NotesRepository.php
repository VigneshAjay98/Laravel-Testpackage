<?php

namespace VigneshAjay\TestPackage\Repository;

use VigneshAjay\TestPackage\Repository\NotesInterface;
use VigneshAjay\TestPackage\Models\Note;

class NotesRepository implements NotesInterface
{
    public function getAllNotes()
    {
        return Note::all();
    }

    public function create($params)
    {
        $note = new Note;

        $note->name = $params->name;
        $note->slug = $params->slug;
        $note->description = $params->description;

        $note->save();
    }

    public function getNote($slug)
    {
        return Note::where('slug', $slug)->first();
    }

    public function modify($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    public function setValues($params)
    {
        $note = Note::where('slug', $this->slug)->first();

        $note->name = $params->name;
        $note->slug = $params->slug;
        $note->description = $params->description;

        $note->save();
    }

    public function remove($slug)
    {
        Note::where('slug', $slug)->delete();
    }
}
