@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/visitor" enctype="multipart/form-data" method="post">
        @csrf
            <div class="row">
        <div class="col-8" offset-2>
            <div class="row">
                <h1>登記訪客</h1>
            </div>
        <div class="form-group row">
            <label for="v_name" class="col-md-4 col-form-label">訪客姓名</label>

                <input id="v_name"
                       type="text"
                       class="form-control @error('v_name') is-invalid @enderror"
                       name="v_name"
                       value="{{ old('v_name') }}"
                       required autocomplete="v_name" autofocus>

                @error('v_name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
        </div>
            <div class="form-group row">
                <label for="v_number" class="col-md-4 col-form-label">訪客電話</label>

                <input id="v_number"
                       type="text"
                       class="form-control @error('v_number') is-invalid @enderror"
                       name="v_number"
                       value="{{ old('v_number') }}"
                       required autocomplete="v_number" autofocus>

                @error('v_number')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
    </div>
        <div class="row">
            <button class="btn">送出</button>
        </div>
    </div>
        </form>
    </div>
@endsection
