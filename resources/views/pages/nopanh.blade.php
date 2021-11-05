@extends("layout.index")
@section('content')
<!-- Breadcrumb -->
		<!-- <div class="breadcrumbs overlay" style="background-image:url('https://via.placeholder.com/1600x500')">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							
							<div class="bread-menu">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
							
							<div class="bread-title"><h2>Our Address</h2></div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!--/ End Breadcrumb -->
<section class="contact-us section-space">
			<div class="container">
				<div class="row">
					       @if(count($errors)>0)
                            @foreach($errors->all() as $err)
                              <div class="alert alert-danger" role="alert">
                                  {{$err}}<br>
                              </div>
                            @endforeach
                             @endif
                             @if(session('thongbao'))
                             <div class="alert alert-success" role="alert">
                                  {{session('thongbao')}}
                             </div>
                            @endif
					<form class="form cachda" method="post" enctype="multipart/form-data" action="guianh/{{$user->id}}">
						
						 <input type="hidden" name="_token"  value="{{csrf_token()}}">
						<div class="row">
							
					<div class="col-lg-7 col-md-7 col-12">
						<!-- Contact Form -->
						<div class="contact-form-area m-top-30">
							<h4>Tổng Số ảnh đã nộp:  {{$user->image->where('user_id',$user->id)->count()}}/3</h4>
							<?php 
							if ($user->image->where('user_id',$user->id)->count()>=3) {
								$bien=3;
							}
							 ?>
								<div class="row">
									<div class="col-lg-12 col-md-12 col-12">
										<div class="form-group">
											<label>Tiêu Đề</label>
											<input type="text" name="TieuDe" value=""
											@if(isset($bien))
											{{"disabled"}}
                                            @endif
											>
										</div>
										<div class="form-group">
											<label>Bức ảnh</label>
											<input type="file" name="Hinh" value=""
											@if(isset($bien))
											{{"disabled"}}
                                            @endif>
										</div>
									</div>
									
									<div class="col-12">
										<div class="form-group">
										<label>Nội Dung</label>
										<textarea id="demo" class="ckeditor" name="NoiDung"
										@if(isset($bien))
											{{"disabled"}}
                                            @endif></textarea>
										</div>
									</div>
									
								</div>
							
						</div>
						<!--/ End contact Form -->
					</div>
					<div class="col-lg-5 col-md-5 col-12">
						<div class="contact-box-main m-top-30">
							<div class="contact-title">
								
								
							<div class="contact-form-area m-top-30">
							
							
								<h2>Bài Dự thi của Tác giả</h2>
								<input type="hidden" name="_token"  value="{{csrf_token()}}">
								<div class="row">
									<div class=" col-12">
										<label>Email</label>
										<div class="form-group">
											<div class="icon"></div>
											<input type="text" name="email" value="{{$user->email}}" disabled="">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<label>Tên</label>
										<div class="form-group">
											<div class="icon"><i class="fa fa-user"></i></div>
											<input type="text" name="lastName" value="{{$user->lastName}}">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<label>Họ</label>
										<div class="form-group">
											<div class="icon"><i class="fa fa-user"></i></div>
											<input type="text" name="firstName" value="{{$user->firstName}}">
										</div>
									</div>
									<div class=" col-12">
										<label>Địa Chỉ</label>
										<div class="form-group">
											<div class="icon"></div>
											<input type="text" name="address" value="{{$user->address}}">
										</div>
									</div>
									<div class="col-lg-7 col-md-7 col-12">
										<label>Ngày Sinh</label>
										<div class="form-group">
											
											<input type="date" name="birth" value="{{$user->birth}}">
										</div>
									</div>
									<div class="col-lg-5 col-md-5 col-12">
										<label>Tuổi</label>
										<div class="form-group">
											
											<input type="text" name="age" value="{{$user->age}}">
										</div>
									</div>
                                    <div class=" col-12">
										<label>Nghề Ngiệp</label>
										<div class="form-group">
											<div class="icon"></div>
											<input type="text" name="position" value="{{$user->position}}">
										</div>
									</div>
									<div class=" col-12">
										<label>Số Điện Thoại</label>
										<div class="form-group">
											<div class="icon"></div>
											<input type="text" name="phone" value="{{$user->phone}}">
										</div>
									</div>
								    <div class=" col-12">
										<div class="radio">
											<label> 
												<span style="padding-right: 30px;">Giới Tính:</span>
												<span>Nam</span>
												<input style="margin-left:5px" selected type="radio" name="gender" id="gender1" value="0" 
												@if($user->gender==0)
                                                    {{"checked"}}
												@endif
												>
												<span style="margin-left:20px">Nữ</span>
												<input style="margin-left:5px" type="radio" name="gender" id="gender1" value="1" 
												@if($user->gender==1)
                                                    {{"checked"}}
												@endif 
												>
											</label>
										</div>
										
									</div>
								
									
									
								
									<div class="col-12">
										<div class="form-group button">
											<button type="submit" class="bizwheel-btn theme-2">Xác Nhận</button>
										</div>
									</div>
								</div>
							
						</div>
						</div>
					</div>
				    </div>
				    </div>
					</form>
					
				</div>
			</div>
		</section>
@endsection
