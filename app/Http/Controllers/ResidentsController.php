<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Resident;
use Illuminate\Http\Request;

class ResidentsController extends Controller
{
    //
    public function index($user)
    {
        $user=User::findOrFail($user);
        return view('residents.index',[
            'user'=> $user,
        ]);
    }
    public function edit($user)
    {
      $user=User::findOrFail($user);
        return view('residents.edit',[
            'user'=> $user,
        ]);
    }
    public function update($user)
    {
        $user=User::findOrFail($user);
        $data=request()->validate([
            'number'=>'required',
            'address'=>'required',
        ]);
        $data1=request()->validate([
            'name'=>'required',
            'email'=>'required',
        ]);
        $user->resident->update($data);
        $user->update($data1);
        return redirect("/resident/{$user->id}");
    }
}
