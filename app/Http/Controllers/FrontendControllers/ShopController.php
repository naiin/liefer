<?php

namespace App\Http\Controllers\FrontendControllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Category;
use App\Product;

class ShopController extends Controller
{
    function __construct()
    {
        // $this->middleware('permission:category-list');
        // $this->middleware('permission:category-create', ['only' => ['create', 'store']]);
        // $this->middleware('permission:category-edit', ['only' => ['edit', 'update']]);
        // $this->middleware('permission:category-delete', ['only' => ['destroy']]);
    }

    function index(){
        $categories = Category::latest()->paginate(5);
        return view('category.index', compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
