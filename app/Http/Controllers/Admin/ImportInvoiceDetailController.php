<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ImportInvoiceDetail;
use App\Models\Product;
use App\Models\ImportInvoice;
use App\Services\ImportInvoice\ImportInvoiceService;
use App\Services\Supplier\SupplierServiceInterface;
use App\Services\Product\ProductServiceInterface;
use App\Services\ImportInvoice\ImportInvoiceServiceInterface;
use Illuminate\Http\Request;

class ImportInvoiceDetailController extends Controller
{
    private $productService;
    private $importinvoiceService;

    public function __construct(ProductServiceInterface $productService, 
                                ImportInvoiceServiceInterface $importinvoiceService)
    {
        $this->productService = $productService;
        $this->importinvoiceService = $importinvoiceService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($importinvoices_id)
    {
        $products = $this->productService->all();
    
        $importinvoice = $this->importinvoiceService->find($importinvoices_id);

        return view('admin.importinvoice.detail.index', compact('importinvoice', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($importinvoices_id, $product_id)
    {
        $importinvoice = $this->importinvoiceService->find($importinvoices_id);
        return view('admin.importinvoice.detail.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$importinvoices_id)
    {
        $data = $request->all();

        ImportInvoiceDetail::create($data);
        
        return redirect('/admin/importinvoice/' . $importinvoices_id . '/detail');
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
    public function update(Request $request, $product_id, $importinvoices_id)
    {
       
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
