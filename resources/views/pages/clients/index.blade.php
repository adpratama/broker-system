@extends('layouts.default')
@section('content')
<section class="section">
{{-- <div class="section-header">
   <h1>Placing Slip</h1>
   <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active">Slip</a></div>
      <div class="breadcrumb-item">Placing Slip</a></div>
      <div class="breadcrumb-item">Index</div>
   </div>
</div> --}}
   <div class="section-body">
      {{-- <h2 class="section-title">Table</h2>
      <p class="section-lead">Example of some Bootstrap table components.</p> --}}

      <div class="row">
         <div class="col-12">
            <div class="card">

               {{-- Card Header --}}
               <div class="card-header">
                  <div class="col-sm-12 col-md-6">
                     <h4>Daftar Client</h4>
                  </div>
                  <div class="col-sm-12 col-md-6">
                     <a href="{{route('clients.create')}} " 
                        class="btn btn-light float-right" >
                        Tambah
                     </a> 
                  </div>
               </div>

               {{-- Card Body --}}
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-striped" id="table-1">
                        <thead>
                           <tr>
                           <th>No</th>
                           <th>Name</th>
                           <th>Kota</th>
                           <th>Provinsi</th>
                           <th>No. Telepon</th>
                           {{-- <th>Email</th> --}}
                           <th>Nama PIC</th>
                           {{-- <th>No. HP PIC</th> --}}
                           <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @forelse ($items as $item)
                           <tr>
                              <td>{{$item->id}}</td>
                              <td>{{$item->name}}</td>
                              <td>{{$item->kota}}</td>
                              <td>{{$item->provinsi}}</td>
                              <td>{{$item->phone}}</td>
                              {{-- <td>{{$item->email}}</td> --}}
                              <td>{{$item->pic}}</td>
                              {{-- <td>{{$item->phone_pic}}</td> --}}
                              <td>
                                 <a class="btn btn-sm  btn-light" 
                                    href="{{route('clients.edit', $item->id)}} ">
                                    Edit
                                 </a>
                                 <a 
                                    href="#mymodal"
                                    data-remote="{{ route('clients.show', $item->id)}}" 
                                    class="btn btn-sm  btn-info" 
                                    data-toggle="modal" 
                                    data-target="#mymodal" 
                                    data-title="Client {{ $item->name}}">
                                    View
                                 </a>
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
            </div>
         </div>
      </div>
   </div>
</section>

@endsection

@push('after-script')
<script>
$("#table-1").dataTable({
"columnDefs": [
   { "sortable": false, "targets": [2,3] }
]
});
</script>

@endpush