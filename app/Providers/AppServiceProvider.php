<?php

namespace App\Providers;

use App\Repositories\ProductComment\ProductCommentRepository;
use App\Repositories\ProductComment\ProductCommentRepositoryInterface;
use App\Services\ProductComment\ProductCommentService;
use App\Services\ProductComment\ProductCommentServiceInterface;

use App\Repositories\Blog\BlogRepository;
use App\Repositories\Blog\BlogRepositoryInterface;
use App\Services\Blog\BlogService;
use App\Services\Blog\BlogServiceInterface;

use App\Repositories\ProductCategory\ProductCategoryRepository;
use App\Repositories\ProductCategory\ProductCategoryRepositoryInterface;
use App\Services\ProductCategory\ProductCategoryService;
use App\Services\ProductCategory\ProductCategoryServiceInterface;

use App\Repositories\Brand\BrandRepository;
use App\Repositories\Brand\BrandRepositoryInterface;
use App\Services\Brand\BrandService;
use App\Services\Brand\BrandServiceInterface;

use App\Repositories\Madein\MadeinRepository;
use App\Repositories\Madein\MadeinRepositoryInterface;
use App\Services\Madein\MadeinService;
use App\Services\Madein\MadeinServiceInterface;

use App\Repositories\Order\OrderRepository;
use App\Repositories\Order\OrderRepositoryInterface;
use App\Services\Order\OrderService;
use App\Services\Order\OrderServiceInterface;

use App\Repositories\OrderDetail\OrderDetailRepository;
use App\Repositories\OrderDetail\OrderDetailRepositoryInterface;
use App\Services\OrderDetail\OrderDetailService;
use App\Services\OrderDetail\OrderDetailServiceInterface;

use App\Repositories\Supplier\SupplierRepository;
use App\Repositories\Supplier\SupplierRepositoryInterface;
use App\Services\Supplier\SupplierService;
use App\Services\Supplier\SupplierServiceInterface;

use App\Repositories\ImportInvoice\ImportInvoiceRepository;
use App\Repositories\ImportInvoice\ImportInvoiceRepositoryInterface;
use App\Services\ImportInvoice\ImportInvoiceService;
use App\Services\ImportInvoice\ImportInvoiceServiceInterface;

use App\Repositories\ImportInvoiceDetail\ImportInvoiceDetailRepository;
use App\Repositories\ImportInvoiceDetail\ImportInvoiceDetailRepositoryInterface;
use App\Services\ImportInvoiceDetail\ImportInvoiceDetailService;
use App\Services\ImportInvoiceDetail\ImportInvoiceDetailServiceInterface;

use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;
use App\Services\User\UserService;
use App\Services\User\UserServiceInterface;

use App\Repositories\Product\ProductRepository;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Services\Product\ProductService;
use App\Services\Product\ProductServiceInterface;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //Product
        $this->app->singleton(
            ProductRepositoryInterface::class,
            ProductRepository::class
        );
        
        $this->app->singleton(
            ProductServiceInterface::class,
            ProductService::class
        );

        //ProductComment
        $this->app->singleton(
            ProductCommentRepositoryInterface::class,
            ProductCommentRepository::class,
        );
        
        $this->app->singleton(
            ProductCommentServiceInterface::class,
            ProductCommentService::class
        );

        //Blog
        $this->app->singleton(
            BlogRepositoryInterface::class,
            BlogRepository::class
        );

        $this->app->singleton(
            BlogServiceInterface::class,
            BlogService::class
        );

        //ProductCategory
        $this->app->singleton(
            ProductCategoryRepositoryInterface::class,
            ProductCategoryRepository::class
        );

        $this->app->singleton(
            ProductCategoryServiceInterface::class,
            ProductCategoryService::class
        );

        //Brand
        $this->app->singleton(
            BrandRepositoryInterface::class,
            BrandRepository::class
        );

        $this->app->singleton(
            BrandServiceInterface::class,
            BrandService::class
        );

        //Madein
        $this->app->singleton(
            MadeinRepositoryInterface::class,
            MadeinRepository::class
        );

        $this->app->singleton(
            MadeinServiceInterface::class,
            MadeinService::class
        );


        //Order
        $this->app->singleton(
            OrderRepositoryInterface::class,
            OrderRepository::class
        );

        $this->app->singleton(
            OrderServiceInterface::class,
            OrderService::class
        );

        //OrderDetail
        $this->app->singleton(
            OrderDetailRepositoryInterface::class,
            OrderDetailRepository::class
        );

        $this->app->singleton(
            OrderDetailServiceInterface::class,
            OrderDetailService::class
        );

        //User
        $this->app->singleton(
            UserRepositoryInterface::class,
            UserRepository::class
        );

        $this->app->singleton(
            UserServiceInterface::class,
            UserService::class
        );

        //Supplier
        $this->app->singleton(
            SupplierRepositoryInterface::class,
            SupplierRepository::class
        );

        $this->app->singleton(
            SupplierServiceInterface::class,
            SupplierService::class
        );

        //ImportInvoice
        $this->app->singleton(
            ImportInvoiceRepositoryInterface::class,
            ImportInvoiceRepository::class
        );

        $this->app->singleton(
            ImportInvoiceServiceInterface::class,
            ImportInvoiceService::class
        );

        //ImportInvoiceDetail
        $this->app->singleton(
            ImportInvoiceDetailRepositoryInterface::class,
            ImportInvoiceDetailRepository::class
        );

        $this->app->singleton(
            ImportInvoiceDetailServiceInterface::class,
            ImportInvoiceDetailService::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
