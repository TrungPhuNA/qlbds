@extends('layouts.app_master')
@section('content')
    <div class="bg-white box-shadow">
        <form action="" class="form-inline my-3 p-3">
            <input type="text" class="form-control" value="Từ khoá tìm kiếm">
            <div class="form-group ml-2">
                <select class="js-example-basic-single" name="state">
                    <option value="">Tỉnh/thành</option>
                    <option value="1">Hà Nội</option>
                    <option value="2">Hải Phòng</option>
                    <option value="3">Đà Nẵng</option>
                    <option value="4">Nha Trang</option>
                </select>
            </div>
            <div class="form-group ml-2">
                <select class="js-example-basic-single" name="state">
                    <option value="">Quận / Huyện</option>
                    <option value="1">Hà Nội</option>
                    <option value="2">Hải Phòng</option>
                    <option value="3">Đà Nẵng</option>
                    <option value="4">Nha Trang</option>
                </select>
            </div>
            <div class="form-group ml-2">
                <select class="js-example-basic-single" name="state">
                    <option value="">Phường / Xã</option>
                    <option value="1">Hà Nội</option>
                    <option value="2">Hải Phòng</option>
                    <option value="3">Đà Nẵng</option>
                    <option value="4">Nha Trang</option>
                </select>
            </div>
            <div class="form-group ml-2">
                <select class="js-example-basic-single" name="state">
                    <option value="">Mặt tiền / Hẻm</option>
                    <option value="1">Hà Nội</option>
                    <option value="2">Hải Phòng</option>
                    <option value="3">Đà Nẵng</option>
                    <option value="4">Nha Trang</option>
                </select>
            </div>
        </form>
    </div>
    <main role="main" class="container-fluid">
        <div class="my-3 p-3 bg-white rounded box-shadow">
            <h6 class="border-bottom border-gray pb-2 mb-0">Danh sách BDS</h6>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Info</th>
                        <th scope="col">Số nhà</th>
                        <th scope="col">Đường</th>
                        <th scope="col">Phường</th>
                        <th scope="col">Ngang (m)</th>
                        <th scope="col">Dài (m)</th>
                        <th scope="col">Diện tích (m <sup>2</sup>)</th>
                        <th scope="col">Giá (tỉ)</th>
                        <th scope="col">Kết cấu</th>
                        <th scope="col">Ngày Tạo</th>
                        <th scope="col">Ngày Cập nhật</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i = 1 ; $i <= 20; $i ++)
                        <tr>
                            <th scope="row"></th>
                            <td>
                                <a href="" class="btn btn-outline-success btn-sm">Chi tiết</a>
                            </td>
                            <td>20</td>
                            <td>Tân Triều</td>
                            <td>Thanh Trì</td>
                            <td>20</td>
                            <td>30</td>
                            <td>30</td>
                            <td>900</td>
                            <td>Trệt 2 lầu</td>
                            <td>25/02/2021</td>
                            <td>25/02/2021</td>
                            <td></td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@stop
