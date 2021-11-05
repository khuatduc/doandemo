<header class="header">
            <!-- Topbar -->
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <!-- Top Contact -->
                            <div class="top-contact">
                                <div class="single-contact"><i class="fa fa-phone"></i>Phone: +(600) 125-4985-214</div> 
                                <div class="single-contact"><i class="fa fa-envelope-open"></i>Email: Trienlamtranh@.ptit.edu.vn</div>   
                                <div class="single-contact"><i class="fa fa-clock-o"></i>Thời gian từ: {{$admin->begin}} - kết thúc: {{$admin->end}}</div> 
                            </div>
                            <!-- End Top Contact -->
                        </div>  
                        <div class="col-lg-4 col-12">
                            <div class="topbar-right">
                                <!-- Social Icons -->
                                <ul class="social-icons">
                                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>                                                           
                                <div class="button">
                                    <a href="contact.html" class="bizwheel-btn">Triển Lãm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Topbar -->
            <!-- Middle Header -->
            <div class="middle-header" style="font-family: 'Dancing Script', cursive; background:  #00000008!important">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="middle-inner">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-12">
                                        <!-- Logo -->
                                        <div class="logo">
                                            <!-- Image Logo -->
                                            <div class="img-logo">
                                                <a href="index.html">
                                                    <p style="font-family: 'Dancing Script', cursive; padding-top: 8px;">Triển lãm tranh</p>
                                                </a>
                                            </div>
                                        </div>                              
                                        <div class="mobile-nav"></div>
                                    </div>
                                    <div class="col-lg-10 col-md-9 col-12">
                                        <div class="menu-area">
                                            <!-- Main Menu -->
                                            <nav class="navbar navbar-expand-lg">
                                                <div class="navbar-collapse">   
                                                    <div class="nav-inner"> 
                                                        <div class="menu-home-menu-container">
                                                            <!-- Naviagiton -->
                                                            <ul id="nav" class="nav main-menu menu navbar-nav">
                                                                <li><a href="trangchu">Trang chủ</a></li>
                                                                <li><a href="services.html">Dịch vụ</a></li>
                                                               
                                                              
                                                                <li class="icon-active"><a href="#">Liên Hệ</a>
                                                                    <ul class="sub-menu">
                                                                        <li><a href="about.html">About Us</a></li>
                                                                        <li><a href="404.html">404</a></li>
                                                                    </ul>
                                                                </li>
                                                                 <li class="icon-active"><a href="#">Tác phẩm</a>
                                                                    <ul class="sub-menu">
                                                                        <li><a href="about.html">About Us</a></li>
                                                                        <li><a href="404.html">404</a></li>
                                                                    </ul>
                                                                </li>
                                                                @if(!Auth::check())
                                                                <li class="icon-active"><a href="#" id="dangnhapuser">Đăng Nhập</a>
                                                              
                                                                </li>
                                                                 <li class="icon-active"><a href="#" id="dangkyuser">Đăng Ký</a>
                                                    
                                                                </li>
                                                                  @endif
                                                                  <?php
                                                                $a=0;
                                                                 $today = date("Y-m-d");
                                                                 $another_date =$admin->end;
                                                                 if (strtotime($today) >strtotime($another_date)) {
                                                                     $a=0;
                                                                 } else {
                                                                     $a=1;
                                                                 }
                                                                 ?>
                                                                  @if(Auth::check())
                                                        
                                                                <li class="icon-active"

                                                                >
                                                                 @if($a==0)
                                                                <a href="trangchu" 
                                                                onclick="confirm('Ngoài trời gian nộp Tác phẩm')">Nộp Tác Phẩm </a>
                                                                 @else
                                                                 <a href="guianh">Nộp Tác Phẩm </a>
                                                                 @endif
                                                                </li>
                                                                 
                                                                 <li class="icon-active"><a href="dangxuat" >Đăng Xuất</a>
                                                    
                                                                </li>
                                                                @endif
                                                            </ul>
                                                            <!--/ End Naviagiton -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </nav>
                                            <!--/ End Main Menu --> 
                                            <!-- Right Bar -->
                                            <div class="right-bar">
                                                <!-- Search Bar -->
                                                <ul class="right-nav">
                                                    <li class="top-search"><a href="#0"><i class="fa fa-search"></i></a></li>
                                                    <li class="bar"><a class="fa fa-bars"></a></li>
                                                </ul>
                                                <!--/ End Search Bar -->
                                                <!-- Search Form -->
                                                <div class="search-top">
                                                    <form action="#" class="search-form" method="get">
                                                        <input type="text" name="s" value="" placeholder="Search here"/>
                                                        <button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
                                                    </form>
                                                </div>
                                                <!--/ End Search Form -->
                                            </div>  
                                            <!--/ End Right Bar -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Middle Header -->
            <!-- Sidebar Popup -->
            <div class="sidebar-popup">
                <div class="cross">
                    <a class="btn"><i class="fa fa-close"></i></a>
                </div>
                <div class="single-content">
                    <h4>About Bizwheel</h4>
                    <p>The main component of a healthy environment for self esteem is that it needs be nurturing. It should provide unconditional warmth.</p>
                    <!-- Social Icons -->
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="single-content">
                    <h4>Important Links</h4>   
                    <ul class="links">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Pricing Plan</a></li>
                        <li><a href="#">Blog & News</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>  
            </div>
            <!--/ Sidebar Popup --> 
        </header>