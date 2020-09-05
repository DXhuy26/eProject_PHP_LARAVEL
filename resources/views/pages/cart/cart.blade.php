@if(Session::has("Cart") != null)
<div class="select-items">
    <table>
        <tbody>
            @foreach(Session::get("Cart")->products as $item)
            <tr>
                <td class="si-pic"><img src="public/imgsp/{{$item['productInfo']->images}}" alt=""></td>
                <td class="si-text">
                    <div class="product-selected">
                        @if($item['productInfo']->giagiam == 0)
                        <p>{{number_format( $item['productInfo']->giagoc)}}₫ x {{$item['quanty']}}</p>
                        @else
                        <p>{{number_format( $item['productInfo']->giagiam)}}₫ x {{$item['quanty']}}</p>
                        @endif
                        <h6>{{\Illuminate\Support\Str::limit(strtolower($item['productInfo']->name), 15,' ...') }}</h6>
                    </div>
                </td>
                <td class="si-close">
                    <i class="ti-close" data-id="{{($item['productInfo']->id)}}"></i>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="select-total">
    <span>total:</span>
    <h5>{{number_format( Session::get("Cart")->totalPrice)}}₫</h5>
    <input hidden id="total-quanty-cart" type="number" value="{{(Session::get('Cart')->totalQuanty)}}">
</div>
@endif
<div class="select-button">
    @if(Session::has('Cart') != null)
    <a href="{{ url('/List-Cart') }}" class="primary-btn view-card">Xem giỏ hàng</a>
    @else
    <a href="#" class="primary-btn checkout-btn">Chưa có sản phẩm trong giỏ hàng</a>
    @endif
</div>
