<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Files;
use App\Models\StaticPage;
use Illuminate\Support\Str;

class StaticPagesController extends Controller
{
    // index
    function index()
    {
        $data = StaticPage::get();
        return view('dashboard.staticpages', [
            'data' => $data
        ]);
    }
    // create static pages
    function staticPages(Request $request)
    {
        $data = $request->all();
        $image_file = new Files();
        $images = $image_file->upload($request->file('images'), 'static_pages', 'static-pages');
        $staticpages = new StaticPage;
        $staticpages->title = $data['title'];
        $staticpages->slugs = Str::slug($data['title']);
        $staticpages->description = $data['description'];
        $staticpages->images = $images;
        $staticpages->save();
        return back()->with('success', 'Static pages create successfully.');
    }
}
