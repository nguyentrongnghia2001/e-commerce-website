<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Repositories\BaseRepository;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface   
{
    public function getModel(){
        return Product::class;
    }

    public function getQtyByProductId($productId)
    {
        return $this->model
        ->where('id', $productId)
        ->get('qty');
    }

    public function getStatusProductsByCategory(int $categoryId){
        return $this->model->where('status', true)
            ->where('product_category_id', $categoryId)
            ->where('qty', '>', 0)
            ->get(); 
    }

    public function getProductOnIndex($request)
    {
        $search = $request->search ?? '';

        $products = $this->model->where('name','like','%'.$search.'%')
            ->where('status', true)
            ->where('qty', '>', 0);

        $products = $this->filter($products, $request);
        
        $products = $this->sortAndPagination($products, $request);

        return $products;
    }

    public function getProductsByCategory($categoryName, $request)
    {
        $products = ProductCategory::where('name',$categoryName)->first()->products->toQuery();

        $products = $this->filter($products, $request);
        $products = $this->sortAndPagination($products, $request);

        return $products;  
    }

    private function sortAndPagination($products, $request){
        $perPage = $request->show ?? 3;
        $sortBy = $request->sort_by ?? 'latest';

        switch ($sortBy) {
            case 'latest';
                $products = $products->orderBy('id');
                break;
            case 'oldest';
                $products = $products->orderByDesc('id');
                break;
            case 'name-ascending';
                $products = $products->orderBy('name');
                break;
            case 'name-descending';
                $products = $products->orderByDesc('name');
                break;
            case 'price-ascending';
                $products = $products->orderBy('price');
                break;
            case 'price-descending';
                $products = $products->orderByDesc('price');
                break;
            default:
                $products = $products->orderBy('id');
        }

        $products = $products->paginate($perPage);

        $products->appends(['sort_by' => $sortBy, 'show' => $perPage]);
        
        return $products;
    }

    private function filter($products, $request)
    { 
        //Brand
        $brands = $request->brand ?? [];
        $brand_ids = array_keys($brands);
        $products = $brand_ids != null ? $products->whereIn('brand_id',$brand_ids) : $products;

        return $products;  
    }

}

?>