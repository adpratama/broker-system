@extends('layouts.default')
@section('content')
<section class="section">
   <div class="section-body">
      <div class="row">
         <div class="col-12">
         <div class="card">

            <div class="card-header">
               <div class="col-sm-12 col-md-6 text-left">
                  <h4>Rubah Data Pemberi Tanda Tangan </h4>
               </div>
               <div class="col-sm-12 col-md-6 text-right">
               <strong>{{$item->nama}} </strong>
            </div>
            </div>

            <div class="card-body">
               <form action="{{ route('authorize_sign.update', $item->id) }}" method="POST">
               @csrf
               @method('PATCH')
               <div class="col-12">
                  <div class="form-row">

                     <div class="form-group col-md-6">
                        <label for="name">Kode</label>
                        <input type="text" 
                           class="form-control" 
                           name="input_kode" 
                           id="input_kode" 
                           value="{{old('input_kode')?old('input_kode'): $item->input_kode}} @error('input_kode') is-invalid @enderror ">
                           @error('input_kode')
                              <div class="text-muted">{{ $message}} </div>
                           @enderror
                     </div>
                     
                  </div>

                  <div class="form-row">

                     <div class="form-group col-md-7">
                        <label for="phone">Nama</label>
                        <input type="text" 
                           class="form-control" 
                           name="nama" 
                           id="nama" 
                           value="{{old('nama')?old('nama'): $item->nama}} @error('nama') is-invalid @enderror ">
                           @error('nama')
                              <div class="text-muted">{{ $message}} </div>
                           @enderror
                     </div>

                  </div>

                  <div class="form-row">

                     <div class="form-group col-md-6">
                        <label for="name">Jabatan</label>
                        <input type="text" 
                           class="form-control" 
                           name="jabatan" 
                           id="jabatan" 
                           value="{{old('jabatan')?old('jabatan'): $item->jabatan}} @error('jabatan') is-invalid @enderror ">
                           @error('jabatan')
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
