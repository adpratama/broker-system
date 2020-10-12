@extends('layouts.default')
@section('content')
<section class="section">
   <div class="section-body">
      <div class="row">
         <div class="col-12">
            <div class="card">

               <div class="card-header">
               <h4>Rubah Data Quotation Slip No. {{$item->id}} </h4>
               </div>

               <div class="card-body">
                  <form action="{{ route('quotation.update', $item->id) }}" 
                     method="POST">
                     @csrf
                     @method('PATCH')

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

                              <input type="date" 
                                 name="period_from"
                                 class="form-control " 
                                 placeholder="Periode dari"
                                 value="{{$item->period_from}}">  
                              @error('period_from')
                                 <div class="text-muted">{{ $message}} </div>
                              @enderror 
                           </div>

                           <div class="form-group col-md-5">
                              <label class="col-form-label">to</label>

                              <input type="date" 
                                 name="period_to"
                                 class="form-control " 
                                 placeholder="hingga"
                                 value="{{$item->period_to}}"> 
                              @error('period_to')
                                 <div class="text-muted">{{ $message}} </div>
                             @enderror
                           </div>
                        </div>

                        <div class="form-row">

                           {{-- Input Jenis Asuransi --}}
                           <div class="form-group col-md-6">
                              <label>Type of Cover</label>
                              <select name="cover_type_id" 
                                 class="form-control select2 @error('cover_type') is_invalid @enderror" >
                                 <option value="{{$item->cover_type_id}} ">
                                    {{$item->covertype->deskripsi}} 
                                 </option>
                                 <option value="">
                                    -- Pilih Jenis Asuransi --
                                 </option>

                                 @foreach ($covertypes as $covertype)
                                    <option value="{{ $covertype->input_kode }}">
                                       {{ $covertype->deskripsi }}
                                    </option>
                                 @endforeach
                              </select>
                           </div>
                        </div>

                        <div class="form-row">
                        
                           {{-- Input Jenis Mata Uang --}}
                           <div class="form-group col-md-4">
                              <label>Jenis Mata Uang</label>
                              <div class="input-group mb-3">
                                 <select name="currency_id" 
                                    class="form-control select2 @error('insurance_id') is_invalid @enderror">
                                    <option value="{{$item->currency_id}} ">
                                       {{$item->currency_id}} - {{$item->currency->mata_uang}} 
                                    </option>
                                    <option value="">
                                       -- Pilih Jenis Mata Uang --
                                    </option>
                                    @foreach ($currencies as $currency)
                                       <option value="{{ $currency->input_kode }}">
                                          {{ $currency->input_kode }} - {{ $currency->mata_uang }}
                                       </option>
                                    @endforeach
                                 </select>
                              </div>
                           </div>

                           {{-- Input Compensation --}}
                           <div class="form-group col-md-2">
                              <label>Compensation</label>
                              <div class="input-group mb-3">
                                 <input type="number" 
                                    name="compensation"
                                    class="form-control" 
                                    {{-- aria-label="Amount (to the nearest dollar)" --}}
                                    value="{{old('compensation')?old('compensation'):$item->compensation}}">
                                 @error('compensation')
                                    <div class="text-muted">{{ $message}} </div>
                                 @enderror
                                 <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                 </div>
                              </div>
                           </div>

                           <div class="form-group col-md-2">
                              <label>Premium Warranty</label>
                              <div class="input-group mb-3">
                                 <input type="number" 
                                    name="premium_warranty"
                                    class="form-control" 
                                    {{-- aria-label="Amount (to the nearest dollar)" --}}
                                    value="{{old('premium_warranty')?old('premium_warranty'):$item->premium_warranty}}">
                                 @error('premium_warranty')
                                    <div class="text-muted">{{ $message}} </div>
                                 @enderror
                                 <div class="input-group-append">
                                    <span class="input-group-text">days</span>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="form-row">
                        
                           <div class="form-group col-md-12">
                              <label>Premi (Rate * Sum Insured = Premi)</label>
                              <div class="input-group md-10">
                                 {{-- Input Rate/Premium --}}
                                 <input type="number" 
                                    id="rate"
                                    name="rate"
                                    class="form-control" 
                                    placeholder="Rate/Premium"
                                    value="{{old('rate')?old('rate'):$item->rate}}"
                                    >
                                 @error('rate')
                                    <div class="text-muted">{{ $message}} </div>
                                 @enderror

                                 <div class="input-group-append">
                                    <span class="input-group-text">x</span>
                                 </div>

                                 {{-- Input Sum Insured --}}
                                 <input type="number" 
                                    id="sum_insured"
                                    name="sum_insured"
                                    class="form-control" 
                                    placeholder="Sum Insured"
                                    value="{{old('sum_insured')?old('sum_insured'):$item->sum_insured}}">
                                 @error('sum_insured')
                                    <div class="text-muted">{{ $message}} </div>
                                 @enderror

                                 <div class="input-group-append">
                                    <input type="button" value="Hitung Premi" onclick="result();" >
                                    {{-- <span class="input-group-text">=</span> --}}
                                 </div>

                                 {{-- Input Premi --}}
                                 <input type="number" 
                                    id="res"
                                    name="premi"
                                    class="form-control" 
                                    placeholder="Premi"
                                    value="{{old('premi')?old('premi'):$item->premi}}"
                                    />
                                 @error('premi')
                                    <div class="text-muted">{{ $message}} </div>
                                 @enderror
                              </div>
                              {{-- <div id="res"></div> --}}
                           </div>
                        </div>

                        <div class="form-group ">
                           <label class="col-form-label ">Content</label>
                           <textarea name="content"
                              class="summernote @error('content') is-invalid @enderror">
                              {{ old('content')?old('content'):$item->content}}
                           </textarea>
                           @error('content') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-row">

                           {{-- Input Jenis Asuransi --}}
                           <div class="form-group col-md-6">
                              <label>Status Berkas</label>
                              <select name="status" 
                                 class="form-control select2 @error('cover_type') is_invalid @enderror" >
                                 <option value="{{$item->status}} ">{{$item->status}} </option>
                                 <option value="">-- Pilih Jenis Asuransi --</option>
                                 <option value="UNAPPROVED">UNAPPROVED</option>
                                 <option value="APPROVED">APPROVE</option>
                                 <option value="REJECTED">REJECT</option>
                                    
                              </select>
                           </div>
                        </div>
                     </div>
                     <button type="submit" class="btn btn-primary float-right">Simpan</button>
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