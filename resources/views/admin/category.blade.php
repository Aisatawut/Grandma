@extends('admin/layouts.app')



@section('content')

  <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">หน้า หมวดหมู่อาหาร</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active" aria-current="page">หน้า contents</li>
              </ol>
            </div>

            <div class="row">
              <div class="col-lg-12 mb-4">
                <!-- Simple Tables -->
                <div class="card">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">หน้า หมวดหมู่อาหาร</h6>
                  </div>
                  <a href="form_add_content.php" class="btn btn-sm btn-primary">เพิ่มข้อมูล</a>
                  <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                        <tr>
                          <th>ID</th>
                          <th>เนื้อหา</th>
                          <th>สร้างเมื่อ</th>
                          <th>แก้ไข</th>
                          <th>ลบ</th>
                        </tr>
                      </thead>

@foreach ($category as $rows)






                      <tbody>
                        <tr>
                          <td>{{$rows->id}}</td>
                          <td>{{$rows->name}}</td>
                          <td>{{$rows->created_at}}</td>
                          <td><a href="form_edit_content.php" class="btn btn-sm btn-warning">แก้ไข</a></td>
                          <td><a href="#" class="btn btn-sm btn-danger">ลบ</a></td>
                        </tr>



                      </tbody>
    @endforeach



                    </table>
                  </div>
                  <div class="card-footer"></div>
                </div>
              </div>
            </div>
            <!--Row-->

            <!-- Modal Logout -->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>Are you sure you want to logout?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                    <a href="login.html" class="btn btn-primary">Logout</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!---Container Fluid-->
        </div>
         <!-- Footer -->
    <?php
@include('admin/layouts/footer')

    ?>
      <!-- Footer -->
    </div>
  </div>


  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>











@endsection
