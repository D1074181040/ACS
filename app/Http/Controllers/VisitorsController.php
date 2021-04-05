<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use App\visitor;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class VisitorsController extends Controller
{

    public function create()
    {
        return view('visitors.create');
    }
    public function VisitorCreate()
    {
        return view('visitors.VisitorCreate');
    }
    public function store()
    {
        if (Auth::check()) {
            $data=request()->validate([
                'v_name'=>'required',
                'v_number'=>'required',
            ]);
            auth()->user()->visitors()->create($data);

            dd(request()->all());
        }
    else{
        $data=\request()->validate([
            'address'=>'required',
        ]);
        $pick = Resident::where('address','=', $data)->pluck('user_id');
        $data1=request()->validate([
            'v_name'=>'required',
            'v_number'=>'required',
        ]);
        $data1=$data1+[
                'user_id'=>$pick[0],
            ];
        visitor::insert($data1);
        dd($data1);
    }

    }
    public function show($user)
    {
        $user=User::findOrFail($user);
        return view('visitors.show',[
            'user'=> $user,
        ]);
    }
}
