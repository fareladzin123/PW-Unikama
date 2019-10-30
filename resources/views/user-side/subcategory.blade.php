@extends('master')

@section('content')
    <content class="d-block mt-4">
        <div aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                <li class="breadcrumb-item"><a href="category.html">Data Kendaraan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Surat Tanda Nomor Kendaraan</li>
            </ol>
        </div>

        <label for="">Arsip Surat Tanda Nomor Kendaraan</label>
        <div class="folder">

            <div class="file">
                <div class="file-img" style="background: url(assets/img/un.png);"></div>
                <div class="file-detail">
                    <a href=""><i class="fa fa-folder-open"></i> Foto STNK <br></a>
                    <span class="d-block mt-4 text-right"><a href="" class="btn btn-transparent"><i class="fa fa-trash"></i> Hapus
              File</a></span>
                </div>
            </div>

            <div class="file">
                <div class="file-img" style="background: url(assets/img/un.png);"></div>
                <div class="file-detail">
                    <a href=""><i class="fa fa-folder-open"></i> Foto STNK <br></a>
                    <span class="d-block mt-4 text-right"><a href="" class="btn btn-transparent"><i class="fa fa-trash"></i> Hapus
              File</a></span>
                </div>
            </div>

            <div class="file">
                <div class="file-img" style="background: url(assets/img/un.png);"></div>
                <div class="file-detail">
                    <a href=""><i class="fa fa-folder-open"></i> Foto STNK <br></a>
                    <span class="d-block mt-4 text-right"><a href="" class="btn btn-transparent"><i class="fa fa-trash"></i> Hapus
              File</a></span>
                </div>
            </div>

            <div class="file">
                <div class="file-img" style="background: url(assets/img/un.png);"></div>
                <div class="file-detail">
                    <a href=""><i class="fa fa-folder-open"></i> Foto STNK <br></a>
                    <span class="d-block mt-4 text-right"><a href="" class="btn btn-transparent"><i class="fa fa-trash"></i> Hapus
              File</a></span>
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