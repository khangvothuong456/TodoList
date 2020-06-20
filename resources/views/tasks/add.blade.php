@extends('app')

@section('content')
<div class="card">
    <form action="/tasks/add" method="POST" autocomplete="off" id="add-task-form">
        @csrf
        <div class="card-header">
            <h2><i class="far fa-plus mr-1"></i> Thêm mới</h2>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="title">Tiêu đề</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="content">Nội dung</label>
                <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="3">{{ old('description') }}</textarea>
                @error('content')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="deadline_at">Hạn chót</label>
                <input type="date" class="form-control @error('deadline_at') is-invalid @enderror" id="deadline_at" name="deadline_at">
                @error('deadline_at')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="card-footer text-center py-3">
            <a href="/tasks" class="btn btn-secondary rounded-0 mr-1">
                <i class="far fa-long-arrow-left mr-2"></i> Trở về
            </a>
            <button type="submit" class="btn btn-primary rounded-0 ml-1">
                <i class="far fa-save mr-2"></i> Lưu thiết lập
            </button>
        </div>
    </form>
</div>
@endsection