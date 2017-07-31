<?php

namespace App\Http\Controllers;

use App\Purse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purses = Purse::Where('user_id', Auth::user()->id)->get();
        $true_s = 0;
        $true_d = 0;

        foreach ($purses as $purse) {
            if($purse->user_id == Auth::user()->id && $purse->type_cash == 'Soles')
            {
                $true_s = 1;
            }
            if($purse->user_id == Auth::user()->id && $purse->type_cash == 'Dólares')
            {
                $true_d = 1;
            }
        }

        return view('purses.index', [ 'purses' => $purses, 'true_s' => $true_s , 'true_d' => $true_d]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $type = $request->type;
        switch ($type) {
            case '1':
                $type_cash = 'Soles';
                break;
            
            case '2':
                $type_cash = 'Dólares';
                break;
        }

        $purse = new Purse;

        return view('purses.create', [ 'type_cash' => $type_cash, 'purse' => $purse ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type_cash = $request->type_cash;
        $company = $request->company;
        $cash = $request->cash;
        $user_id = Auth::user()->id;

        $purse = new Purse;

        $purse->type_cash = $type_cash;
        $purse->company = $company;
        $purse->cash = $cash;
        $purse->user_id = $user_id;

        $purse->save();

        return redirect('/purses');
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
        $purse = Purse::find($id);

        $type_cash = $purse->type_cash;

        return view('purses.edit', [ 'type_cash' => $type_cash, 'purse' => $purse ]);
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
        $purse = Purse::find($id);
        
        $purse->cash = $request->cash;
        
        $purse->save();

        return redirect('/purses');

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
