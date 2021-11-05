<!DOCTYPE html>
<html lang="zxx">
	<head>
		<!-- Meta Tag -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name='copyright' content='pavilan'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title Tag  -->
		<base href="{{asset('')}}">
		<!-- Favicon -->
	
		
		<!-- Web Font -->
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		
		<!-- Bizwheel Plugins CSS -->
		<link rel="stylesheet" href="admin__asset/chodiem/css/animate.min.css">
		<link rel="stylesheet" href="admin__asset/chodiem/css/bootstrap.min.css">
		<link rel="stylesheet" href="admin__asset/chodiem/css/cubeportfolio.min.css">
		<link rel="stylesheet" href="admin__asset/chodiem/css/font-awesome.css">
		<link rel="stylesheet" href="admin__asset/chodiem/css/jquery.fancybox.min.css">
		<link rel="stylesheet" href="admin__asset/chodiem/css/magnific-popup.min.css">
		<link rel="stylesheet" href="admin__asset/chodiem/css/owl-carousel.min.css">
		<link rel="stylesheet" href="admin__asset/chodiem/css/slicknav.min.css">

		<!-- Bizwheel Stylesheet -->  
		<link rel="stylesheet" href="admin__asset/chodiem/css/reset.css">
		<link rel="stylesheet" href="admin__asset/chodiem/style.css">
		<link rel="stylesheet" href="admin__asset/chodiem/css/responsive.css">
		
		<!-- Bizwheel Colors -->
		<!--<link rel="stylesheet" href="admin__asset/chodiem/css/skins/skin-1.css">
		<!--<link rel="stylesheet" href="admin__asset/chodiem/css/skins/skin-2.css">-->
		<!--<link rel="stylesheet" href="admin__asset/chodiem/css/skins/skin-3.css">-->
		<!--<link rel="stylesheet" href="admin__asset/chodiem/css/skins/skin-4.css">-->
		
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.admin__asset/chodiem/js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
		<style type="text/css">
	.hello {
    width: 100%;
    background: #F7F6EC;
    font-family: 'Cardo', serif;
    font-weight: 400;
    color: #6D6D65;
    overflow-x: hidden;
}

body{
	font-family: 'Dancing Script', cursive;
}

.section-space {
    padding: 20px 0;
    font-family: 'Dancing Script', cursive;
}

.hello h4 {
    padding-bottom: 20px;
    font-family: 'Dancing Script', cursive;
}

.noidung span{
	font-family: 'Dancing Script', cursive!important;
}

.noidung{
	font-family: 'Dancing Script', cursive!important;
}
		</style>
		
	</head>
	<body id="bg">
	
		<!-- Boxed Layout -->
		<div id="page" class="site boxed-layout"> 
		
		<!-- Preloader -->
		<div class="preeloader">
			<div class="preloader-spinner"></div>
		</div>
		
		<!-- Contact Us -->
		<section class="contact-us section-space">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-7 col-12 hello" style="margin: 0 auto;">
						<!-- Contact Form -->
						<div class="contact-form-area m-top-30">
							<h4>Tác Phẩm {{$image->TieuDe}} <p style="float:right;"><a class="noidung" href="GiamKhao/ChamDiemUser/xemchitiet/{{$user->id}}">Quay lại</a></p></h4>
							<form class="form" method="post" action="GiamKhao/ChamDiemUser/{{$user->id}}/anh/{{$image->TieuDeKhongDau}}{{$image->id}}.html">
								<div class="row">
									<div class="col-lg-12 col-md-12 col-12">
										<div class="form-group">
											<p><img src="upload/hinh/{{$image->name}}"></p>
										</div>
									</div>
									
									<div class="col-12">
										<div class="form-group">
										<label class="noidung">Nội Dung</label>
										<div class="noidung">{!!$image->NoiDung!!}</div>
										</div>
									</div>
									<div class="contact-box-main m-top-30">
							<div class="contact-title" style="padding-left: 20px;">
								<h2 class="noidung">Bài Dự thi của Tác giả - {{$user->firstName }} {{$user->lastName}}-{{$user->address}}</h2>
								<p>Ngày gửi:{{$image->created_at}}</p>
							
							<div class="contact-form-area m-top-30">
							<h4>Đạt điểm số</h4>
							
								<input type="hidden" name="_token"  value="{{csrf_token()}}">
								<div class="row">
									<div class="col-lg-12 col-md-12 col-12">
										<div class="form-group">
											<select class="c-select form-control" name="score">
				
												<option value="1" selected>1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
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
							</form>
						</div>
						<!--/ End contact Form -->
					</div>
					
						
				
			</div>
		</section>	
		<!--/ End Contact Us -->
		
		<!-- Footer -->
	
		
		<!-- Jquery JS -->
		<script src="admin__asset/chodiem/js/jquery.min.js"></script>
		<script src="admin__asset/chodiem/js/jquery-migrate-3.0.0.js"></script>
		<!-- Popper JS -->
		<script src="admin__asset/chodiem/js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="admin__asset/chodiem/js/bootstrap.min.js"></script>
		<!-- Modernizr JS -->
		<script src="admin__asset/chodiem/js/modernizr.min.js"></script>
		<!-- ScrollUp JS -->
		<script src="admin__asset/chodiem/js/scrollup.js"></script>
		<!-- FacnyBox JS -->
		<script src="admin__asset/chodiem/js/jquery-fancybox.min.js"></script>
		<!-- Cube Portfolio JS -->
		<script src="admin__asset/chodiem/js/cubeportfolio.min.js"></script>
		<!-- Slick Nav JS -->
		<script src="admin__asset/chodiem/js/slicknav.min.js"></script>
		<!-- Slick Nav JS -->
		<script src="admin__asset/chodiem/js/slicknav.min.js"></script>
		<!-- Slick Slider JS -->
		<script src="admin__asset/chodiem/js/owl-carousel.min.js"></script>
		<!-- Easing JS -->
		<script src="admin__asset/chodiem/js/easing.js"></script>
		<!-- Magnipic Popup JS -->
		<script src="admin__asset/chodiem/js/magnific-popup.min.js"></script>
		<!-- Active JS -->
		<script src="admin__asset/chodiem/js/active.js"></script>
	</body>
</html>