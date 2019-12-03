
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">
    <title>Arsipin</title>

    <script src="../assets/js/jquery.min.js"></script>
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-3.2.1.slim.min.js"></script>

</head>

<body>
<nav class="row">
    <div class="col-md-3">
        <img src="../assets/img/logo.png" alt="logo_arsipin"><span class="ml-3">Arsipin</span>
    </div>
    <div class="col-md-7">
        <div class="search-bar">
            <div class="search-icon pt-1 pl-4">
                <i class="fa fa-search search-icon-i"></i>
            </div>
            <div class="search-input">
                <form method="GET" action="{{ route('search')}}">
                    <input name="keyword" type="text" placeholder="Search Category" class="w-100">
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="profile-avatar float-right text-center pt-2" data-toggle="modal" data-target="#profileModal">D</div>
    </div>
</nav>

<content class="d-block mt-4">
@if(\Session::has('alert-success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{Session::get('alert-success')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
        @endif
        <div aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../dashboard">Home</a></li>
                @foreach($kategori as $k)
                <li class="breadcrumb-item active" aria-current="page">{{$k->nama_kategori}}</li>
                @endforeach
            </ol>
        </div>

        <label for="">SubKategori Data</label>
        <div class="folder">
        @foreach($subkategori as $s)
        @if($subkategori != null)
            <div class="category-folder">
                <a href="../subcategory/{{$s->id}}" style="padding-top: .25rem; display: -webkit-inline-box;"><i class="fa fa-folder"></i> {{$s->nama_subkategori}}
                </a>
                <a href="../subcategory/delete/{{$s->id}}" class="add-data float-right ml-1"><i class="fa fa-trash"></i></a>
            </div>
            @endif
        @endforeach
            <div class="category-folder text-center">
                <a href="../addfile/{{$k->id}}" class="add-data" style="vertical-align: sub" data-toggle="modal" data-target="#addSubCategory"><i class="fa fa-plus"></i></a>
            </div>
            <div class="modal fade" id="addSubCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <form action="{{route('subcategoryStore',$kategori_id)}}" method="POST">
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

</body>
<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body p-4">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="profile-detail">
                    <div class="profile-avatar text-center pt-2"
                         style="width: 75px; height: 75px; font-size: 35px; padding-top: 11px !important; cursor: default">D</div>
                    <div style="font-size: 0.9rem">
                        <b>{{Auth::user()->name}}</b><br>
                        {{Auth::user()->username}}<br>
                        <a href="" class="btn btn-logout mt-2">Ubah Kata Sandi</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">

                <a class="btn btn-secondary" href="{{route('logout')}}">Logout</a>
            </div>
        </div>
    </div>
</div>

</html>