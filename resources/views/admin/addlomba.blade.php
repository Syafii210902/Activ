@extends('admin.layout.app')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add</li>
        </ol>
        <div class="box_general padding_bottom">
            <div class="header_box version_2">
                <h2><i class="fa fa-file"></i>Add Lomba</h2>
            </div>
            <form action="/admin/addlomba" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="namalomba">Nama Lomba</label>
                            <input type="text" class="form-control" placeholder="Nama" name="namalomba" id="namalomba" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tingkat">Tingkat</label>
                            <input type="text" class="form-control" placeholder="Tingkat" name="tingkat" id="tingkat" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="text" class="form-control" name="tahun" id="tahun" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="deadline">Deadline</label>
                            <input type="date" class="form-control" name="deadline" id="deadline" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="info">Info</label>
                            <input type="text" class="form-control" placeholder="Info Selengkapnya" name="info" id="info">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="deskripsi">Description</label>
                            <textarea type="text" class="form-control" placeholder="Description" style="height: 150px" name="deskripsi" id="deskripsi" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="poster">Poster</label>
                            <input type="file" class="form-control" name="poster" id="poster" required>
                        </div>
                    </div>
                    <p><input type="submit" class="btn_1 medium"></p>
            </div>
        </form>
        </div>
        </div>
        <!-- /.container-fluid-->
</div>
<!-- /.container-wrapper-->
@endsection