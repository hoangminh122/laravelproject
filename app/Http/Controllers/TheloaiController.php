<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theloai;
class TheloaiController extends Controller
{
    //
    function changeTitle($str,$strSymbol='-',$case=MB_CASE_LOWER){// MB_CASE_UPPER / MB_CASE_TITLE / MB_CASE_LOWER
	$str=trim($str);
	if ($str=="") return "";
	$str =str_replace('"','',$str);
	$str =str_replace("'",'',$str);
	$str = stripUnicode($str);
	$str = mb_convert_case($str,$case,'utf-8');
	$str = preg_replace('/[\W|_]+/',$strSymbol,$str);
	return $str;
}
    public function getDanhSach(){
    	$theloai=Theloai::all();
     	return view('admin.pages.theloai.danhsach',['theloai'=>$theloai]);

    }
    public function getThem(){

    	return view('admin/pages/theloai/them');
    }
     public function postThem(Request $request){
   
     	
     		$this->validate($request,[
     			'name'=>'required|min:3|max:100'
     		],[
     			'name.required'=>"Bạn chưa nhập tên thể loại",
     			'name.min'=>'tên thể loại có độ dài từ 3 đến 100 kí tự',
     			'name.max'=>'tên thể loại có độ dài từ 3 đến 100 kí tự'
     		]);
     		$theloai=new Theloai;
     		$theloai->Ten=$request->name;
     		$theloai->TenKhongDau=changeTitle($request->name);
     		$theloai->save();
     		  return redirect('admin/pages/theloai/them')->with('thongbao','Thêm thành công');
     		
    }
    public function getSua(){
    	return view('admin/pages/theloai/sua');
    }
}
