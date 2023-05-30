<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/disk/vendors/feather/feather.css">
  <link rel="stylesheet" href="/disk/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/disk/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="/disk/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="/disk/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="/disk/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/disk/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/disk/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="/disk/images/logo.svg" alt="logo">
              </div>
              <h4>Sistem Pakar Stunting</h4>
              @if (session('error'))
   <div class="alert alert-danger">
        {{ session('error') }}
   </div>
@endif
              <form class="pt-3" action="{{ route('login') }}" method="post">
                @csrf
                
                <div class="form-group">
                  <input type="nik" class="form-control form-control-lg" value="{{ old('nik') }}" name="nik" placeholder="Kode Aktivasi">
                  @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
				<div class="mt-3">
					<button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Aktivasi</button>
				  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="/disk/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="/disk/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="/disk/js/off-canvas.js"></script>
  <script src="/disk/js/hoverable-collapse.js"></script>
  <script src="/disk/js/template.js"></script>
  <script src="/disk/js/settings.js"></script>
  <script src="/disk/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
