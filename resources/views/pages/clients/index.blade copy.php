@extends('layouts.default')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">        
        <div class="row my-4">
          <!-- Small table -->
          {{-- <button type="button" class="btn mb-2 btn-light">Light</button> --}}
          <div class="col-md-12">
            <div class="row align-items-center mb-4">
                <div class="col">
                  <h2 class="mb-2 page-title">Data Client</h2>
                </div>
                <div class="col-auto">
                  <a href="{{route('clients.create')}} " type="button" class="btn btn-secondary" >Tambah</a>          
                </div>
              </div>
            <div class="card shadow">
              <div class="card-body">
                <!-- table -->
                <table class="table datatables" id="dataTable-1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Alamat</th>
                      <th>No. Telepon</th>
                      <th>Email</th>
                      <th>Nama PIC</th>
                      <th>No. HP PIC</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @forelse ($items as $item)
                      <tr>
                        <td>
                          {{-- {{$item->id}}  --}}
                          {{$item->id}}
                        </td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->pic}}</td>
                        <td>{{$item->phone_pic}}</td>
                        <td>
                          
                          {{-- <div class="dropdown-menu dropdown-menu-right"> --}}
                            <a class="btn mb-2 btn-light" href="{{route('clients.edit', $item->id)}} ">Edit</a>
                            {{-- <a class="dropdown-item" href="#">Remove</a>
                            <form action="{{ route('clients.destroy', $item->id) }}" method="post">
                              @csrf
                              @method('delete')
                             <button class="delete-confirm" data-name="{{ $item->name }}" type="submit">Delete</button>
                            </form>  --}}
                            {{-- <form action="{{ route('clients.destroy', $item->id)}}"" method="post" class="d-inline">
                              @csrf
                              @method('delete')
                              <button class="btn btn-danger btn-sm">
                                  <i class="fa fa-trash"></i>
                              </button>
                          </form> --}}
                          {{-- </div> --}}
                        </td>
                      </tr>
                      @empty
                      <tr>
                        <td colspan="8" class="text-center p-4">
                            Data tidak tersedia
                        </td>
                      </tr>
                      @endforelse
                    
                    {{-- @empty
                    
                    @endforelse --}}
                  </tbody>
                </table>
              </div>
            </div>
          </div> <!-- simple table -->
        </div> <!-- end section -->
      </div> <!-- .col-12 -->
    </div> <!-- .row -->
  </div>
@endsection

@push('before-script')
{{-- <script src='{{asset('js/jquery.dataTables.min.js')}}'></script>
<script src='{{asset('js/dataTables.bootstrap4.min.js')}}'></script>
<script>
  $('#dataTable-1').DataTable(
  {
    autoWidth: true,
    "lengthMenu": [
      [16, 32, 64, -1],
      [16, 32, 64, "All"]
    ]
  });
</script> --}}
{{-- <script src="js/apps.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script>
 $('.delete-confirm').click(function(e) {
      var form =  $(this).closest("form");
      var name = $(this).data("name");
      e.preventDefault();
      swal({
          title: `Are you sure you want to delete ${name}?`,
          text: "If you delete this, it will be gone forever.",
          icon: "warning",
          buttons: true,
          dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          form.submit();
        }
      });
  });
</script> --}}

@endpush