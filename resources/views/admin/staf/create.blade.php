@extends('admin.template.base')
@section('content')
<<<<<<< HEAD
<section class="content mt-4">
<div class="col-md-12 offset-md-0.1">
  <div class="card">
      <div class="card-header">Form Staff</div>
      <div class="card-body card-block">
          <form action="/staf/create" method="post" class="">
          @csrf
              <div class="form-group">
                  <div class="input-group">
                    <label for="inputNIP" class="col-sm-3">NIP</label>
                    <input name="nip_staf" type="text" class="form-control" id="inputNIP" required>
                      <div class="input-group-addon">
                          <i class="fa fa-archive"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputNama" class="col-sm-3">Nama</label>
                      <input name="nama_staf" type="text" class="form-control" id="inputNama" required>
                      <div class="input-group-addon">
                          <i class="fa fa-user"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="image" class="col-sm-3">Foto</label>
                      <input name="image" type="file" id="image">
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputEmail3" class="col-sm-3">Email</label>
                      <input name="email_staf" type="email" class="form-control" id="inputEmail3" required>
                      <div class="input-group-addon">
                          <i class="fa fa-envelope"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputAlamat" class="col-sm-3">Alamat</label>
                      <textarea name="alamat_staf" class="form-control" id="inputAlamat" cols="30" rows="4" required></textarea>
                      <div class="input-group-addon">
                          <i class="fa fa-home"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputTempatLahir" class="col-sm-3">Tempat Lahir</label>
                      <input name="tempat_lahir_staf" type="text" class="form-control" id="inputTempatLahir" required>
                      <div class="input-group-addon">
                          <i class="fa fa-home"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputTanggalLahir" class="col-sm-3">Tanggal Lahir</label>
                      <input name="tgl_lahir_staf" type="date" class="form-control" id="inputTanggalLahir" required>
                      <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputTlp" class="col-sm-3">No Tlp</label>
                      <input name="no_telp_staf" type="text" class="form-control" id="inputTlp" required>
                      <div class="input-group-addon">
                          <i class="fa fa-phone"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputTanggalMasuk" class="col-sm-3">Tanggal Masuk</label>
                      <input name="tgl_masuk_staf" type="date" class="form-control" id="inputTanggalMasuk" required>
                      <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputPend" class="col-sm-3">Pendidikan Terakhir</label>
                      <input name="pend_terakhir_staf" type="text" class="form-control" id="inputPend" required>
                      <div class="input-group-addon">
                          <i class="fa fa-book"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputJabatan" class="col-sm-3">Jabatan</label>
                      <input name="jabatan_staf" type="text" class="form-control" id="inputJabatan" required>
                      <div class="input-group-addon">
                          <i class="fa fa-star"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputBoarding" class="col-sm-3">Boarding/PP</label>
                      <input name="boarding_staf" type="text" class="form-control" id="inputBoarding" required>
                      <div class="input-group-addon">
                          <i class="fa fa-user"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputNikah" class="col-sm-3">Status Pernikahan</label>
                      <div class="radio">
                      <input name="status_nikah_staf" type="radio" id="inputNikah" value="Sudah Menikah">Sudah Menikah
                      </div>
                      <div class="radio col-sm-5">
                      <input name="status_nikah_staf" type="radio" id="inputNikah" value="Belum Menikah">Belum Menikah
                      </div>
                  </div>
              </div>

              <div class="form-group">
                  <div class="input-group">
                      <label for="inputKel" class="col-sm-3">Jumlah Keluarga</label>
                      <input name="jumlah_kel_staf" type="text" class="form-control" id="inputKel">
                      <div class="input-group-addon">
                          <i class="fa fa-users"></i>
                      </div>
                  </div>
              </div>
              <div class="form-actions form-group">
                  <button type="button" onclick="history.back();" class="btn btn-danger">Back</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
          </form>
      </div>
  </div>
=======
<section class="content-header">
      <h1>
        Tambah
        <small>data Staff</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Staff</li>
        <li class="active">Create</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
     <!-- Horizontal Form -->
     <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Staff</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="/staf/create" enctype="multipart/form-data">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputNIP" class="col-sm-2">NIP</label>

                  <div class="col-sm-10">
                    <input name="nip_staf" type="text" class="form-control" id="inputNIP" placeholder="No Induk Pegawai" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-2">Nama</label>

                  <div class="col-sm-10">
                    <input name="nama_staf" type="text" class="form-control" id="inputNama" placeholder="Nama" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="image" class="col-sm-2">Foto</label>

                  <div class="col-sm-10">
                    <input name="image" type="file" id="image">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2">Email</label>

                  <div class="col-sm-10">
                    <input name="email_staf" type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAlamat" class="col-sm-2">Alamat</label>

                  <div class="col-sm-10">
                    <textarea name="alamat_staf" class="form-control" id="inputAlamat" cols="30" rows="4" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputTempatLahir" class="col-sm-2">Tempat Lahir</label>

                  <div class="col-sm-10">
                    <input name="tempat_lahir_staf" type="text" class="form-control" id="inputTempatLahir" placeholder="Tempat Lahir" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputTanggalLahir" class="col-sm-2">Tanggal Lahir</label>

                  <div class="col-sm-10">
                    <input name="tgl_lahir_staf" type="date" class="form-control" id="inputTanggalLahir" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputTlp" class="col-sm-2">No Tlp</label>

                  <div class="col-sm-10">
                    <input name="no_telp_staf" type="text" class="form-control" id="inputTlp" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputTanggalMasuk" class="col-sm-2">Tanggal Masuk</label>

                  <div class="col-sm-10">
                    <input name="tgl_masuk_staf" type="date" class="form-control" id="inputTanggalMasuk" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPend" class="col-sm-2">Pendidikan Terakhir</label>

                  <div class="col-sm-10">
                    <input name="pend_terakhir_staf" type="text" class="form-control" id="inputPend" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputJabatan" class="col-sm-2">Jabatan</label>

                  <div class="col-sm-10">
                    <input name="jabatan_staf" type="text" class="form-control" id="inputJabatan" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputBoarding" class="col-sm-2">Boarding/PP</label>

                  <div class="col-sm-10">
                    <input name="boarding_staf" type="text" class="form-control" id="inputBoarding" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNikah" class="col-sm-2">Status Pernikahan</label>

                  <div class="col-sm-10">
                    <input name="status_nikah_staf" type="radio" id="inputNikah" value="Sudah Menikah">Sudah Menikah
                    <input name="status_nikah_staf" type="radio" id="inputNikah" value="Belum Menikah">Belum Menikah
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputKel" class="col-sm-2">Jumlah Keluarga</label>

                  <div class="col-sm-10">
                    <input name="jumlah_kel_staf" type="text" class="form-control" id="inputKel">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" onclick="history.back();" class="btn btn-danger">Back</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->

>>>>>>> 7ec241c3f60e0fcd5ed3ef82008c3f0c5ea0e60f
</div>
</section>
@endsection