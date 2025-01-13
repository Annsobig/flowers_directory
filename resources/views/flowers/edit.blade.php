@extends('layouts.app')

@section('title', 'Sửa Hoa')

@section('content')
    <h1>Sửa Hoa</h1>
    <form action="{{ route('flowers.update', $flower->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Tên Hoa</label>
            <input type="text" name="name" id="name" value="{{ $flower->name }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Mô tả</label>
            <textarea name="description" id="description" class="form-control" required>{{ $flower->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="created_at" class="form-label">Ngày tạo</label>
            <input type="date" name="created_at" id="created_at" value="{{ $flower->created_at->format('Y-m-d') }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="updated_at" class="form-label">Ngày cập nhật</label>
            <input type="date" name="updated_at" id="updated_at" value="{{ $flower->updated_at->format('Y-m-d') }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('flowers.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>
@endsection
