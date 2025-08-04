<!DOCTYPE html>



<html lang="en">



  <head>



    <!-- Required meta tags -->



    <meta charset="utf-8">



    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <title>Ztsindia</title>



    <!-- plugins:css -->



    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">



    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">



    <!-- endinject -->



    <!-- Plugin css for this page -->



    <!-- End Plugin css for this page -->



    <!-- inject:css -->



    <!-- endinject -->



    <!-- Layout styles -->



    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">



    <!-- End layout styles -->



    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />



     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

    

    

     <link rel="stylesheet" href="http://cdn.datatables.net/1.10.0/css/jquery.dataTables.css">

    

    



    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">



    <link rel="stylesheet" href="{{ asset('assets/css/buttons.dataTables.min.css') }}">







     <style>



        .dataTables_wrapper > .row {



            align-items: center;



            margin-bottom: 30px;



        }







        table.dataTable tbody tr.child td {



  word-break: break-word; word-break: break-all; white-space: normal;



}



        .toggle-button-cover {



  display: table-cell;



  position: relative;



  width: 200px;



  box-sizing: border-box;



  top: -30px;



  margin-left: 20px;







}



.pout-texr .form-check{



  margin-left: 0;



  margin-right: 15px;



}



.mne .form-select{



  height: 45px;



}



.pout-texr .form-check .form-check-input{



  margin-left: 0;



}



.pout-texr .form-check .form-check-label{







}



.comobh-btn .but-diuv02{



    left: 24px;



    top: 22px;



}



.button-cover {







}



.comon-texr{



  font-size:10px;



}



#imj2{



  display: none;



}



.soy-hegiht{



  height: 45px;



}







.bg-light .form-select{



  border:none !important;



  height: 46px;



}







.button-cover:before {



  counter-increment: button-counter;



  content: counter(button-counter);



  position: absolute;



  right: 0;



  bottom: 0;



  color: #d7e3e3;



  font-size: 12px;



  line-height: 1;



  padding: 5px;



}







.button-cover,



.knobs,



.layer {



  position: absolute;



  top: 0;



  right: 0;



  bottom: 0;



  left: 0;



}







.button {



  position: relative;



    top: 50%;



    width: 74px;



    height: 41px;



    /* margin: -20px auto 0 auto; */



    overflow: hidden;



}







.button.r,



.button.r .layer {



  border-radius: 100px;



}







.button.b2 {



  border-radius: 2px;



}







.checkbox {



  position: relative;



  width: 100%;



  height: 100%;



  padding: 0;



  margin: 0;



  opacity: 0;



  cursor: pointer;



  z-index: 3;



}







.knobs {



  z-index: 2;



}







.layer {



  width: 100%;



  background-color: #ebf7fc;



  transition: 0.3s ease all;



  z-index: 1;



}







/* Button 1 */



#button-1 .knobs:before {



  content: "ON";



    position: absolute;



    top: 5px;



    left: 4px;



    width: 32px;



    height: 32px;



    color: #fff;



    font-size: 10px;



    font-weight: bold;



    text-align: center;



    line-height: 14px;



    padding: 9px 4px;



    background-color: #03a9f4;



    border-radius: 50%;



    transition: 0.3s cubic-bezier(0.18, 0.89, 0.35, 1.15) all;



}







#button-1 .checkbox:checked + .knobs:before {



  content: "OFF";



  left: 42px;



  background-color: #f44336;



}







#button-1 .checkbox:checked ~ .layer {



  background-color: #fcebeb;



}







#button-1 .knobs,



#button-1 .knobs:before,



#button-1 .layer {



  transition: 0.3s ease all;



}







.but-diuv{



  position: absolute;



    right: -12px;



    top: 42%;



}



.but-diuv svg,



.delBtnh svg,



.but-diuv02 svg,



.delBtnhn svg,



.delBtnhn2 svg{



  width:22px;



  height:22px;



  color:red;



}



.delBtnh{



  margin-top: 33px;



}



.but-diuv02 {



    position: absolute;



    left: 0;



    top: 0;



}



.spm-hed{



  margin-left: 2rem !important;



}



.crm-oi span.d-block{



  margin-top:10px;



}



.crm-oi label{



  font-weight:bold;



}



.bgh-line{



  margin: 0;



  background: #ddd;



}



     </style>



  </head>







  <body>



    <div class="container-scroller">



      <!-- partial:../../partials/_navbar.html -->



      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">



        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">



          <a class="navbar-brand brand-logo" href="{{ URL::to('dashboard') }}">



            <img src="{{ asset('images/Group3.svg') }}" alt="logo" />



        </a>



        <a class="navbar-brand brand-logo-mini" href="{{ URL::to('dashboard') }}">



            <img src="{{ asset('images/logo.png') }}" alt="logo" />



        </a>



        </div>



        <div class="navbar-menu-wrapper d-flex align-items-stretch">



          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">



            <span class="mdi mdi-menu"></span>



          </button>







          <ul class="navbar-nav navbar-nav-right">



            <li class="nav-item nav-profile">



              <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">



                <div class="nav-profile-img">



                  <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="image">



                  <span class="availability-status online"></span>



                </div>



                <div class="nav-profile-text">



                  <p class="mb-1 text-black">



                    {{ session('user')  }}



                  </p>



                </div>



              </a>



            </li>

            <li class="nav-item nav-change-password d-none d-lg-block">
  <!-- Trigger Button in Navbar --> <!-- changePasswordModal will be triggered from here -->
  <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#changePasswordModal">
    <i class="mdi mdi-lock-reset"></i>
  </a>
</li>





              <li class="nav-item nav-logout d-none d-lg-block">



               <a class="nav-link " href="{{ URL::to('logout') }}">



                <i class="mdi mdi-power"></i>



              </a>



            </li>






          </ul>



          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">



            <span class="mdi mdi-menu"></span>



          </button>



        </div>



      </nav>

      <!-- Change Password Modal-->
<!-- Change Password Modal -->
<div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title">Update Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form id="change-password-form">
          @csrf
          <div class="mb-3">
            <input type="password" name="new_password" id="new_password" class="form-control" placeholder="Enter New Password" required>
          </div>
          <div id="response-message" class="text-center"></div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Update Password</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    $('#change-password-form').submit(function (e) {
        e.preventDefault();

        $.ajax({
            url: "{{ url('admin/changepassword') }}",
            type: "POST",
            data: {
                _token: $('input[name="_token"]').val(),
                new_password: $('#new_password').val()
            },
            success: function (response) {
                $('#response-message').html(
                    '<p class="text-success">' + response.message + '</p>'
                );
                $('#change-password-form')[0].reset();
                setTimeout(() => {
                    $('#changePasswordModal').modal('hide');
                    $('#response-message').html('');
                }, 1500);
            },
            error: function (xhr) {
                let msg = xhr.responseJSON?.message || 'Something went wrong';
                $('#response-message').html(
                    '<p class="text-danger">' + msg + '</p>'
                );
            }
        });
    });
});
</script>
