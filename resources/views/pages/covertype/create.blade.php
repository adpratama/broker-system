@extends('layouts.default')
@section('content')
<section class="section">
   <div class="section-body">
      <div class="row">
         <div class="col-12">
         <div class="card">

            <div class="card-header">
               <div class="col-sm-12 col-md-6 text-left">
                  <h4>Tambah Data Jenis Asuransi</h4>
               </div>
            </div>

            <div class="card-body">
               <form action="{{ route('cover_type.store') }}" method="POST">
               @csrf

               <div class="col-12">
                  <div class="form-row">

                     <div class="form-group col-md-6">
                        <label for="name">Kode</label>
                        <input type="text" 
                           class="form-control" 
                           name="input_kode" 
                           id="input_kode" 
                           value="{{old('input_kode')}} @error('input_kode') is-invalid @enderror ">
                           @error('input_kode')
                              <div class="text-muted">{{ $message}} </div>
                           @enderror
                     </div>
                     
                  </div>

                  <div class="form-row">

                     <div class="form-group col-md-12">
                        <label for="phone">Deskripsi</label>
                        <input type="text" 
                           class="form-control" 
                           name="deskripsi" 
                           id="deskripsi" 
                           value="{{old('deskripsi')}} @error('deskripsi') is-invalid @enderror ">
                           @error('deskripsi')
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