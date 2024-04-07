<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Resources\v1\InvoiceCollection;
use App\Http\Resources\v1\InvoiceResource;
use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    public function index(Invoice $invoice){
        return new InvoiceCollection($invoice::paginate(5));
    }

    public function show(Invoice $invoice){
        return new InvoiceResource($invoice);
    }
}
