<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Invoice;
use App\Models\Placing;
use App\Models\Quotation;
use App\Models\Insurance;
use App\Models\Client;
use App\Models\CoverType;
use App\Models\Currency;
use App\Models\AuthorizeSign;
use PDF;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $items = Invoice::with('quotation.insurance', 'quotation.client')->get();

        return view('pages.invoice.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $insurances = Insurance::all();
        $insureds = Insured::all();
        return view('pages.invoice.create')->with([
            'insurances' => $insurances, 
            'insureds' => $insureds
        ]);

        // $item = Invoice::findOrFail($id);

        // return view('pages.invoice.controller')->with([
        //     'item' => $item
        // ]);
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

        Invoice::create($data);
        return redirect()->route('invoice.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Placing::findOrFail($id);
        $authorizes = AuthorizeSign::all();
        return view ('pages.invoice.show')->with([
            'item'=>$item,
            'authorizes' => $authorizes
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Invoice::findOrFail($id);
        
        return view('pages.invoice.edit')->with([
            'item' => $item
        ]);
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
        $data = $request->all();
        $item = Invoice::findOrFail($id);
        $item->update($data);

        return redirect()->route('invoice.index');
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

    public function create_invoice($id)
    {
        $insurances = Insurance::all();
        $clients = Client::all();
        $covertypes = CoverType::all();
        $currencies = Currency::all();
        $item = Quotation::findOrFail($id);

        return view('pages.invoice.create')->with([
            'item' => $item,
            'insurances' => $insurances,
            'clients' => $clients,
            'covertypes' => $covertypes,
            'currencies'=> $currencies
        ]);
    }

    public function setStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:UNAPPROVED,APPROVED,REJECTED'
        ]);

        $item = Invoice::findOrFail($id);
        $item->status = $request->status;

        $item->save();

        return redirect()->route('invoice.index');
    }

    public function print($id)
    {
        $invoice = Invoice::with([
            'quotation.insurance', 
            'quotation.client', 
            'quotation.currency',
            'quotation.covertype'])->findOrFail($id);

            $html = '<h1>Hello HTML</h1>';

            // $pdf = PDF::loadHTMl($html);
        $pdf = PDF::loadView('pages.invoice.print', compact('invoice'))->setPaper('a4', 'portrait');
        // $pdf->setOption('enable-javascript', true);
        // $pdf->setOption('enable-smart-shrinking', true);
        // $pdf->setOption('no-stop-slow-scripts', true);
        return $pdf->stream();
    }

    public function output()
    {
    // mengambil data dari dataase
        $data['member'] = DB::table('table_member')->get();
        
        $config = [
        'format' => 'A4-L', // Landscape
            // 'margin_top' => 0
        ];
            
        $pdf = PDF::loadview('pdf_data_member',$data,[],$config);
        // OR :: $pdf = PDF::loadview('pdf_data_member',$data,[],['format' => 'A4-L']);
        return $pdf->stream();
            
    }

    public function review($id)
    {
        $invoice = Invoice::with([
            'quotation.insurance', 
            'quotation.client', 
            'quotation.currency',
            'quotation.covertype'])->findOrFail($id);

            return view('pages.invoice.review')->with([
                'invoice' => $invoice
            ]);
    }
    public function generateInvoice($id)
    {
        //GET DATA BERDASARKAN ID
        $invoice = Invoice::with(['customer', 'detail', 'detail.product'])->find($id);
        //LOAD PDF YANG MERUJUK KE VIEW PRINT.BLADE.PHP DENGAN MENGIRIMKAN DATA DARI INVOICE
        //KEMUDIAN MENGGUNAKAN PENGATURAN LANDSCAPE A4
        $pdf = PDF::loadView('invoice.print', compact('invoice'))->setPaper('a4', 'landscape');
        return $pdf->stream();
    }

    // public function print()
    // {
    //     $pdf = PDF::loadview('index')->setPaper('A4','potrait');
    //     return $pdf->stream();
    // }

    
}
