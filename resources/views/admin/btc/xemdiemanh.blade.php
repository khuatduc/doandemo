 @extends('admin.layout.index')
 @section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
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
                <h3 class="card-title">Tổng số tranh đã chọn đi triển lãm: {{count($arrayImageEx)}}</h3>
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
                    <th>Tổng điểm</th>
                    <td>Triển Lãm</td>
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
                     <td>{{$arrayName[$i]}}</td>
                    <td><input type="checkbox" name="chon[]" value="{{$image->id}}"
                           @if(in_array($image->id,$arrayImageEx))
                           {{"checked"}}
                           @endif

                      ></td>
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