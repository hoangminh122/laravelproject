<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    //
    protected $table="TinTuc";
    public function theloai(){
    	return $this->belongsTo('App\TheLoai','idLoaiTin','id');
    }
    public function comment(){
    	return $this->belongTo('App\Comment','idTinTuc','id');
    }
}
