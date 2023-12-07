@extends('backend/master/master')
@section('title', 'Danh mục sản phẩm')
@section('main')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="{{route('admin.home')}}"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Danh mục</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý danh mục</h1>
			</div>
		</div>
		<!--/.row-->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
                            <form action="{{route('category.postedit',['id' => $category->id])}}" method="post">
							<div class="col-md-5">
								<div class="form-group">
									<label for="">Tên Danh mục</label>
									<input value="{{$category->name}}" type="text" class="form-control" name="name" id="" placeholder="Tên danh mục mới">

								</div>
								<button type="submit" class="btn btn-primary">Sửa tên danh mục</button>
							</div>
                            @csrf
                        </form>
							<div class="col-md-7">
                                @if (session('alert'))
								<div class="alert bg-success" role="alert">
									<svg class="glyph stroked checkmark">
										<use xlink:href="#stroked-checkmark"></use>
									</svg> {{session('alert')}} <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
								</div>
                                @endif
								<h3 style="margin: 0;"><strong>Sửa danh mục</strong></h3>
								<div class="vertical-menu">
									<div class="item-menu active">Danh mục </div>
                                    @foreach ($categories as $item)
                                        
									<div class="item-menu"><span>{{$item->name}}</span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="{{route('category.edit',['id' => $item->id])}}"><i class="fa fa-edit"></i></a>
											<a class="btn-category btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?')" href="{{route('category.delete',['id' => $item->id])}}"><i class="fas fa-times"></i></i></a>
										</div>
									</div>
                                    @endforeach

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/.col-->


		</div>
		<!--/.row-->
	</div>
	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>
@endsection