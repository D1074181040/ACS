@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/resident/{{$user->id}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-8" offset-2>
                    <div class="row">
                        <h1>修改資料</h1>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label">姓名</label>

                        <input id="name"
                               type="text"
                               class="form-control @error('name') is-invalid @enderror"
                               name="name"
                               value="{{ old('name') ?? $user->name}}"
                               required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="number" class="col-md-4 col-form-label">電話</label>

                        <input id="number"
                               type="text"
                               class="form-control @error('number') is-invalid @enderror"
                               name="number"
                               value="{{ old('number') ?? $user->resident->number}}"
                               required autocomplete="number" autofocus>

                        @error('number')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label">email</label>

                        <input id="email"
                               type="text"
                               class="form-control @error('email') is-invalid @enderror"
                               name="email"
                               value="{{ old('email') ?? $user->email}}"
                               required autocomplete="name" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-md-4 col-form-label">地址</label>

                        <input id="address"
                               type="text"
                               class="form-control @error('address') is-invalid @enderror"
                               name="address"
                               value="{{ old('address') ?? $user->resident->address}}"
                               required autocomplete="name" autofocus>

                        @error('address')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <button class="btn">儲存資料</button>
                </div>
            </div>
        </form>
    </div>

@endsection
