<?php

namespace App\Services\ProductComment;

use App\Repositories\ProductComment\ProductCommentRepositoryInterface;
use App\Services\BaseService;

class ProductCommentService extends BaseService implements ProductCommentServiceInterface   
{
    public $repository;

    public function __construct(ProductCommentRepositoryInterface $productCommentRepository)
    {
        $this->repository = $productCommentRepository;
    }

    public function find($id)
    {
        $product = $this->repository->find($id);

        $avgRating = 0;
        $sumRating = array_sum(array_column($product->productComments->toArray(), 'rating'));
        $countRating = count($product->productComments);
        if($countRating != 0){
            $avgRating = $sumRating / $countRating;
        }

        $product->avgRating = $avgRating;

        return $product;
    }

    
}
