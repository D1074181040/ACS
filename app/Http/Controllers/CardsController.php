<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Compound;

class CardsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        return view('cards.create');
    }

    public function store()
    {
        $data=request()->validate([
            'card_code'=>'required',
        ]);
        auth()->user()->cards()->create($data);

        dd(request()->all());
    }
        public function show($user)
    {
        $user=User::findOrFail($user);
        return view('cards.show',[
            'user'=> $user,
        ]);
    }
}
