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
        <title>Triểm Lãm Tranh Toàn Quốc</title>
        <base href="{{asset('')}}">
        <!-- Favicon -->
        <link rel="icon" type="image/favicon.png" href="admin__asset/chodiem/img/favicon.png">
        
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
        <link rel="stylesheet" href="login/css/style2.css">
        <!-- Bizwheel Stylesheet -->  
        <link rel="stylesheet" href="admin__asset/chodiem/css/reset.css">
        <link rel="stylesheet" href="admin__asset/chodiem/style2.css">
        <link rel="stylesheet" href="admin__asset/chodiem/css/responsive.css">
        <script type="text/javascript" language="javascript" src="admin__asset/ckeditor/ckeditor.js" ></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
        <style type="text/css">
            .dangky .contact-form-area .form-group {
              margin: 0;
              margin-top: 0px;
            }
            .middle-header{
                background-color: #000000;
            }

            .noidung{
    font-family: 'Dancing Script', cursive!important;
    padding-top: 10px;
}
        </style>
        
        <!-- Bizwheel Colors -->
        <!--<link rel="stylesheet" href="css/skins/skin-1.css">
        <!--<link rel="stylesheet" href="css/skins/skin-2.css">-->
        <!--<link rel="stylesheet" href="css/skins/skin-3.css">-->
        <!--<link rel="stylesheet" href="css/skins/skin-4.css">-->
        
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.admin__asset/chodiem/js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body id="bg">
        <div class="baoboc"></div>
        <!-- Boxed Layout -->
        <div id="page" class="site boxed-layout"> 
        
        <!-- Preloader -->
        <div class="preeloader">
            <div class="preloader-spinner"></div>
        </div>
        <!--/ End Preloader -->
    
        <!-- Header -->
        @include('layout.header')
        <!--/ End Header -->
        
        <!-- Hero Slider -->
        @yield('slider')
        <!--/ End Hero Slider -->
        <!-- Dang nhap -->
         @include('layout.dangnhap')
        <!-- END DANG NHAP -->
        <!-- Dang ky -->
         @include('layout.dangky')
        <!-- END DANG ky -->
          @yield('content')
        
        <!-- Footer -->
       @include('layout.footer')
        <!-- End Footer -->