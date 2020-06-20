@extends('app')

@section('content')
<div class="card">
    <div class="card-header">
        <h2><i class="far fa-list mr-1"></i> Danh sách</h2>
    </div>
    <div class="card-body">
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
        @endif
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th class="text-center" scope="col">ID</th>
                    <th scope="col">Tiêu đề</th>
                    <th class="text-center" scope="col">Hạn chót</th>
                    <th class="text-center" scope="col" style="width:15%"><i class="far fa-cogs"></i></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr class="@if($task->is_completed) text-success @endif">
                    <th class="text-center" scope="row">{{ $task->id }}</th>
                    <td>{{ $task->title }}</td>
                    <td class="text-center">{{ $task->deadline_at }}</td>
                    <td class="text-center">
                        <a href="/tasks/{{ $task->id }}/edit" class="text-edit mx-1"><i class="far fa-edit"></i></a>
                        <a href="/tasks/{{ $task->id }}/delete" onClick="return confirm('Bạn muốn xóa nhiệm vụ này?');" class="text-danger mx-1"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer text-right py-3">
        <a href="/tasks/add" class="btn btn-primary rounded-0">
            <i class="far fa-plus mr-2"></i> Thêm mới
        </a>
    </div>
</div>
@endsection