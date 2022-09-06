<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Provider;
use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function list ()
    {
        $sites = Site::all();
            
        return view('admin.sites.index')->with([
            'sites' => $sites,
            'page_title' => 'sites'
        ]);
    }

    public function add () 
    {
        $providers = Provider::all();

        $features = Feature::all();

        return view('admin.sites.add')->with([
            'page_title' => 'sites',
            'providers' => $providers,
            'features' => $features
        ]);
    }

    public function store (Request $req)
    {
        // validate
        // if ($req->session()->has('user') ) 
        // if (true) 
        // {
            $this->validate($req, [
                'name' => 'required|string',
            ]);

            $Site = new Site();
            $Site->name = $req->name;

            if ($Site->save()) 
            {
                return redirect('/admin/sites/');
            }
        // } else {
        //     return view('admin.Sites.new');
        // }

    }

    public function detail ($id)
    {
        $site = Site::where( 'id' , $id)->first();

        return view('admin.sites.detail')->with(['site' => $site]);
    }

    public function search (Request $req)
    {

    }

    public function edit ($id)
    {
        $site = Site::where( 'id' , $id)->first();

        return view('admin.sites.update')->with(['site' => $site]);
    }

    public function update (Request $req)
    {
        $updatedSite = Site::where("id", $req->id)->update($req->except('id', '_method', '_token'));

        if ($updatedSite) {
            return redirect('/admin/sites/');
        }

    }

    public function delete ($id)
    {
        $Site = Site::find($id);
        // dd($Site);
        $Site->delete();

        return redirect()->route('admin.sites.list');
    }
}
