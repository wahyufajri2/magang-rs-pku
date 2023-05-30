<div class="card">
  <div class="card-header">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#exampleModalLong">
      <i class="bi bi-person-add"></i>


      Pendaftaran
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Pendaftaran</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?= base_url('index.php/pendaftaran') ?>" method="POST">
              <div class="form-group">
                <label for="no_rm">No RM </label>
                <input type="text" name="no_rm" class="form-control">
                <?= form_error('no_rm', '<div class="text-small text-danger">', '</div>'); ?>
              </div>
              <div class="form-group">
                <label for="no_rg">No Registrasi</label>
                <input type="text" name="no_rg" class="form-control">
                <?= form_error('no_rg', '<div class="text-small text-danger">', '</div>'); ?>
              </div>

              <div class="form-group">
                <label for="Nama Pasien">Nama Pasien</label>
                <input type="text" name="nama_pasien" class="form-control ">
                <?= form_error('nama_pasien', '<div class="text-small text-danger">', '</div>'); ?>
              </div>

              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control ">
                <?= form_error('alamat', '<div class="text-small text-danger">', '</div>'); ?>
              </div>
              <div class="form-group">
                <label for="dokter_id">Dokter Id</label>
                <input type="text" name="dokter_id" class="form-control ">
                <?= form_error('dokter_id', '<div class="text-small text-danger">', '</div>'); ?>
              </div>
              <div class="form-group">
                <label for="periksa_tgl">Tanggal Periksa</label>
                <input type="date" name="periksa_tgl" class="form-control ">
                <?= form_error('periksa_tgl', '<div class="text-small text-danger">', '</div>'); ?>
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
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr class="text-center">
          <th>No RM</th>
            <th>No Registrasi</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Id Dokter</th>
            <th>Tanggal</th>
            <th>Action</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($pendaftaran as $pdf) { ?>

          <tbody>
            <tr class="text-center">
              <!-- n
              -->
              <td><?php echo $pdf['no_rm']; ?> </td>
              <td><?php echo $pdf['no_rg']; ?> </td>
              <td><?php echo $pdf['nama_pasien']; ?> </td>
              <td><?php echo $pdf['alamat']; ?> </td>
              <td><?php echo $pdf['dokter_id']; ?> </td>
              <td><?php echo $pdf['periksa_tgl']; ?> </td>
              <td>
                <a href="" class="btn btn-success btn-sm"><i class="fa fa-heartbeat" aria-hidden="true"></i></a>             
                <button data-toggle="modal" data-target="#edit<?= $pdf['no_rg'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                <!-- <a href="<?= base_url('pendaftaran/delete/' . $pdf['no_rg']) ?>" class="btn btn-danger btn-sm" onclick="return
                confirm('Apakah anda yakin untuk menghapus Data ini?')"><i class="fas fa-trash"></i></a> -->
                <a href="<?= base_url('index.php/pendaftaran/delete/' . $pdf['no_rg']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin untuk menghapus Data ini?')"><i class="fas fa-trash"></i></a>

                <!-- <button data-toggle="modal" data-target="#exampleModal" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button> -->
              </td>

            </tr>
            <tr>
              </body>
            <?php } ?>
      </table>
    </div>

    <!-- Modal Edit-->
    <?php foreach ($pendaftaran as $pdf) { ?>
      <div class="modal fade" id="edit<?= $pdf['no_rg'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Pendaftaran</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?= base_url('index.php/pendaftaran/edit/' . $pdf['no_rg']) ?>" method="POST">
                <!-- <div class="form-group">
                  <label for="Id Pasien">Id Pasien</label>
                  <input type="text" name="id_pasien" class="form-control"value="<?= $psn['id_pasien'] ?>">
                  <?= form_error('id_pasien', '<div class="text-small text-danger">', '</div>'); ?>
                </div>
                <div class="form-group">
                  <label for="No. rm">No.Rekam Medis</label>
                  <input type="text" name="no_rm" class="form-control" value="<?= $psn['no_rm'] ?>">
                  <?= form_error('no_rm', '<div class="text-small text-danger">', '</div>'); ?>
                </div>

                <div class="form-group">
                  <label for="Nama Pasien">Nama Pasien</label>
                  <input type="text" name="nama_pasien" class="form-control" value="<?= $psn['nama_pasien'] ?>">
                  <?= form_error('nama_pasien', '<div class="text-small text-danger">', '</div>'); ?>
                </div>

                <div class="form-group">
                  <label for="Tgl_lahir">Tanggal Lahir</label>
                  <input type="date" class="form-control" value="<?= $psn['tgl_lahir'] ?>" id="tanggal" name="tgl_lahir">
                  <?= form_error('tgl_lahir', '<div class="text-smendall text-danger">', '</div>'); ?>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-close"></i>Simpan</button>
              
            </div> -->
          </div>
        </div>
      </div>
  </div>
<?php } ?>