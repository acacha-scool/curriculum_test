<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Course2Controller extends Controller
{
    //
    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = [];
        return view('course2',$data);
    }

}
