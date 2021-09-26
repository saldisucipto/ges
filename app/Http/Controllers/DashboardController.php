<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NavigasiPostStore;
use App\Models\Navigasi;
use Illuminate\Support\Str;
use App\Models\Sliders;
use App\Classes\Files;

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
    // create function
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
    // slider
    function sliders()
    {
        $data = Sliders::get()->all();
        return view('dashboard.sliders', [
            'data' => $data
        ]);
    }
    // create slider
    function createSlider(Request $request)
    {
        $data = $request->all();
        $image_files = new Files();
        $image = $image_files->upload($request->file('image'), 'sliders', 'sliders');
        $slider = new Sliders;
        $slider->title = $data['title'];
        $slider->slugs = Str::slug($data['title']);
        $slider->description = $data['description'];
        $slider->image = $image;
        $slider->save();
        return back()->with('success', 'Slider create successfully.');
    }
    // update slider
    function updateSlider(Request $request, $id = null)
    {
        if ($request->isMethod('PUT')) {
            $image_file = $request->file('image');
            $data = $request->all();
            if (!empty($image_file)) {
                $slider = Sliders::find($id);
                $update_image = new Files();
                $update_image->update($slider->image, 'sliders');

                $image_files = new Files();
                $image = $image_files->upload($request->file('image'), 'sliders', 'sliders');

                $slider->title = $data['title'];
                $slider->slugs = Str::slug($data['title']);
                $slider->description = $data['description'];
                $slider->image = $image;
                $slider->update();
                return back()->with('success', 'Slider update successfully.');
            } else {
                $slider = Sliders::find($id);
                $slider->title = $data['title'];
                $slider->slugs = Str::slug($data['title']);
                $slider->description = $data['description'];
                $slider->update();
                return back()->with('success', 'Slider update successfully.');
            }
        } elseif ($request->isMethod('DELETE')) {
            $slider = Sliders::find($id);
            $update_image = new Files();
            $update_image->update($slider->image, 'sliders');
            $slider->delete();
            return back()->with('success', 'Slider delete successfully.');
        }
    }
}
