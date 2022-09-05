<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function list ()
    {
        $sites = Site::all();
            
        return view('admin.Sites.index')->with([
            'Sites' => $sites,
            'page_title' => 'Sites'
        ]);
    }

    public function add () 
    {
        return view('admin.Sites.add')->with([
            'page_title' => 'Sites'
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
                return redirect('/admin/Sites/');
            }
        // } else {
        //     return view('admin.Sites.new');
        // }

    }

    public function detail ($id)
    {
        $Site = Site::where( 'id' , $id)->first();

        return view('admin.Sites.detail')->with(['Site' => $Site]);
    }

    public function search (Request $req)
    {

    }

    public function edit ($id)
    {
        $Site = Site::where( 'id' , $id)->first();

        return view('admin.Sites.update')->with(['Site' => $Site]);
    }

    public function update (Request $req)
    {
        $updatedSite = Site::where("id", $req->id)->update($req->except('id', '_method', '_token'));

            if ($updatedSite) {
                return redirect('/admin/Sites/');
            }

    }

    public function delete ($id)
    {
        $Site = Site::find($id);
        // dd($Site);
        $Site->delete();

        return redirect()->route('admin.Sites.list');
    }
}
