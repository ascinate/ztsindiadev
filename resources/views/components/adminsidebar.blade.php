<div class="container-fluid page-body-wrapper">



    <!-- partial:../../partials/_sidebar.html -->



    <nav class="sidebar sidebar-offcanvas" id="sidebar">



      <ul class="nav">



        <li class="nav-item nav-profile">



          <a href="#" class="nav-link">



            <div class="nav-profile-image">



              <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="profile">



              <span class="login-status online"></span>



              <!--change to offline or busy as needed-->



            </div>



            <div class="nav-profile-text d-flex flex-column">



              <span class="font-weight-bold mb-2">Ztsindia</span>



              <span class="text-secondary text-small">Administrator</span>



            </div>



            <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>



          </a>



        </li>



        <li class="nav-item">



          <a class="nav-link" href="{{ URL::to('dashboard') }}">



            <span class="menu-title">Dashboard</span>



            <i class="mdi mdi-home menu-icon"></i>



          </a>



        </li>







        <li class="nav-item">



            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">



            <span class="menu-title">Manage Brand</span>



            <i class="menu-arrow"></i>



            <i class="mdi mdi-account-multiple-plus menu-icon"></i>



          </a>







          <div class="collapse" id="ui-basic3">



            <ul class="nav flex-column sub-menu">



              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('brands') }}">Brand List</a></li>



              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('addbrand') }}">Add Brands</a></li>



            </ul>



          </div>



        </li>

        <li class="nav-item">



            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic">



            <span class="menu-title">Manage Services</span>



            <i class="menu-arrow"></i>



            <i class="mdi mdi-account-multiple-plus menu-icon"></i>



          </a>







          <div class="collapse" id="ui-basic4">



            <ul class="nav flex-column sub-menu">



              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('services') }}">Service List</a></li>



              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('addservice') }}">Add services</a></li>



            </ul>



          </div>



        </li>


        <li class="nav-item">



            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic">



            <span class="menu-title">Manage PLatform</span>



            <i class="menu-arrow"></i>



            <i class="mdi mdi-account-multiple-plus menu-icon"></i>



          </a>







          <div class="collapse" id="ui-basic5">



            <ul class="nav flex-column sub-menu">



              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('platforms') }}">Platform List</a></li>



              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('addplatform') }}">Add Platform</a></li>



            </ul>



          </div>



        </li>

        <li class="nav-item">



            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic6" aria-expanded="false" aria-controls="ui-basic">



            <span class="menu-title">Manage Industries</span>



            <i class="menu-arrow"></i>



            <i class="mdi mdi-account-multiple-plus menu-icon"></i>



          </a>







          <div class="collapse" id="ui-basic6">



            <ul class="nav flex-column sub-menu">



              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('industries') }}">Industry List</a></li>



              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('addindustry') }}">Add Industry</a></li>



            </ul>



          </div>



        </li>

        <li class="nav-item">



            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic7" aria-expanded="false" aria-controls="ui-basic">



            <span class="menu-title">Manage Technology</span>



            <i class="menu-arrow"></i>



            <i class="mdi mdi-account-multiple-plus menu-icon"></i>



          </a>







          <div class="collapse" id="ui-basic7">



            <ul class="nav flex-column sub-menu">



              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('technologies') }}">Technology List</a></li>



              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('addtechnology') }}">Add Technology</a></li>



            </ul>



          </div>



        </li>

        <li class="nav-item">



            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic8" aria-expanded="false" aria-controls="ui-basic">



            <span class="menu-title">Manage Portfolios</span>



            <i class="menu-arrow"></i>



            <i class="mdi mdi-account-multiple-plus menu-icon"></i>



          </a>







          <div class="collapse" id="ui-basic8">



            <ul class="nav flex-column sub-menu">



              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('portfolios') }}">Portfolios List</a></li>



              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('addportfolio') }}">Add Portfolios</a></li>



            </ul>



          </div>



        </li>

        <li class="nav-item">



            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic9" aria-expanded="false" aria-controls="ui-basic">



            <span class="menu-title">Manage Branch</span>



            <i class="menu-arrow"></i>



            <i class="mdi mdi-account-multiple-plus menu-icon"></i>



          </a>







          <div class="collapse" id="ui-basic9">



            <ul class="nav flex-column sub-menu">



              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('branches') }}">Branch List</a></li>



              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('addbranch') }}">Add Branch</a></li>



            </ul>



          </div>



        </li>







      </ul>



    </nav>



