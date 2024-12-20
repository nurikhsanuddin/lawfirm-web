<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_client extends CI_Model
{
  public function daftar()
  {
    // MENGGAMBIL SEMUA DATA DARI TABLE TB_CLIENT
    $this->db->select('*');
    $this->db->from('tb_client');
    // MENGGABUNGKAN DATA DARI TABLE TB_KATEGORI_CLIENT & TB_CLIENT
    $this->db->join('tb_kategori_client', 'tb_kategori_client.id_kategori = tb_client.jenis_client', 'left');
    $this->db->order_by('id_client', 'DESC');
    return $this->db->get()->result();
  }

  public function detail($id_client)
  {
    // MENGGAMBIL DATA BERDASARKAN ID_CLIENT
    $this->db->select('*');
    $this->db->from('tb_client');
    // MENGGABUNGKAN DATA DARI TABLE TB_KATEGORI_CLIENT & TB_CLIENT
    $this->db->join('tb_kategori_client', 'tb_kategori_client.id_kategori = tb_client.jenis_client', 'left');
    $this->db->where('id_client', $id_client);
    return $this->db->get()->row();
  }

  // public function tambah()
  // {
  //   // Initialize image variable
  //   $gambarclient = './assets/img/client/default.png';

  //   // Get form data
  //   $nama = $this->input->post('name', true);
  //   $jenis = $this->input->post('jenis');
  //   $website = $this->input->post('website', true);
  //   $email = $this->input->post('email', true);
  //   $no = $this->input->post('no', true);
  //   $status = $this->input->post('status', true);
  //   $alamat = $this->input->post('alamat', true);

  //   // Handle image upload
  //   if (isset($_FILES['image']) && $_FILES['image']['name']) {
  //     $config['allowed_types'] = 'gif|jpg|png';
  //     $config['max_size'] = '5048';
  //     $config['upload_path'] = './assets/img/client/';

  //     $this->upload->initialize($config);

  //     if ($this->upload->do_upload('image')) {
  //       $gambarclient = $this->upload->data('file_name');
  //     } else {
  //       $this->session->set_flashdata('error', $this->upload->display_errors());
  //       redirect('client');
  //       return;
  //     }
  //   }

  //   $data = [
  //     'jenis_client' => $jenis,
  //     'nama_client' => htmlspecialchars($nama),
  //     'email_client' => htmlspecialchars($email),
  //     'website' => $website,
  //     'alamat' => $alamat,
  //     'no_telepon' => $no,
  //     'gambar_client' => $gambarclient,
  //     'publish' => $status,
  //     'last_modified' => date('Y-m-d')
  //   ];

  //   try {
  //     // Check if table exists
  //     if (!$this->db->table_exists('tb_client')) {
  //       throw new Exception('Table tb_client does not exist');
  //     }

  //     // Insert data
  //     $insert = $this->db->insert('tb_client', $data);

  //     if ($insert) {
  //       $this->session->set_flashdata('success', 'Berhasil Menambahkan Data');
  //     } else {
  //       $this->session->set_flashdata('error', 'Gagal menambahkan data');
  //     }

  //   } catch (Exception $e) {
  //     $this->session->set_flashdata('error', $e->getMessage());
  //   }

  //   redirect('client');
  // }

  public function edit($data)
  {
    // QUERY UPDATE
    $this->db->where('id_client', $data['id_client']);
    $this->db->update('tb_client', $data);
  }

  public function hapus($data)
  {
    // QUERY HAPUS
    $this->db->where('id_client', $data['id_client']);
    $this->db->delete('tb_client', $data); // FLASH DATA
    $this->session->set_flashdata('success', 'Berhasil menghapus data');
    redirect('client');
  }
}
