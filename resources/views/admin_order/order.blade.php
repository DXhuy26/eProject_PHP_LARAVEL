@extends('admin_layout')
@section('admin_product')
<div class="container-fluid">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Bảng thông tin chi tiết đặt hàng</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="row">
        <div class="col-12">
            <div class="card table-responsive">
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Mã hóa đơn</th>
                                <th>Tên người nhận</th>
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                <th>Tổng tiền</th>
                                <th>Ngày đặt</th>
                                <th>Trạng thái</th>
                                <th style="width:35px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $o)
                            <tr>
                                <td>{{$o->id}}</td>
                                <td>{{$o->name}}</td>
                                <td>{{$o->address}}</td>
                                <td>{{$o->phone}}</td>
                                <td>{{$o->amount}}</td>
                                <td>{{$o->orderDate}}</td>
                                <td>{{$o->status}}</td>
                                <td>
                                    <a href='' class="active" ui-toggle-class=""><i class="fa fa-edit text-active"></i></a>
                                    <a href='' class="active" ui-toggle-class="" onclick='return yesno()'><i class="fa fa-times text-danger text"></i></a>
                                </td>

                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>

                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <script>
        function yesno() {
            return confirm("Bạn chắc chắn muốn xóa sản phẩm này ?");
        }
    </script>


    <!-- /.row -->
</div>
@endsection