@extends('layouts.default')
@section('content')
<section class="section">
   <div class="section-body">
      <div class="row">
         <div class="col-12">
         <div class="card">

            <div class="card-header">
               <div class="col-sm-12 col-md-6 text-left">
               <h4>Tambah Data Client</h4>
               </div>
               <div class="col-sm-12 col-md-6 text-right">
               <strong>{{$item}}</strong>
               </div>
            </div>

            <div class="card-body">
               <form action="{{ route('clients.store') }}" method="POST">
               @csrf

               <div class="col-12">
                  <div class="form-row">
                     <input type="text" 
                        class="form-control" 
                        name="id" id="id" 
                        value="{{$item}} @error('id') is-invalid @enderror "
                        hidden>

                     <div class="form-group col-md-6">
                        <label for="name">Nama</label>
                        <input type="text" 
                           class="form-control" 
                           name="name" 
                           id="name" 
                           value="{{old('name')}} @error('name') is-invalid @enderror ">
                           @error('name')
                              <div class="text-muted">{{ $message}} </div>
                           @enderror
                     </div>

                     <div class="form-group col-md-6">
                        <label for="phone">No. HP</label>
                        <input type="text" 
                           class="form-control" 
                           name="phone" 
                           id="phone" 
                           value="{{old('phone')}} @error('phone') is-invalid @enderror ">
                           @error('phone')
                              <div class="text-muted">{{ $message}} </div>
                           @enderror
                     </div>
                  </div>

                  <div class="form-row">
                     <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" 
                           class="form-control" 
                           name="email" 
                           id="email" 
                           value="{{old('email')}} @error('email') is-invalid @enderror ">
                           @error('email')
                              <div class="text-muted">{{ $message}} </div>
                           @enderror
                     </div>
                  </div>

                  <div class="form-group">
                     <label for="address">Alamat</label>
                     <input type="text" 
                        class="form-control" 
                        name="address" 
                        id="address" 
                        value="{{old('address')}} @error('address') is-invalid @enderror ">
                        @error('address')
                           <div class="text-muted">{{ $message}} </div>
                        @enderror
                  </div>

                  <div class="form-row">

                     <div class="form-group col-md-6">
                        <label for="pic">Nama PIC</label>
                        <input type="text" 
                           class="form-control" 
                           name="pic" 
                           id="pic" 
                           value="{{old('pic')}} @error('pic') is-invalid @enderror ">
                           @error('pic')
                              <div class="text-muted">{{ $message}} </div>
                           @enderror
                     </div>

                     <div class="form-group col-md-6">
                        <label for="phone_pic">No. HP PIC</label>
                        <input type="text" 
                           class="form-control" 
                           name="phone_pic" 
                           id="phone_pic" 
                           value="{{old('phone_pic')}} @error('phone_pic') is-invalid @enderror ">
                           @error('phone_pic')
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