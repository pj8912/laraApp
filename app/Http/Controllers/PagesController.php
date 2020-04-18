<?php

namespace laraApp\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
      $title = "Welcome to Laravel";
      return view('pages.index')->with('title', $title);
    }
    // about page..
    public function about()
    {
      $title ="About us";
      return view('pages.about')->with('title', $title);
    }

    // services page

    public function services(){
      $data =array(
        'title'=> 'Services!',
        'services'=>['Web Design','Programming','SEO']
      );
      return view('pages.services')->with($data);
    }
}
