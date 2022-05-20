<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university" >TABEL MAHASISWA</i>
    </div>

<?php echo $this->session->flashdata('pesan');?> 
<button type="button" class="btn btn-primary btn-sm mb-3" data-toggle="modal" data-target="#exampleModal">
<i class="fas fa-user-plus" >TAMBAH DATA MAHASISWA</i>
</button>

  <table class="table table-striped table-bordered table-hover">
    <tr>
      <td>No</td>
      <td>NAMA</td>
      <td>TGL LAHIR</td>
      <td>ALAMAT</td>
      <td>AGAMA</td>
      <td>TELEPON</td>
      <td colspan="2"> AKSI</td>


    </tr>
            <?php $no=1; foreach($mahasiswa as $mhs): ?>
            <tr>
              <td><?php echo $no++?></td>
              <td><?php echo $mhs->Nama?></td>
              <td><?php echo $mhs->TglLahir?></td>
              <td><?php echo $mhs->Alamat?></td>
              <td><?php echo $mhs->Agama?></td>
              <td><?php echo $mhs->Telepon?></td>
              <td width="20px"><?php echo anchor('mahasiswa/edit_data/'.$mhs->Nama,'<div class="btn btn-primary"><i class="fas fa-edit"></div>');?></td>
              <td width="20px"><?php echo anchor('mahasiswa/hapus_data/'.$mhs->Nama,'<div class="btn btn-danger"><i class="fas fa-trash"></div>');?></td>
            </tr>
        <?php endforeach;?>

    </table>
</div>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Masukan Data</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form action="<?php echo site_url('mahasiswa/tambah_data')?>" method="POST">
       <div class="form-group">
        <label>NAMA</label>
        <input type="text" name="Nama" placeholder="Masukan Nama Anda" class="form-control" >
      </div>

      <div class="form-group">
        <label>TGL LAHIR</label>
        <input type="text" name="Tgl Lahir" placeholder="Masukan Tgl Lahir Anda" class="form-control">
      </div>

      <div class="form-group">
        <label>ALAMAT</label>
        <input type="text" name="Alamat" placeholder="Masukan Alamat Anda" class="form-control">
      </div>

      <div class="form-group">
        <label>AGAMA</label>
        <input type="text" name="Agama" placeholder="Masukan Agama Anda" class="form-control">
      </div>

      <div class="form-group">
        <label>TELEPON</label>
        <input type="text" name="Telepon" placeholder="Masukan Telepon Anda" class="form-control">
      </div>

           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="Submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>