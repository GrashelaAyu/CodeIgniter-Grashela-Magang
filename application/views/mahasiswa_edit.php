<div class="container-fluid">
   <?php foreach($ambil_data as $edit):?>
   <form method="POST" action="<?php echo site_url('mahasiswa/edit_aksi/').$edit->Nama?>">
<div class="form-group">
    <label>NAMA</label>
    <input type="text" name="Nama" value="<?php echo $edit->Nama?>"class="form-control">
<div class="form-group">
    <label>TGL LAHIR</label>
    <input type="text" name="TglLahir" value="<?php echo $edit->TglLahir?>" class="form-control">
<div class="form-control">
    <label>ALAMAT</label>
    <input type="text" name="Alamat" value="<?php echo $edit->Alamat?>" class="form-control">
<button type="submit" class="btn btn-sm btn-primary">Simpan</button>
<?php echo anchor('mahasiswa','<button type="button" class="btn btn-sm btn-danger">Batal</button>')?>
</form>
   <?php endforeach;?> 
</div>