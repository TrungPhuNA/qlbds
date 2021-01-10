@extends('layouts.app_master')
@section('content')
    <main role="main" class="container-fluid">
        <div class="my-3 p-3 bg-white rounded box-shadow">
            <h6 class="border-bottom border-gray pb-2 mb-2">Cập nhật thông tin</h6>
            <form class="" method="POST" >
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email Login</label>
                    <input type="text" class="form-control"  placeholder="Enter email" value="{{ $admin->email }}" disabled>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control"  placeholder="Enter email" value="{{ $admin->password }}" disabled>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="text" class="form-control" name="phone" value="{{ $admin->phone }}">
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
        </div>
    </main>
@stop
