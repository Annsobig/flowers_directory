@extends('layouts.app')

@section('title', 'Danh sách Hoa')

@section('content')
    <h1>Danh sách Hoa</h1>
    <a href="{{ route('flowers.create') }}" class="btn btn-primary mb-3">Thêm Hoa</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tên</th>
                <th>Mô tả</th>
                {{-- <th>Ngày tạo</th> --}}
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($flowers as $flower)
                <tr>
                    <td>{{ $flower->name }}</td>
                    <td>{{ $flower->description }}</td>
                    {{-- <td>{{ $flower->created_at }}</td> --}}
                    <td>
                        <a href="{{ route('flowers.show', $flower->id) }}" class="btn btn-info btn-sm">Chi tiết</a>
                        <a href="{{ route('flowers.edit', $flower->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('flowers.destroy', $flower->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
