<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Blog\BlogServiceInterface;
use App\Services\Product\ProductServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Utilities\Constant;

class HomeController extends Controller
{
    private $productService;
    private $blogService;

    public function __construct(ProductServiceInterface $productService, BlogServiceInterface $blogService)
    {
        $this->productService = $productService;
        $this->blogService = $blogService;
    }

    public function index(){
        if(Auth::check() && Auth::user()->level == 1) {
            Auth::logout();
        }
        $statusProducts = $this->productService->getStatusProducts();
        $blogs = $this->blogService->getLatestBlogs();

        return view('front.index', compact('statusProducts', 'blogs'));
    }
}
