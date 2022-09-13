<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class PublicSiteController extends Controller
{
    public function home () 
    {
        $sites = Site::all();

        return view('site.home.index')->with([
            'sites' => $sites
        ]);
    }
}
