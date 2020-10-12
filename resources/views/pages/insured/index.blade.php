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
                  <h2 class="h5 page-title"><small class="text-muted text-uppercase">Data</small><br />Insured</h2>
                </div>
                <div class="col-auto">
                  <a href="{{route('insured.create')}} " type="button" class="btn btn-secondary" >Tambah</a>          
                </div>
              </div>
            <div class="card shadow">
              <div class="card-body">
                <!-- table -->
                <table class="table datatables" id="dataTable-1">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Alamat</th>
                      <th>No. Telepon</th>
                      <th>Email</th>
                      <th>Nama PIC</th>
                      <th>No. HP PIC</th>
                      <th>Kode Referral</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @forelse ($items as $item)
                      <tr>
                        <td>{{$item->id}} </td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->pic}}</td>
                        <td>{{$item->phone_pic}}</td>
                        <td>{{$item->client_id}} | {{$item->client->name}} </td>
                        <td>
                          <a class="btn mb-2 btn-light" href="{{route('insured.edit', $item->id)}} ">Edit</a>
                          
                        </td>
                      </tr>
                      @empty
                      <tr>
                        <td colspan="9" class="text-center p-4">
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
@endpush