	<!-- sidebar left-->
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
		</form>
        <ul class="nav menu">
			<li class="active"><a href="{{route('admin.home')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Tổng quan</a></li>
			<li><a href="{{route('category.home')}}"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper" /></svg> Danh Mục</a></li>
			<li><a href="{{route('product.home')}}"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> Sản phẩm</a></li>
			<li><a href="{{route('notify.home')}}"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> notify</a></li>
			<li><a href="{{route('law.home')}}"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> law</a></li>
			<li><a href="{{route('about.home')}}"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> Thông tin Giới thiệu</a></li>
			<li role="presentation" class="divider"></li>
			<li><a href="{{route('auctionroom.home')}}"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> Phòng đấu giá</a></li>
			<li><a href="{{route('detailauctionroom.home')}}"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> Phòng đấu giá Chi tiết</a></li>

			<li role="presentation" class="divider"></li>
			<li><a href="{{route('payment.home')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad" /></svg> Đơn hàng</a></li>
			@if (Auth::user()->level == 1)
			<li role="presentation" class="divider"></li>
			<li><a href="{{route('useradminsite.home')}}"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Quản lý thành viên</a></li>
			<li><a href="{{route('useradmin.home')}}"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Quản lý Admin</a></li>
			@endif
		
		</ul>

	</div>
	<!--/. end sidebar left-->
