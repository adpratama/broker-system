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
                     <h4>Daftar Placing Slip</h4>
                  </div>
                  <div class="col-sm-12 col-md-6">
                     <a href="{{route('placing.create')}} " 
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
                           <th>#</th>              
                           <th>Tanggal</th>
                           <th>Insurance</th>
                           <th>Insured</th>
                           <th>Status</th>
                           <th>Aksi</th>
                           </tr>
                        </thead>
                        <tbody>
                           @forelse ($items as $item)
                        
                           <tr>
                        
                           <td>{{$item->id}} </td>
                           <td>{{$item->date}}</td>
                           <td>{{$item->insurance->name}}</td>
                           <td>{{$item->client->name }}</td>
                           <td>
                                 
                              @if($item->status == 'UNAPPROVED')
                                 <span class="badge badge-sm" 
                                 style="background-color: #ffda83 !important; color: #424242; ">
                              
                              @elseif($item->status == 'APPROVED')
                                 <span class="badge badge-sm" 
                                 style="background-color: #69E4A6 !important; color: #424242; "
                                 >
                                 
                              @elseif($item->status == 'REJECTED')
                                 <span class="badge badge-sm" 
                                 style="background-color: #fabebe !important; color: #424242; ">
                              
                              @elseif($item->status == 'DRAFT')
                                 <span class="badge badge-sm" 
                                 style="background-color:rgb(240, 135, 135) !important; color: #424242; ">
                              @else 
                                 <span>
                              @endif
                                 {{$item->status}}
                           </td>
                           {{-- <td class="float-right">
                           
                              @if($item->status == 'UNAPPROVED')
                           
                                 <a href="{{ route('placing.status', $item->id) }}?status=APPROVED" 
                                 class="btn btn-success ">
                                 <i class="fe fe-check"></i>
                                 </a>
                                 
                                 <a href="{{ route('placing.status', $item->id) }}?status=REJECTED" 
                                 class="btn btn-danger">                                                     
                                 <i class="fe fe-x"></i>

                                 </a>
                                 
                                 <a class="btn btn-light " 
                                 href="{{route('placing.edit', $item->id)}} ">
                                    <i class="fe fe-edit"></i>
                                 </a>

                              @endif
                              
                              
                                 
                              @if ($item->status == 'APPROVED')
                              
                                 <a href="{{route('quotation.qs', $item->id)}} " 
                                 class="btn btn-success ">
                                    Create Quotation
                                 </a>
                                       
                              @endif
                           </td> --}}

                           {{-- <td>
                              <a class="btn btn-light " 
                                 href="{{route('placing.show', $item->id)}} ">
                                 <i class="fe fe-file-text"></i>
                                 Cetak
                              </a>
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
                                 {{-- <a class="dropdown-item" href="#">Edit</a>
                                 <a class="dropdown-item" href="#">Remove</a>
                                 <a class="dropdown-item" href="#">Assign</a> --}}
                                 @if($item->status == 'UNAPPROVED')
                                    <a href="{{ route('placing.status', $item->id) }}?status=APPROVED" 
                                       class="dropdown-item ">
                                       <i class="fe fe-check"></i>
                                       APPROVE
                                    </a>
                                    
                                    <a href="{{ route('placing.status', $item->id) }}?status=REJECTED" 
                                       class="dropdown-item">                                                     
                                       <i class="fe fe-x"></i>
                                       REJECT
                                    </a>
                                    
                                    <a class="dropdown-item " 
                                       href="{{route('placing.edit', $item->id)}} ">
                                       <i class="fe fe-edit"></i>
                                       Edit
                                    </a>
                                 @endif

                                 @if ($item->status == 'DRAFT')
                                    <a class="dropdown-item " 
                                       href="{{route('placing.edit', $item->id)}} ">
                                       <i class="fe fe-edit"></i>
                                       Edit
                                    </a>
                                    <a 
                                       href="#mymodal"
                                       data-remote="{{ route('placing.show', $item->id)}}" 
                                       class="dropdown-item" 
                                       data-toggle="modal" 
                                       data-target="#mymodal" 
                                       data-title="Placing Slip No. {{ $item->id}}">
                                       Publish
                                    </a>
                                 @endif

                                 @if ($item->status == 'APPROVED')
                                    <a href="{{route('quotation.qs', $item->id)}} " 
                                       class="dropdown-item ">
                                       Create Quotation
                                    </a>
                                    <a class="dropdown-item " 
                                       target="_blank"
                                       href="{{route('placing.print', $item->id)}} ">
                                       <i class="fe fe-file-text"></i>
                                       Cetak
                                    </a>
                                 @endif
                                    
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

@push('after-script')
<script>
$("#table-1").dataTable({
"columnDefs": [
   { "sortable": false, "targets": [2,3] }
]
});
</script>

@endpush