<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NavigasiPostStore;
use App\Models\Navigasi;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    // navigasi
    function navigasi()
    {
        $nav = Navigasi::get();
        return view('dashboard.navigasi', [
            'nav' => $nav,
        ]);
    }

    // create func
    function create(NavigasiPostStore $request)
    {
        $input = $request->all();
        $nav = new Navigasi;
        $nav->title = $input['title'];
        $nav->slugs = Str::slug($input['title']);
        $nav->save();
        return back()->with('success', 'User created successfully.');
    }

    // create update
    function update(Request $request, $id = null)
    {
        if ($request->isMethod('PUT')) {
            $data = $request->all();
            $nav = Navigasi::find($id);
            $nav->title = $data['title'];
            $nav->slugs = Str::slug($data['title']);
            $nav->update();
            return back()->with('success', 'User Update successfully.');
        } else if ($request->isMethod('DELETE')) {
            $data = $request->all();
            $nav = Navigasi::find($id);
            $nav->delete();
            return back()->with('success', 'User Update successfully.');
        }
    }
}
