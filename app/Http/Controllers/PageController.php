<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;
use App\slide;
class PageController extends Controller
{
    //
    public function menu(){
    	$slide=slide::all();
     	return view('pages.trangchu',['theloai'=>$theloai,'slide'=>$slide]);
     }
    public function getdangnhap(){
    	return view('pages.dangnhap');

    }
    public function postdangnhap(){

    }
}
