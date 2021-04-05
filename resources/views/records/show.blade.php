@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 align="center">{{$user->name}}的通行紀錄</h1>
                <table border="1" width="500" align="center">
                    <tr>
                        <td align="center"><span style="font-size:30px;">通行卡號</span></td>
                        <td align="center"><span style="font-size:30px;">通行時間</span></td>
                    </tr>

                        @foreach($recordss as $records)
                            @foreach($records as $record)
                        <tr>
                            <td align="center"><span style="font-size:30px;">{{$record->card_code}}</span></td>
                            <td align="center"><span style="font-size:30px;">{{$record->created_at}}</span></td>
                            @endforeach
                        @endforeach
                        </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
