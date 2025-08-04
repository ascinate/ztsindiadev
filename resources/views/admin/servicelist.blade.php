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
                  <div class="col-lg-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">
                              <h4 class="card-title">Brand List</h4>

                              <form action="{{ URL::to('bulkDelete') }}" method="POST" onsubmit="return confirm('Are you sure you want to delete selected brands?');">
                                  @csrf
                                  <button type="submit" class="btn btn-danger mb-3">Delete</button>

                                <table class="table cm-lisrt01" id="example2">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" id="select_all"></th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Short Description</th>
                                            <th>Description</th>
                                            <th>Icon</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($services as $service)
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="service_ids[]" value="{{ $service->id }}" class="checkbox">
                                            </td>
                                            <td>{{ $service->id }}</td>
                                            <td>{{ $service->name }}</td>
                                            <td>{{ $service->price }}</td>
                                            <td>{{ $service->short_description }}</td>
                                            <td>{{ $service->description }}</td>
                                            <td>
                                                @if($service->icon)
                                                    <img src="{{ asset('uploads/' . $service->icon) }}" alt="{{ $service->name }}" width="40">
                                                @else
                                                    <span>No Icon</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ URL::to('editservice', $service->id) }}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                              </form>
                          </div>
                      </div>
                  </div>
              </div>

<script>
    document.getElementById('select_all').addEventListener('click', function(event) {
        let checkboxes = document.querySelectorAll('.checkbox');
        checkboxes.forEach(checkbox => checkbox.checked = event.target.checked);
    });
</script>

 
        </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
<x-adminfooter/>
