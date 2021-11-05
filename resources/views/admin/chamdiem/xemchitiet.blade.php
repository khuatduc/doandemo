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
                <h3 class="card-title">Danh sách tác phẩm của thí sinh</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>Hình ảnh</th>
                    <th>Tiêu Đề</th>
                    <th>Ngày gửi</th>
                    <th>Trạng thái</th>
                    <th>Số điểm</th>
                    <th>Xem chi tiết</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $list= array();
                     ?>
                    @if(!empty($score))
                    @foreach($score as $score)
                   <?php  $list[] = $score->idImage; ?>
                   <tr>
                    <td>{{$score->idImage}}</td>
                    <td><img src="upload/hinh/{{$score->image->name}}" style="width: 100px;"></td>
                    <td>{{$score->image->TieuDe}}</td>
                    <td>{{$score->created_at}}</td>
                    <td>Đã Chấm</td>
                    <td>
                     {{$score->score}}
                     
                    </td>
                   
                    <td><a href="GiamKhao/ChamDiemUser/{{$idUser}}/anh/{{$score->image->TieuDeKhongDau}}{{$score->idImage}}.html">Xem chi Tiết</a></td>
                  </tr>
                  
                    @endforeach
                    @endif
                    @foreach($image as $image)
                      @if(!in_array($image->id, $list))
                       <tr>
                    <td>{{$image->id}}</td>
                    <td><img src="upload/hinh/{{$image->name}}" style="width: 100px;"></td>
                    <td>{{$image->TieuDe}}</td>
                    <td>{{$image->created_at}}</td>
                    <td>Chưa Chấm</td>
                    <td>C</td>
                   
                    <td><a href="GiamKhao/ChamDiemUser/{{$idUser}}/anh/{{$image->TieuDeKhongDau}}{{$image->id}}.html">Xem chi Tiết</a></td>
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