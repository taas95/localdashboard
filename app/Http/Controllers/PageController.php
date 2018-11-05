<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\site;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $site= DB::table('sites');
      return view('pages.index')->with('site',$site);
    }

    public function phpinf()
    {
      return view('pages.phpinfo');
    }
    // Test to see git pression and show the way
}
