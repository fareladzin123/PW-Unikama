@extends('master')

@section('content')
<content class="d-block mt-4">
  <div aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Home</li>
    </ol>
  </div>

  @if(Session('errors'))
            <div class="alert alert-danger">
                <div>Data Tidak Ditemukan</div>
            </div>
        @endif

  <label for="">Kategori Data</label>
  <div class="folder">
    @foreach($kategori as $k)
    <div class="category-folder">
      <a href="category/{{$k->id}}"><i class="fa fa-folder"></i> {{$k->nama_kategori}}
      </a>
    </div>
    @endforeach
  </div>

  @if(!empty($data))
  <label for="" class="mt-5">Terakhir Ditambahkan</label>
  <div class="folder">
    @foreach($data as $x =>$d)
      <div class="file">
        <div class="file-img" style="background: url(../uploads/images/{{$d->filename}});"></div>
        <div class="file-detail">
          <a style="cursor: pointer" data-toggle="modal" data-target="{{'#addSubCategory'.$x}}"><i class="fa fa-folder-open"></i>
            {{$d->nama_data}} <br></a>
            @if($d->created_at != null)
          <span class="d-block mt-4 text-right"><?php echo date_format($d->created_at,"N M Y - H.i A");?></span>
            @endif
        </div>
      </div>
    <div class="modal fade" id="{{'addSubCategory'.$x}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <img src="../uploads/images/{{$d->filename}}" alt="" style="width: 100%">
            <button style="position: absolute; color: #fff; opacity: 1" type="button" class="close" data-dismiss="modal"
              aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  @endif
</content>

<style>
.category-folder a {
  display: -webkit-inline-flex;
}

.category-folder i {
  padding: 3px 5px;
}

.category-folder .add-data {
  padding: 7px 5px !important;
  cursor: pointer;
}

.category-folder .add-data i {
  padding: 0 !important;
}

@media only screen and (max-width: 500px) {
  .category-folder {
    height: fit-content;
  }

  .category-folder a {
    display: block;
  }

  .category-folder .add-data {
    min-width: auto;
    margin-top: -23px;
  }
}
</style>
@endsection