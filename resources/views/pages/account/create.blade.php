@extends('layouts.default')
@section('content')
<section class="section">
   <div class="section-body">
      <div class="row">
         <div class="col-12">
         <div class="card">

            <div class="card-header">
               <div class="col-sm-12 col-md-6 text-left">
                  <h4>Tambah Daftar No. Rekening</h4>
               </div>
            </div>

            <div class="card-body">
               <form action="{{ route('account.store') }}" method="POST">
               @csrf

               <div class="col-12">
                  <div class="form-row">

                     <div class="form-group col-md-2">
                        <label for="name">No Rekening</label>
                        <input type="text" 
                           class="form-control" 
                           name="no_rekening" 
                           id="no_rekening" 
                           value="{{old('no_rekening')}} @error('no_rekening') is-invalid @enderror ">
                           @error('no_rekening')
                              <div class="text-muted">{{ $message}} </div>
                           @enderror
                     </div>
                     
                  </div>

                  <div class="form-row">

                     <div class="form-group col-md-7">
                        <label for="phone">Nama Bank</label>
                        <input type="text" 
                           class="form-control" 
                           name="nama_bank" 
                           id="nama_bank" 
                           value="{{old('nama_bank')}} @error('nama_bank') is-invalid @enderror ">
                           @error('nama_bank')
                              <div class="text-muted">{{ $message}} </div>
                           @enderror
                     </div>

                  </div>

                  <div class="form-row">

                     <div class="form-group col-md-7">
                        <label for="phone">Atas Nama</label>
                        <input type="text" 
                           class="form-control" 
                           name="atas_nama" 
                           id="atas_nama" 
                           value="{{old('atas_nama')}} @error('atas_nama') is-invalid @enderror ">
                           @error('atas_nama')
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