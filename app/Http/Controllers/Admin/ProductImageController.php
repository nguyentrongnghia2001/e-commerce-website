<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductCategory\ProductCategoryServiceInterface;
use App\Services\Brand\BrandServiceInterface;
use App\Utilities\Common;

class ProductImageController extends Controller
{
    private $productService;
    private $brandService;
    private $productCategoryService;

    public function __construct(
        ProductServiceInterface $productService,
        BrandServiceInterface $brandService,
        ProductCategoryServiceInterface $productCategoryService
    ) {
        $this->productService = $productService;
        $this->brandService = $brandService;
        $this->productCategoryService = $productCategoryService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($product_id)
    {
        $product = $this->productService->find($product_id);
        $productImages = $product->productImages;

        return view('admin.product.image.index',compact('product', 'productImages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $product_id)
    {
        $data = $request->all();

        // Xy ly file
        if($request->hasFile('image')){
            $data['path'] = Common::uploadFile($request->file('image'),'front/img/products');
            unset($data['image']);

            ProductImage::create($data);
        }

        return redirect('admin/product/' .$product_id. '/image');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id, $product_image_id)
    {
        //Xoa file
        $file_name = ProductImage::find($product_image_id)->path;
        if ($file_name != '') {
            unlink('front/img/products/' . $file_name);
        }

        // Xoa ban ghi trong database
        ProductImage::find($product_image_id)->delete();

        return redirect('admin/product/' . $product_id . '/image');
    }
}
