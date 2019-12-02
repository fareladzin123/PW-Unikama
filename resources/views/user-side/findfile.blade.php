@extends('master')

@section('content')
    {{ csrf_field() }}
    <content class="d-block mt-4">
        <div aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../dashboard">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cari File</li>
            </ol>
        </div>

        <label for="">Menampilkan Hasil Pencarian</label>
        <div class="folder">
                @foreach($hasil as $h)
                <div class="file">
                  <div class="file-img" style="background: url(../uploads/images/{{$h->filename}});"></div>
                  <div class="file-detail">
                    <a style="cursor: pointer" data-toggle="modal" data-target="#addSubCategory"><i class="fa fa-folder-open"></i>
                      {{$h->nama_data}} <br></a>
                    <span class="d-block mt-4 text-right"><a href="../deletefile/{{$h->id}}" class="btn btn-transparent"><i
                          class="fa fa-trash"></i> Hapus
                        File</a></span>
                  </div>
                </div>
                @endforeach
          
                <div class="modal fade" id="addSubCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <img src="../uploads/images/{{$h->filename}}" alt="" style="width: 100%">
                        <button style="position: absolute; color: #fff; opacity: 1" type="button" class="close"
                          data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>                        

        <style>
            .btn {
                width: fit-content;
                border-radius: 0;
                cursor: pointer;
                font-size: 0.75rem !important;
            }

        </style>
    </content>
@endsection