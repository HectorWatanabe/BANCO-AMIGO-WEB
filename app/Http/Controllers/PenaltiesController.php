<?php

namespace App\Http\Controllers;

use App\Penalty;
use App\Rate;
use Illuminate\Http\Request;

class PenaltiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($rate)
    {
        $penalties = Penalty::Where('rate_id', $rate)->get();
        return view('penalties.index', ['penalties' => $penalties, 'rate_id' => $rate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($rate)
    {
        return view('penalties.create', [ 'rate_id' => $rate ]);   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $rate)
    {
        $description = $request->description;
        $rango1 = $request->rango1;
        $rango2 = $request->rango2;
        $days = $request->days;
        
        $rate_n = Rate::find($rate);

        $rate_v = $rate_n->rate;

        $new_penalty = round(pow((1 + $rate_v), $days/360) - 1,9);

        $penalty = new Penalty;

        $penalty->description = $description;
        $penalty->penalty = $new_penalty;
        $penalty->rate_id = $rate;
        $penalty->rango1 = $rango1;
        $penalty->rango2 = $rango2;

        $penalty->save();

        return redirect('/rates/'.$rate.'/penalties');
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
