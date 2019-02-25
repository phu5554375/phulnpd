 @extends('admin.layouts.index')
  @section('content')
  
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Oder
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>email</th>
                                <th>image</th>
                                <th>Lời chúc</th>
                                <th>Background</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($oders as $oder)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $oder-> id}}</td>
                                <td>{{ $oder-> email}}</td>
                                <td>{{ $oder-> image}}</td>
                                <td>{{ $oder-> congratu}}</td>
                                <td>{{ $oder-> background}}</td>
                                
                                
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