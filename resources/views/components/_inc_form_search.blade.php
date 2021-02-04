<section class="become-form" id="search_order_manage">
    <div class="container">
        <div class="landing-form">
            <h3>CHECK THE STATUS OF ORDER</h3>
            <form id="formOrderManage"  action="{{ route('get_search.order_manage') }}" method="GET">
                <div class="form-group">
                    <select name="name_shop" id="" class="js-example-basic-single">
                        <option value="1">Click name shop</option>
                        <option value="2">Name</option>
                        <option value="3">Anh Em</option>
                        <option value="4">Chào bạn</option>
                        <option value="5">Trung Phú NA</option>
                        <option value="6">Hi ok chào bạn</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="code"  required="required"> <label>Code</label>
                    <p id="err-phone"></p>
                </div>
                <div class="text-center">
                    <button class="btn btn-md btn-blue" type="submit">Search Order Manage<i class="la la-angle-right"></i> </button>
                </div>
            </form>
        </div>
    </div>
    @if(isset($order))
    <div class="container" id="result-order-manage">
        @include('components.result_search')
    </div>
    @endif
</section>
