<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <style>
           svg{
             height: 20px !important;
           }

           .checkbox {
              position: relative;
              width: 100%;
              height: 100%;
              padding: 0;
              margin: 0;
              opacity: 1;
              cursor: pointer;
              z-index: 3;
          }
          .table th, .table td{
           white-space: normal !important;
          }
        
        </style>
        <div class="main-panel">
          <div class="content-wrapper">

            <div class="page-header">
                <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                  </span> Dashboard
                </h3>
              </div>

            <div class="row">
                <div class="col-md-3 stretch-card grid-margin">
                  <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body p-4">
                      <img src="{{ asset('assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                      <h5 class="font-weight-normal mb-3"><i class="mdi mdi-chart-line mdi-24px float-right"></i>
                      </h5>
                      <h2 class="mb-5"></h2>
                      <h2 class="mb-5"></h2>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 stretch-card grid-margin">
                  <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body p-4">
                      <img src="{{ asset('assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                      <h5 class="font-weight-normal mb-3"><i class="mdi mdi-dollar mdi-24px float-right"></i>
                      </h5>
                      <h2 class="mb-5"></h2> 
                      <h2 class="mb-5"></h2>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                  <div class="col-lg-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">
                              <h4 class="card-title">Latest value</h4>
                                  <table class="table cm-lisrt01" id="example2">
                                      <thead>
                                          <tr>
                                              <th>ID</th>
                                              <th>new</th>
                                              <th>Name</th>
                                              <th>Category</th>
                                              <th>Tags</th>

                                          </tr>
                                      </thead>

                                      <tbody>
                                         
                                      </tbody>
                                  </table>
                          </div>
                      </div>
                  </div>
              </div>

        </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
<x-adminfooter/>
