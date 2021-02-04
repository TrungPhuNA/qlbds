<section class="become-form" id="search_order_manage">
    <div class="container">
        <div class="landing-form">
            <h3>CHECK THE STATUS OF ORDER</h3>
            <form id="formOrderManage"  action="{{ route('get_search.order_manage') }}" method="GET">
                <div class="form-group">
                    <select name="name_shop" id="" class="js-example-basic-single">
                        <option value="">Click select name shop</option>
                        @foreach($shopGlobal as $shopG)
                            <option value="{{ $shopG->id }}" {{ \Request::get('name_shop') == $shopG->id ? "selected" : "" }}>{{ $shopG->s_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="code" value="{{ Request::get('code') }}"  required="required"> <label>Code</label>
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
