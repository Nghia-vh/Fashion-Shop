<style>
    h2{
        background-color: darkorange;
        color: aliceblue;
    }
</style>
<div id="sp_hot ">
    <h2 class="text-center m-5">Sản Phẩm Mới</h2>
    <div id="data" class="row">
        @foreach ($sp_moi as $sp )

        <div class="card col-xl-3 bg-custom-sp" >
                <div class="card-header">
                    <h6>{{$sp->ten}}</h6>
                </div>
                <div class="card-body">
                    <img  src="./image/{{$sp->hinh}}" alt="" style="width: 200px;height: 200px">
                </div>
                <div class="card-footer">

                 
                 <span>Giá:  </span> <span class="text-decoration-line-through m-2">{{$sp->gia}}VNĐ     </span>  <span>{{$sp->gia_km}}VNĐ</span>
                <div class="btn-group">
                    <a ng-click="mua(sp)" type="button" class="btn btn-danger me-2 rounded-2" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover">
                        Mua Ngay
                    </a>
                    <a href="/sp/{{$sp->id}}" class="btn btn-success me-2 rounded-2" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover">
                        Xem Chi Tiết
                    </a>
                </div>
                </div>
            </div>
        @endforeach
    </div>
</div>