<div class="card">
  <div class="card-header">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#exampleModalLong">
      <i class="bi bi-person-add"></i>


      Tambah Pasien
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Tambah Pasien</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?= base_url('index.php/catatanpersalinan/tambah_aksi') ?>" method="POST">
              <div class="form-group">
                <label for="no_rg">No.RG </label>
                <input type="text" name="no_rg" class="form-control">
                <?= form_error('no_rg', '<div class="text-small text-danger">', '</div>'); ?>
              </div>
              <div class="form-group">
                <label for="no_rm">No.Rekam Medis</label>
                <input type="text" name="no_rm" class="form-control">
                <?= form_error('No_RM', '<div class="text-small text-danger">', '</div>'); ?>
              </div>

              <div class="form-group">
                <label for="status">Status</label>
                <input type="text" name="status" class="form-control ">
                <?= form_error('Nama_pasien', '<div class="text-small text-danger">', '</div>'); ?>
              </div>

              <div class="form-group">
                <label for="periksa_tgl">Periksa Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="periksa_tgl">
                <?= form_error('Alamat', '<div class="text-small text-danger">', '</div>'); ?>
              </div>

              <div class="form-group">
                <label for="dokter_id">Dokter Id</label>
                <input type="text" name="dokter_id" class="form-control ">
                <?= form_error('Status', '<div class="text-small text-danger">', '</div>'); ?>
              </div>

              <div class="form-group">
                <label for="data_created">Data Created</label>
                <input type="text" name="data_created" class="form-control ">
                <?= form_error('Aksi', '<div class="text-small text-danger">', '</div>'); ?>
              </div>


              <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-close"></i>Simpan</button>
              <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Reset</button>
              <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>

            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="" class="table table-bordered table-striped">
        <thead>
          <tr class="text-center">
            <th>No RG</th>
            <th>No RM</th>
            <th>Nama Pasien</th>
            <th>Alamat</th>
            <th>Status</th>
            <th>Action</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($catatanpersalinan as $cp) { ?>

          <tbody>
            <tr class="text-center">
              <td><?= $no++ ?></td>
              <!-- <td><?php echo $cp['no_rg']; ?> </td> -->
              <td><?php echo $cp['no_rm']; ?> </td>
              <td><?php echo $cp['nama_pasien']; ?> </td>
              <td><?php echo $cp['alamat']; ?> </td>
              <td><?php echo $cp['status']; ?> </td>
              

              <td>
              <!-- <a href="" class="btn btn-success btn-sm"><i class="fa fa-heartbeat" aria-hidden="true"></i></a>              -->
              <button data-toggle="modal" data-target="#entry<?= $cp['no_rg'] ?>" class="btn btn-success btn-sm"><i class="fas fa-heartbeat"></i></button>                <!-- <a href="<?= base_url('pasien/delete/' . $psn['id_pasien']) ?>" class="btn btn-danger btn-sm" onclick="return
                confirm('Apakah anda yakin untuk menghapus Data ini?')"><i class="fas fa-trash"></i></a> -->
                <a href="<?= base_url('index.php/pasien/delete/' .  $cp['no_rg']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin untuk menghapus Data ini?')"><i class="fas fa-trash"></i></a>

                <button data-toggle="modal" data-target="#exampleModal" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>

             
              </td>
              
            </tr>
              </body>
            <?php } ?>
      </table>
    </div>
    </div>

    <!-- Modal Entry -->
    <?php foreach ($catatanpersalinan as $cp) { ?> 
      <div class="modal fade" id="entry<?= $cp['no_rg'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Catatan Persalinan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="container">
            <div class="row">
            <div class="col-sm-4">
              <form action="<?= base_url('index.php/catatanpersalinan/entry/' . $cp['no_rg']) ?>" method="POST">
                <div class="form-group">
                  <label for="nama_pasien">Nama</label>
                  <input type="text" name="nama_pasien" class="form-control"value="<?= $cp['nama_pasien'] ?>">
                  <?= form_error('nama_pasien', '<div class="text-small text-danger">', '</div>'); ?>
                </div>
                </div>
                <div class="col-sm-4">
                  <label for="no_rm">No.Rekam Medis</label>
                  <input type="text" name="no_rm" class="form-control" value="<?= $cp['no_rm'] ?>">
                  <?= form_error('no_rm', '<div class="text-small text-danger">', '</div>'); ?>
                </div>
                <div class="col-sm-4">
                  <label for="Tgl_lahir">Tanggal Lahir</label>
                  <input type="date" class="form-control" value="<?= $cp['no_rm'] ?>" id="tanggal" name="tgl_lahir">
                  <?= form_error('tgl_lahir', '<div class="text-smendall text-danger">', '</div>'); ?>
                </div>
            </div>
                <div class="form-group">
                  <label for="rujukan">Rujukan Dari</label>
                  <input type="text" name="rujukan" class="form-control" >
                  <?= form_error('rujukan', '<div class="text-small text-danger">', '</div>'); ?>
                </div>
                <div class="form-group">
                  <label for="diagnosa">Diagnosa</label>
                  <input type="text" name="diagnisa" class="form-control" >
                  <?= form_error('diagnosa', '<div class="text-small text-danger">', '</div>'); ?>
                </div>
                <div class="form-group">
                  <label for="riwayat">Riwayat Persalinan:</label>
                </div>
                <div class="row">
                <div class="col-sm-4">
                  <label for="his">His Sejak</label>
                  <input type="text" name="his" class="form-control" >
                  <?= form_error('his', '<div class="text-small text-danger">', '</div>'); ?>
                </div>
                <div class="col-sm-4">
                  <label for="lendir_darah">Keluar Lendir Darah Sejak</label>
                  <input type="text" name="lendir_darah" class="form-control" >
                  <?= form_error('lendir_darah', '<div class="text-small text-danger">', '</div>'); ?>
                </div>
                <div class="col-sm-4">
                  <label for="air">Air Ketuban Sejak</label>
                  <input type="text" name="air" class="form-control" >
                  <?= form_error('air', '<div class="text-small text-danger">', '</div>'); ?>
                </div>
                </div>
                <div class="form-group">
                  <label for="">RIWAYAT KEHAMILAN, PERSALINAN DAN NIFAS</label>
                </div>
                <div class="row">
                <div class="col-sm-3">
                  <label for="persalinan">Persalinan</label>
                  <input type="text" name="persalinan" class="form-control" >
                  <?= form_error('persalinan', '<div class="text-small text-danger">', '</div>'); ?>
                </div>
                <div class="col-sm-2">
                  <label for="">kelamin</label>
                  <br>
                  <label for="l">L</label>
                  <input type="checkbox" name="Kelamin" value="l" checked="checked" />
                  <?= form_error('kelamin', '<div class="text-small text-danger">', '</div>'); ?>
                  <label for="p">P</label>
                  <input type="checkbox" name="Kelamin" value="l" checked="checked" />  
                  <?= form_error('kelamin', '<div class="text-small text-danger">', '</div>'); ?>
                 </div>
                <div class="col-sm-3">
                  <label for="penolong">Penolong</label>
                  <input type="text" name="PENOLONG" class="form-control" >
                  <?= form_error('penolong', '<div class="text-small text-danger">', '</div>'); ?>
                </div>
                <div class="col-sm-3">
                  <label for="tempat">Tempat</label>
                  <input type="text" name="tempat" class="form-control" >
                  <?= form_error('tempat', '<div class="text-small text-danger">', '</div>'); ?>
                </div>
                <div class="col-sm-1">
                  <label for="h/m">H</label>
                  <input type="checkbox" name="h/m" value="h" />  
                  <?= form_error('h/m', '<div class="text-small text-danger">', '</div>'); ?>
                  <label for="h/m">M</label>
                  <input type="checkbox" name="h/m" value="m" />  
                  <?= form_error('h/m', '<div class="text-small text-danger">', '</div>'); ?>
                </div>
                <div class="col-sm-3">
                  <label for="komplikasi">Komplikasi</label>
                  <input type="text" name="komplikasi" class="form-control" >
                  <?= form_error('komplikasi', '<div class="text-small text-danger">', '</div>'); ?>
                </div>
                <div class="col-sm-3">
                  <label for="keterangan">Keterangan</label>
                  <input type="text" name="keterangan" class="form-control" >
                  <?= form_error('keterangan', '<div class="text-small text-danger">', '</div>'); ?>
                </div>
                </div>
                <div class="form-group">
                  <label for="">RIWAYAT KB DAN MENSTRUASI:</label>
                </div>
                <div class="row">
                <div class="col-sm-2">
                  <label for="">Riwayat KB</label>
                  <input type="checkbox" name="riwayat" value="suntik" checked="checked" />
                  <?= form_error('riwayat', '<div class="text-small text-danger">', '</div>'); ?>
                  <br>
                  <label for="riwayat">suntik</label>
                  <input type="checkbox" name="riwayat" value="suntik" checked="checked" />
                  <?= form_error('riwayat', '<div class="text-small text-danger">', '</div>'); ?>
                  <br>
                  <label for="riwayat">IUD</label>
                  <input type="checkbox" name="riwayat" value="iud" checked="checked" />
                  <?= form_error('riwayat', '<div class="text-small text-danger">', '</div>'); ?>
                  <br>
                  <label for="riwayat">pil</label>
                  <input type="checkbox" name="riwayat" value="pil" checked="checked" />
                  <?= form_error('riwayat', '<div class="text-small text-danger">', '</div>'); ?>
                  <br>
                  <label for="riwayat">kondom</label>
                  <input type="checkbox" name="riwayat" value="kondom" checked="checked" />
                  <?= form_error('riwayat', '<div class="text-small text-danger">', '</div>'); ?>
                  <br>
                  <label for="riwayat">kalender</label>
                  <input type="checkbox" name="riwayat" value="kalender" checked="checked" />
                  <?= form_error('riwayat', '<div class="text-small text-danger">', '</div>'); ?>
                  <br>
                  <label for="riwayat">MOW</label>
                  <input type="checkbox" name="riwayat" value="mow" checked="checked" />
                  <?= form_error('riwayat', '<div class="text-small text-danger">', '</div>'); ?>
                  <br>
                  <label for="riwayat">MOP</label>
                  <input type="checkbox" name="riwayat" value="mop" checked="checked" />
                  <?= form_error('riwayat', '<div class="text-small text-danger">', '</div>'); ?>
                  <br>
                  <label for="riwayat">Implan</label>
                  <input type="checkbox" name="riwayat" value="implan" checked="checked" />
                  <?= form_error('riwayat', '<div class="text-small text-danger">', '</div>'); ?>
                 </div>
                 <div class="form-group">
                  <label for="keluhan">Keluhan</label>
                  <input type="text" name="keluhan" class="form-control" >
                  <?= form_error('keluhan', '<div class="text-small text-danger">', '</div>'); ?>
                </div>
                </div>
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-close"></i>Simpan</button>

            </div>
          </div>
        </div>
      </div>
  </div>
<?php  }?>