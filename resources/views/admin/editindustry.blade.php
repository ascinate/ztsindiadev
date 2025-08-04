<x-adminheader/>

      <!-- partial -->

   <x-adminsidebar/>

        <!-- partial -->

        <div class="main-panel">

          <div class="content-wrapper">

        <form name="editfrm" action="{{ route('industry.update', $industry->id) }}" method="POST" enctype="multipart/form-data" class="forms-sample">
            @csrf
           
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Industry</h4>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $industry->name }}">
                                    </div>
                                </div>
                                
                            </div>

                            <div class="row">
                               
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" name="description">{{ $industry->description }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Icon</label><br>
                                        @if ($industry->icon)
                                            <img src="{{ asset('uploads/' . $industry->icon) }}" alt="icon" width="80" class="mb-2">
                                        @endif
                                        <input type="file" class="form-control" name="icon" accept="image/*">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mt-3">
                    <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                    <button type="button" class="btn btn-light" onclick="javascript:history.go(-1);">Cancel</button>
                </div>
            </div>
        </form>


    <!-- content-wrapper ends -->

    <!-- partial:../../partials/_footer.html -->

<x-adminfooter/>    