<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;
use App\slide;
use App\LoaiTin;
use App\TinTuc;
use Illuminate\Support\Facades\Auth;
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
   
    public function getloaitin($id1){
    	$loaitin=LoaiTin::find($id1);
    	$tintuc=TinTuc::where('idLoaiTin',$id1)->paginate(5);

    	return view('pages.loaitin',['loaitin'=>$loaitin,'tintuc'=>$tintuc]);
    }
    public function getchitiet($id){
        $tintuc=TinTuc::find($id);
        $temp=$tintuc->idLoaiTin;
       // dd($temp);
        $tinlienquan=TinTuc::where('idLoaiTin',$temp)->get()->take(4);
         $tinnoibat=TinTuc::where('NoiBat',"1")->get()->take(4);
     //  dd($tinlienquan);
        return view('pages.chitiet',['tintuc'=>$tintuc,'tinlienquan'=>$tinlienquan,'tinnoibat'=>$tinnoibat]);
    }
    public function getdangnhap(){
        return view('pages.login');
    }
    public function postdangnhap(Request $request){

        $this->validate($request,[
            'email'=>'required',
            'password'=>'required|min:3|max:32'
             ],[
            'email.required'=>'Bạn chưa nhập Email !',
            'password.required'=>'Bạn chưa nhập mật khẩu !',
            'password.min'=>'Password không được nhỏ hơn 3 kí tự',
            'password.max'=>'Password không được lớn hơn 32 kí tự'
             ]);
        // if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        // {
        //     return redirect('admin/theloai/danhsach');
        // }
        if($request->email=="hoangminh12297@gmail.com" && $request->password="123456")
             return redirect('admin/pages/theloai/danhsach');
        else
        {
            return redirect('admin/dangnhap')->with('thongbao','Đăng nhập không thành công');
        }
    }

    public function getthemtheloai(){
        return view('admin.pages.theloai.them');
    }
}
