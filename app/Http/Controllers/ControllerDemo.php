<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ControllerDemo extends BaseController
{
    public function demo(){
    	echo "Hello world !";
    	return redirect()->route('demo2');
    }
    
}
?>