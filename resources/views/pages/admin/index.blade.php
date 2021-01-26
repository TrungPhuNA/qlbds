@extends('layouts.app_master')
@section('content')
    <main role="main" class="container-fluid">
        <div class="my-3 p-3 bg-white rounded box-shadow">
            <h6 class="border-bottom border-gray pb-2 mb-0">
                Danh sách quản lý
                <a href="{{ route('get.admin.create') }}" class="btn btn-success btn-sm"> Thêm mới</a>
            </h6>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Time</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($admins ?? [] as $item)
                            <tr>
                                <td scope="row">#{{ $item->id }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <a href="{{ route('get.admin.update', $item->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@stop
