<?php

namespace App\Http\Controllers;

use App\Account;
use App\Rate;
use App\Purse;
use App\Penalty;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::Where('user_id', Auth::user()->id)->get();
        return view('accounts.index', [ 'accounts' => $accounts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $account = new Account();

        $list_days = [
                        '30' => '30 días', 
                        '60' => '60 días',
                        '90' => '90 días',
                        '180' => '180 días',
                        '360' => '360 días'
                    ];

        $message = "Recuerda que el monto mínimo de apertura es de S/ 2,000.00 o $ 1,000.00";
        return view('accounts.create', ['account' => $account, 'list_days' => $list_days, 'message' => $message] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create2()
    {
        $account = new Account();

        $list_days = [
                        '180' => '180 días', 
                        '360' => '360 días',
                        '720' => '720 días'
                    ];

        $message = "Recuerda que el monto mínimo de apertura es de S/ 500.00 o $ 150.00";
        return view('accounts.create2', ['account' => $account, 'list_days' => $list_days, 'message' => $message] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $purse_s = Purse::Where('user_id', Auth::user()->id)->Where('type_cash', 'Soles')->first(); 
        $purse_d = Purse::Where('user_id', Auth::user()->id)->Where('type_cash', 'Dólares')->first(); 

        if(!$purse_s)
        {
            return redirect('/accounts');
        }
        
        if(!$purse_d)
        {
            return redirect('/accounts');
        }

        if($request->bank_name == 'f')
        {
            $banco = 'Financiando';
        }
        else{
            $banco = 'Crédito del Perú';
        }
        //Bien

        $rate = Rate::Where('type_rate', $request->type_account)->Where('days', $request->days)->Where('bank_name', $banco)->first();

        if($rate->bank_name == 'Crédito del Perú')
        {

            if($request->type_account == 'Soles')
            {

                if($purse_s->cash - $request->balance < 0)
                {
                    return redirect('/accounts/create');
                }

                if($request->balance < 2000)
                {
                    return redirect('/accounts/create');       
                }

                $purse_s->cash = $purse_s->cash - $request->balance;
                $purse_s->save();
            }
            else
            {
                if($purse_d->cash - $request->balance < 0)
                {
                    return redirect('/accounts/create');
                }

                if($request->balance < 1000)
                {
                    return redirect('/accounts/create');
                }

                $purse_d->cash = $purse_d->cash - $request->balance;
                $purse_d->save();
            }
        }
        else{

            if($request->type_account == 'Soles')
            {
                if($purse_s->cash - $request->balance < 0)
                {
                    return redirect('/accounts/create2');
                }

                if($request->balance < 500)
                {
                    return redirect('/accounts/create2');
                }

                $purse_s->cash = $purse_s->cash - $request->balance;
                $purse_s->save();
            }
            else
            {

                if($purse_d->cash - $request->balance < 0)
                {
                    return redirect('/accounts/create2');
                }

                if($request->balance < 150)
                {
                    return redirect('/accounts/create2');
                }

                $purse_d->cash = $purse_d->cash - $request->balance;
                $purse_d->save();
            }
        }

        


        $account = new Account();

        $number_card1 = rand(1000, 9999);
        $number_card2 = rand(1000, 9999);
        $number_card3 = rand(1000, 9999);
        $number_card4 = rand(1000, 9999);

        

        $account->account = $number_card1."-".$number_card2."-".$number_card3."-".$number_card4;
        $account->balance = $request->balance;
        $account->interest = 0.00;
        $account->days = 0;
        $account->estado = 0;
        $account->rates_id = $rate->id;
        $account->user_id = Auth::user()->id;
        $account->save();

        return redirect("/accounts");

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
    public function edit(Request $request, $id)
    {
        $account = Account::find($id);

        if($request->type == 1)
        {
            return view('accounts.edit',  ['account' => $account]);
        }
        else
        {
            return view('accounts.edit2', ['account' => $account]);
        }
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

        

        $account = Account::find($id);

        $rate = Rate::find($account->rates_id);

        if($request->type == 1)
        {

            //Días Transcurridos

            $account->days = $request->days;

            if($rate->bank_name == 'Crédito del Perú')
            {

                $tna = round( ( ( pow(1 + $rate->rate, 1/360 ) - 1 )*360) ,9);

                $inter = ($tna/360)*$request->days;

                $account->interest = round($account->balance*$inter, 2);

                $account->save();

                return redirect('/accounts');
            }
            else
            {
                $inter = round((pow(1 + $rate->rate, $request->days/360 ) - 1) * $account->balance,2);

                $account->interest = $inter;

                $account->save();

                return redirect('/accounts');
            }

        }
        else
        {
            //Retiros
            if($rate->bank_name == 'Crédito del Perú')
            {

                $penalties = Penalty::Where('rate_id', $rate->id)->get();

                $account->days = 0;

                $account->interest = 0.00;

                foreach ($penalties as $penalty) {
                    if($account->days >= $penalty->rango1 && $account->days <= $penalty->rango2)
                    {
                        $account->balance = round($account->balance - ( $account->balance * $penalty->penalty),2);
                    }
                }

                $account->estado = 1;

                $account->save();

                return redirect('/accounts');
            }
            else
            {
                $account->days = 0;

                $account->interest = 0.00;

                $account->estado = 1;

                $account->save();

                return redirect('/accounts');
            }

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
        //
    }
}
