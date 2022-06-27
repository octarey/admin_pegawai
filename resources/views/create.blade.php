<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kapella Bootstrap Admin Dashboard Template</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{asset('template/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('template/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('/template/css/style.css')}}">
  <!-- endinject -->
  <link rel="stylesheet" href="{{asset('/template/images/favicon.png')}}">
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_horizontal-navbar.html -->
        <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
            <span style="color: black">APLIKASI PENDATAAN PEGAWAI</span> 
            <ul class="navbar-nav navbar-nav-left">
              <li class="nav-item dropdown  d-lg-flex d-none">
                <a href="{{route('employes.index')}}">
                  <button type="button" class="btn btn-inverse-primary btn-sm">Dashboard </button>
                </a>
              </li>
              <li class="nav-item dropdown  d-lg-flex d-none">
                <a href="{{route('employes.index')}}">
                  <button type="button" class="btn btn-inverse-primary btn-sm">Data Pegawai </button>
                </a>
              </li>
              <li class="nav-item nav-search d-none d-lg-block ms-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="search">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="search">
                </div>
              </li>	
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                    <span class="nav-profile-name">Admin</span>
                    <span class="online-status"></span>
                    <img src="{{asset('/template/images/faces/face28.png')}}" alt="profile"/>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                      <a class="dropdown-item">
                        <i class="mdi mdi-settings text-primary"></i>
                        Settings
                      </a>
                      <a class="dropdown-item">
                        <i class="mdi mdi-logout text-primary"></i>
                        Logout
                      </a>
                  </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </div>
      </nav>
      {{-- <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation" style="display: -webkit-box">
              <li class="nav-item">
                <a class="nav-link" href="../../index.html">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                  <a href="../../docs/documentation.html" class="nav-link">
                    <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                    <span class="menu-title">Data Pegawai</span></a>
              </li>
            </ul>
        </div>
      </nav> --}}
    </div>
        <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="d-lg-flex align-items-center">
                      <div>
                        <h3 class="text-dark font-weight-bold mb-2">Data Pegawai</h3>
                        <h6 class="font-weight-normal mb-2">Halaman Tambah Data Pegawai RS.MITRA</h6>
                      </div>
                    </div>
                  </div>
                  <div>
                    <hr>
                    @if (session('status'))
                      <div class="alert alert-success">
                        {{session('status')}}
                      </div>
                  @endif
                    <form class="forms-sample" action="{{route('employes.store')}}" method="POST" enctype="multipart/form-data" >
                      @csrf
                      <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                          <input type="text" name="name" class="form-control" placeholder="Nama Pegawai">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">NIP</label>
                        <div class="col-sm-9">
                          <input type="text" name="nib" class="form-control" placeholder="Nomor Induk Pegawai">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Jabatan</label>
                        <div class="col-sm-9">
                          <input type="text" name="jabatan" class="form-control" placeholder="Jabatan Pegawai">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Divisi</label>
                        <div class="col-sm-9">
                          <input type="text" name="divisi" class="form-control" placeholder="Jabatan Pegawai">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Sub Divisi</label>
                        <div class="col-sm-5">
                          <input type="text" name="rumpun" class="form-control" placeholder="Rumpun">
                        </div>
                        <div class="col-sm-4">
                          <input type="text" name="kelas" class="form-control" placeholder="Kelas">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jenis Pegawai</label>
                        <div class="col-sm-9" data-select2-id="7">
                          <select name="jenis" style="margin-top:10px;padding:5px" class="from-control js-example-basic-single w-100 select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option value="CPNS" data-select2-id="3">--- Status Pegawai ---</option>
                            <option value="CPNS" data-select2-id="3">CPNS</option>
                            <option value="PNS" data-select2-id="17">PNS</option>
                            <option value="PNSD" data-select2-id="18">PNSD</option>
                            <option value="P&K" data-select2-id="19">P&K</option>
                            <option value="HR" data-select2-id="20">HR</option>
                            <option value="PPPK" data-select2-id="20">PPPK</option>
                          </select>
                        </div>
                      </div>
                      <div class="d-flex align-items-center justify-content-md-end">
                        <div class="pe-1 mb-3 mb-xl-0">
                          <button type="submit" class="btn btn-primary me-2">SIMPAN DATA PEGAWAI</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="footer-wrap">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard </a> templates</span>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="{{asset('/template/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('/template/js/template.js')}}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
