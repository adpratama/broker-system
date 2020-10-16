<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kwitansi;
use App\Models\Invoice;
use App\Models\Insurance;
use App\Models\Client;
use App\Models\Currency;

use PDF;

class KwitansiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Kwitansi::all();

        return view('pages.kwitansi.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $insurances = Insurance::all();
        $clients = Client::all();

        return view('pages.kwitansi.create')->with([
            'insurances' => $insurances,
            'clients' => $clients,
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

        Kwitansi::create($data);
        return redirect()->route('kwitansi.index');
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
        $item = Kwitansi::findOrFail($id);

        return view('pages.kwitansi.edit')->with([
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
        $item = Kwitansi::findOrFail($id);
        $item->update($data);

        return redirect()->route('kwitansi.index');
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

    public function create_kwitansi($id)
    {
        $insurances = Insurance::all();
        $clients = Client::all();
        $item = Invoice::findOrFail($id);

        return view('pages.kwitansi.create')->with([
            'item' => $item,
            'insurances' => $insurances,
            'clients' => $clients
        ]);
    }

    public function print($id)
    {
        $kwitansi = Kwitansi::with(
            'client',
            'insurance',
            'currency'
        )->findOrFail($id);
        $html = '<h1>Hello HTML</h1>';

        $pdf = PDF::loadView('pages.kwitansi.print', compact('kwitansi'))->setPaper('a4', 'portrait');

        return $pdf->stream();
    }
}