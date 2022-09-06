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
        // $path = $request->file('image')->store('public/images'); // save images with store method
        // if ($req->session()->has('user') ) 
        // if (true) 
        // {
            $this->validate($req, [
                'provider_id' => 'required|string',
                'image' => 'required|image|mimes:jpg,png,jpeg|max:2048'
            ]);

            $site = new Site();

            $site->provider_id = $req->provider_id;

            // save images
            $site->img_1 = $req->img_1;
            $site->img_2 = $req->img_2;
            $site->img_3 = $req->img_3;

            $site->video_url = $req->video_url;
            $site->features = $req->features;
            $site->product_type = $req->product_type;
            $site->floors = $req->floors;
            $site->delivery = $req->delivery;
            $site->featured_bedrooms = $req->featured_bedrooms;
            $site->featured_size = $req->featured_size;
            $site->houses_per_floor = $req->houses_per_floor;
            $site->house_price_per_carre = $req->house_price_per_carre;
            $site->shop_price_per_carre = $req->shop_price_per_carre;

            if ($site->save()) 
            {
                return redirect('/admin/sites/');
            }
        // } else {
        //     return view('admin.sites.new');
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
