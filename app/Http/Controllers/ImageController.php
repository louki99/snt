<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\Models\Page;
use App\Models\Category;
use App\Models\Media;

use Illuminate\Support\Facades\Session;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;


class ImageController extends Controller
{
    public function editImage($slug) {

        $page = Page::where("slug",$slug)->first();

        $imageUrls = $page->getImagesByModule('gpages');

        return view("backend.pages.images",["images"=>$imageUrls,"page"=>$page]);
    }


    public function removeImage($imageId)
    {
        $media = Media::find($imageId);

        if ($media) {
            $media->delete();

            return Redirect::back()->with('success', 'Image removed successfully.');
        }

        return Redirect::back()->with('error', 'Image not found or removal failed.');
    }

    public function addImages(Request $request,$id) {

        $page = Page::find($id);

        if ($request->hasFile('images')) {
            $galleryImages = $request->file('images');

            foreach ($galleryImages as $image) {
                $page->addMedia($image)->toMediaCollection('gpages');
            }
        }

        return back()->withSuccess('images added success!');

    }
}
