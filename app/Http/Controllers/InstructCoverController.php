<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quotation;
use App\Models\Insurance;
use App\Models\Instruct;
use App\Models\Client;
use App\Models\CoverType;
use App\Models\Currency;
use App\Models\AuthorizeSign;
use PDF;

class InstructCoverController extends Controller
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
        $items = Instruct::all();

        return view('pages.instruct.index')->with([
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
        $data = $request->all();

        Instruct::create($data);
        return redirect()->route('instruct.index')->with('status', 'Berhasil Ditambahkan');
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
        $item = Instruct::findOrFail($id);

        $authorizes = AuthorizeSign::all();
        return view ('pages.instruct.show')->with([
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
        $item = Instruct::findOrFail($id);

        return view('pages.instruct.edit')->with([
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
        $item = Instruct::findOrFail($id);
        $item->update($data);

        return redirect()->route('instruct.index');
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

    public function create_ic($id)
    {
        $item = Quotation::findOrFail($id);
        // $quotation = Quotation::with('insurances')->findOrFail($id)->get();
        
        return view('pages.instruct.create')->with([
            'item' => $item,
        ]);
    }

    public function setStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:UNAPPROVED,APPROVED,REJECTED'
        ]);

        $item = Instruct::findOrFail($id);
        $item->status = $request->status;

        $item->save();

        return redirect()->route('instruct.index');
    }

    public function print($id)
    {
        $instruct = Instruct::findOrFail($id);

        $pdf = PDF::loadView('pages.instruct.print', compact('instruct'))->setPaper('a4', 'portrait');
        return $pdf->stream();
    }
}
