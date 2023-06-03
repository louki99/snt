<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\Models\Page;
use App\Models\Category;

use Illuminate\Support\Facades\Session;

class PageController extends Controller
{

    public function home() {
        $page = Page::where('slug',"accueil")->first();
        return view("welcome",compact("page"));
    }

    public function add() {
        $categories = Category::all();
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

        $menu = $this->retrieveMenu($page->parent_id);

        return view("snt.pages.SanteAnimale.show",[ 'page'=>$page,'menu'=>$menu ]);
    }


    public function indexDash(Request $request) {

        $searchTerm = $request->input('search');
        $pages = Page::where('title', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere("slug", 'LIKE', '%' . $searchTerm . '%')
                    ->paginate(6);

        return view('backend.pages.index',[ 'pages'=>$pages]);
    }


    public function edit($slug) {
        $categories = Category::all();
        $parents    = Page::all();//Page::whereNull('parent_id')->get();
        $page       = Page::where('slug', $slug)->first();

        return view("backend.pages.edit",["categories"=>$categories,"parents"=>$parents,"page"=>$page]);
    }


    public function update(Request $request) {

        $page = Page::find($request->id);

        $page->title = $request->title;
        $page->slug =$page->slug; //Str::slug($request->title);
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
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->id);
        return view("snt.pages.ModaliteEspece.index",[ 'page'=>$page,'menu'=>$menu ]);
    }

    public function showModaliteEspece($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->parent_id);
        return view("snt.pages.ModaliteEspece.show",[ 'page'=>$page,'menu'=>$menu ]);
    }



    public function examenRapproche($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->id);
        return view("snt.pages.ExamenRapproche.index",[ 'page'=>$page,'menu'=>$menu ]);
    }

    public function showExamenRapproche($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->parent_id);

        return view("snt.pages.ExamenRapproche.show",[ 'page'=>$page,'menu'=>$menu]);
    }

    public function partieThoracique($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->id);
        return view("snt.pages.PartieThoracique.index",[ 'page'=>$page,'menu'=>$menu ]);
    }

    public function showPartieThoracique($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->parent_id);

        return view("snt.pages.PartieThoracique.show",[ 'page'=>$page,'menu'=>$menu]);
    }


    public function partieAbdominale($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->id);
        return view("snt.pages.PartieAbdominale.index",[ 'page'=>$page,'menu'=>$menu ]);
    }
    public function showPartieAbdominale($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->parent_id);
        return view("snt.pages.PartieAbdominale.show",[ 'page'=>$page,'menu'=>$menu]);
    }


    public function configurationAnatomique($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->id);
        return view("snt.pages.ConfigurationAnatomique.index",[ 'page'=>$page,'menu'=>$menu ]);
    }

    public function showConfigurationAnatomique($slug) {

        $page   = $this->retrievePage($slug);
        $menu   = $this->retrieveMenu($page->parent_id);
        $childs = Page::where("parent_id",$page->id)->get();
        return view("snt.pages.ConfigurationAnatomique.show",[ 'page'=>$page,'menu'=>$menu,"childs"=>$childs]);
    }


    public function fressure($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->id);
        return view("snt.pages.Fressure.index",[ 'page'=>$page,'menu'=>$menu ]);
    }
    public function showFressure($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->parent_id);
        return view("snt.pages.Fressure.show",[ 'page'=>$page,'menu'=>$menu]);
    }


    public function estimationAge($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->id);
        return view("snt.pages.EstimationAge.index",[ 'page'=>$page,'menu'=>$menu ]);
    }
    public function showEstimationAge($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->parent_id);
        return view("snt.pages.EstimationAge.show",[ 'page'=>$page,'menu'=>$menu]);
    }


    public function estimationSexe($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->id);
        return view("snt.pages.EstimationSexe.index",[ 'page'=>$page,'menu'=>$menu ]);
    }
    public function showEstimationSexe($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->parent_id);

        return view("snt.pages.EstimationSexe.show",[ 'page'=>$page,'menu'=>$menu]);
    }

    public function arateristiquesTechniquesLestampillage($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->id);
        return view("snt.pages.ArateristiquesTechniquesLestampillage.index",[ 'page'=>$page,'menu'=>$menu ]);
    }
    public function showarateristiquesTechniquesLestampillage($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->parent_id);

        return view("snt.pages.ArateristiquesTechniquesLestampillage.show",[ 'page'=>$page,'menu'=>$menu]);
    }


    public function classificationCarcasses($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->id);
        return view("snt.pages.ClassificationCarcasses.index",[ 'page'=>$page,'menu'=>$menu ]);
    }
    public function showclassificationCarcasses($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->parent_id);

        return view("snt.pages.ClassificationCarcasses.show",[ 'page'=>$page,'menu'=>$menu]);
    }

    public function viandesGelatineuses($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->id);
        return view("snt.pages.ViandesGelatineuses.index",[ 'page'=>$page,'menu'=>$menu ]);
    }
    public function showcviandesGelatineuses($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->parent_id);
        return view("snt.pages.ViandesGelatineuses.show",[ 'page'=>$page,'menu'=>$menu]);
    }

    public function viandesMaigres($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->id);
        return view("snt.pages.ViandesMaigres.index",['page'=>$page,'menu'=>$menu ]);
    }

    public function showviandesMaigres($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->parent_id);
        return view("snt.pages.ViandesMaigres.show",['page'=>$page,'menu'=>$menu ]);
    }

    public function viandesAtteintsMrlc($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->id);
        return view("snt.pages.ViandesAtteintsMRLC.index",['page'=>$page,'menu'=>$menu ]);
    }

    public function showviandesAtteintsMrlc($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->parent_id);

        return view("snt.pages.ViandesAtteintsMRLC.show",['page'=>$page,'menu'=>$menu]);
    }

    public function viandesNonAtteintsMrlc($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->id);
        return view("snt.pages.ViandesNonAtteintsMRLC.index",['page'=>$page,'menu'=>$menu ]);
    }

    public function shownonviandesAtteintsMrlc($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->parent_id);

        return view("snt.pages.ViandesNonAtteintsMRLC.show",['page'=>$page,'menu'=>$menu]);
    }

    public function carcasse($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->id);
        return view("snt.pages.Carcasse.index",['page'=>$page,'menu'=>$menu ]);
    }

    public function showcarcasse($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->parent_id);

        return view("snt.pages.Carcasse.show",['page'=>$page,'menu'=>$menu]);
    }

    public function cinquiemequartier($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->id);
        return view("snt.pages.5emequartier.index",['page'=>$page,'menu'=>$menu ]);
    }

    public function showcinquiemequartier($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->parent_id);

        return view("snt.pages.5emequartier.show",['page'=>$page,'menu'=>$menu]);
    }

    public function viandesDangereuses($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->id);
        return view("snt.pages.ViandesDangereuses.index",['page'=>$page,'menu'=>$menu ]);
    }

    public function showviandesDangereuses($slug) {
        $page = $this->retrievePage($slug);
        $menu = $this->retrieveMenu($page->parent_id);

        return view("snt.pages.ViandesDangereuses.show",['page'=>$page,'menu'=>$menu]);
    }


    private function retrievePage($slug) {
        $page = Page::where('slug', $slug)->first();
        return $page;
    }

    private function retrieveMenu($condition) {
        $menu = Page::where('parent_id', $condition)->select('title','slug')->get();
        return $menu;
    }

}
