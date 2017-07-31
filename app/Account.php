<?php

namespace App;

use App\Rate;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'account', 'balance', 'interest', 'rates_id', 'user_id', 'days', 'estado'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function rate()
    {
        $rate = Rate::Where('id', $this->rates_id)->first();
        return $rate;
    }

    public static function count_bank_c()
    {
        $accounts = Account::all();
        $count = 0;

        foreach ($accounts as $account) {
            if( $account->rate()->bank_name == 'Crédito del Perú' )
            {
                $count++;
            }
        }

        return $count;
    }

    public static function count_bank_f()
    {
        $accounts = Account::all();
        $count = 0;

        foreach ($accounts as $account) {
            if( $account->rate()->bank_name == 'Financiando' )
            {
                $count++;
            }
        }

        return $count;
    }

    public static function count_off()
    {
        $accounts = Account::Where('estado', 1)->get();
        $count = 0;

        foreach ($accounts as $account) {
                $count++;
        }

        return $count;
    }

}
