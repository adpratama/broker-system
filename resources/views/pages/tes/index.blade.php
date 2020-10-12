@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">Tambah Data Test</strong>
          {{-- <strong class="float-right">{{$item}}</strong> --}}
        </div>
        <div class="card-body">
          {{-- <form action="{{ route('tes.store') }}" method="POST">
            @csrf      --}}
                
            {{-- <div class="form-group row">
              <div class="form-group col-md-6">

              <label for="client_id" class="form-control-label">ID Client</label>
              <select name="client_id" id="client_id" class="form-control @error('client_id') is_invalid @enderror">
                <option value="">-- Pilih Nama --</option>
                  @foreach ($items as $item)
                      <option value="{{ $item->id }}">{{ $item->name }}</option>
                  @endforeach
              </select>
              @error('client_id') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
        </div> --}}
            <div class="form-group row">
              <div class="form-group col-md-6">
                <label for="name">Id</label>
                <input type="text" class="form-control" name="client_id" id="client_id" value="{{old('client_id')}} @error('client_id') is-invalid @enderror " >
                @error('client_id')
                    <div class="text-muted">{{ $message}} </div>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <div class="form-group col-md-6">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" id="name" value="{{old('name')}} @error('name') is-invalid @enderror " readonly>
                @error('name')
                    <div class="text-muted">{{ $message}} </div>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <div class="form-group col-md-6">
                <label for="phone">No. HP</label>
                <input type="text" class="form-control" name="phone" id="phone" value="{{old('phone')}} @error('phone') is-invalid @enderror " readonly>
                @error('phone')
                    <div class="text-muted">{{ $message}} </div>
                @enderror
              </div>
            </div>
            {{-- <button type="submit" class="btn btn-primary float-right">Tambahkan</button> --}}
          </form>
        </div> <!-- /. card-body -->
      </div> <!-- /. card -->
    </div> <!-- /. col -->
  </div>
  {{-- <script type="text/javascript">
    var delay = (function () {
        var timer = 0;
        return function (callback, ms) {
            clearTimeout(timer);
            timer = setTimeout(callback, ms);
        };
    })();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#client_id").keyup(function () {
        delay(function () {
            var id = $("#client_id").val();
            $.ajax({
                url: "{{ route('find.id') }}",
                method:'GET',
                data:"nip="+nip ,
            }).success(function (data) {
                var json = data,
                obj = JSON.parse(json);
                $('#name').val(obj.name);
                $('#phone').val(obj.phone);
            });
        }, 1000);
    });
</script> --}}
@endsection