@extends('layouts.app')

@section('title', 'Chi tiết Hoa')

@section('content')
    <h1>Chi tiết Hoa</h1>
    <p><strong>Tên hoa:</strong> {{ $flower->name }}</p>
    <p><strong>Mô tả:</strong> {{ $flower->description }}</p>
    <p><strong>Ngày tạo:</strong> {{ $flower->created_at }}</p>
    <p><strong>Ngày cập nhật:</strong> {{ $flower->updated_at }}</p>

    <a href="{{ route('flowers.index') }}" class="btn btn-secondary">Quay lại danh sách</a>
    <a href="{{ route('flowers.edit', $flower->id) }}" class="btn btn-warning">Sửa</a>
    <form action="{{ route('flowers.destroy', $flower->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</button>
    </form>
@endsection
