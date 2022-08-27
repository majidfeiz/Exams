<?php

namespace majidfeiz\Exams\Http\controllers;

use Illuminate\Http\Client\Request;
use Illuminate\Routing\Controller;

class ExamsController extends controller
{

    public function index()
    {
        return view('exams::list');
    }

    public function add()
    {
        return view('exams::add');
    }

    public function show()
    {
        //
    }

    public function store(Request $request)
    {
        // Let's assume we need to be authenticated
        // to create a new post
        if (! auth()->check()) {
            abort (403, 'Only authenticated users can create new exams.');
        }

    }
}
