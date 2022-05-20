<?php 
  class mahasiswa extends CI_Controller{
  public function index()
  {
    $data['mahasiswa'] = $this->mahasiswa_model->tampil_data('mahasiswa')->result();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('mahasiswa',$data);
    $this->load->view('templates/footer');
  }
  public function tambah_data()
  {
   $Nama = $this->input->post('Nama');
   $TglLahir = $this->input->post('Tgl Lahir');
   $Alamat = $this->input->post('Alamat');
   $Agama = $this->input->post('Agama');
   $Telepon = $this->input->post('Telpon');

   $data = array(
     'Nama'      =>$Nama,
     'Tgl Lahir' =>$TglLahir,
     'Alamat'    =>$Alamat,
     'Agama'     =>$Agama, 
     'Telpon'    =>$Telepon,
   );
   $this->mahasiswa_model->tambah_data($data,'mahasiswa');
   $this->session->set_flashdata('pesan','<div><div class="alert alert-warning alert-dismissible fade show" role="alert">
   <strong>Holy guacamole!</strong> You should check in on some of those fields below.
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div></div>');
   redirect('mahasiswa');

  }
  public function edit_data($Nama)
  {
    $where = array('Nama'=> $Nama);
    $data ['ambil_data'] = $this->mahasiswa_model->edit_data($Nama,'mahasiswa') ->result();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('mahasiswa_edit',$data);
    $this->load->view('templates/footer');

  }
  public function edit_aksi($Nama)
  {
   $Nama       = $this->post->input('Nama');
   $TglLahir   = $this->post->input('Tgl Lahir');
   $Alamat     = $this->post->input('Alamat');
   $Agama      = $this->post->input('Agama');
   $Telepon     = $this->post->input('Telepon');
   $where = array ('Nama' => $Nama);
   $data = array (

    'Nama'      => $Nama,
    'Tgl Lahir' => $TglLahir,
    'Alamat'    => $Alamat,
    'Agama'     => $Agama,
    'Telepon'   => $Telepon,
   );
   $this->mahsiswa_model->edit_aksi($where,$data,'mahasiswa');
   $this->session->flash_data('Pesan','Data Berhasil Di Update');
  
   redirect('mahasiswa');

}

}


?>