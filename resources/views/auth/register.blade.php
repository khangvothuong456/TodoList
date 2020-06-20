@extends('app')

@section('content')
<div class="card">
    <div class="card-header">
        <h2><i class="far fa-user mr-1"></i> Đăng ký</h2>
    </div>
    <div class="card-body">
        <form action="/register" method="POST" autocomplete="off">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Họ tên</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-3 col-form-label">Mật khẩu</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="password_confirmation" class="col-sm-3 col-form-label">Xác nhận mật khẩu</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                </div>
            </div>
            <div class="text-center mt-4 mb-1">
                <a href="/login" class="btn btn-secondary mx-2">
                    <i class="far fa-long-arrow-left mr-2"></i>
                    <span>Trở về</span>
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="far fa-save mr-2"></i>
                    <span>Đăng ký</span>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection