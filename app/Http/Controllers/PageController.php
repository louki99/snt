<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\Models\Page;

class PageController extends Controller
{
    public function add() {
        return view("backend.pages.add");
    }

    public function store(Request $request) {

        $page = new Page();
        $page->title = $request->title;
        $page->slug = Str::slug($request->title);
        $page->description = $request->description;
        $page->content = $request->content;
        $page->published = 1;
        $page->save();

        $galleryImages = $request->file('images');

        foreach ($galleryImages as $image) {
            $page->addMedia($image)->toMediaCollection('gpages');
        }

        return back()->withSuccess('page added success!');

    }

    public function page($slug) {

       $page = Page::where('slug',$slug)->first();
       return view("snt.pages.index",compact("page"));
    }

}
