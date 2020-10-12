@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">Placing Slip</strong>
          <strong class="float-right">REQUEST FOR PLACING SLIP</strong>
        </div>
        <div class="card-body">
          <form action="{{ route('placing.store') }}" method="POST">
            @csrf     
            <input type="hidden" value="UNAPPROVED"  name="status">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-1 col-form-label">Jakarta,</label>
                {{-- <input class="form-control col-sm-3" id="example-date" type="date" name="date"> --}}

                <div class="col-sm-3 input-group">
                    {{-- <input type="text"
                        class="datepicker-here form-control"
                        name="date"
                        data-language='en'
                        data-multiple-dates="3"
                        data-multiple-dates-separator=", "
                        data-position='bottom left'
                         autocomplete="off"/> --}}
                    <input type="date" name="date" class="form-control drgpicker" id="date-input1" aria-describedby="button-addon2">
                    {{-- <div class="input-group-append">
                      <div class="input-group-text" id="button-addon-date"><span class="fe fe-calendar fe-16"></span></div>
                    </div> --}}
                </div>
            </div>
            {{-- <div class="form-group mb-3">
                <label for="example-date col-sm-1 col-form-label">Date</label>
                <input class="form-control col-sm-3" id="example-date" type="date" name="date">
              </div> --}}
            
            {{-- <p><strong>FIRST CLASS INSURANCE COMPANY</strong> </p>  
            <P>Up : <strong> Marketing / Underwriting Manager</strong></P> --}}
            <div class="form-group row">
                <label for="insurance_id" class="col-sm-2 col-form-label">Lembaga Asuransi</label>
                <div class="col-sm-3 ">
                    <select name="insurance_id" class="form-control @error('insurance_id') is_invalid @enderror">
                        <option value="">--Pilih Lembaga Asuransi--</option>
                        @foreach ($insurances as $insurance)
                            <option value="{{ $insurance->id }}">{{ $insurance->name }}</option>
                        @endforeach
                    </select>
                    @error('insurance_id') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
            </div>
            <h2 align="center">INSURANCE PLACING SLIP NO: 000</h2>
            <p>We reference you to give the best quotation for the Insurance Matter with several information and documents attached are</p>
            <div class="row" style="background-color: rgb(153, 150, 150); display: block">
                <p style="color: black;">&nbsp;&nbsp;&nbsp;&nbsp;DATA & INFORMATION</p>
            </div>
            <div class="form-group row">
                <label for="insured" class="col-sm-3 col-form-label">THE INSURED</label>
                <div class="col-sm-9 ">
                    <textarea name="insured" 
                        class="ckeditor form-control @error('insured') is-invalid @enderror">{{ old('insured')}}</textarea>
                    @error('insured') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">PERIOD OF INSURANCE</label>
                <div class="col-sm-9 ">
                    <textarea name="period" 
                        class="ckeditor1 form-control @error('period') is-invalid @enderror">{{ old('period')}}</textarea>
                    @error('period') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="contract_details" class="col-sm-3 col-form-label">DETAILS OF CONTRACT</label>
                <div class="col-sm-9 ">
                    <textarea name="contract_details" 
                        class="ckeditor2 form-control @error('contract_details') is-invalid @enderror">{{ old('contract_details')}}</textarea>
                    @error('contract_details') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="warranty" class="col-sm-3 col-form-label">SCOPE OF WORK PROJECT</label>
                <div class="col-sm-6 ">
                    <input type="text" name="scope" 
                        class="form-control @error('scope') is-invalid @enderror">{{ old('scope')}}</input>
                    @error('scope') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="scope" class="col-sm-3 col-form-label">TERRITORIAL LIMIT</label>
                <div class="col-sm-3 ">
                    <input type="text" name="territorial" 
                        class="form-control @error('territorial') is-invalid @enderror">{{ old('territorial')}}</input>
                    @error('territorial') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="employee_details" class="col-sm-3 col-form-label">DETAILS OF EMPLOYEE</label>
                <div class="col-sm-9 ">
                    <textarea name="employee_details" 
                        class="ckeditor3 form-control @error('employee_details') is-invalid @enderror">{{ old('employee_details')}}</textarea>
                    @error('employee_details') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="vehicle_details" class="col-sm-3 col-form-label">DETAILS OF VEHICLE</label>
                <div class="col-sm-9 ">
                    <textarea name="vehicle_details" 
                        class="ckeditor4 form-control @error('vehicle_details') is-invalid @enderror">{{ old('vehicle_details')}}</textarea>
                    @error('vehicle_details') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="row" style="background-color: rgb(153, 150, 150); display: block">
                <p style="color: black;">&nbsp;&nbsp;&nbsp;&nbsp;TERMS & CONDITION</p>
            </div>
            <div class="form-group row">
                <label for="cover_type" class="col-sm-3 col-form-label">TYPE OF COVER</label>
                <div class="col-sm-9 ">
                    <textarea name="cover_type" 
                        class="ckeditor5 form-control @error('cover_type') is-invalid @enderror">{{ old('cover_type')}}</textarea>
                    @error('cover_type') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="coverage" class="col-sm-3 col-form-label">FORM INSURANCE COVERAGE</label>
                <div class="col-sm-9 ">
                    <textarea name="coverage" 
                        class="ckeditor6 form-control @error('coverage') is-invalid @enderror">{{ old('coverage')}}</textarea>
                    @error('coverage') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="row" style="background-color: rgb(153, 150, 150); display: block">
                <p style="color: black;">&nbsp;&nbsp;&nbsp;&nbsp;FINANCIAL & OTHERS</p>
            </div>
            <div class="form-group row">
                <label for="rate" class="col-sm-3 col-form-label">RATE / PREMIUM</label>
                <div class="col-sm-9 ">
                    <textarea name="rate" 
                        class="ckeditor7 form-control @error('rate') is-invalid @enderror">{{ old('rate')}}</textarea>
                    @error('rate') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="scope" class="col-sm-3 col-form-label">COMPENSATION</label>
                <div class="col-md-3">

                <div class="input-group mb-6">
                    <input type="number" name="compensation" class="form-control" placeholder="Compensation"  aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon2">% of Premium</span>
                    </div>
                  </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="warranty" class="col-sm-3 col-form-label">PREMIUM WARRANTY</label>
                <div class="col-sm-9 ">
                    <input type="text" name="warranty" 
                        class="form-control @error('warranty') is-invalid @enderror">{{ old('warranty')}}</input>
                    @error('warranty') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="remarks" class="col-sm-3 col-form-label">REMARKS</label>
                <div class="col-sm-9 ">
                    <textarea name="remarks" 
                        class="ckeditor8 form-control @error('remarks') is-invalid @enderror">{{ old('remarks')}}</textarea>
                    @error('remarks') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="signfor" class="col-sm-3 col-form-label">SIGN FOR</label>
                <div class="col-sm-6 ">
                    <textarea name="signfor" 
                        class="ckeditor9 form-control @error('signfor') is-invalid @enderror">{{ old('signfor')}}</textarea>
                    @error('signfor') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="confirmby" class="col-sm-3 col-form-label">CONFIRMED BY</label>
                <div class="col-sm-6 ">
                    <textarea name="confirmby" 
                        class="ckeditor10 form-control @error('confirmby') is-invalid @enderror">{{ old('confirmby')}}</textarea>
                    @error('confirmby') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary float-right">Tambahkan</button>
          </form>
        </div> <!-- /. card-body -->
      </div> <!-- /. card -->
    </div> <!-- /. col -->
  </div>
@endsection

@push('after-script')
<script>
    ClassicEditor
            .create( document.querySelector( '.ckeditor' ) )
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
  <script>
    ClassicEditor
            .create( document.querySelector( '.ckeditor6' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
  </script>
  <script>
    ClassicEditor
            .create( document.querySelector( '.ckeditor7' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
  </script>
  <script>
    ClassicEditor
            .create( document.querySelector( '.ckeditor8' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
  </script>
  <script>
    ClassicEditor
            .create( document.querySelector( '.ckeditor9' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
  </script>
  <script>
    ClassicEditor
            .create( document.querySelector( '.ckeditor10' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
  </script>
@endpush