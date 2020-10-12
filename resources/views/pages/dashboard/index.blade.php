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
               <h4>Daftar Jenis Mata Uang</h4>
               </div>
               <div class="col-sm-12 col-md-6">
               <a href="{{route('currency.create')}} " 
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
                        <th>Kode Mata Uang</th>
                        <th>Nama Mata Uang</th>
                        <th>Tindakan</th>
                        </tr>
                     </thead>
                     
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