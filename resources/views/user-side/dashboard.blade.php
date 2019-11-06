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
            <div class="category-folder">
                <a href="" style="padding-top: .25rem;"><i class="fa fa-folder"></i> Data Sekolah
                </a>
                <a class="add-data float-right" data-toggle="modal" data-target="#addSubCategory"><i class="fa fa-plus"></i></a>
            </div>

            <div class="category-folder">
                <a href="" style="padding-top: .25rem;"><i class="fa fa-folder"></i> Data Sekolah
                </a>
                <a class="add-data float-right" data-toggle="modal" data-target="#addSubCategory"><i class="fa fa-plus"></i></a>
            </div>

            <div class="category-folder">
                <a href="" style="padding-top: .25rem;"><i class="fa fa-folder"></i> Data Sekolah
                </a>
                <a class="add-data float-right" data-toggle="modal" data-target="#addSubCategory"><i class="fa fa-plus"></i></a>
            </div>
        </div>

        <label for="" class="mt-5">Terakhir Ditambahkan</label>
        <div class="folder">

            <a href="">
                <div class="file">
                    <div class="file-img" style="background: url(../assets/img/un.png);"></div>
                    <div class="file-detail">
                        <i class="fa fa-folder-open"></i> Surat Akta Kelahiran <br>
                        <span class="d-block mt-4 text-right">28 Januari 2019</span>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="file">
                    <div class="file-img" style="background: url(../assets/img/code.jpg);"></div>
                    <div class="file-detail">
                        <i class="fa fa-folder-open"></i> Surat Akta Kelahiran <br>
                        <span class="d-block mt-4 text-right">28 Januari 2019</span>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="file">
                    <div class="file-img" style="background: url(../assets/img/un.png);"></div>
                    <div class="file-detail">
                        <i class="fa fa-folder-open"></i> Surat Akta Kelahiran <br>
                        <span class="d-block mt-4 text-right">28 Januari 2019</span>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="file">
                    <div class="file-img" style="background: url(../assets/img/un.png);"></div>
                    <div class="file-detail">
                        <i class="fa fa-folder-open"></i> Surat Akta Kelahiran <br>
                        <span class="d-block mt-4 text-right">28 Januari 2019</span>
                    </div>
                </div>
            </a>

        </div>
    </content>
    <div class="modal fade" id="addSubCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <form>
                        <div class="input-group mt-1">
                            <input type="text" class="form-control" name="subcategory" placeholder="Nama Subkategori">
                            <button class="btn btn-warning ml-1">Kirim</button>
                        </div>
                    </form>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
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