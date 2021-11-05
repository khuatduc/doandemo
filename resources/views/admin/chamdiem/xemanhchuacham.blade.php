 @extends('admin.layout.index')
 @section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">dữ liệu</li>
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
                <h3 class="card-title">Điểm cho mỗi tác phẩm:</h3>
                <button type="submit" class="btn btn-dark" style="float: right;">Gửi ảnh</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>Bức Ảnh</th>
                    <th>Tiêu Đề</th>
                    <th>Tên Thí Sinh</th>
                    <td>Chấm điểm</td>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $i=0; ?>
                    @foreach($image as $image)
                  <tr>
                    <td>{{$image->id}}</td>
                    <td><img src="upload/hinh/{{$image->name}}" style="width:100px;"></td>
                    <td>{{$image->TieuDe}}</td>
                    <td>{{$image->user->firstName}} {{$image->user->lastName}}</td>
                    <td><a href="GiamKhao/ChamDiemUser/{{$image->user->id}}/anh/{{$image->TieuDeKhongDau}}{{$image->id}}.html">chấm điểm</a></td>
                  </tr>
                   <?php $i++ ?>
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