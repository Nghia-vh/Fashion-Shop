<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Log;


class SiteController extends Controller
{

     function __construct() {
        
            $listnhasx = DB::table('nha_sx')->where('an_hien', 1)->orderBy('thu_tu', 'asc')->get();

            View::share('listnhasx', $listnhasx);
       
    }
    function index(){

        $sp_moi=DB::table('san_pham')
        ->where('an_hien',1)
        ->orderBy('ngay','desc')
        ->limit(4)->get();
  
        $sp_hot=DB::table('san_pham')
        ->where('an_hien',1)
        ->where('hot',1)
  
        ->orderBy('ngay','desc')
        ->limit(4)->get();
  
        return view('home',['sp_moi'=>$sp_moi,'sp_hot'=>$sp_hot]);
    }
    function chitietsp($id=0){
             if(is_numeric($id)==false)
             return redirect("/thongbao")->with("thongbao",'Không có sản phẩm: '.$id);
            $sp = DB::table('san_pham')->where('id',$id)->first();
            $sp_hot=DB::table('san_pham')
            ->where('an_hien',1)
            ->where('hot',1)
      
            ->orderBy('ngay','desc')
            ->limit(4)->get();

        return view('chitietsp',['id'=>$id,'sp'=>$sp,'sp_hot'=>$sp_hot]);
    }
    function sptheonhasx($id_nhasx=0){
        if(is_numeric($id_nhasx)==false)
        return redirect("/thongbao")->with("thongbao",'Không có sản phẩm: '.$id_nhasx);
    $ten_nhasx=DB::table('nha_sx')->where('id',$id_nhasx)->value('ten');
    $list_nhasx=DB::table('san_pham')->where('id_nhasx',$id_nhasx)->paginate(8);

        return view('sptheonhasx',['ten_nhasx'=>$ten_nhasx,'list_nhasx'=>$list_nhasx]);
    }
    function dssanpham(){
        $sp=DB::table('san_pham')
        ->orderBy('id','desc')
        ->paginate(8);
      $sp_moi=DB::table('san_pham')
      ->where('an_hien',1)
      ->orderBy('ngay','desc')
      ->limit(6)->get();

      $sp_hot=DB::table('san_pham')
      ->where('an_hien',1)
      ->where('hot',1)

      ->orderBy('ngay','desc')
      ->limit(6)->get();

        return view('sanpham',['sp_moi'=>$sp_moi,'sp_hot'=>$sp_hot,'sp'=>$sp]);
    }
    
    
}
