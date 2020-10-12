@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">Invoice</strong>
          <strong class="float-right">REQUEST FOR PLACING SLIP</strong>
        </div>
        <div class="card-body">
        <form action="{{ route('invoice.update', $item->id) }}" method="POST">
            @csrf  
            <input type="hidden" value="UNAPPROVED"  name="status">

            <div class="form-group row">
                <label for="insured_id" class="col-sm-3 col-form-label">THE INSURED</label>
                <div class="col-sm-9">
                    <input type="text" 
                    class="form-control"
                    {{-- @error('kurs_to_idr') is-Invalid @enderror"  --}}
                    name="insured_id" 
                    value="{{ old('insured_id')?old('insured_id'):$item->insured_id}}" readonly>
                </div>
            </div>
            <h3 align=""><i><u>INVOICE No.0000</u></i></h3>
            <p>We are pleased to adviset that the cover has been arranged according to your instructions.Please forward your premium payment immediately to ensure the continuity of cover and refer to the important warning at the end of this invoice relatig to Premium payment warranty</p>
            <div class="form-group row">
                <label for="example-date" class="col-sm-3 col-fom-label">Date</label>
                <div class="col-sm-3">
                    <input class="form-control" id="example-date" type="date" name="date">
                </div>
            </div>
            <div class="form-group row">
                <label for="currency_id" class="col-sm-3 col-form-label">Currency :</label>
                <div class="col-sm-9">
                    <input type="text"  
                            name="currency_id"
                            class="form-control"
                            {{-- @error('currency_id') is-Invalid"@enderror  --}}
                            value="{{ old('currency_id')?old('currency_id'):$item->currency_id}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="kurs_to_idr" class="col-sm-3 col-form-label">Equivalent to IDR </label>
                <div class="col-sm-9">
                    <input type="number" 
                            class="form-control"
                            {{-- @error('kurs_to_idr') is-Invalid @enderror"  --}}
                            name="kurs_to_idr" 
                            value="{{ old('kurs_to_idr')?old('kurs_to_idr'):$item->kurs_to_idr}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="simpleinput" class="col-sm-3 col-form-label">TYPE OF COVER</label>
                <div class="col-sm-9">
                    <input type="text" 
                    class="form-control"
                    {{-- @error('kurs_to_idr') is-Invalid @enderror"  --}}
                    name="cover_type" 
                    value="{{$item->cover_type}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="insurance_id" class="col-sm-3 col-form-label">THE INSURER/SECURITY</label>
                <div class="col-sm-9">
                    <input type="text" 
                            class="form-control"
                            {{-- @error('insurance_id') is-Invalid @enderror"  --}}
                            name="insurance_id" 
                            value="{{ old('insurance_id')?old('insurance_id'):$item->insurance_id}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="simpleinput" class="col-sm-3 col-form-label">POLICY / ENDORSEMENT NUMBER</label>
                <div class="col-sm-9">
                    <textarea name="policy_number" class="ckeditor2 form-control @error('policy_number') is-Invalid @enderror">
                        {{ old('policy_number')?old('policy_number'):$item->policy_number}}
                    </textarea>
                </div>
            </div>
            {{-- <div class="form-group row">
                <label for="simpleinput" class="col-sm-3 col-form-label">INSURED</label>
                <div class="col-sm-9">
                    <textarea name="insured_name" class="ckeditor5 form-control @error('insured_name') is-Invalid @enderror">
                        {{ old('insured_name')?old('insured_name'):$item->insured_name}}
                    </textarea>
                </div>
            </div>     --}}
            <div class="form-group row">
                <label for="date" class="col-sm-3 col-form-label">PERIOD OF INSURANCE</label>
                <div class="col-sm-3 col-md-2">
                    <input type="date"  
                            class="form-control" 
                            {{-- @error('period_from') is-Invalid @enderror"  --}}
                            name="period_from" 
                            value="{{ old('period_from')?old('period_from'):$item->period_from}}">
                </div> TO
                <div class="col-sm-3 col-md-2">
                    <input type="date" 
                            class="form-control" 
                            {{-- @error('period_to') is-Invalid @enderror"  --}}
                            name="period_to" 
                            value="{{ old('period_to')?old('period_to'):$item->period_to}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="simpleinput" class="col-sm-3 col-form-label">RISK LOCATION</label>
                <div class="col-sm-9">
                    <input type="text" 
                            class="form-control" 
                            {{-- @error('risk_location') is-Invalid @enderror"  --}}
                            name="risk_location" 
                            value="{{ old('risk_location')?old('risk_location'):$item->risk_location}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="simpleinput" class="col-sm-3 col-form-label">SUM INSURED</label>
                <div class="col-sm-9">
                    <input type="text" 
                            class="form-control" 
                            {{-- @error('sum_insured') is-Invalid @enderror"  --}}
                            name="sum_insured" 
                            value="{{ old('sum_insured')?old('sum_insured'):$item->sum_insured}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="simpleinput" class="col-sm-3 col-form-label">PREMIUM PAYMENT WARRANTY</label>
                <div class="col-sm-9">
                    <input type="text" 
                            class="form-control" 
                            {{-- @error('payment_warranty') is-Invalid @enderror"  --}}
                            name="payment_warranty" 
                            value="{{ old('payment_warranty')?old('payment_warranty'):$item->payment_warranty}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="simpleinput" class="col-sm-3 col-form-label">PARTICULARS</label>
                <div class="col-sm-9">
                    <textarea name="particulars" class="ckeditor3 form-control @error('particulars') is-Invalid @enderror">
                        {{ old('particulars')?old('particulars'):$item->particulars}}
                    </textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="simpleinput" class="col-sm-3 col-form-label">Signfor</label>
                <div class="col-sm-9">
                    <textarea name="signfor"
                              class="ckeditor4 form-control 
                              @error('signfor') is-invalid @enderror">
                        {{ old('signfor')?old('signfor'):$item->signfor}}
                    </textarea>   
                    @error('signfor') <div class="text-muted">{{ $message }}</div> @enderror 
                </div>
            </div>
            <div class="form-group row">
                <label for="simpleinput" class="col-sm-3 col-form-label">Premium</label>
                <div class="col-sm-9">
                    <input type="number" 
                            class="form-control"
                             {{-- @error('premium') is-Invalid @enderror"  --}}
                            name="premium" 
                            value="{{ old('premium')?old('premium'):$item->premium}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="simpleinput" class="col-sm-3 col-form-label">Policy/Endorsement Cost</label>
                <div class="col-sm-9">
                    <input type="number" 
                            class="form-control"
                             {{-- @error('policy_cost') is-Invalid @enderror"  --}}
                            name="policy_cost" 
                            value="{{ old('policy_cost')?old('policy_cost'):$item->policy_cost}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="simpleinput" class="col-sm-3 col-form-label">Stamp Duty</label>
                <div class="col-sm-9">
                    <input type="number" 
                            class="form-control"
                             {{-- @error('stamp_duty') is-Invalid @enderror"  --}}
                            name="stamp_duty" 
                            value="{{ old('stamp_duty')?old('stamp_duty'):$item->stamp_duty}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="simpleinput" class="col-sm-3 col-form-label">Others Premium</label>
                <div class="col-sm-9">
                    <input type="number" 
                            class="form-control"
                             {{-- @error('others_a') is-Invalid @enderror"  --}}
                            name="others_premium" 
                            value="{{ old('others_premium')?old('others_premium'):$item->others_premium}}">
                </div>
            </div>
            {{-- <div class="form-group row">
                <label for="simpleinput" class="col-sm-3 col-form-label">Gross Premium</label>
                <div class="col-sm-9">
                    <input type="number" 
                            class="form-control" 
                            @error('admint_cost') is-Invalid @enderror" 
                            name="" 
                            value="">
                </div>
            </div> --}}
            <div class="form-group row">
                <label for="simpleinput" class="col-sm-3 col-form-label">Admin Cost</label>
                <div class="col-sm-9">
                    <input type="number" 
                            class="form-control" 
                            {{-- @error('admin_cost') is-Invalid @enderror"  --}}
                            name="admin_cost" 
                            value="{{ old('admin_cost')?old('admin_cost'):$item->admin_cost}}">
                </div>
            </div>
            {{-- <div class="form-group row">
                <label for="simpleinput" class="col-sm-3 col-form-label">Total Premium</label>
                <div class="col-sm-9">
                    <input type="number" 
                            class="form-control" 
                            @error('admint_cost') is-Invalid @enderror" 
                            name="" 
                            value="">
                </div>
            </div> --}}
            {{-- <div class="form-group row">
                <label for="simpleinput" class="col-sm-3 col-form-label">Equivalent in IDR</label>
                <div class="col-sm-9">
                    <input type="number" 
                            class="form-control" 
                            @error('admint_cost') is-Invalid @enderror" 
                            name="" 
                            value="">
                </div>
            </div> --}}
            <h5>SUMMARY OF TRANSACTION</h5>
            <div class="form-group row">
                <label for="simpleinput" class="col-sm-3 col-form-label">MDS Commission</label>
                <div class="col-sm-9">
                    <input type="number" 
                            class="form-control"
                             @error('mds_commission') is-Invalid @enderror
                            name="mds_commission" 
                            value="{{ old('mds_commission')?old('mds_commission'):$item->mds_commission}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="simpleinput" class="col-sm-3 col-form-label">Value at Tax(VAT)</label>
                <div class="col-sm-9">
                    <input type="number" 
                            class="form-control"
                             {{-- @error('others_a') is-Invalid @enderror"  --}}
                            name="vat" 
                            value="{{ old('vat')?old('vat'):$item->vat}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="simpleinput" class="col-sm-3 col-form-label">Incoming Tax Net</label>
                <div class="col-sm-9">
                    <input type="number" 
                            class="form-control"
                             {{-- @error('others_a') is-Invalid @enderror"  --}}
                            name="incoming_tax_net" 
                            value="{{ old('incoming_tax_net')?old('incoming_tax_net'):$item->incoming_tax_net}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="simpleinput" class="col-sm-3 col-form-label">Others MDS</label>
                <div class="col-sm-9">
                    <input type="number" 
                            class="form-control"
                             {{-- @error('others_a') is-Invalid @enderror"  --}}
                            name="others_mds" 
                            value="{{ old('others_mds')?old('others_mds'):$item->others_mds}}">
                </div>
            </div>
            {{-- <div class="form-group row">
                <label for="simpleinput" class="col-sm-3 col-form-label">Net MDS Commission</label>
                <div class="col-sm-9">
                    <input type="number" 
                            class="form-control" 
                            @error('admint_cost') is-Invalid @enderror" 
                            name="" 
                            value="">
                </div>
            </div> --}}
            <div class="form-group row">
                <label for="simpleinput" class="col-sm-3 col-form-label">O/S Outcome Commision</label>
                <div class="col-sm-9">
                    <input type="number" 
                            class="form-control"
                             {{-- @error('others_a') is-Invalid @enderror"  --}}
                            name="outcome_commission" 
                            value="{{ old('outcome_commission')?old('outcome_commission'):$item->outcome_commission}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="simpleinput" class="col-sm-3 col-form-label">Incoming Tax Total</label>
                <div class="col-sm-9">
                    <input type="number" 
                            class="form-control"
                             {{-- @error('others_a') is-Invalid @enderror"  --}}
                            name="incoming_tax_total" 
                            value="{{ old('incoming_tax_total')?old('incoming_tax_total'):$item->incoming_tax_total}}">
                </div>
            </div>
            {{-- <div class="form-group row">
                <label for="simpleinput" class="col-sm-3 col-form-label">Total MDS Commission</label>
                <div class="col-sm-9">
                    <input type="number" 
                            class="form-control" 
                            @error('admint_cost') is-Invalid @enderror" 
                            name="" 
                            value="">
                </div>
            </div> --}}
            {{-- <div class="form-group row">
                <label for="simpleinput" class="col-sm-3 col-form-label">Equivalent in IDR MDS</label>
                <div class="col-sm-9">
                    <input type="number" 
                            class="form-control" 
                            @error('admint_cost') is-Invalid @enderror" 
                            name="" 
                            value="">
                </div>
            </div> --}}
            </div>
            <button type="submit" class="btn btn-primary float-right">Simpan</button>
          </form>
        </div> <!-- /. card-body -->
      </div> <!-- /. card -->
    </div> <!-- /. col -->
  </div>
@endsection

@push('after-script')
<script>
    ClassicEditor
            .create( document.querySelector( '.ckeditor0' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
</script> 
    
<script>
    ClassicEditor
            .create( document.querySelector( '.ckeditor1' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
  </script>
  <script>
    ClassicEditor
            .create( document.querySelector( '.ckeditor2' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
  </script> 
<script>
    ClassicEditor
            .create( document.querySelector( '.ckeditor3' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
  </script> 

<script>
    ClassicEditor
            .create( document.querySelector( '.ckeditor4' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
  </script> 

<script>
    ClassicEditor
            .create( document.querySelector( '.ckeditor5' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
  </script> 
@endpush