@extends('layouts.default')
@section('content')
<section class="section">
   <div class="section-body">
      <div class="row">
         <div class="col-12">
         <div class="card">

            <div class="card-header">
               <div class="col-sm-12 col-md-6 text-left">
                  <h4>Buat Kwitansi</h4>
               </div>
            </div>

            <div class="card-body">
               <form action="{{ route('kwitansi.store') }}" method="POST">
               @csrf
               <input type="hidden" value="{{$item->id}} "  name="invoice_id">
               <div class="col-12">


                    {{-- TANGGAL PEMBUKUAN --}}

                  <div class="form-row">

                     <div class="form-group col-md-6">
                        <label for="">Tanggal Pembukuan</label>
                        <input type="date" 
                           class="form-control" 
                           name="date" 
                           id="date" 
                           value="{{old('date')}} @error('date') is-invalid @enderror ">
                           @error('date')
                              <div class="text-muted">{{ $message}} </div>
                           @enderror
                     </div>
                     
                  </div>


                  {{-- INPUT INSURANCE --}}

                  <div class="form-row">

                     <div class="form-group col-md-6">
                        <label for="name">Insurance</label>
                        <input type="text" readonly
                           class="form-control" 
                           name="insurance_id" 
                           id="insurance_id" 
                           value="{{$item->quotation->insurance_id}} ">
                           @error('insurance_id')
                              <div class="text-muted">{{ $message}} </div>
                           @enderror
                     </div>
                     
                  </div>


                  {{-- INPUT CLIENT --}}

                  <div class="form-row">

                     <div class="form-group col-md-6">
                        <label for="name">Client</label>
                        <input type="text" readonly
                           class="form-control" 
                           name="client_id" 
                           id="client_id" 
                           value="{{$item->quotation->client_id}}">
                           @error('client_id')
                              <div class="text-muted">{{ $message}} </div>
                           @enderror
                     </div>
                     

                     {{-- INPUT CURRENCY --}}

                  </div>

                  <div class="form-row">

                     <div class="form-group col-md-6">
                        <label for="name">Currency</label>
                        <input type="text" readonly
                           class="form-control" 
                           name="currency_id" 
                           id="currency_id" 
                           value="{{$item->quotation->currency_id}}">
                           @error('currency_id')
                              <div class="text-muted">{{ $message}} </div>
                           @enderror
                     </div>
                     
                  </div>

                  {{-- INPUT JENIS PEMBAYARAN --}}

                  <div class="form-row">

                     <div class="form-group col-md-6">
                        <label for="">Jenis Pembayaran</label>
                        <select name="jenis_pembayaran"
                                class="form-control select2 
                                @error('cover_type') is_invalid @enderror" >
                           <option value="">--Pilih Jenis Pembayaran--</option>
                           <option value="Cash">Cash</option>
                           <option value="Transfer">Transfer</option>
                           <option value="Cheque">Cheque</option> 
                        </select>
                        {{-- <input type="text" 
                           class="form-control" 
                           name="nama" 
                           id="nama" 
                           value="{{old('nama')}} @error('nama') is-invalid @enderror ">
                           @error('nama')
                              <div class="text-muted">{{ $message}} </div>
                           @enderror --}}
                     </div>

                  </div>


                  {{-- INPUT NAMA BANK --}}

                  <div class="form-row">

                     <div class="form-group col-md-6">
                        <label for="name">Nama Bank</label>
                        <input type="text" 
                           class="form-control" 
                           name="bankers" 
                           id="bankers" 
                           value="{{old('bankers')}} @error('bankers') is-invalid @enderror ">
                           @error('bankers')
                              <div class="text-muted">{{ $message}} </div>
                           @enderror
                     </div>
                     
                  </div>
                  

                  {{-- INPUT NOMOR REKENING --}}

                  <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="name">Nomor Rekening</label>
                        <input type="number" 
                           class="form-control" 
                           name="no_rekening" 
                           id="no_rekening" 
                           value="{{old('no_rekening')}} @error('no_rekening') is-invalid @enderror ">
                           @error('no_rekening')
                              <div class="text-muted">{{ $message}} </div>
                           @enderror
                     </div>

                  </div>


                  {{-- INPUT JUMLAH PEMBAYARAN --}}
                  <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="number">Jumlah Pembayaran</label>
                        <input type="number" 
                           class="form-control" 
                           name="jumlah_pembayaran" 
                           id="jumlah_pembayaran" 
                           value="{{old('jumlah_pembayaran')}} @error('jumlah_pembayaran') is-invalid @enderror ">
                           @error('jumlah_pembayaran')
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
