<?php

namespace App\Http\Controllers;

use App\Rate;
use Illuminate\Http\Request;

class RatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rates_cp_d = Rate::Where('bank_name', 'Crédito del Perú')->Where('type_rate', 'Dólares')->get();
        $rates_cp_s = Rate::Where('bank_name', 'Crédito del Perú')->Where('type_rate', 'Soles')->get();
        $rates_f_d = Rate::Where('bank_name', 'Financiando')->Where('type_rate', 'Dólares')->get();
        $rates_f_s = Rate::Where('bank_name', 'Financiando')->Where('type_rate', 'Soles')->get();
        return view('rates.index', [ 
                    'rates_cp_d' => $rates_cp_d,
                    'rates_cp_s' => $rates_cp_s,
                    'rates_f_d' => $rates_f_d,
                    'rates_f_s' => $rates_f_s ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        $tipo = $request->type;

        switch ($tipo) {
            case '1':
                $type_rate = 'Soles';
                $bank_name = 'Crédito del Perú';
                break;
            case '2':
                $type_rate = 'Dólares';
                $bank_name = 'Crédito del Perú';
                break;
            case '3':
                $type_rate = 'Soles';
                $bank_name = 'Financiando';
                break;
            case '4':
                $type_rate = 'Dólares';
                $bank_name = 'Financiando';
                break;
        }

        return view('rates.create', [ 'type_rate' => $type_rate, 'bank_name' => $bank_name ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$rate = $request->rate/100;
        //$rate = $request->rate;
        $days = $request->days;

        // $new_tasa = round(pow((1 + $rate), $days/360) - 1,9);

        $new_rate = new Rate;

        $new_rate->type_rate = $request->type_rate;
        $new_rate->rate = $request->rate/100;
        $new_rate->bank_name = $request->bank_name;
        $new_rate->days = $request->days;

        $new_rate->save();

        return redirect('/rates');
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
