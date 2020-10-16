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
                     <h4>Kwitansi</h4>
                  </div>
                  <div class="col-sm-12 col-md-6">
                     
                  </div>
               </div>
               {{-- Card Body --}}
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-striped" id="table-1">
                        <thead>
                           <tr>
                           <th>#</th>              
                           <th>Tanggal</th>
                           <th>Jenis Pembayaran</th>
                           <th>Nama Bank</th>
                           <th>Nomor Rekening</th>
                           <th>Jumlah Pembayaran</th>
                           <th>Aksi</th>
                           </tr>
                        </thead>
                        <tbody>
                           @forelse ($items as $item)
                        
                           <tr>
                        
                              <td>{{$item->id}}</td>
                              <td>{{$item->date}}</td>
                              <td>{{$item->jenis_pembayaran}}</td>
                              <td>{{$item->bankers}}</td>
                              <td>{{$item->no_rekening}}</td>
                              <td>{{$item->jumlah_pembayaran}}</td>
                              {{-- <td>
                                    
                                 @if($item->status == 'UNAPPROVED')
                                    <span class="badge badge-sm" 
                                    style="background-color: #ffda83 !important; color: #424242;">
                                 
                                 @elseif($item->status == 'APPROVED')
                                    <span class="badge badge-sm" 
                                    style="background-color: #69E4A6 !important; color: #424242; "
                                    >
                                    
                                 @elseif($item->status == 'REJECTED')
                                    <span class="badge badge-sm" 
                                    style="background-color: #fabebe !important; color: #424242; ">
                                 
                                 @elseif($item->status == 'DRAFT')
                                    <span class="badge badge-sm" 
                                    style="background-color:rgb(240, 135, 135) !important; color: #424242;">
                                 @else 
                                    <span>
                                 @endif
                                    {{$item->status}}
                              </td> --}}
                              <td>
                                 <div class="dropdown">
                                    <button style="background-color: #3294fe !important; color: #ffffff;"  
                                       class="btn btn-sm dropdown-toggle" 
                                       type="button" 
                                       id="dr1" 
                                       data-toggle="dropdown" 
                                       aria-haspopup="true" 
                                       aria-expanded="false" >
                                       <span class="text-muted sr-only">
                                          Action
                                       </span>

                                       Tindakan
                                    </button>

                                    <div class="dropdown-menu dropdown-menu-right" 
                                       aria-labelledby="dr1">
                                       <a class="dropdown-item " 
                                          href=""
                                          >
                                          <i class="fe fe-file-text"></i>
                                          Preview
                                       </a>
                                       <a class="dropdown-item " 
                                          href="{{route('kwitansi.print', $item->id)}} "
                                          target="_blank">
                                          <i class="fe fe-file-text"></i>
                                          Cetak
                                       </a>

                                       <a class="dropdown-item " 
                                          href="{{route('kwitansi.edit', $item->id)}}">
                                          <i class="fe fe-edit"></i>
                                          Edit
                                       </a>
                                       
                                    </div>
                                 </div>
                              </td>
                           </tr>
                           
                           @empty
                           <tr>
                              <td colspan="9" class="text-center p-4">                  
                                 Data tidak tersedia                  
                              </td>
                           </tr>
                           
                           @endforelse
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
{{-- 
@push('after-script')
<script>
$("#table-1").dataTable({
"columnDefs": [
   { "sortable": false, "targets": [2,3] }
]
});
</script>

@endpush --}}