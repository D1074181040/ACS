@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 align="center">{{$user->name}}的訪客清單</h1>
                <table border="1" width="300" align="center">
                    <tr>
                        <td align="center"><span style="font-size:30px;">訪客姓名</span></td>
                        <td align="center"><span style="font-size:30px;">電話</span></td>
                    </tr>
                @foreach($user->visitors as $visitor)
                        <tr>
                            <td align="center"><span style="font-size:30px;">{{$visitor->v_name}}</span></td>
                            <td align="center"><span style="font-size:30px;">{{$visitor->v_number}}</span></td>
                        </tr>
                @endforeach
    </table>
            </div>
        </div>
    </div>
@endsection
