@extends('layouts.app_guest')
@section('content')
    <div class="home-wrapper">
        <div class="banner bg-tet text-center">
            <div class="container">
                <h2>Connecting more than 1000 stores across the Philippines</h2>
                <br class="d-none d-lg-block">
                <h3>Goods Inspection - Wrapping - Shipping, the safest and most standard procedure in the market</h3>
{{--                <p></p>--}}
{{--                <p>Easily search for orders by phone number and store name</p>--}}
                <a class="btn-registration js-scroll-page" data-id="#search_order_manage" href=""  title="template blogspot">CHECK THE STATUS OF ORDER</a>
            </div>
        </div>
    </div>
{{--    <section class="section-home" id="service">--}}
{{--        <!--container-->--}}
{{--        <div class="container">--}}
{{--            <h2 class="title-h2">The problems customers often encounter when ordering online</h2>--}}
{{--            <p class="font-p mg-bt-60">--}}
{{--                Bạn đã cài trình tạo mã cho facebook mình nhưng có một ngày facebook không gữi mã đăng nhập về cho bạn , số điện thoại bạn đăng ký facebook hiện không còn sử dụng , facebook bạn bị hack vàn đã bị hacker cài trình tạo mã ,... bạn đã đăng xuất nên mất quyền truy cập vào facebook.--}}
{{--            </p>--}}
{{--            <div class="lists">--}}
{{--                <div class="lists-item text-center">--}}
{{--                    <img alt="" class="img-width" src="https://1.bp.blogspot.com/-a_jsIhlvg5Q/Xj9zt0JBpFI/AAAAAAAAQns/O0vB8nA5D8UsYaAsw1td3JNalpAOTsSvgCLcBGAsYHQ/s1600/Hero-Graphic%25402x.png">--}}
{{--                </div>--}}
{{--                <div class="lists-item">--}}
{{--                    <div class="icon-block">--}}
{{--                        <div class="icon">--}}
{{--                            <i aria-hidden="true" class="fa fa-question-circle" style="background:#E2E2ED;color:#4B456F"></i>--}}
{{--                        </div>--}}
{{--                        <div class="icon-info">--}}
{{--                            <h3>Trao Đổi Thông Tin</h3>--}}
{{--                            <p>Khi Bắt đầu vào việc hỗ trợ bạn lấy lại facebook bị trình tạo mã , chúng tôi sẽ cùng bạn trao đổi một chút thông tin về facebook để tiến hành hỗ trợ bạn mở khóa </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="icon-block mg-bt-mobile">--}}
{{--                        <div class="icon">--}}
{{--                            <i aria-hidden="true" class="fa fa-exclamation" style="background:#EAEBFE;color:#7279f8"></i>--}}
{{--                        </div>--}}
{{--                        <div class="icon-info">--}}
{{--                            <h3>Tiếp Nhận Sự Cố</h3>--}}
{{--                            <p>Sau khi đã hoàn tất việc trao đổi thông tin , chúng tôi tiến hành đưa ra các phương án hợp lý để xử lý sự cố và tiếp nhận chúng. </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="icon-block mg-bt-mobile">--}}
{{--                        <div class="icon">--}}
{{--                            <i aria-hidden="true" class="fa fa-credit-card" style="background:#EAEBFE;color:#7279f8"></i>--}}
{{--                        </div>--}}
{{--                        <div class="icon-info">--}}
{{--                            <h3>Thanh Toán</h3>--}}
{{--                            <p>Khi đã mở được facebook bạn chúng tôi sẽ bàn giao facebook và bạn tiến hành thanh toán dịch vụ bên chúng tôi, chúng tôi sẵng sàng hỗ trợ bạn. </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!--container-->--}}
{{--    </section>--}}
    <section class="text-image-sole" id="text-image-sole">
        <div class="container">
            <div class="section-header">
                <h2 class="title-h2">The benefits we bring to you</h2>
            </div>
            <div class="content row">
                <div class="col col-left">
                    <div class="left">
                        <div class="item">
                            <h3 class="title title-under">The problems customers often encounter when ordering online</h3>
                            <ul>
                                <li class="check">Unable to control the delivery time</li>
                                <li class="check">Cannot check product quality</li>
                                <li class="check">Trouble in payment</li>
                                <li class="check">The complaint process is difficult</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col col-right">
                    <div class="right shadow">
                        <img class="lazyload image" src="https://employer.123job.vn/images/banner/be1.png" alt=""  onerror="this.src='/images/default/no_img.png'">
                    </div>
                </div>
            </div>
            <div class="content row">
                <div class="col col-right">
                    <div class="right shadow">
                        <img class="lazyload image" src="https://employer.123job.vn/images/banner/be2.png" alt="" onerror="this.src='/images/default/no_img.png'">
                    </div>
                </div>
                <div class="col col-left">
                    <div class="left">
                        <div class="item">
                            <h3 class="title title-under">The Philippines Shipping Service Center commits:</h3>
                            <ul>
                                <li class="check">Provide the most accurate menu check</li>
                                <li class="check">Accept all types of payments (COD, Bank, ...)</li>
                                <li class="check">Customers are allowed to inspect the products before receiving them</li>
                                <li class="check">Easily process defective orders through the customer support center</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('components._inc_form_search')
    <section class="partner" id="partner">
        <div class="container" id="init-partner">
            <h2 class="title-h2">Affiliate partners</h2>
            <div class="lists">
                <a href="" class="item">
                    <img src="https://theme.hstatic.net/1000376681/1000665239/14/logo_partner6.png?v=146" alt="">
                </a>
                <a href="" class="item">
                    <img src="https://theme.hstatic.net/1000376681/1000665239/14/logo_partner7.png?v=146" alt="">
                </a>
                <a href="" class="item">
                    <img src="https://s2-recruiting.cdn.greenhouse.io/external_greenhouse_job_boards/logos/400/380/700/original/New_Z_Logo.png?1575000402" alt="">
                </a>
                <a href="" class="item">
                    <img src="https://www.rvsolutions.in/wp-content/uploads/2019/04/real-me-logo-750x232.png" alt="">
                </a>
                <a href="" class="item">
                    <img src="https://cdn.tgdd.vn/Files/2019/03/12/1154295/new-oppo-logo_600x173.png" alt="">
                </a>
                <a href="" class="item">
                    <img src="https://theme.hstatic.net/1000376681/1000665239/14/logo_partner1.png?v=146" alt="">
{{--                    <img src="https://res-5.cloudinary.com/crunchbase-production/image/upload/c_lpad,h_256,w_256,f_auto,q_auto:eco/9ee514e66a142525e258" alt="">--}}
                </a>
            </div>
        </div>
    </section>
    <section class="contact-phone" id="contact-phone">
        <div class="container">
            <div class="section-header">
                <h2 class="title-h2">Hotline Consulting Service</h2>
            </div>
            <div class="content row">
                <div class="col">
                    <div class="item">
                        <h4 class="title">Phone</h4>
                        <a href="tel:0333383630"><b>03333 83630</b> - Mr. Hưng</a> </a>
                    </div>
                </div>
                <div class="col">
                    <div class="item">
                        <h4 class="title">Facebook</h4>
                        <a href="tel:0333383630"><b>03333 83630</b> - Mr. Hưng</a></a>
                    </div>
                </div>
                <div class="col">
                    <div class="item">
                        <h4 class="title">Email</h4>
                        <a href="tel:0333383630"><b>03333 83630</b> - Mr. Hưng</a></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
