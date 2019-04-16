 @extends('admin.layout.index')
@section('noidung')
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thể loại
                            <small>Thêm</small>
                        </h1>
                    </div>
                    @if(count($errors)>0))
                        <div class="alert alert-danger">
                        
                        @foreach($errors->all() as $error)
                        {{$error}}
                       </div>
                       @endforeach
                        @endif
                        @if(session('thongbao'))
                        <div class="alert alert-danger">
                            {{session('thongbao')}}
                        @endif
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/pages/theloai/postthem" method="post">

                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Tên Thể loại</label>
                                <input class="form-control" name="name" type="name" placeholder="Nhập Tên thể loại" />
                            </div>
                           
                            
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Thoát</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
 </div>
 @endsection
 
