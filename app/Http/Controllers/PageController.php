<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\Models\Page;
use App\Models\Category;

use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function add() {

        $categories = Category::all();
        // $parents = Page::whereNull('parent_id')->get();
        $parents = Page::all();

        return view("backend.pages.add",["categories"=>$categories,"parents"=>$parents]);
    }

    public function store(Request $request) {

        $page = new Page();
        $page->title = $request->title;
        $page->slug = Str::slug($request->title);
        $page->definition = $request->definition;
        $page->inspiction = $request->inspiction;
        $page->act = $request->act;
        $page->content = $request->content;
        $page->published = 1;
        $page->category_id = $request->category;
        $page->parent_id = $request->parent;
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
       $childs = Page::where("parent_id",$page->id)->get();

       return view("snt.pages.index",["page"=>$page,"childs"=>$childs]);
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


     public function santeAnimale($slug) {

        $page = Page::where('slug', $slug)->first();

        $menu = Page::where('parent_id', $page->id)->select('title','slug')->get();

        return view("snt.pages.SanteAnimale.index",[ 'page'=>$page,'menu'=>$menu ]);
    }


    public function showSanteAnimale($slug) {

        $page = Page::where('slug', $slug)->first();

        $menu = Page::where('parent_id', $page->parent_id)->select('title','slug')->get();

        return view("snt.pages.SanteAnimale.show",[ 'page'=>$page,'menu'=>$menu ]);
    }


    public function indexDash(Request $request) {

        $searchTerm = $request->input('search');
        $pages = Page::where('title', 'LIKE', '%' . $searchTerm . '%')->paginate(6);

        return view('backend.pages.index',[ 'pages'=>$pages]);
    }


    public function edit($slug) {

        $categories = Category::all();
        $parents    = Page::whereNull('parent_id')->get();
        $page       = Page::where('slug', $slug)->first();
        return view("backend.pages.edit",["categories"=>$categories,"parents"=>$parents,"page"=>$page]);

    }


    public function update(Request $request) {

        $page = Page::find($request->id);

        $page->title = $request->title;
        $page->slug = Str::slug($request->title);
        $page->definition = $request->definition;
        $page->inspiction = $request->inspiction;
        $page->act = $request->act;
        $page->content = $request->content;
        $page->published = 1;
        $page->category_id = $request->category;
        $page->parent_id = $request->parent;
        $page->save();

        if ($request->hasFile('images')) {
            $galleryImages = $request->file('images');

            foreach ($galleryImages as $image) {
                $page->addMedia($image)->toMediaCollection('gpages');
            }
        }

        Session::flash('success', 'Page updated successfully.');
        return redirect()->route('list.pages');

    }


    public function modaliteEspece($slug) {
        $page = Page::where('slug', $slug)->first();
        $menu = Page::where('parent_id', $page->id)->select('title','slug')->get();
        return view("snt.pages.ModaliteEspece.index",[ 'page'=>$page,'menu'=>$menu ]);
    }

    public function showModaliteEspece($slug) {
        $page = Page::where('slug', $slug)->first();
        $menu = Page::where('parent_id', $page->parent_id)->select('title','slug')->get();
        return view("snt.pages.ModaliteEspece.show",[ 'page'=>$page,'menu'=>$menu ]);
    }



    public function examenRapproche($slug) {
        $page = Page::where('slug', $slug)->first();
        $menu = Page::where('parent_id', $page->id)->select('title','slug')->get();
        return view("snt.pages.ExamenRapproche.index",[ 'page'=>$page,'menu'=>$menu ]);
    }


    public function showExamenRapproche($slug) {
        $page = Page::where('slug', $slug)->first();
        $menu = Page::where('parent_id', $page->parent_id)->select('title','slug')->get();

        return view("snt.pages.ExamenRapproche.show",[ 'page'=>$page,'menu'=>$menu]);
    }

}
