@extends('layouts.app_guest')
@section('content')
    <div class="home-wrapper">
        <div class="banner bg-tet text-center">
            <div class="container">
                <h2>Mua bán - vận chuyển - giao hàng nhanh, an toàn - giá rẻ nhất hiện nay</h2>
                <br class="d-none d-lg-block">
                <h3>+ Tiếp nhận đơn hàng - Giao hàng nhanh </h3>
                <a class="btn-registration js-scroll-page" data-id="#search_order_manage" href=""  title="template blogspot">CHECK THE STATUS OF ORDER</a>
            </div>
        </div>
    </div>
    <section class="section-home" id="service">
        <!--container-->
        <div class="container">
            <h2 class="title-h2">Vấn đề hầu hết các bạn thường gặp phải </h2>
            <p class="font-p mg-bt-60">
                Bạn đã cài trình tạo mã cho facebook mình nhưng có một ngày facebook không gữi mã đăng nhập về cho bạn , số điện thoại bạn đăng ký facebook hiện không còn sử dụng , facebook bạn bị hack vàn đã bị hacker cài trình tạo mã ,... bạn đã đăng xuất nên mất quyền truy cập vào facebook.
            </p>
            <div class="lists">
                <div class="lists-item text-center">
                    <img alt="" class="img-width" src="https://1.bp.blogspot.com/-a_jsIhlvg5Q/Xj9zt0JBpFI/AAAAAAAAQns/O0vB8nA5D8UsYaAsw1td3JNalpAOTsSvgCLcBGAsYHQ/s1600/Hero-Graphic%25402x.png">
                </div>
                <div class="lists-item">
                    <div class="icon-block">
                        <div class="icon">
                            <i aria-hidden="true" class="fa fa-question-circle" style="background:#E2E2ED;color:#4B456F"></i>
                        </div>
                        <div class="icon-info">
                            <h3>Trao Đổi Thông Tin</h3>
                            <p>Khi Bắt đầu vào việc hỗ trợ bạn lấy lại facebook bị trình tạo mã , chúng tôi sẽ cùng bạn trao đổi một chút thông tin về facebook để tiến hành hỗ trợ bạn mở khóa </p>
                        </div>
                    </div>
                    <div class="icon-block mg-bt-mobile">
                        <div class="icon">
                            <i aria-hidden="true" class="fa fa-exclamation" style="background:#EAEBFE;color:#7279f8"></i>
                        </div>
                        <div class="icon-info">
                            <h3>Tiếp Nhận Sự Cố</h3>
                            <p>Sau khi đã hoàn tất việc trao đổi thông tin , chúng tôi tiến hành đưa ra các phương án hợp lý để xử lý sự cố và tiếp nhận chúng. </p>
                        </div>
                    </div>
                    <div class="icon-block mg-bt-mobile">
                        <div class="icon">
                            <i aria-hidden="true" class="fa fa-credit-card" style="background:#EAEBFE;color:#7279f8"></i>
                        </div>
                        <div class="icon-info">
                            <h3>Thanh Toán</h3>
                            <p>Khi đã mở được facebook bạn chúng tôi sẽ bàn giao facebook và bạn tiến hành thanh toán dịch vụ bên chúng tôi, chúng tôi sẵng sàng hỗ trợ bạn. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--container-->
    </section>
    <section class="become-form" id="search_order_manage">
        <div class="container">
            <div class="content">
                <div class="left">
                    <div class="apply-realtime">
                        <div class="avatar"> <img class="image" src="/images/user_default_48x48.png" alt=""> </div>
                        <div class="info">
                            <div class="name"> <b>Nguyen Duc Anh</b> <span>- 9 phút trước</span> </div>
                            <p>Vừa tìm kiếm đơn hàng</p>
                        </div>
                    </div>
                    <div class="apply-realtime">
                        <div class="avatar"> <img class="image" src="/images/user_default_48x48.png" alt=""> </div>
                        <div class="info">
                            <div class="name"> <b>Pham Huynh Vu</b> <span>- 10 phút trước</span> </div>
                            <p>Vừa tìm kiếm đơn hàng</p>
                        </div>
                    </div>
                </div>
                <div class="right landing-form">
                    <h3>Nhận ngay tài khoản sau khi đăng ký</h3>
                    <form id="form-register2" novalidate="novalidate">
                        <input type="hidden" value="0">

                        <div class="form-group">
                            {{--                        <input type="text" class="form-control"  name="name" data-error="#err-name" maxlength="60" required="required"> <label>Họ tên của bạn</label>--}}
                            {{--                        <p id="err-name"></p>--}}
                            <select name="name" id="" class="js-example-basic-single">
                                <option value="1">Click name shop</option>
                                <option value="2">Name</option>
                                <option value="3">Anh Em</option>
                                <option value="4">Chào bạn</option>
                                <option value="5">Trung Phú NA</option>
                                <option value="6">Hi ok chào bạn</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone"  data-error="#err-phone" maxlength="15" required="required"> <label>Số liên hệ</label>
                            <p id="err-phone"></p>
                        </div>
                        <div class="text-center"> <button class="btn btn-md btn-blue js-register-employer">Search Order Manage<i class="la la-angle-right"></i> </button> </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop
