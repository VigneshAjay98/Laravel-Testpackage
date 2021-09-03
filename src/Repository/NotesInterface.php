<?php

namespace VigneshAjay\TestPackage\Repository;

interface NotesInterface 
{
    public function getAllNotes();
    public function create($params);
    public function getNote($slug);
    public function modify($slug);
    public function remove($slug);
}