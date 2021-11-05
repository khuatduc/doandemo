 @extends('admin.layout.index')
 @section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Dữ liệu</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             <form method="post" action="BanToChuc/anhtrienlam">
              @csrf
              <div class="card-header">
                <h3 class="card-title">Danh sách Tác Phẩm mang triểm lãm</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tiêu Đề</th>
                    <th>Tên Thí Sinh</th>
                    <th>Tổng điểm</th>
                    <th>Email</th>
                    <th>Ngày sinh</th>
                    <th>Số điện thoại</th>
                    
                    <td>Tuổi</td>
                    <td>Địa chỉ</td>
                    <th>giới tính</th>
                    <th>Chức vụ</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; ?>
                    @foreach($exhibition as $exhibition)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$exhibition->image->TieuDe}}</td>
                    <td>{{$exhibition->image->user->firstName}} {{$exhibition->image->user->lastName}}</td>
                     <td>{{$exhibition->sumScore}}</td>
                     <td>{{$exhibition->image->user->email}}</td>
                      <td>{{$exhibition->image->user->birth}}</td>
                       <td>{{$exhibition->image->user->phone}}</td>
                   
                    <td>{{$exhibition->image->user->age}}</td>
                     <td>{{$exhibition->image->user->address}}</td>
                      <td>
                        @if($exhibition->image->user->gender==0)
                                 {{"Nam"}}
                        @else
                                {{"Nữ"}}
                        @endif
                    </td>
                      <td>{{$exhibition->image->user->position}}</td>
                  </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                 
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </form>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection