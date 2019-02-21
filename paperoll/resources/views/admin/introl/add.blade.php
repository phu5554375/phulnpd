  @extends('admin.layouts.index')
  @section('content')
  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm giới thiệu
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">

                        <form action="admin/introl/add" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            
                            
                            <div class="form-group">
                                <label>Tên giới thiệu</label>
                                <input class="form-control" name="Ten" placeholder="Nhập tên giới thiệu" />
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                             <input type="file" id="uploadFile" name="images[]" multiple />

                            </div>
                            <div class="form-group">
                                <label>Mô tả ngắn</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-default">Category Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        @endsection