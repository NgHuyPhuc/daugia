@extends('backend/master/master')
@section('title', 'Thêm mới Thông tin giới thiệu')
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm Thông tin giới thiệu</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-xs-6 col-md-12 col-lg-12">
                <form method="post" enctype="multipart/form-data" action="{{ route('about.postcreate') }}">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Thêm Thông tin giới thiệu</div>
                        <div class="panel-body">
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-md-8">

                                    <div class="form-group">
                                        <label>Tiêu đề</label>
                                        <input value="{{$about->title}}" type="text" name="title" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Ảnh Thông tin giới thiệu</label>
                                        <input id="img" type="file" name="img" class="form-control hidden"
                                            onchange="changeImg(this)">
                                        <img id="avatar" class="thumbnail" width="100%" height="350px"
                                            src="../upload/img/{{$about->img}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Thông tin chi tiết</label>
                                        <textarea id="content" name="content" style="width: 100%;height: 100px;">{{$about->content}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    {{-- <div class="form-group">
                                    <label>Miêu tả</label>
                                    <textarea id="editor" name="describe" style="width: 100%;height: 100px;"></textarea>
                                </div> --}}
                                    <button class="btn btn-success" type="submit">Thêm Thông tin giới thiệu</button>
                                    <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    @csrf
                </form>
            </div>
        </div>

        <!--/.row-->
    </div>

    <!--end main-->
    <script src="ckeditor/ckeditor.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    



    <script>
        function changeImg(input) {
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e) {
                    //Thay đổi đường dẫn ảnh
                    $('#avatar').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function() {
            $('#avatar').click(function() {
                $('#img').click();
            });
        });
        CKEDITOR.replace('content',{
            filebrowserImageUploadUrl : "{{ url('/admin/about/uploads-ckeditor?_token='.csrf_token()) }}",
            filebrowserBrowseUrl : "{{ url('/admin/about/file-browser?_token='.csrf_token()) }}",
            filebrowserUploadMethod: 'form',
        });
    </script>
    </body>

    </html>
@endsection
