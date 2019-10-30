@extends('master')

@section('content')
    <content class="d-block mt-4">
        <div aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Home</li>
            </ol>
        </div>

        <label for="">Kategori Data</label>
        <div class="folder">
            <a href="">
                <div class="category-folder">
                    <i class="fa fa-folder"></i> Data Pribadi
                </div>
            </a>

            <a href="">
                <div class="category-folder">
                    <i class="fa fa-folder"></i> Data Sekolah
                </div>
            </a>

            <a href="">
                <div class="category-folder">
                    <i class="fa fa-folder"></i> Data Kendaraan
                </div>
            </a>
        </div>

        <label for="" class="mt-5">Terakhir Ditambahkan</label>
        <div class="folder">

            <a href="">
                <div class="file">
                    <div class="file-img" style="background: url(assets/img/un.png);"></div>
                    <div class="file-detail">
                        <i class="fa fa-folder-open"></i> Surat Akta Kelahiran <br>
                        <span class="d-block mt-4 text-right">28 Januari 2019</span>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="file">
                    <div class="file-img" style="background: url(assets/img/code.jpg);"></div>
                    <div class="file-detail">
                        <i class="fa fa-folder-open"></i> Surat Akta Kelahiran <br>
                        <span class="d-block mt-4 text-right">28 Januari 2019</span>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="file">
                    <div class="file-img" style="background: url(assets/img/un.png);"></div>
                    <div class="file-detail">
                        <i class="fa fa-folder-open"></i> Surat Akta Kelahiran <br>
                        <span class="d-block mt-4 text-right">28 Januari 2019</span>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="file">
                    <div class="file-img" style="background: url(assets/img/un.png);"></div>
                    <div class="file-detail">
                        <i class="fa fa-folder-open"></i> Surat Akta Kelahiran <br>
                        <span class="d-block mt-4 text-right">28 Januari 2019</span>
                    </div>
                </div>
            </a>

        </div>
    </content>
@endsection