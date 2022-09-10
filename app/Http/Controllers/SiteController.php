<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Provider;
use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function list()
    {
        $sites = Site::all();

        return view('admin.sites.index')->with([
            'sites' => $sites,
            'page_title' => 'sites'
        ]);
    }

    public function add()
    {
        $providers = Provider::all();

        $features = Feature::all();

        return view('admin.sites.add')->with([
            'page_title' => 'sites',
            'providers' => $providers,
            'features' => $features
        ]);
    }

    public function store(Request $req)
    {
        // validate 
        // $path = $request->file('image')->store('public/images'); // save images with store method
        // if ($req->session()->has('user') ) 
        // if (true) 
        // {
        // $this->validate($req, [
        //     'provider_id' => 'required|string',
        //     'img_1' => 'required|image|mimes:jpg,png,jpeg|max:2048'
        // ]);

        $site = new Site();

        $site->provider_id = $req->provider_id;
        $site->name = $req->name;

        // save images
        if ($req->hasFile('img_1')) {
            // rename image
            $newImageName = time() . '-' . $req->name . '.' . $req->img_1->extension();
            // upload image
            $req->img_1->move(public_path('uploads/images/sites/'), $newImageName);


            $site->img_1 = 'uploads/images/sites/' . $newImageName;
        } else {
            $site->img_1 = 'uploads/images/sites/default.png';
        }

        // save images
        if ($req->hasFile('img_2')) {
            // rename image
            $newImageName = time() . '-' . $req->name . '.' . $req->img_2->extension();
            // upload image
            $req->img_2->move(public_path('uploads/images/sites/'), $newImageName);


            $site->img_2 = 'uploads/images/sites/' . $newImageName;
        } else {
            $site->img_2 = 'uploads/images/sites/default.png';
        }

        // save images
        if ($req->hasFile('img_3')) {
            // rename image
            $newImageName = time() . '-' . $req->name . '.' . $req->img_3->extension();
            // upload image
            $req->img_3->move(public_path('uploads/images/sites/'), $newImageName);


            $site->img_3 = 'uploads/images/sites/' . $newImageName;
        } else {
            $site->img_3 = 'uploads/images/sites/default.png';
        }

        $site->video_url = $req->video_url;

        $features = "";
        foreach ($req->features as $feature) {
            $features .= $feature;
        }
        $site->features = $features;

        $site->product_type = $req->product_type;
        $site->floors = $req->floors;
        $site->delivery = $req->delivery;
        $site->featured_bedrooms = $req->featured_bedrooms;
        $site->featured_size = $req->featured_size;
        $site->houses_per_floor = $req->houses_per_floor;
        $site->house_price_per_carre = $req->house_price_per_carre;
        $site->shop_price_per_carre = $req->shop_price_per_carre;

        if ($site->save()) {
            return redirect('/admin/sites/');
        }
        // } else {
        //     return view('admin.sites.new');
        // }

    }

    public function detail($id)
    {
        $site = Site::where('id', $id)->first();


        return view('admin.sites.detail')->with(['site' => $site]);
    }

    public function search(Request $req)
    {
    }

    public function edit($id)
    {
        $site = Site::where('id', $id)->first();
        $features = Feature::all();

        return view('admin.sites.update')->with(['site' => $site, 'features' => $features]);
    }

    public function update(Request $req)
    {
        $updatedSite = Site::where("id", $req->id)->update($req->except('id', '_method', '_token'));

        if ($updatedSite) {
            return redirect('/admin/sites/');
        }
    }

    public function delete($id)
    {
        $Site = Site::find($id);
        // dd($Site);
        $Site->delete();

        return redirect()->route('admin.sites.list');
    }
}
