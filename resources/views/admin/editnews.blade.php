<x-adminheader/>

      <!-- partial -->

   <x-adminsidebar/>

        <!-- partial -->

        <div class="main-panel">

          <div class="content-wrapper">

                <form name="editfrm" action="{{ route('news.update', $contentNew->id) }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                    @csrf                  

                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Edit Blog</h4>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" class="form-control" name="title" value="{{ $contentNew->title }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="date" class="form-control" name="date" value="{{ $contentNew->date }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" name="description">{{ $contentNew->description }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Existing Images</label><br>
                                        @if ($contentNew->image)
                                            @foreach (explode(',', $contentNew->image) as $img)
                                                <img src="{{ asset('uploads/' . trim($img)) }}" alt="image" width="80" class="mb-2 me-2">
                                            @endforeach
                                        @else
                                            <p>No images uploaded.</p>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>Upload New Images</label>
                                        <input type="file" class="form-control" name="image[]" multiple accept="image/*">
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