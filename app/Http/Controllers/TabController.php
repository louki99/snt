<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tab;
use App\Models\Page;

class TabController extends Controller
{
    public function add() {

        $pages = Page::select('id','title','slug')->get();

        return view("backend.tabs.add",compact('pages'));
    }

    public function store(Request $request) {

        $tab = new Tab();
        $tab->title = $request->title;
        $tab->content = $request->content;
        $tab->save();

        $galleryImages = $request->file('images');

        foreach ($galleryImages as $image) {
            $tab->addMedia($image)->toMediaCollection('gtabs');
        }

        return back()->withSuccess('Tab added success!');

    }

    public function tabs() {
       $tabs = Tab::all();
       return view("snt.tabs.index",compact("tabs"));
    }

    public function uploadimage (Request $request){
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();

            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move(public_path('media'), $fileName);
            $url = asset('media/'.$fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }
}
