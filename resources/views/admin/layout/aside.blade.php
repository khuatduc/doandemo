<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="admin__asset/interface/index3.html" class="brand-link">
      <img src="admin__asset/interface/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
       @if(Auth::guard('budge')->check())
       <span class="brand-text font-weight-light">Giám Khảo số: 
          
           {{Auth::guard('budge')->user()->id}}
          
         </span>
       @endif

       @if(Auth::guard('btc')->check())
       <span class="brand-text font-weight-light">Ban Tổ Chức: 
          
           {{Auth::guard('btc')->user()->id}}
          
         </span>
       @endif
        @if(Auth::guard('admin')->check())
       <span class="brand-text font-weight-light">Quản Trị số: 
          
           {{Auth::guard('admin')->user()->id}}
          
         </span>
       @endif
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="admin__asset/interface/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          @if(Auth::guard('budge')->check())
          <a href="#" class="d-block">
            {{Auth::guard('budge')->user()->name}}
          </a>
          @endif
          @if(Auth::guard('btc')->check())
          <a href="#" class="d-block">
            {{Auth::guard('btc')->user()->email}}
          </a>
          @endif
          @if(Auth::guard('admin')->check())
          <a href="#" class="d-block">
            {{Auth::guard('admin')->user()->name}}
          </a>
          @endif
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           @if(Auth::guard('admin')->check())
             <li class="nav-item">
            <a href="GiamKhao/thongke" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Trang chủ
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
          </li>
           <li class="nav-item">
            <a href="admin/quanly/danhsach" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Xem Danh Sách Admin
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="admin/quanly/them" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Thêm Admin
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Quản Lý Thí Sinh
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="GiamKhao/ChamDiemUser/danhsach" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh Sách Thí Sinh</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="GiamKhao/ChamDiemUser/xemanhnop" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Xem Số ảnh Đã Gửi</p>
                </a>
              </li>
              
            </ul>
          </li>
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Quản Lý BGK
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="GiamKhao/ChamDiemUser/danhsach" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh Sách Thí Sinh</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="GiamKhao/ChamDiemUser/xemanhnop" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Xem Số ảnh Đã Gửi</p>
                </a>
              </li>
              
            </ul>
          </li>
          @endif
          @if(Auth::guard('btc')->check())
            <li class="nav-item">
            <a href="BanToChuc/thongke" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Trang chủ
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="BanToChuc/danhsach" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Xem Danh Sách thí sinh
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="BanToChuc/xemdiemthisinh" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Xem Điểm Thí Sinh
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="BanToChuc/xemdiemanh" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Xem Điểm tác phẩm
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="BanToChuc/xemanhtrienlam" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Xem ảnh triển lãm
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">1</span>
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="BanToChuc/danhsachchuatrienlam" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              Chọn ảnh triển lãm
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">1</span>
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="BanToChuc/xuatdanhsach" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Xuất dữ liệu triển lãm
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="BanToChuc/dangxuat" class="nav-link">
              <i class="nav-icon fas fa-arrow-right"></i>
              <p>
                Đăng Xuất
               
              </p>
            </a>
          </li>
          @endif
         @if(Auth::guard('budge')->check())
           <li class="nav-item">
            <a href="GiamKhao/thongke" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Trang chủ
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="GiamKhao/ChamDiemUser/danhsach" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Xem danh sách thí sinh
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="GiamKhao/ChamDiemUser/xemanhnop" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Số lượng Tác phẩm gửi
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href=" GiamKhao/ChamDiemUser/xemanhdacham" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Xem điểm
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href=" GiamKhao/ChamDiemUser/xemanhchuacham" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Chấm điểm
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="GiamKhao/ChamDiemUser/xemdiem" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Thống kê Tổng điểm 
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Trạng thái Thí Sinh
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="GiamKhao/ChamDiemUser/thisinhduanh" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thí sinh đủ tác phẩm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="GiamKhao/ChamDiemUser/thisinhchuaduanh" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Thí sinh thiếu tác phẩm</p>
                </a>
              </li>
              
            </ul>
          </li>
         <li class="nav-item">
              <a href="GiamKhao/dangxuat" class="nav-link">
              <i class="nav-icon fas fa-arrow-right"></i>
              <p>
                Đăng Xuất
               
              </p>
            </a>
              </li>
         @endif
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>