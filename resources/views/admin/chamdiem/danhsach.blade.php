 @extends('admin.layout.index')
 @section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
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
              <div class="card-header">
                <h3 class="card-title">Danh sách thí sinh tham dự cuộc thi</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>Họ Và Tên</th>
                    <th>Email</th>
                    <th>Địa Chỉ</th>
                    <th>Nghề nghiệp</th>
                    <th>Giới tính</th>
                    <th>Tuổi</th>
                    <th>Số điện thoại</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($user as $user)
                  <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->firstName}} {{$user->lastName}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->position}}</td>
                    <td>
                      @if($user->gender===0)
                      {{"Nam"}}
                      @else
                       {{"Nữ"}}
                      @endif
                    </td>
                    <td>{{$user->age}}</td>
                    <td>{{$user->phone}}</td>
                   
                  </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                 
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
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