<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\Models\Page;
use App\Models\Category;

class PageController extends Controller
{
    public function add() {

        $categories = Category::all();

        return view("backend.pages.add",compact("categories"));
    }

    public function store(Request $request) {

        $page = new Page();
        $page->title = $request->title;
        $page->slug = Str::slug($request->title);
        $page->definition = $request->definition;
        $page->inspiction = $request->inspiction;
        $page->act = $request->act;
        $page->published = 1;
        $page->category_id = $request->category;
        $page->save();

        if ($request->hasFile('images')) {
            $galleryImages = $request->file('images');

            foreach ($galleryImages as $image) {
                $page->addMedia($image)->toMediaCollection('gpages');
            }
        }

        return back()->withSuccess('page added success!');

    }

    public function page($slug) {

       $page = Page::where('slug',$slug)->first();
       return view("snt.pages.index",compact("page"));
    }

    public function maladies() {

        $pages = Page::where('category_id', 1)->select('title','slug')->get();

        return view("snt.pages.maladier",compact("pages"));
    }

     public function maladie($slug) {

        $page = Page::where('slug', $slug)->first();

        $pages = Page::where('category_id', 1)->select('title','slug')->get();

        return view("snt.pages.getMaladier",[ 'page'=>$page,'pages'=>$pages ]);
     }


}
