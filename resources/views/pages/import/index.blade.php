@extends('layouts.app_master')
@section('content')
    <main role="main" class="container-fluid">
        <div class="my-3 p-3 bg-white rounded box-shadow">
            <h6 class="border-bottom border-gray pb-2 mb-0">Import data từ file Excel mẫu</h6>
            <form class="was-validated" method="POST" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="custom-file">
                    <input type="file" name="file" class="custom-file-input" id="validatedCustomFile" required>
                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                </div>
                <button type="submit" class="btn-success btn">Xử lý</button>
            </form>
        </div>
    </main>
@stop
