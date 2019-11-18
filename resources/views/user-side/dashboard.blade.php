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
        @foreach($kategori as $k)
            <div class="category-folder">
                <a href="category/{{$k->id}}" style="padding-top: .25rem;"><i class="fa fa-folder"></i> {{$k->nama_kategori}}
                </a>
                <a class="add-data float-right" data-toggle="modal" data-target="#addSubCategory<?php echo $k->id ?>"><i class="fa fa-plus"></i></a>
            </div> 

            <div class="modal fade" id="addSubCategory<?php echo $k->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <form action="{{route('subcategoryStore',$k->id)}}" method="POST">
                            {{csrf_field()}}
                                <div class="input-group mt-1">
                                    
                                    <input type="text" class="form-control" name="nama_subkategori" placeholder="Nama Subkategori">
                                    <button type="submit" class="btn btn-warning ml-1">Kirim</button>
                                </div>
                            </form>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>   
        @endforeach
        </div>

        @if(!empty($data))
        <label for="" class="mt-5">Terakhir Ditambahkan</label>
        <div class="folder">
            @foreach($data as $d)
            <a href="">
                <div class="file">
                    <div class="file-img" style="background: url(../uploads/images/{{$d->filename}});"></div>
                    <div class="file-detail">
                        <i class="fa fa-folder-open"></i> {{$d->nama_data}} <br>
                        <span class="d-block mt-4 text-right">{{$d->created_at}}</span>
                    </div>
                </div>
            </a>    
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