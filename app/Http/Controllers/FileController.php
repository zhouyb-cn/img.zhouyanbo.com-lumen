<?php

namespace App\Http\Controllers;

class FileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function test() {
        flash("success");
    }
}
