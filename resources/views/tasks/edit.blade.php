@extends('app')

@section('content')
<div class="card">
    <form action="" method="POST" autocomplete="off" id="edit-task-form">
        @csrf
        <div class="card-header">
            <h2><i class="far fa-edit mr-1"></i> Cập nhật</h2>
        </div>
        <div class="card-body">
            @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('success') }}
            </div>
            @endif
            <div class="form-group">
                <label for="title">Tiêu đề</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $task->title) }}">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="content">Nội dung</label>
                <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="3">{{ old('content', $task->content) }}</textarea>
                @error('content')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="deadline_at">Hạn chót</label>
                <input type="date" class="form-control @error('deadline_at') is-invalid @enderror" id="deadline_at" name="deadline_at" value="{{ old('deadline_at', $task->deadline_at) }}">
                @error('deadline_at')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="deadline_at">Đã hoàn thành</label>
                <div class="custom-control custom-radio">
                    <input type="radio" id="radio-1" name="is_completed" value="0" class="custom-control-input" checked>
                    <label class="custom-control-label" for="radio-1">No</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="radio-2" name="is_completed" value="1" class="custom-control-input" <?= isset($task->is_completed) && $task->is_completed ? 'checked' : ''; ?>>
                    <label class="custom-control-label" for="radio-2">Yes</label>
                </div>
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