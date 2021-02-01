@extends('layouts.app_master')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="bg-white box-shadow">
        {{--        <form action="" class="form-inline my-3 p-3">--}}
        {{--            <input type="text" class="form-control" value="Từ khoá tìm kiếm">--}}
        {{--            <div class="form-group ml-2">--}}
        {{--                <select class="js-example-basic-single" name="state">--}}
        {{--                    <option value="">Tỉnh/thành</option>--}}
        {{--                    <option value="1">Hà Nội</option>--}}
        {{--                    <option value="2">Hải Phòng</option>--}}
        {{--                    <option value="3">Đà Nẵng</option>--}}
        {{--                    <option value="4">Nha Trang</option>--}}
        {{--                </select>--}}
        {{--            </div>--}}
        {{--            <div class="form-group ml-2">--}}
        {{--                <select class="js-example-basic-single" name="state">--}}
        {{--                    <option value="">Quận / Huyện</option>--}}
        {{--                    <option value="1">Hà Nội</option>--}}
        {{--                    <option value="2">Hải Phòng</option>--}}
        {{--                    <option value="3">Đà Nẵng</option>--}}
        {{--                    <option value="4">Nha Trang</option>--}}
        {{--                </select>--}}
        {{--            </div>--}}
        {{--            <div class="form-group ml-2">--}}
        {{--                <select class="js-example-basic-single" name="state">--}}
        {{--                    <option value="">Phường / Xã</option>--}}
        {{--                    <option value="1">Hà Nội</option>--}}
        {{--                    <option value="2">Hải Phòng</option>--}}
        {{--                    <option value="3">Đà Nẵng</option>--}}
        {{--                    <option value="4">Nha Trang</option>--}}
        {{--                </select>--}}
        {{--            </div>--}}
        {{--            <div class="form-group ml-2">--}}
        {{--                <select class="js-example-basic-single" name="state">--}}
        {{--                    <option value="">Mặt tiền / Hẻm</option>--}}
        {{--                    <option value="1">Hà Nội</option>--}}
        {{--                    <option value="2">Hải Phòng</option>--}}
        {{--                    <option value="3">Đà Nẵng</option>--}}
        {{--                    <option value="4">Nha Trang</option>--}}
        {{--                </select>--}}
        {{--            </div>--}}
        {{--        </form>--}}
    </div>
    <main role="main" class="container-fluid">
        <div class="my-3 p-3 bg-white rounded box-shadow">
            <h6 class="border-bottom border-gray pb-2 mb-0">Danh sách đơn hàng</h6>
            <div class="table-responsive">
                <table class="table datatable-lists">
                    <thead>
                    <tr>
                        <th scope="col">Awb</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Receiver Address</th>
                        <th scope="col">Receiver Province</th>
                        <th scope="col">Receiver City</th>
                        <th scope="col">Receiver barangay</th>
                        <th scope="col">Product Description</th>
                        <th scope="col">COD Amount</th>
                        <th scope="col">Name Shop</th>
                        <th scope="col">Status</th>
                        <th scope="col">Status Desc</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ordersManage ?? [] as $item)
                        <tr>
                            <th scope="row">{{ $item->om_awb }}</th>
                            <td>{{ $item->om_name }}</td>
                            <td>{{ $item->om_phone }}</td>
                            <td>{{ $item->om_receiver_address }}</td>
                            <td>{{ $item->om_receiver_province_address }}</td>
                            <td>{{ $item->om_receiver_city_address }}</td>
                            <td>{{ $item->om_receiver_barangay }}</td>
                            <td>{{ $item->om_product_description }}</td>
                            <td>{{ $item->om_price }}</td>
                            <td>{{ $item->om_name_shop }}</td>
                            <td>{{ $item->om_status }}</td>
                            <td>{{ $item->om_status_text }}</td>
                            <td>
                                <a href="" class="btn btn-outline-success btn-sm">Chi tiết</a>
                                <a href="" class="btn btn-outline-success btn-sm">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@stop
