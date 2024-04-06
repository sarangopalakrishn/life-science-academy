<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function gallery(){
        $galleries = Gallery::orderBy('created_at')->get()->all();
        return view('pages.gallery', ['galleries' => $galleries]);
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2028' 
        ]);

        $gallery = new Gallery;

        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $file_name);

        $gallery->name = $request->name;
        $gallery->image = $file_name;

        $gallery->save();
        return redirect()->route('pages.gallery')->with('success', 'Image Added Successfully');
    }

    public function edit($id){
        $gallery = Gallery::findOrFail($id);
        return view('pages.edit', ['gallery' => $gallery]);
    }

    public function update(Request $request, Gallery $gallery){
        $request->validate([
            'name' => 'required',  
        ]);

        $file_name = $request->hidden_product_image;

        if($request->image != '') {
            $file_name = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $file_name);
        }

        $gallery = Gallery::find($request->hidden_id);
      
        $gallery->name = $request->name;
        $gallery->image = $file_name;

        $gallery->update();
        return redirect()->route('pages.gallery')->with('success', 'Image Updated Successfully');

    }

    public function destroy(Request $request, $id)
    { 
        try {
            $gallery = Gallery::find(decrypt($id));
            $image_path = public_path() . "/images/";
            $image = $image_path . $gallery->image;
    
            if (file_exists($image)) {
                unlink($image);
            }
    
            $gallery->delete();
            return redirect()->route('pages.gallery')->with('success', 'Image Deleted Successfully');
        } catch (\Exception $e) {
            // Log or display the error message
            return redirect()->route('pages.gallery')->with('error', 'Error deleting image: ' . $e->getMessage());
        }
    }
    
}
