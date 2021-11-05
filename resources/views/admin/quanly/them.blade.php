 @extends('admin.layout.index')
 @section('content')
 <div class="content-wrapper">
  <form action="admin/quanly/them" method="post">
    <input type="hidden" name="_token"  value="{{csrf_token()}}">
    <div class="col-lg-8 col-md-8 col-12 offset-md-2">
            <div class="contact-box-main m-top-30">
              <div class="contact-title">
              <div class="contact-form-area m-top-30">
                <h2>Nhập Thông Tin Đăng Ký</h2>
                 @if(count($errors)>0)
                            <div class="alert alert-danger" role="alert">
                            @foreach($errors->all() as $er)
                                  {{$er}}<br>
                             @endforeach
                            </div>
                        @endif
                        @if(session('thongbao'))
                            <div class="alert alert-success" role="alert">
                                {{session('thongbao')}}
                            </div>
                        @endif
                <div class="row">
                  <div class=" col-12">
                    <label>Email</label>
                    <div class="form-group">
                      <div class="icon"></div>
                      <input type="text" name="email" value="">
                    </div>
                  </div>
                   <div class=" col-12">
                    <label>Tên </label>
                    <div class="form-group">
                      <div class="icon"></div>
                      <input type="text" name="name" value="">
                    </div>
                  </div>
                   <div class=" col-12">
                    <label>Mật Khẩu</label>
                    <div class="form-group">
                      <div class="icon"></div>
                      <input type="password" name="password" value="">
                    </div>
                  </div>
                  <div class=" col-12">
                    <label>Nhập Lại Mật Khẩu</label>
                    <div class="form-group">
                      <div class="icon"></div>
                      <input type="password" name="passwordAgaint" value="">
                    </div>
                  </div>
                  <div class=" col-lg-6 col-md-6 col-12">
                    <label>Số Điện Thoại</label>
                    <div class="form-group">
                      <div class="icon"></div>
                      <input type="text" name="phone" value="">
                    </div>
                  </div>
                  <div class=" col-lg-6 col-md-6 col-12">
                    <label>Số lượng ảnh Nộp</label>
                    <div class="form-group">
                      <select class="c-select form-control" name="amountImage" >
                        <option value="1" selected="">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                         <option value="8">8</option>
                      </select>
                    </div>
                  </div>
                 
                  <div class=" col-lg-6 col-md-6 col-12">
                    <label>Ngày Bắt Đầu</label>
                    <div class="form-group">
                      <div class="icon"></div>
                      <input type="date" name="begin" value="">
                    </div>
                  </div>
                  <div class=" col-lg-6 col-md-6 col-12">
                    <label>Ngày Kết Thúc</label>
                    <div class="form-group">
                      <div class="icon"></div>
                      <input type="date" name="end" value="">
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
@endsection