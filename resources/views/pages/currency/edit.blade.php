@extends('layouts.default')
@section('content')
<section class="section">
   <div class="section-body">
      <div class="row">
         <div class="col-12">
         <div class="card">

            <div class="card-header">
               <div class="col-sm-12 col-md-6 text-left">
                  <h4>Rubah Data Jenis Mata Uang</h4>
               </div>
               <div class="col-sm-12 col-md-6 text-right">
                  <strong>{{$item->input_kode}} - {{$item->mata_uang}} </strong>
               </div>
            </div>

            <div class="card-body">
               <form action="{{ route('currency.update', $item->id) }}" method="POST">
               @csrf
               @method('PATCH')
               <div class="col-12">
                  <div class="form-row">

                     <div class="form-group col-md-2">
                        <label for="name">Kode Mata Uang</label>
                        <input type="text" 
                           class="form-control" 
                           name="input_kode" 
                           id="input_kode" 
                           value="{{old('input_kode')?old('input_kode'):$item->input_kode}} @error('input_kode') is-invalid @enderror ">
                           @error('input_kode')
                              <div class="text-muted">{{ $message}} </div>
                           @enderror
                     </div>
                     
                  </div>

                  <div class="form-row">

                     <div class="form-group col-md-7">
                        <label for="phone">Nama Mata Uang</label>
                        <input type="text" 
                           class="form-control" 
                           name="mata_uang" 
                           id="mata_uang" 
                           value="{{old('mata_uang')?old('mata_uang'):$item->mata_uang}} @error('mata_uang') is-invalid @enderror ">
                           @error('mata_uang')
                              <div class="text-muted">{{ $message}} </div>
                           @enderror
                     </div>

                  </div>
               </div>
               <button type="submit" class="btn btn-primary float-right">Simpan</button>

               </form>
            </div>
         </div>
         </div>
      </div>
   </div>
</section>
@endsection

@push('after-script')

@endpush