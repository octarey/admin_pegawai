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
  <style>
    .css-serial {
      counter-reset: serial-number;  /* Atur penomoran ke 0 */
    }
    .css-serial td:first-child:before {
      counter-increment: serial-number;  /* Kenaikan penomoran */
      content: counter(serial-number);  /* Tampilan counter */
    }
  </style>
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
                <button type="button" class="btn btn-inverse-primary btn-sm">Dashboard </button>
              </li>
              <li class="nav-item dropdown  d-lg-flex d-none">
                <button type="button" class="btn btn-inverse-primary btn-sm">Data Pegawai </button>
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
                    <div class="col-md-8">
                      <div class="d-lg-flex align-items-center">
                        <div>
                          <h3 class="text-dark font-weight-bold mb-2">Data Pegawai</h3>
                          <h6 class="font-weight-normal mb-2">Halaman Data Pegaiwai RS.MITRA</h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="d-flex align-items-center justify-content-md-end">
                        <div class="pe-1 mb-3 mb-xl-0">
                          <a href="{{route('employes.create')}}">
                          <button type="button" class="btn btn-primary btn-icon-text">
                            TAMBAH PEGAWAI
                            <i class="mdi mdi-plus btn-icon-append"></i>                          
                          </button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  @if (session('status'))
                      <div class="alert alert-success">
                        {{session('status')}}
                      </div>
                  @endif
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered css-serial">
                      <thead style="background-color: #FFC4C4; color:black; border-color:#FFC4C4">
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                            NAMA PEGAWAI
                          </th>
                          <th>
                            NIPB
                          </th>
                          <th>
                            JABATAN
                          </th>
                          <th>
                            DIVISI
                          </th>
                          <th>
                            ACTION
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($employes as $item)
                        <tr>
                          <td></td>
                          <td>{{$item->name}}</td>
                          <td>{{$item->nib}}</td>
                          <td>{{$item->position}}</td>
                          <td>{{$item->division}}</td>
                          <td>
                            <button type="button" class="btn btn-success btn-sm">
                              <i class="mdi mdi-pencil btn-icon-append"></i>                               </button>
                            
                            <form action="{{route('employes.destroy', [$item->id])}}" method="POST" onsubmit="return confirm('Hapus Data Pegawai Ini?')" class="d-inline">
                              @csrf
                              <input type="hidden" name="_method" value="DELETE">
                              <button type="submit" name="" value="trash" class="btn btn-danger btn-sm">
                                <i class="mdi mdi-delete btn-icon-append"></i>                          
                              </button>
                          </form>
                        </td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                  <div class="d-flex align-items-center justify-content-md-end" style="margin-top: 10px">
                    {{ $employes->links() }}
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
