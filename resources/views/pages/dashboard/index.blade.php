@extends('layouts.default')
@section('content')
<section class="section">
   <div class="section-body">

      <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card card-statistic-2">
               <div class="card-stats">
                  <div class="card-stats-title">Placing Slip</div>
                  <div class="card-stats-items">
                     <div class="card-stats-item">
                        <div class="card-stats-item-count">24</div>
                        <div class="card-stats-item-label">Draft</div>
                     </div>
                     <div class="card-stats-item">
                        <div class="card-stats-item-count">12</div>
                        <div class="card-stats-item-label">UNAAPPROVED</div>
                     </div>
                     <div class="card-stats-item">
                        <div class="card-stats-item-count">23</div>
                        <div class="card-stats-item-label">APPROVED</div>
                     </div>
                     <div class="card-stats-item">
                        <div class="card-stats-item-count">23</div>
                        <div class="card-stats-item-label">REJECTED</div>
                     </div>
                  </div>
               </div>
               <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-archive"></i>
               </div>
               <div class="card-wrap">
                  <div class="card-header">
                     <h4>Total Placing Slip</h4>
                  </div>
                  <div class="card-body">
                     59
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