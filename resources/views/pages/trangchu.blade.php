 @extends('layout.index')
 @section('noidung')
 <div class="container">

    	@include('layout.slide')

        <div class="space20"></div>


        <div class="row main-left">
           @include('layout.menu')

            <div class="col-md-10">
	            <div class="panel panel-default">            
	            	<div class="panel-heading" style="background-color:#337AB7; color:white;" >
	            		<h2 style="margin-top:0px; margin-bottom:0px;">Tin Tức</h2>
	            	</div>

	            	<div class="panel-body">
	            		@foreach($theloai as $tl)
	            		<!-- item -->
	            			@if(count($tl->loaitin)>0)
	            			<?php
	            			$data=$tl->tintuc->where('NoiBat',1)->take(4);
	            			//echo $data;
	            			//$tin1=$data->shift();
	            			//echo $tin1;
	            			?>
					    <div class="row-item row">
		                	<h3>
		                		<a href="category.html">{{$tl['Ten']}}</a> | 
		                		@foreach($tl->loaitin as $lt)	
		                		<small><a href="chitiet/{{$lt->id}}"><i>{{$lt->Ten}}</i></a>/</small>
		                		@endforeach
		                	</h3>
		                	<div class="col-md-8 border-right">
		                		<div class="col-md-5">
			                        <a href="chitiet/{{$data["0"]->id}}">
			                            <img class="img-responsive" src="image/tintuc/{{$data["0"]->Hinh}}"+".jpg" alt="">
			                        </a>
			                    </div>
                              
                              
			                    <div class="col-md-7">
			                        <h3><b>{{$data["0"]['TieuDe']}}</b></h3>
			                        <p>{{$data["0"]['TomTat']}}</p>
			                        <a class="btn btn-primary" href="chitiet/{{$data["0"]->id}}"><b>Xem thêm</b><span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>
								

		                	</div>
		                    

							<div class="col-md-4 " >
								@foreach($data as $data1)
								<a href="chitiet/{{$data1->id}}">
									<h4>
										<span class="glyphicon glyphicon-list-alt text-success"></span>
										<span class="text-info">{{$data1->TieuDe}}</span>
									</h4>
								</a>
								@endforeach
								
							</div>
							
							<div class="break"></div>
		                </div>
		                <!-- end item -->
		                @endif
		                @endforeach
		               

					</div>
	            </div>
        	</div>
        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->
 @endsection