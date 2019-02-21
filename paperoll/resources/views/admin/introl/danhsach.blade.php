 @extends('admin.layouts.index')
  @section('content')
  
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Giới thiệu
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>image</th>
                                <th>title</th>
                                <th>desc</th>
                                <th>Thêm</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($introls as $introl)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $introl-> id}}</td>
                                <td>{{ $introl-> name}}</td>
                                <td>{{ $introl-> image}}</td>
                                <td>{{ $introl-> desc}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/introl/xoa"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/introl/edit{{$introl-> edit}}">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        @endsection