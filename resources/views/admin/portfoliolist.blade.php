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
                              <h4 class="card-title">Portfolio List</h4>

                              <form action="{{ URL::to('portfolioDelete') }}" method="POST" onsubmit="return confirm('Are you sure you want to delete selected brands?');">
                                  @csrf
                                  <button type="submit" class="btn btn-danger mb-3">Delete</button>

                                <table class="table cm-lisrt01" id="example2">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" id="select_all"></th>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($portfolios as $portfolio)
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="portfolio_ids[]" value="{{ $portfolio->id }}" class="checkbox">
                                            </td>
                                            <td>{{ $portfolio->id }}</td>
                                            <td>{{ $portfolio->title }}</td>
                                            <td>{{ $portfolio->date }}</td>
                                            <td>{{ $portfolio->description }}</td>
                                           <td>
                                                @if($portfolio->images)
                                                    @foreach(explode(',', $portfolio->images) as $img)
                                                        <img src="{{ asset('uploads/' . trim($img)) }}" alt="{{ $portfolio->title }}" width="40" style="margin:2px;">
                                                    @endforeach
                                                @else
                                                    <span>No image</span>
                                                @endif
                                            </td>

                                            <td>
                                                <a href="{{ URL::to('editportfolio', $portfolio->id) }}">
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
