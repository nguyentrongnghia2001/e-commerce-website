<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ImportInvoice;
use App\Models\ImportInvoiceDetail;
use App\Services\Supplier\SupplierServiceInterface;
use App\Services\Product\ProductServiceInterface;
use App\Services\ImportInvoice\ImportInvoiceServiceInterface;
use App\Services\ImportInvoiceDetail\ImportInvoiceDetailServiceInterface;
use Illuminate\Http\Request;

class ImportInvoiceController extends Controller
{
    private $productService;
    private $supplierService;
    private $importinvoicedetailService;
    private $importinvoiceService;

    public function __construct(SupplierServiceInterface $supplierService, 
                                ProductServiceInterface $productService, 
                                ImportInvoiceServiceInterface $importinvoiceService,
                                ImportInvoiceDetailServiceInterface $importinvoicedetailService)
    {
        $this->supplierService = $supplierService;
        $this->productService = $productService;
        $this->importinvoiceService = $importinvoiceService;
        $this->importinvoicedetailService = $importinvoicedetailService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $suppliers = $this->supplierService->all();
        $importinvoices = $this->importinvoiceService->searchAndPaginate('id', $request->get('search'));
        
        return view('admin.importinvoice.index', compact('importinvoices', 'suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = $this->supplierService->all();

        return view('admin.importinvoice.create', compact('suppliers'));
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
    
        $importinvoice = $this->importinvoiceService->create($data);

        return redirect('admin/importinvoice');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $importinvoice = $this->importinvoiceService->find($id);

        return view('admin.importinvoice.show', compact('importinvoice'));
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
        $data = $request->all();
        $this->importinvoiceService->update($data, $id);
        $this->updateQtyProduct($id);
        return redirect('admin/importinvoice/');
    }

    public function updateQtyProduct($id)
    {
        $importinvoice = $this->importinvoiceService->find($id);
        $importinvoicesDetails = $importinvoice->importInvoiceDetails;
      
        foreach($importinvoicesDetails as $v)
        {
            $product = Product::findOrFail($v->product_id);
            $initial_qty = $product->qty;
            $qty = $v->importinvoices_qty + $initial_qty;
            $this->productService->update(['qty' => $qty], $v->product_id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->updateDeleteQtyProduct($id);
        $this->importinvoiceService->delete($id);
  
        return redirect('admin/importinvoice');
    }

    public function updateDeleteQtyProduct($id)
    {
        $importinvoice = $this->importinvoiceService->find($id);
        $importinvoicesDetails = $importinvoice->importInvoiceDetails;

        foreach ($importinvoicesDetails as $v) {
            $product = Product::findOrFail($v->product_id);
            $initial_qty = $product->qty;
            $qty = $initial_qty - $v->importinvoices_qty;
            $this->productService->update(['qty' => $qty], $v->product_id);
        }
    }
}
