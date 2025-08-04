<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

           <!----Main Row--------->
           <form name="addfrm" action="{{ URL::to('insertbrand') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
            @csrf

            <div class="row">

                 <div class="col-12 grid-margin stretch-card">
                    <div class="card mt-5">
                      <div class="card-body">
                        <h4 class="card-title">Add Brands</h4>

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>

                         <div class="form-group">
                            <label>Icon</label>
                            <input type="file" class="form-control"  name="icon" accept="image/*" required>
                         </div>

                      </div>
                    </div>
                 </div>


                  <div class="col-lg-3">
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
