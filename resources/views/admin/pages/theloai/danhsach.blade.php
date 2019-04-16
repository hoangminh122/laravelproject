@extends('admin.layout.index')
@section('noidung')
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thể loại
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <?php    $i=1?>
                    
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Tên không dấu Parent</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        @foreach($theloai as $tl)
                        <tbody>
                            <tr class="odd gradeX" align="center">
                                <td>{{$i++}}</td>
                                <td>{{$tl->Ten}}</td>
                                <td>{{$tl->TenKhongDau}}</td>                                
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/theloai/xoa"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/theloai/sua/{{$tl->id}}">Edit</a></td>
                            </tr>
                            
                        </tbody>
                        @endforeach
                    </table>
                    
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection