@extends('master')

@section('content')
    <content class="d-block mt-4">
        <div aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Kendaraan</li>
            </ol>
        </div>

        <label for="">Kategori Data</label>
        <div class="folder">
            <div class="category-folder">
                <a href="" style="padding-top: .25rem; display: -webkit-inline-box;"><i class="fa fa-folder"></i> Data Sekolah
                </a>
                <a href="" class="add-data float-right ml-1"><i class="fa fa-trash"></i></a>
                <a href="" class="add-data float-right"><i class="fa fa-plus"></i></a>
            </div>

            <div class="category-folder">
                <a href="" style="padding-top: .25rem; display: -webkit-inline-box;"><i class="fa fa-folder"></i> Data Sekolah
                </a>
                <a href="" class="add-data float-right ml-1"><i class="fa fa-trash"></i></a>
                <a href="" class="add-data float-right"><i class="fa fa-plus"></i></a>
            </div>

            <div class="category-folder">
                <a href="" style="padding-top: .25rem; display: -webkit-inline-box;"><i class="fa fa-folder"></i> Data Sekolah
                </a>
                <a href="" class="add-data float-right ml-1"><i class="fa fa-trash"></i></a>
                <a href="" class="add-data float-right"><i class="fa fa-plus"></i></a>
            </div>

            <div class="category-folder">
                <a href="" style="padding-top: .25rem; display: -webkit-inline-box;"><i class="fa fa-folder"></i> Data Sekolah
                </a>
                <a href="" class="add-data float-right ml-1"><i class="fa fa-trash"></i></a>
                <a href="" class="add-data float-right"><i class="fa fa-plus"></i></a>
            </div>

            <div class="category-folder">
                <a href="" style="padding-top: .25rem; display: -webkit-inline-box;"><i class="fa fa-folder"></i> Data Sekolah
                </a>
                <a href="" class="add-data float-right ml-1"><i class="fa fa-trash"></i></a>
                <a href="" class="add-data float-right"><i class="fa fa-plus"></i></a>
            </div>

            <div class="category-folder">
                <a href="" style="padding-top: .25rem; display: -webkit-inline-box;"><i class="fa fa-folder"></i> Data Sekolah
                </a>
                <a href="" class="add-data float-right ml-1"><i class="fa fa-trash"></i></a>
                <a href="" class="add-data float-right"><i class="fa fa-plus"></i></a>
            </div>
        </div>

        <style>
            @media only screen and (max-width: 500px) {
                .folder {
                    display: block;
                }

                .folder a {
                    min-width: auto;
                }

                .category-folder {
                    padding-top: 10px;
                }
            }
        </style>
    </content>
@endsection