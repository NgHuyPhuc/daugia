<?php
use Illuminate\Support\Facades\Route;
?>

<!-- sidebar left-->
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
    </form>
    <ul class="nav menu">
        <li class="
			@if (Route::is('admin.home')) active @endif
			"><a href="{{ route('admin.home') }}"><svg
                    class="glyph stroked dashboard-dial">
                    <use xlink:href="#stroked-dashboard-dial"></use>
                </svg> Tổng quan</a></li>
        <li class="
		@if (Route::is('category.*')) active @endif
		"><a href="{{ route('category.home') }}"><svg
                    class="glyph stroked clipboard with paper">
                    <use xlink:href="#stroked-clipboard-with-paper" />
                </svg> Danh Mục</a></li>
        <li class="
		@if (Route::is('product.*')) active @endif
		"><a href="{{ route('product.home') }}"><svg
                    class="glyph stroked bag">
                    <use xlink:href="#stroked-bag"></use>
                </svg> Sản phẩm</a></li>
        <li class="
		@if (Route::is('notify.*')) active @endif
		"><a href="{{ route('notify.home') }}"><svg
                    class="glyph stroked sound on">
                    <use xlink:href="#stroked-sound-on" />
                </svg> notify</a></li>
        <li class="
		@if (Route::is('law.*')) active @endif
		"><a href="{{ route('law.home') }}"><svg
                    class="glyph stroked clipboard with paper">
                    <use xlink:href="#stroked-clipboard-with-paper" />
                </svg> law</a></li>
        <li class="
		@if (Route::is('about.*')) active @endif
		"><a href="{{ route('about.home') }}"><svg
                    class="glyph stroked star">
                    <use xlink:href="#stroked-star" />
                </svg> Thông tin Giới thiệu</a></li>
        <li role="presentation" class="divider"></li>
        <li class="
		@if (Route::is('auctionroom.*')) active @endif
		"><a href="{{ route('auctionroom.home') }}"><svg
                    class="glyph stroked app-window">
                    <use xlink:href="#stroked-app-window"></use>
                </svg> Phòng đấu giá</a></li>
        <li class="
		@if (Route::is('detailauctionroom.*')) active @endif
		"><a
                href="{{ route('detailauctionroom.home') }}"><svg class="glyph stroked app window with content">
                    <use xlink:href="#stroked-app-window-with-content" />
                </svg> Phòng đấu giá Chi tiết</a></li>

        <li role="presentation" class="divider"></li>
        <li class="
		@if (Route::is('payment.*')) active @endif
		"><a href="{{ route('payment.home') }}"><svg
                    class="glyph stroked bag">
                    <use xlink:href="#stroked-bag"></use>
                </svg> Đơn hàng</a></li>
        @if (Auth::user()->level == 1)
            <li role="presentation" class="divider"></li>
            <li class="
			@if (Route::is('useradminsite.*')) active @endif
			"><a
                    href="{{ route('useradminsite.home') }}"><svg class="glyph stroked male-user">
                        <use xlink:href="#stroked-male-user"></use>
                    </svg> Quản lý thành viên</a></li>
            <li class="
			@if (Route::is('useradmin.*')) active @endif
			"><a
                    href="{{ route('useradmin.home') }}"><svg class="glyph stroked male-user">
                        <use xlink:href="#stroked-male-user"></use>
                    </svg> Quản lý Admin</a></li>
        @endif

    </ul>

</div>
<!--/. end sidebar left-->
