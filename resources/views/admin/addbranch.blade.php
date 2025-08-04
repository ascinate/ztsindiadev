<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

           <!----Main Row--------->
          <form name="addfrm" action="{{ URL::to('insertbranch') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
              @csrf

              <div class="row">
                  <div class="col-12 grid-margin stretch-card">
                      <div class="card mt-5">
                          <div class="card-body">
                              <h4 class="card-title">Add Branch</h4>

                              <div class="form-group">
                                  <label>Branch Name</label>
                                  <input type="text" name="name" class="form-control" required>
                              </div>

                              <div class="form-group">
                                  <label>Phone</label>
                                  <input type="text" name="phone" class="form-control"  required>
                              </div>

                              <div class="form-group">
                                  <label>Email</label>
                                  <input type="email" name="email" class="form-control">
                              </div>

                              <div class="form-group">
                                  <label>Full Address</label>
                                  <textarea name="address" class="form-control" rows="4"></textarea>
                              </div>

                              <div class="form-group">
                                  <label>Photo</label>
                                  <input type="file" class="form-control" name="photo" accept="image/*" required>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-3 mt-3">
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button type="button" class="btn btn-light" onclick="javascript:history.go(-1);">Cancel</button>
                  </div>
              </div>
          </form>


         </div>
        </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <x-adminfooter/>
