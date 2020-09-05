  <div class="cart-table">
      <table>
          <thead>
              <tr>
                  <th>Sản phẩm</th>
                  <th>Tên sản phẩm</th>
                  <th>Giá tiền</th>
                  <th style="width: 100px;">Số lượng</th>
                  <th>Tổng tiền</th>
                  <th></th>
                  <th></th>
              </tr>
          </thead>
          <tbody>
              @if(Session::has("Cart") != null)
              @foreach(Session::get("Cart")->products as $item)
              <tr>
                  <td class="cart-pic first-row"><img src="public/imgsp/{{$item['productInfo']->images}}" alt=""></td>
                  <td class="cart-title first-row">
                      <h6>{{$item['productInfo']->name}}</h>
                  </td>
                  @if($item['productInfo']->giagiam == 0)
                  <td class="p-price first-row">{{number_format($item['productInfo']->giagoc)}}₫</td>
                  @else
                  <td class="p-price first-row">{{number_format($item['productInfo']->giagiam)}}₫</td>
                  @endif
                  <!-- <td class="qua-col first-row">
                    <div class="quantity">
                        <div class="pro-qty">
                            <input id="quanty-item" type="number" value="{{$item['quanty']}}">
                        </div>
                    </div>
                </td> -->
                  <td class="first-row">
                      <input id="quanty-item" type="number" value="{{ $item['quanty'] }}" class="form-control" min="1" max="10" />
                  </td>
                  @if($item['pricedown'] == 0)
                  <td class="total-price first-row">{{number_format( $item['price'])}}₫</td>
                  @else
                  <td class="total-price first-row">{{number_format( $item['pricedown'])}}₫</td>
                  @endif
                  <td class="close-td-reload first-row"><i class="ti-reload btn btn-outline-warning" data-id="{{($item['productInfo']->id)}}"></i></td>
                  <td class="close-td first-row"><i class="ti-close btn btn-outline-danger" data-id="{{($item['productInfo']->id)}}"></i></td>
              </tr>
              @endforeach
              @endif
          </tbody>
      </table>
  </div>
  <div class="row">
      <div class="col-lg-4 offset-lg-8">
          <div class="proceed-checkout">
              @if(Session::has("Cart") != null)
              <ul>
                  <li class="subtotal">Tổng số lượng <span>{{number_format(Session::get("Cart")->totalQuanty)}}</span></li>

                  <li class="cart-total">Thành tiền <span>{{number_format( Session::get("Cart")->totalPrice)}}₫</span></li>
              </ul>
              
              @if(Session::has("khach_hang_dn"))
              <a href="{{URL::to('/thanh-toan')}}" class="proceed-btn">Mua hàng</a>
              @else
              <a href="{{route('dangnhap')}}" class="proceed-btn">Đăng nhập để mua hàng</a>
              @endif
              
              @endif
          </div>
      </div>
  </div>
  @if(Session::has("Cart") == null)
  <div class="row">
      <div class="col-md-12">
          <div class="select-button">
              <a href="" class="primary-btn view-card">Giỏ hàng trống</a>
          </div>
      </div>

  </div>
  @endif