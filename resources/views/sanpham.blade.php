@extends('layout')

@section('tieude')
Danh Sách Sản Phẩm
@endsection

@section('noidung')

<style>
    .icon-link-hover {
        font-size: 25px;
    }
    .table-footer tr {
        width: 300px;
    }
    .bg-custom-sp {
        backdrop-filter: blur(5px);
        background-image: url('img/bg-sp.jpg');
        background-size: cover;
        background-position: center;
    }
    .bg-nen {
        backdrop-filter: blur(5px);
        background-image: url('img/background-giay.jpg');
        background-size: cover;
        background-position: center;
    }
    h6 {
        text-align: center;
        font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
        color: #e0dfdc;
        background-color: #333;
        letter-spacing: .1em;
        text-shadow: 0 -1px 0 #fff, 0 1px 0 #2e2e2e, 0 2px 0 #2c2c2c, 0 3px 0 #2a2a2a, 0 4px 0 #282828, 0 5px 0 #262626, 0 6px 0 #242424, 0 7px 0 #222, 0 8px 0 #202020, 0 9px 0 #1e1e1e, 0 10px 0 #1c1c1c, 0 11px 0 #1a1a1a, 0 12px 0 #181818, 0 13px 0 #161616, 0 14px 0 #141414, 0 15px 0 #121212, 0 22px 30px rgba(0, 0, 0, 0.9);
    }
    .img-thumbnail2 {
        width: 350px;
        height: 400px;
    }
    .san {
        background-color: rgb(88, 97, 177);
    }
</style>

<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
                <h1>Danh Sách Sản Phẩm</h1>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">

							</div>
						</div>
					</div>
				</div>
			</div>

<body >
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @foreach ($listnhasx as $ds)
                <li class="nav-item">
                    <a class="nav-link" href="/sptheonhasx/{{$ds->id}}">{{$ds->ten}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
    <div class="container-xxl row bg-nen">
        <h1 class="text-center active text-opacity-100" style="margin-bottom: 100px;">
            <strong>GUIT/VEST HÀNG CÓ SẴN</strong>
        </h1>

        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-primary me-1" ng-click="order='price'">Tăng Dần</button>
            <button type="button" class="btn btn-primary me-1" ng-click="order='-price'">Giảm Dần</button>
            <button type="button" class="btn btn-primary me-1" ng-click="order='name'">A-Z</button>
            <button type="button" class="btn btn-primary" ng-click="order='-name'">Z-A</button>
        </div>

        <div class="col-3">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nhập Để Tìm Kiếm..." aria-label="Recipient's username" aria-describedby="basic-addon1" ng-model="keywork" ng-model-options="{debounce:2000}">
            </div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            <i class="fa-solid fa-earth-americas"></i> Nhập Khẩu
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="card" style="margin-bottom: 5px;">
                                <div class="card-body">
                                    <a class="btn text-uppercase text-decoration-none text-black" ng-click="keywork='JAPAN'">JAPAN</a>
                                </div>
                            </div>
                            <div class="card" style="margin-bottom: 5px;">
                                <div class="card-body">
                                    <a class="btn text-uppercase text-decoration-none text-black" ng-click="keywork='ENGLAND'">ENGLAND</a>
                                </div>
                            </div>
                            <div class="card" style="margin-bottom: 5px;">
                                <div class="card-body">
                                    <a class="btn text-uppercase text-decoration-none text-black" ng-click="keywork='ITALY'">ITALY</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading2">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                            <i class="fa-solid fa-street-view"></i> Trong Nước
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse show" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="card" style="margin-bottom: 5px;">
                                <div class="card-body">
                                    <a class="btn text-uppercase text-decoration-none text-black" ng-click="keywork='UMVESTNAM'">UMVESTNAM</a>
                                </div>
                            </div>
                            <div class="card" style="margin-bottom: 5px;">
                                <div class="card-body">
                                    <a class="btn text-uppercase text-decoration-none text-black" ng-click="keywork='AOVESTNAM'">AOVESTNAM</a>
                                </div>
                            </div>
                            <div class="card" style="margin-bottom: 5px;">
                                <div class="card-body">
                                    <a class="btn text-uppercase text-decoration-none text-black" ng-click="keywork='Thomas'">Thomas Nguyen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading3">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                            <i class="far fa-star"></i> Hàng Được Quan Tâm
                        </button>
                    </h2>
                    <div id="collapse3" class="accordion-collapse collapse show" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="card" style="margin-bottom: 5px;">
                                <div class="card-body">
                                    <a class="btn text-uppercase text-decoration-none text-black" ng-click="getTop5ByBan()">Hàng Bán Chạy</a>
                                </div>
                            </div>
                            <div class="card" style="margin-bottom: 5px;">
                                <div class="card-body">
                                    <a class="btn text-uppercase text-decoration-none text-black" ng-click="keywork='sale'">Hàng Giảm Giá</a>
                                </div>
                            </div>
                            <div class="card" style="margin-bottom: 5px;">
                                <div class="card-body">
                                    <a class="btn text-uppercase text-decoration-none text-black" ng-click="keywork='new'">Hàng Mới</a>
                                </div>
                            </div>
                            <div class="card" style="margin-bottom: 5px;">
                                <div class="card-body">
                                    <a class="btn text-uppercase text-decoration-none text-black" ng-click="keywork='limitted'">Hàng Đặc Biệt</a>
                                </div>
                            </div>
                            <div class="card" style="margin-bottom: 5px;">
                                <div class="card-body">
                                    <a class="btn text-uppercase text-decoration-none text-black" ng-click="getTop5ByViews()">Hàng Xem Nhiều</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


         
        <div class="row col-9">
        @foreach ($sp as $dssp)

            <div class="card col-xl-6 bg-custom-sp">
                <div class="card-header text-center">
                    <h6>{{$dssp->ten}}</h6>
                </div>
                <div class="card-body">
                    <img class="img-thumbnail2" src="../image/{{$dssp->hinh}}" alt="">
                </div>
                <div class="card-footer text-center">
                    <span ng-if="sp.tonKho > 1">
                        <p class="badge text-bg-info">Còn Hàng</p>
                    </span>
                    <span ng-if="sp.tonKho < 1">
                        <p class="badge text-bg-info">Hết Hàng</p>
                    </span>
                    <span ng-if="sp.ic == 'new'">
                        <p class="btn btn-danger rounded-5 position-relative top-0 fa-solid fa-shake">NEW</p>
                    </span>
                    <span ng-if="sp.ic == 'sale'">
                        <p class="btn btn-warning rounded-5 position-relative top-0 fa-solid fa-bounce">SALE</p>
                    </span>
                    <span ng-if="sp.ic == 'limitted'">
                        <p class="btn btn-warning rounded-5 position-relative top-0 fa-solid fa-bounce"><i class="fa-solid fa-star"></i></p>
                    </span>
                    <p>Giá: <span class="m-2 text-decoration-line-through">{{$dssp->gia}}</span> <span>{{$dssp->gia_km}}</span> VNĐ</p>
                </div>
                <div class="btn-group">
                    <a href="" type="button" class="btn btn-danger me-2 rounded-2" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover">
                        Mua Ngay
                    </a>
                    <a href="/sp/{{$dssp->id}}" class="btn btn-success me-2 rounded-2" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover">
                        Xem Chi Tiết
                    </a>
                </div>
            </div>
            @endforeach

        </div>
        <div class="d-flex justify-content-center mt-4">
                {{ $sp->links('pagination::bootstrap-4') }}
            </div> 
    </div>
</body>

@endsection
