<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Placing;
use App\Models\Insurance;
use App\Models\Client;
use App\Models\CoverType;
use App\Models\Currency;

class PlacingSlipController extends Controller
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
        $items = Placing::with('insurance', 'client', 'client.placing')->get();

        return view ('pages.placing.index')->with([
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
        $insurances = Insurance::all();
        $clients = Client::all();
        $covertypes = CoverType::all();
        $currencies = Currency::all();
        return view ('pages.placing.create')->with([
            'insurances' => $insurances,
            'clients' => $clients,
            'covertypes' => $covertypes,
            'currencies'=> $currencies
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

        Placing::create($data);
        return redirect()->route('placing.index');
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
        $item = Placing::findOrFail($id);

        return view ('pages.placing.show')->with([
            'item'=>$item
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
        $item = Placing::findOrFail($id);

        return view ('pages.placing.edit')->with([
            'item'=>$item,
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
     * @param  int  
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->all();
        $item = Placing::findOrFail($id);
        $item->update($data);

        return redirect()->route('placing.index');
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
    // public function print()
    // {
    //     $pdf = PDF::loadview('index')->setPaper('A4','potrait');
    //     return $pdf->stream();
    // }
    public function setStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:UNAPPROVED,APPROVED,REJECTED'
        ]);

        $item = Placing::findOrFail($id);
        $item->status = $request->status;

        $item->save();

        return redirect()->route('placing.index');
    }

    

    public function makeps($id)
    {
        $item = Insurance::findOrFail($id);

        return view('pages.placing.makeps')->with([
            'item' => $item
        ]);
    }

    
}
