<x-adminheader/>

      <!-- partial -->

   <x-adminsidebar/>

        <!-- partial -->

        <div class="main-panel">

          <div class="content-wrapper">

            <form name="editfrm" action="{{ route('branch.update', $branch->id) }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                @csrf
            
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Branch</h4>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name" value="{{ $branch->name }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" name="phone" value="{{ $branch->phone }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="email" value="{{ $branch->email }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" name="address">{{ $branch->address }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Photo</label><br>
                                            @if ($branch->photo)
                                                <img src="{{ asset('uploads/' . $branch->photo) }}" alt="icon" width="80" class="mb-2">
                                            @endif
                                            <input type="file" class="form-control" name="photo" accept="image/*">
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

          </div>
         </div>

    <!-- content-wrapper ends -->

    <!-- partial:../../partials/_footer.html -->

<x-adminfooter/>    