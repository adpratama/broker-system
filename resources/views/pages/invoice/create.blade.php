@extends('layouts.default')
@section('content')
<section class="section">
   <div class="section-body">
      <div class="row">
         <div class="col-12">
            <div class="card">

               <div class="card-header">
                  <h4>Buat Invoice</h4>
               </div>

               <div class="card-body">
                  <form action="{{ route('invoice.store') }}" 
                     method="POST">
                     @csrf
                     <input type="hidden" value="DRAFT"  name="status">
                     <input type="hidden" value="{{$item->id}} "  name="quotation_id">

                     <div class="col-12">
                        <div class="form-row">

                           {{-- Input Jenis Asuransi --}}
                           <div class="form-group col-md-8">
                              <label>Policy / Endorsement Number</label>
                              <input type="text" 
                                 name="policy_number"
                                 class="form-control " 
                                 placeholder="Policy Number"
                                 >
                           </div>
                        </div>
                        <div class="form-row">

                           {{-- Input Jenis Asuransi --}}
                           <div class="form-group col-md-8">
                              <label>Particulars</label>
                              <textarea name="particulars"
                                 class="form-control " 
                                 >
                              </textarea>
                           </div>
                        </div>

                        <div class="form-row">

                           <div class="form-group col-md-3">
                              <label>Policy Cost</label>
                              <div class="input-group mb-2">
                                 <div class="input-group-prepend">
                                    <div class="input-group-text">{{$item->currency_id}} </div>
                                 </div>
                                 <input type="number" 
                                    name="policy_cost"
                                    class="form-control " 
                                    placeholder="Policy Cost"
                                    >
                              </div>
                           </div>
                           <div class="form-group col-md-3">
                              <label>Stamp Duty</label>
                              <div class="input-group mb-2">
                                 <div class="input-group-prepend">
                                    <div class="input-group-text">{{$item->currency_id}} </div>
                                 </div>
                                 <input type="number" 
                                    name="stamp_duty"
                                    class="form-control " 
                                    placeholder="Stamp Duty">
                              </div>
                           </div>
                           <div class="form-group col-md-3">
                              <label>Others</label>
                              <div class="input-group mb-2">
                                 <div class="input-group-prepend">
                                    <div class="input-group-text">{{$item->currency_id}} </div>
                                 </div>
                                 <input type="text" 
                                    name="others"
                                    class="form-control " 
                                    placeholder="Others">
                              </div>
                           </div>
                        </div>
                     </div>
                     <button type="submit" class="btn btn-primary float-right">Save as Draft</button>
                  </form>
                  {{-- <div class="card-footer text-right">
                  </div> --}}
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection

@push('after-script')
<script>
   var d1 = 0;
   var d2 = 0;

   function reset(){
      output = '';
      data.length = 0;

      document.getElementById('rate').value = output;
      document.getElementById('res').innerHTML = output;
      document.getElementById('rate').focus()
   }

   function result() {
      d1 = parseFloat(document.getElementById('rate').value);
      d2 = parseFloat(document.getElementById('sum_insured').value);

      var res = d1*d2;

      document.getElementById('res').value = res;
      
   }
</script>
@endpush