@extends('layout')
@section('tieude')
Trang Chủ
@endsection
@section('noidung')
<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Hoài Nghĩa <span clsas="d-block">Thời Trang Đỉnh Cao</span></h1>
								<p class="mb-4">Uy Tính Tạo Nên Thương Hiệu</p>
								<p><a href="/dssanpham" class="btn btn-warning">Ghé SHOP Ngay</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">

							</div>
						</div>
					</div>
				</div>
			</div>

			<style>
   .logo{
      width: 70px;
      height: 70px;
      
    }
  .bg-custom {
      backdrop-filter: blur(5px);
      background-image: url('image/nentoi.png'); /* Đường dẫn đến hình ảnh làm nền */
      background-size: cover; /* Kéo hình ảnh để nó phủ toàn bộ diện tích của phần tử */
      background-position: center; /* Căn chỉnh hình ảnh vào giữa */
      height: 100vh; /* Chiều cao tối thiểu là 100% chiều cao của viewport */
    }
    .bg-custom1 {
      backdrop-filter: blur(5px);
      background-image: url('image/anh4.webp'); /* Đường dẫn đến hình ảnh làm nền */
      background-size: cover; /* Kéo hình ảnh để nó phủ toàn bộ diện tích của phần tử */
      background-position: center; /* Căn chỉnh hình ảnh vào giữa */
      height: 100vh;/* Chiều cao tối thiểu là 100% chiều cao của viewport */
    }
    .bg-custom2 {
      backdrop-filter: blur(5px);
      background-image: url('image/anh5.jpg'); /* Đường dẫn đến hình ảnh làm nền */
      background-size: cover; /* Kéo hình ảnh để nó phủ toàn bộ diện tích của phần tử */
      background-position: center; /* Căn chỉnh hình ảnh vào giữa */
      height: 100vh; /* Chiều cao tối thiểu là 300% chiều cao của viewport */
    }
    .bg-custom4 {
      backdrop-filter: blur(5px);
      background-image: url('image/nentoi.png'); /* Đường dẫn đến hình ảnh làm nền */
      background-size: cover; /* Kéo hình ảnh để nó phủ toàn bộ diện tích của phần tử */
      background-position: center; /* Căn chỉnh hình ảnh vào giữa */
      height: 100vh; /* Chiều cao tối thiểu là 400% chiều cao của viewport */
    }.bg-custom3 {
      backdrop-filter: blur(5px);
      background-image: url('image/bg-nhat.jpg'); /* Đường dẫn đến hình ảnh làm nền */
      background-size: cover; /* Kéo hình ảnh để nó phủ toàn bộ diện tích của phần tử */
      background-position: center; /* Căn chỉnh hình ảnh vào giữa */
      height: 100vh; /* Chiều cao tối thiểu là 500% chiều cao của viewport */
    }.bg-custom5 {
      backdrop-filter: blur(5px);
      background-image: url('image/anh6.webp'); /* Đường dẫn đến hình ảnh làm nền */
      background-size: cover; /* Kéo hình ảnh để nó phủ toàn bộ diện tích của phần tử */
      background-position: center; /* Căn chỉnh hình ảnh vào giữa */
      height: 100vh; /* Chiều cao tối thiểu là 100% chiều cao của viewport */
    }
.tt{
  background-color: rgb(88, 97, 177);
}
</style>


<div class="row">
    <div class="col-8">
    <div class="card">
      <div class="card-body"><div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner img-fluid" style="max-height: 500px;">
          <div class="carousel-item active" data-bs-interval="1000">
            <img src="image/anh-2-6b0a63ff-bbeb-46c6-a8cf-9305cca7386f.webp" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="image/anh2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="image/anh3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div></div>
    </div>
    
    </div>
    <div class="col-4" >
      <div style="margin-bottom: 40px;"></div>
      <div class=" shopping-mall text-center align-middle " style="margin-bottom: 45px;">
       <h1><img class="logo"  src="image/Frame_39_2x-removebg-preview.png" alt="">
       </h1>

       <h5>Thời Trang Và Cuộc Sống  </h5>
       
        </div>
        <div class="card bg-info">
          <div class="card-body">
          <h3 class="fw-bold text-uppercase text-center">SHOP HOÀI NGHĨA</h3>
          <p class="">Shop đã có hơn 10 năm kinh nghiệm trong lĩnh vực kinh doanh mặt hàng thời trang là áo cưới và áo vest. Chính vì vậy,&nbsp;<strong>HOÀI NGHĨA</strong>&nbsp;chính là sự lựa chọn hàng đầu dành cho những ai đang có nhu cầu tìm kiếm vest nam đẹp tại TPHCM.Với kiểu dáng và màu sắc đa dạng, những sản phẩm của&nbsp;<strong>HOÀI NGHĨA</strong>&nbsp;phù hợp với mọi đối tượng từ thanh thiếu niên đến trung niên. Ngay cả những chiếc vest dành riêng cho chú rể hay vest cho quý ông đi họp, đi hội nghị đều có sẵn trên kệ hàng của&nbsp;<strong>HOÀI NGHĨA</strong>.</p>
 
        </div>
     </div>
    </div>
 </div>
 <div class="container-xxl">
<div class="row">
  <div class="card col-6 bg-custom text-center" style="color: aliceblue; ;">
    <br><br>
    <h5 style="margin-bottom: 20px;">Dịch Vụ</h5>
    <h1 class="text-center" >Hàng Có Sẵn</h1>
    <hr style="color: yellow; height: 5px;" class="" style="margin-bottom: 40px;">
    <p class="text-center" style="margin-bottom: 100px; font-size: 20px;">Hoài Nghĩa  có rất nhiều mẫu mã vest thời trang với đội ngũ tay nghề rất cao và nhiều năm kinh nghiệm. Vest đi phỏng vấn, khách hàng, vest đi tiệc, vest chú rể..v</p>
    <a href="#" class="btn btn-warning text-center flo" style="font-size: 30px; " >Xem Sản Phẩm</a>
  </div>
  <div class="card col-6 bg-custom1">
  </div>

  <div class="card col-6 bg-custom2"></div>
  <div class="card col-6 bg-custom3">      
    <br><br>
    <h5 style="margin-bottom: 20px;">Dịch Vụ</h5>
    <h1 class="text-center" >VEST CHO THUÊ CÓ SẴN</h1>
    <hr style="color: yellow; height: 5px;" class="" style="margin-bottom: 40px;">
    <p class="text-center" style="margin-bottom: 100px; font-size: 20px;">Nếu không có điều kiện hoặc thời gian để đặt may vest thì thuê vest cũng là một giải pháp không tồi dành cho bạn. Việc lựa chọn áo vest, đặc biệt là áo vest cho chú rể ngày cưới rất quan trọng. Một bộ vest đẹp, chất lượng sẽ giúp chú rể thêm lịch lãm, sang trọng và tự tin.</p>
    <a href="#" class="btn btn-danger text-center d-grid justify-content-center" style="font-size: 30px; " >Xem Sản Phẩm</a>
</div>
  <div class="card col-6 bg-custom4 text-center"  style="color: aliceblue; ">    
       <br><br>
    <h5 style="margin-bottom: 20px;">Dịch Vụ</h5>
    <h1 class="text-center" >MAY VEST THEO YÊU CẦU</h1>
    <hr style="color: yellow; height: 5px;" class="" style="margin-bottom: 40px;">
    <p class="text-center" style="margin-bottom: 100px; font-size: 20px;">Bộ suit có đẹp hay không, chúng ta phải phụ thuộc nhiều vào việc lựa chọn xưởng may uy tín, nếu như chất lượng của sản phẩm không tốt thì phần nhiều cũng xuất phát từ xưởng may. Hoài Nghĩa chính là lựa chọn mà khách hàng không thể bỏ lỡ.</p>
    <a href="#" class="btn btn-warning text-center flo" style="font-size: 30px; " >Quy Trình May VEST</a>
</div>
  <div class="card col-6 bg-custom5"></div>

@include('sp_moi')
@include('sp_hot')


  <div class="col-12"> 
    <div class="row " style="background-color: #c9924e;">
      <div class="col-12">
        <div class="card" style="background-color: #c9924e;">
          <div class="card-body">
            <table class="text-center" style="border: #683d0a 1px;">
            <tr>
              <th><i class="fa-solid fa-user-tie"></i></th>
              <th><i class="fa-solid fa-vest-patches"></i></th>
              <th><i class="fa-solid fa-shirt"></i></th>
            </tr>
            <tr>
              <th><p>VEST Công Sở</p></th>
              <th><p>VEST Sự Kiện</p></th>
              <th><p>VEST Đám Cưới</p></th>

            </tr>
            <tr>
              <td>Khi đi gặp khách hàng, đối tác thì vest là một người bạn hoàn toàn có thể cùng bạn “song kiếm hợp bích” một cách ăn ý nhất.</td>
              <td>Chúng được tô thêm vẻ đẹp lịch lãm vô cùng cần thiết không thể không xuất hiện trong công việc hay những nơi mang tính trang trọng, nguy nga.</td>
              <td>Vest đám cưới cho ngày hạnh phúc thêm thăng hoa. Hãy là người đẹp nhất, nổi bật nhất trong ngày trọng đại của mình</td>
            </tr>
          </table></div>
        </div>
        
      </div>
      

    </div>
  </div>
 
</div>


</div>
@endsection
