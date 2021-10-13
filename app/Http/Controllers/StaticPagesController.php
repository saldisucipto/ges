<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Files;
use App\Models\StaticPage;
use Illuminate\Support\Str;

class StaticPagesController extends Controller
{
    // index
    public function index()
    {
        $data = StaticPage::get();
        return view('dashboard.staticpages', [
            'data' => $data
        ]);
    }
    // create static pages
    public function staticPages(Request $request)
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

    public function editStaticPages(Request $request, $id = null)
    {
        if ($request->isMethod('PUT')) {
            $dataReq = $request->all();
            $iamge_file = new Files();
            $image = $request->file('images');
            if ($image) {
                $staticpages = StaticPage::find($id);
                $staticpages->title = $dataReq['title'];
                $staticpages->slugs = Str::slug($dataReq['title']);
                $staticpages->description = $dataReq['description'];
                $iamge_file->update($staticpages->images, 'static_pages');
                $staticpages->images = $iamge_file->upload($request->file('images'), 'static_pages', 'static-pages');
                $staticpages->update();
                return redirect('/ges-admin/static-pages')->with('success', 'Static pages update successfully.');
            } else {
                $staticpages = StaticPage::find($id);
                $staticpages->title = $dataReq['title'];
                $staticpages->slugs = Str::slug($dataReq['title']);
                $staticpages->description = $dataReq['description'];
                $staticpages->update();
                return redirect('/ges-admin/static-pages')->with('success', 'Static pages update successfully.');
            }
            // dd($dataReq);
            // die;
        }
        $data = StaticPage::find($id);
        return view('dashboard.update-static-pages', [
            'data' => $data
        ]);
    }

    public function deleteStaticPages($id)
    {
        $iamge_file = new Files();
        $deletePages = StaticPage::find($id);
        $iamge_file->update($deletePages->images, 'static_pages');
        $deletePages->delete();
        return redirect('/ges-admin/static-pages')->with('success', 'Static pages delete successfully.');
    }
}
