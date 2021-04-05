@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-9 p-5 text" align="center">
                <h1>住戶資料</h1>
                <table border="1" width="500">
                    <tr>
                        　<td>姓名</td>
                        　<td>{{$user->name}}</td>
                        　</tr>
                    <tr>
                        　<td>電話</td>
                        　<td> {{$user->resident->number}}</td>
                    </tr>
                    <tr>
                        　<td>email</td>
                        　<td>{{$user->email}}</td>
                    </tr>
                    <tr>
                        　<td>地址</td>
                        　<td>{{$user->resident->address}}</td>
                    </tr>
                </table>

                <button class="btn">
                    <a href="card/{{$user->id}}">擁有卡號</a>
                </button>
                <button class="btn">
                <a href="/card/create">加入卡號</a>
                </button>
                <button class="btn">
                <a href="/resident/{{$user->id}}/edit">修改資料</a>
                </button>
                <button class="btn">
                    <a href="/visitor/create">登記訪客</a>
                </button>
                <button class="btn">
                    <a href="visitor/{{$user->id}}">訪客清單</a>
                </button>
                <button class="btn">
                    <a href="record/{{$user->id}}">通行紀錄</a>
                </button>
            </div>
        </div>
    </div>

@endsection
