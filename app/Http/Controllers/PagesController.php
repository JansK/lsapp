<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to RBB';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title); // easy to pass multiple vars in ary
    }

    public function about() {
        return view('pages.about');
    }

    public function services() {
        $data = array(
            'title' => 'Services',
            'serviceAry' => ['Web Design', 'CompSci', 'SEO']
        );
        return view('pages.services')->with($data);
    }

}
