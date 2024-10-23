<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductCategory\ProductCategoryServiceInterface;
use App\Services\Brand\BrandServiceInterface;
use App\Services\Madein\MadeinServiceInterface;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productService;
    private $brandService;
    private $productCategoryService;
    private $madeinService;

    public function __construct(
        ProductServiceInterface $productService,
        BrandServiceInterface $brandService,
        ProductCategoryServiceInterface $productCategoryService,
        MadeinServiceInterface $madeinService
    ) {
        $this->productService = $productService;
        $this->brandService = $brandService;
        $this->productCategoryService = $productCategoryService;
        $this->madeinService = $madeinService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = $this->productService->searchAndPaginate('name', $request->get('search'));
        // $products = $this->productService->searchAndPaginate('name', $request->get('search'));

        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = $this->brandService->all();
        $productCategorys = $this->productCategoryService->all();
        $madeins = $this->madeinService->all();
        return view('admin.product.create', compact('brands', 'productCategorys', 'madeins'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['qty'] = 0;
        $product = $this->productService->create($data);

        return redirect('admin/product/' . $product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->productService->find($id);
        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = $this->productService->find($id);
        $brands = $this->brandService->all($id);
        $productCategorys = $this->productCategoryService->all($id);
        $madeins = $this->madeinService->all();
        return view('admin.product.edit', compact('product', 'brands', 'productCategorys', 'madeins'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $this->productService->update($data, $id);

        return redirect('admin/product/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->productService->delete($id);

        return redirect('admin/product');
    }
}
