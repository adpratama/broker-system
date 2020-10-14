<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Placing;
use App\Models\Quotation;
use App\Models\Insurance;
use App\Models\Client;
use App\Models\CoverType;
use App\Models\Currency;
use App\Models\AuthorizeSign;
use PDF;


class QuotationSlipController extends Controller
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
        //
        // $quotations = Quotation::with('insureds')->get();
        // $insured = Insured::with('insured')->get();
        // $items = ProductGallery::with('product')->get();
        $items = Quotation::all();
        return view('pages.quotation.index')->with([
            'items' => $items
        ]);
            // 'quotations' => $quotations
            // 'insured'=>$insured
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $item = Placing::findOrFail($id);

        return view('pages.quotation.create')->with([
            'item' => $item
        ]);

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
        $data = $request->all();

        Quotation::create($data);
        return redirect()->route('quotation.index')->with('message', 'Quotation Berhasil Dibuat');
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
        $item = Quotation::findOrFail($id);

        $authorizes = AuthorizeSign::all();
        return view ('pages.quotation.show')->with([
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
        //
        $insurances = Insurance::all();
        $clients = Client::all();
        $covertypes = CoverType::all();
        $currencies = Currency::all();
        $item = Quotation::findOrFail($id);

        return view('pages.quotation.edit')->with([
            'item' => $item,
            'insurances' => $insurances,
            'clients' => $clients,
            'covertypes' => $covertypes,
            'currencies'=> $currencies
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
        $item = Quotation::findOrFail($id);
        $item->update($data);

        return redirect()->route('quotation.index');
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
    public function qs($id)
    {
        $item = Placing::findOrFail($id);
        // $insureds = Insured::all();
        // dd($item);
        // var_dump($item);
        return view('pages.quotation.create')->with([
            'item'=>$item,
            // 'insureds'=>$insureds
        ]);
    }

    public function setStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:UNAPPROVED,APPROVED,REJECTED'
        ]);

        $item = Quotation::findOrFail($id);
        $item->status = $request->status;

        $item->save();

        return redirect()->route('quotation.index');
    }

    public function print($id)
    {
        $quotation = Quotation::findOrFail($id);

        $pdf = PDF::loadView('pages.quotation.print', compact('quotation'))->setPaper('a4', 'portrait');
        return $pdf->stream();
    }
}
