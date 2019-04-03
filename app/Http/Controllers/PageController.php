<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;
use App\slide;
use App\LoaiTin;
use App\TinTuc;
class PageController extends Controller
{
	function __construct(){
		$slide=slide::all();
		$theloai=TheLoai::all();
		// View::share('slide',$slide);
		// View::share('theloai',$theloai);
		view()->share('slide',$slide);
		view()->share('theloai',$theloai);
	}
    //
    public function menu(){
    	
     return view('pages.trangchu');
     //	return view('pages.trangchu',['theloai'=>$theloai,'slide'=>$slide]);
     }
    public function getdangnhap(){
    	return view('pages.dangnhap');

    }
    public function postdangnhap(){

    }
    public function getloaitin($id1){
    	$loaitin=LoaiTin::find($id1);
    	$tintuc=TinTuc::where('idLoaiTin',$id1)->paginate(5);

    	return view('pages.loaitin',['loaitin'=>$loaitin,'tintuc'=>$tintuc]);
    }
}
