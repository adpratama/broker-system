@extends('layouts.default')
@section('content')
<section class="section">
  <div class="section-body">

    <div class="row">
      <div class="col-12">
        <div class="card">

          {{-- Card Header --}}
          <div class="card-header">
            <div class="col-sm-12 col-md-6">
              <h4>Daftar Jenis Asuransi</h4>
            </div>
            <div class="col-sm-12 col-md-6">
              <a href="{{route('cover_type.create')}} " 
                class="btn btn-light float-right" >
                Tambah
              </a> 
            </div>
          </div>

          {{-- Card Body --}}
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="table-1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Input Kode</th>
                    <th>Deskripsi</th>
                    <th>Tindakan</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($items as $item)
                  <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->input_kode}}</td>
                    <td>{{$item->deskripsi}}</td>
                    <td>
                      <a class="btn btn-sm  btn-light" 
                        href="{{route('cover_type.edit', $item->id)}} ">
                        Edit
                      </a>
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="8" class="text-center p-4">
                        Data tidak tersedia
                    </td>
                  </tr>
                  @endforelse
                
                {{-- @empty
                
                @endforelse --}}
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

@push('after-script')
<script>
  $("#table-1").dataTable({
  "columnDefs": [
    { "sortable": false, "targets": [2,3] }
  ]
});
</script>

@endpush