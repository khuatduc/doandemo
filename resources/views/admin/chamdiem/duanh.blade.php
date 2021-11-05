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
              <div class="card-header">
                <h3 class="card-title">Danh sách thí sinh nộp đủ ảnh</h3>
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
                    
                    <th>Số ảnh nộp</th>
                    <th>Trạng Thái</th>
                    <th>Chấm Điểm</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($user as $user)
                     @if(($user->image->where("user_id",$user->id)->count())>=$admin->amountImage)
                  <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->firstName}} {{$user->lastName}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->position}}</td>
                    <td>
                      @if(($user->image->where("user_id",$user->id)->count())<$admin->amountImage)
                      {{"Chưa đủ ảnh"}}
                      @else
                       {{"Đủ ảnh"}}
                      @endif
                     
                    </td>
                    <td>{{$user->image->where("user_id",$user->id)->count()}}/{{$admin->amountImage}}</td>
                    <td><a href="GiamKhao/ChamDiemUser/xemchitiet/{{$user->id}}">Chấm Điểm</a></td>
                  </tr>
                    @endif
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