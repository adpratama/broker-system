@extends('layouts.default')
@section('content')
<section class="section">
   <div class="section-body">

      <div class="row">
         <div class="col-12">
         <div class="card">

            {{-- Card Header --}}
            <div class="card-header">
               <div class="col-sm-12 col-md-6">
               <h4>Daftar No. Rekening</h4>
               </div>
               <div class="col-sm-12 col-md-6">
               <a href="{{route('account.create')}} " 
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
                           <th>Nama Bank</th>
                           <th>No. Rekening</th>
                           <th>a/n</th>
                           <th>Tindakan</th>
                        </tr>
                     </thead>
                     <tbody>
                        @forelse ($items as $item)
                        <tr>
                           <td>{{$item->id}}</td>
                           <td>{{$item->nama_bank}}</td>
                           <td>{{$item->no_rekening}}</td>
                           <td>{{$item->atas_nama}}</td>
                           <td>
                              <a class="btn btn-sm  btn-light" 
                                 href="{{route('account.edit', $item->id)}} ">
                                 Edit
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