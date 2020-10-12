@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">Edit Data Tertanggung</strong>
          <strong class="float-right">{{$item->id}}</strong>
        </div>
        <div class="card-body">
          <form action="{{ route('insured.update', $item->id) }}" method="POST">
            @csrf     
            @method('PATCH')
           
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" id="name" value="{{old('name')?old('name'):$item->name}} @error('name') is-invalid @enderror ">
                @error('name')
                    <div class="text-muted">{{ $message}} </div>
                @enderror
              </div>
              <div class="form-group col-md-6">
                <label for="phone">No. Telepon</label>
                <input type="text" class="form-control" name="phone" id="phone" value="{{old('phone')?old('phone'):$item->phone}} @error('phone') is-invalid @enderror ">
                @error('phone')
                    <div class="text-muted">{{ $message}} </div>
                @enderror
              </div>
            </div>
            
            <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email" value="{{old('email')?old('email'):$item->email}} @error('email') is-invalid @enderror ">
                  @error('email')
                      <div class="text-muted">{{ $message}} </div>
                  @enderror
              </div>
              <div class="form-group col-md-6">
                <label for="client_id">Kode Referral</label>
                <select class="form-control @error('client_id') is_invalid @enderror" name="client_id" id="example-select">
                  <option>{{$item->client_id}} | {{$item->client->name}} </option>
                  <option >--Kode Referral Agen--</option>
                  @foreach ($clients as $client)
                      <option value="{{ $client->id }}">{{ $client->id }} | {{ $client->name }}</option>
                  @endforeach
                </select>
                @error('client_id') <div class="text-muted">{{ $message }}</div> @enderror
              </div>
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <input type="text" class="form-control" name="address" id="address" value="{{old('address')?old('address'):$item->address}} @error('address') is-invalid @enderror ">
                @error('address')
                    <div class="text-muted">{{ $message}} </div>
                @enderror
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="pic">Nama PIC</label>
                  <input type="text" class="form-control" name="pic" id="pic" value="{{old('pic')?old('pic'):$item->pic}} @error('pic') is-invalid @enderror ">
                  @error('pic')
                      <div class="text-muted">{{ $message}} </div>
                  @enderror
                </div>
                <div class="form-group col-md-6">
                  <label for="phone_pic">No. HP PIC</label>
                  <input type="text" class="form-control" name="phone_pic" id="phone_pic" value="{{old('phone_pic')?old('phone_pic'):$item->phone_pic}} @error('phone_pic') is-invalid @enderror ">
                  @error('phone_pic')
                      <div class="text-muted">{{ $message}} </div>
                  @enderror
                </div>
              </div>
            <button type="submit" class="btn btn-primary float-right">Tambahkan</button>
          </form>
        </div> <!-- /. card-body -->
      </div> <!-- /. card -->
    </div> <!-- /. col -->
  </div>
@endsection