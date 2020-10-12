@extends('layouts.default')
@section('content')
<section class="section">
   <div class="section-body">
      <div class="row">
         <div class="col-12">
            <div class="card">

               <div class="card-header">
                  <h4>Buat Quotation Slip</h4>
               </div>

               <div class="card-body">
                  <form action="{{ route('quotation.store') }}" 
                     method="POST">
                     @csrf
                     <input type="hidden" value="DRAFT"  name="status">
                     <div class="col-12">
                        <div class="form-row">
                           <input type="hidden" value="DRAFT"  name="status">

                           {{-- Input Lembaga Asuransi --}}
                           <div class="form-group col-md-6">
                              <label>Lembaga Asuransi</label>
                              <input type="text" 
                                 name="insurance_id"
                                 class="form-control " 
                                 placeholder="Periode dari"
                                 value="{{$item->insurance_id}}"
                                 readonly>
                              {{$item->insurance->name}}
                           </div>

                           {{-- Input Pihak Tertanggung --}}
                           <div class="form-group col-md-6">
                              <label>Pihak Tertanggung</label>
                              <input type="text" 
                                 name="client_id"
                                 class="form-control " 
                                 placeholder="Periode dari"
                                 value="{{$item->client_id}}"
                                 readonly>
                              {{$item->client->name}}
                           </div>
                        </div>

                        {{-- Input Periode Asuransi --}}
                        <div class="form-row">
                           <div class="form-group col-md-2">
                              <label for="inputEmail3" class="col-form-label">
                                 Period of insurance
                              </label>
                           </div>

                           <div class="form-group col-md-5">
                              <label class="col-form-label">
                                 From
                              </label>

                              <input type="text" 
                                 name="period_from"
                                 class="form-control " 
                                 placeholder="Periode dari"
                                 value="{{$item->period_from}}"
                                 readonly>
                           </div>

                           <div class="form-group col-md-5">
                              <label class="col-form-label">to</label>
                              <input type="text" 
                                 name="period_to"
                                 class="form-control " 
                                 placeholder="hingga"
                                 value="{{$item->period_to}}"
                                 readonly> 
                           </div>
                        </div>

                        <div class="form-row">

                           {{-- Input Jenis Asuransi --}}
                           <div class="form-group col-md-6">
                              <label>Type of Cover</label>
                              <input type="text" 
                                 name="cover_type_id"
                                 class="form-control " 
                                 placeholder="Periode dari"
                                 value="{{$item->cover_type_id}}"
                                 readonly>
                              {{$item->covertype->deskripsi}}
                           </div>
                        </div>

                        <div class="form-row">
                        
                           {{-- Input Jenis Mata Uang --}}
                           <div class="form-group col-md-4">
                              <label>Jenis Mata Uang</label>
                              <input type="text" 
                                 name="currency_id"
                                 class="form-control " 
                                 placeholder="Periode dari"
                                 value="{{$item->currency_id}}"
                                 readonly>
                              {{$item->currency_id}} - {{$item->currency->mata_uang}}
                           </div>

                           {{-- Input Compensation --}}
                           <div class="form-group col-md-2">
                              <label>Compensation</label>
                              <div class="input-group mb-3">
                                 <input type="text" 
                                    name="compensation"
                                    class="form-control " 
                                    placeholder="Periode dari"
                                    value="{{$item->compensation}}"
                                    readonly>
                                 <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                 </div>
                              </div>
                           </div>

                           <div class="form-group col-md-2">
                              <label >Premium Warranty</label>
                              <div class="input-group mb-3">
                                 <input type="number" 
                                    name="premium_warranty"
                                    class="form-control " 
                                    placeholder="Periode dari" max="45"
                                    value="{{$item->premium_warranty}}"
                                    >
                                 <div class="input-group-append">
                                    <span class="input-group-text">days</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <div class="form-row">
                           {{-- <label>Premi (Rate * Sum Insured = Premi)</label> --}}

                           <div class="form-group col-md-4">
                              <label>Rate</label>
                              <input type="text" 
                                 name="rate"
                                 class="form-control " 
                                 placeholder="Periode dari"
                                 value="{{$item->rate}}"
                                 readonly>
                           </div>

                           <div class="form-group col-md-4">
                              <label>Sum Insured</label>
                              <input type="text" 
                                 name="sum_insured"
                                 class="form-control " 
                                 placeholder="Periode dari"
                                 value="{{$item->sum_insured}}"
                                 readonly>
                           </div>

                           <div class="form-group col-md-4">
                              <label>Premi</label>
                              <input type="text" 
                                 name="premi"
                                 class="form-control " 
                                 placeholder="Periode dari"
                                 value="{{$item->premi}}"
                                 readonly
                                 data-toggle="tooltip" data-placement="top" title="Premi (Rate * Sum Insured = Premi)">
                           </div>
                        </div>

                        <div class="form-group ">
                           <label class="col-form-label ">Content</label>
                           <textarea name="content"
                              class="summernote @error('content') is-invalid @enderror" readonly>
                              {{ old('content')?old('content'):$item->content}}
                           </textarea>
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