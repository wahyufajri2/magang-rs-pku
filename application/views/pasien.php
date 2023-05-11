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
            <form action="<?= base_url('index.php/pasien/tambah_aksi') ?>" method="POST">
              <div class="form-group">
                <label for="Id Pasien">Id Pasien </label>
                <input type="text" name="id_pasien" class="form-control">
                <?= form_error('id_pasien', '<div class="text-small text-danger">', '</div>'); ?>
              </div>
              <div class="form-group">
                <label for="No. MR">No.Rekam Medis</label>
                <input type="text" name="no_mr" class="form-control">
                <?= form_error('no_mr', '<div class="text-small text-danger">', '</div>'); ?>
              </div>

              <div class="form-group">
                <label for="Nama Pasien">Nama Pasien</label>
                <input type="text" name="nama_pasien" class="form-control ">
                <?= form_error('nama_pasien', '<div class="text-small text-danger">', '</div>'); ?>
              </div>

              <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal" name="tgl_lahir">
                <?= form_error('tgl_lahir', '<div class="text-small text-danger">', '</div>'); ?>
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
            <th>Id Pasien</th>
            <th>No Rm</th>
            <th>Nama Pasien</th>
            <th>Tanggal Lahir</th>
            <th>Action</th>
          </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($pasien as $psn) { ?>

          <tbody>
            <tr class="text-center">
              <td><?= $no++ ?></td>
              <td><?php echo $psn['no_rm']; ?> </td>
              <td><?php echo $psn['nama_pasien']; ?> </td>
              <td><?php echo $psn['tgl_lahir']; ?> </td>

              <td>
                <a href="" class="btn btn-success btn-sm"><i class="fa fa-heartbeat" aria-hidden="true"></i></a>
                <button data-toggle="modal" data-target="#edit<?= $psn['id_pasien'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                <!-- <a href="<?= base_url('pasien/delete/' . $psn['id_pasien']) ?>" class="btn btn-danger btn-sm" onclick="return
                confirm('Apakah anda yakin untuk menghapus Data ini?')"><i class="fas fa-trash"></i></a> -->
                <a href="<?= base_url('index.php/pasien/delete/' . $psn['id_pasien']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin untuk menghapus Data ini?')"><i class="fas fa-trash"></i></a>

                <!-- <button data-toggle="modal" data-target="#exampleModal" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button> -->
              </td>

            </tr>
            <tr>
              </body>
            <?php } ?>
      </table>
    </div>

    <!-- Modal Edit-->
    <?php foreach ($pasien as $psn) { ?>
      <div class="modal fade" id="edit<?= $psn['id_pasien'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Pasien</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?= base_url('index.php/pasien/edit/' . $psn['id_pasien']) ?>" method="POST">
                <div class="form-group">
                  <label for="Id Pasien">Id Pasien</label>
                  <input type="text" name="id_pasien" class="form-control" value="<?= $psn['id_pasien'] ?>">
                  <?= form_error('id_pasien', '<div class="text-small text-danger">', '</div>'); ?>
                </div>
                <div class="form-group">
                  <label for="No. MR">No.Rekam Medis</label>
                  <input type="text" name="no_mr" class="form-control" value="<?= $psn['no_mr'] ?>">
                  <?= form_error('no_mr', '<div class="text-small text-danger">', '</div>'); ?>
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

            </div>
          </div>
        </div>
      </div>
  </div>
<?php } ?>