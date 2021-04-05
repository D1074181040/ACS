<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\User;
use Illuminate\Http\Request;
use App\card;
use Illuminate\Support\Facades\DB;

class RecordController extends Controller
{
    public function show($user)
    {
        $user1= User::findOrFail($user);
        $pick = card::where('user_id','=', $user)->pluck('card_code');
        $records=[];

        foreach ($pick as $card_code)
        {
            $records[] = DB::table('records')->where('card_code', $card_code)->get();
        }

        return view('records.show',[
            'user'=> $user1,
            'recordss'=>$records,
        ]);

    }
}
