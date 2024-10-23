<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\Order\OrderServiceInterface;
use App\Services\Product\ProductServiceInterface;
use App\Services\ImportInvoice\ImportInvoiceServiceInterface;

class DashboardController extends Controller
{
    private $tongOrder;
    private $tongDonNhap;
    private $tongSanPham;

    public function __construct(OrderServiceInterface $orderService, ImportInvoiceServiceInterface $importinvoiceService, ProductServiceInterface $productService)
    {
        $this->tongOrder = $orderService;
        $this->tongDonNhap = $importinvoiceService;
        $this->tongSanPham = $productService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = $this->tongOrder->all();
        $importInvoiceServices = $this->tongDonNhap->all();
        $products = $this->tongSanPham->all();
        $totalImportInvoice = array_sum(array_column($importInvoiceServices->toArray(), 'importinvoices_total'));

        return view('admin.dashboard.index', compact('orders', 'totalImportInvoice', 'products'));
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
    public function store(Request $request)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
