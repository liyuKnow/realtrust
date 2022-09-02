<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function list ()
    {
        $providers = Provider::all();
            
        return view('admin.providers.index')->with([
            'providers' => $providers,
            'page_title' => 'providers'
        ]);
    }

    public function add () {
        return view('admin.providers.add')->with([
            'page_title' => 'providers'
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

            $provider = new Provider;
            $provider->name = $req->name;

            if ($provider->save()) 
            {
                return redirect('/admin/providers/');
            }
        // } else {
        //     return view('admin.providers.new');
        // }

    }

    public function detail ($id)
    {
        $provider = Provider::get($id);

        return view('admin.providers.detail')->with(['provider' => $provider]);
    }

    public function search (Request $req)
    {

    }

    public function edit (Request $req)
    {

    }

    public function update (Request $req)
    {

    }

    public function delete (Request $req)
    {

    }
}
