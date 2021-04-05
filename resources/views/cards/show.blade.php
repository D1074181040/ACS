@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 align="center">{{$user->name}}的卡號</h1>
                <table border="1" width="300" align="center">
                @foreach($user->cards as $card)
                        <tr>
                            <td align="center"><span style="font-size:30px;">{{$card->card_code}}</span></td>
                        </tr>
                @endforeach
    </table>
            </div>
        </div>
    </div>
@endsection
