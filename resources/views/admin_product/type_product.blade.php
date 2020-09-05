@extends('admin_layout')
@section('admin_product')
<div class="container-fluid">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Bảng thông tin loại sản phẩm</h1>
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
                                <th>ID</th>
                                <th>Tên loại sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th style="width:35px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($type_product as $type)
                            <tr>
                               <td>{{$type->id}}</td>
                               <td>{{$type->name}}</td>
                               <td><img width="100px" src="{{ url('public/banner/'.$type->imgBanner) }}" /></td>
                                <td>
                                    <a href='{{URL::to("")}}' class="active" ui-toggle-class=""><i class="fa fa-edit text-active"></i></a>
                                    <a href='{{URL::to("")}}' class="active" ui-toggle-class="" onclick='return yesno()'><i class="fa fa-times text-danger text"></i></a>
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