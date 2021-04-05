@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/card" enctype="multipart/form-data" method="post">
        @csrf
            <div class="row">
        <div class="col-8" offset-2>
            <div class="row">
                <h1>新增卡號</h1>
            </div>
        <div class="form-group row">
            <label for="card_code" class="col-md-4 col-form-label">卡號</label>

                <input id="card_code"
                       type="text"
                       class="form-control @error('card_code') is-invalid @enderror"
                       name="card_code"
                       value="{{ old('card_code') }}"
                       required autocomplete="card_code" autofocus>

                @error('card_code')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
        </div>
    </div>
        <div class="row">
            <button class="btn">新增卡號</button>
        </div>
    </div>
        </form>
    </div>
@endsection
