@extends('layout')
@section('tieude')
Chi Tiết Sản Phẩm
@endsection
@section('noidung')


<style>
     
    
    
    
   
    
    .dropdown-toggle::after{
      display: none;
    }
    .cot2 {font-size: 30px;}
    .card-shop a{
      font-size: 30px;
      width: 50px;
      height: 50px;
    }

    
    .danhmuc a{
     color: #683d0a;
     font-weight: bold;
    }
   
.col-9{
    overflow: hidden; 
    display: inline-block;
}
.img-ch{
    transition: transform 0.3s ease; 
}
.img-ch:hover{
    transform: scale(1.2);
}
.mr{
    margin-right: 10px;
    color: #dc1111;
}
.mr1{
    margin-right: 10px;
}
.col-6 h2{
    
  text-align: center;
  color: #2c2c2c;
  letter-spacing: .05em;
  text-shadow: 4px 4px 0px #d5d5d5, 7px 7px 0px rgba(0, 0, 0, 0.2);

}

.body {
      backdrop-filter: blur(5px);
      background-image: url('img/ct-bg2.jpg'); /* Đường dẫn đến hình ảnh làm nền */
      background-size: cover; /* Kéo hình ảnh để nó phủ toàn bộ diện tích của phần tử */
      background-position: center; /* Căn chỉnh hình ảnh vào giữa */
    }

.img-thumbnail2{
  width: 350px;
  height: 400px;
}
</style>
<body>



<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Chi Tiết Sản Phẩm </h1>
                <h3 class="text-danger"><span>{{$sp->ten}}</span></h3>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>

  
     <div class="container-xxl body">
     
       <div class="row">
        <div class="row col-6 ">
          <div class="row">
            <div class="col-3">
                <img class="img-thumbnail2"  src="../image/{{$sp->hinh}}" alt="" >
                
            </div> 
            <div class="col-9">

            </div>
            <nav aria-label="Page navigation example" class="mt-5">
              <ul class="pagination " >
                
            </nav>
        </div>
        
        </div>
        <div class="col-6">
            <h2></h2> 
            <span >
              <p class="btn btn-danger rounded-5 position-relative top-0  fa-solid fa-shake">NEW</p>
            </span>
            <span >
              <p class="btn btn-warning rounded-5  position-relative top-0  fa-solid fa-bounce">SALE</p>
            </span>
            <span ng-if="sp.ic == 'limitted' ">
              <p class="btn btn-warning rounded-5  position-relative top-0  fa-solid fa-bounce"><i class="fa-solid fa-star"></i></p>
            </span>  
            <h5>Giá Bán : <span class="m-2 text-decoration-line-through">{{$sp->gia}}</span> <span>{{$sp->gia_km}}</span></h5>
            <h5><span class="mr1"> SIZE :</span><span class="mr" ng-repeat="size in sp.Size"></span></h5>
            <h5>Hổ Trợ Chỉnh Sửa</h5>
            <p>Áo vest nam may sẵn tôn dáng đủ size từ 40KG đến 120KG sang trọng, lịch sự chỉ từ 1.200.000 Chất liệu vải nhập khẩu cao cấp không bai xù, nhăn co, màu sắc đa dạng, sắc nét.</p>
            <p>Áo vest có thể mặc trong các buổi tiệc, đi làm công sở, đi chơi…</p>
            <p >Màu Sắc: <span><a href="#!sanpham" style="text-decoration: none;">{{$sp->mau_sac}}</a></span></p>
            <a  class="btn btn-info " ng-click="mua(sp)"  >THÊM GIỎ HÀNG</a>
            <a href="#" class="btn btn-info " ng-if="sp.danhmuc=='Thuê'">THUÊ</a>

        </div>



       @include('sp_hot')
       </div>
    </div> 
   
</body> 
@endsection
