<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;
use App\slide;
use App\LoaiTin;
class PageController extends Controller
{
    //
    public function menu(){
    	$slide=slide::all();
     	$theloai=TheLoai::all();
     	return view('pages.trangchu',['theloai'=>$theloai,'slide'=>$slide]);
     }
    public function getdangnhap(){
    	return view('pages.dangnhap');

    }
    public function postdangnhap(){

    }
}
