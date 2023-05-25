<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\Models\Page;

use Illuminate\Support\Facades\Session;

class SearchController extends Controller
{
    public function search(Request $request) {

        $searchTerm = $request->input('q');

        $pages = Page::where('title', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere("content", 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere("definition", 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere("inspiction", 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere("act", 'LIKE', '%' . $searchTerm . '%')
                    ->get();

        return view('backend.search.index',[ 'pages'=>$pages]);
    }
}
