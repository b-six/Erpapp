<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer_model extends CI_Model
{

  // ------------------------------------------------------------------------
  function countCustomer($jenis_customer){
    $this->db->where('tipe_customer', $jenis_customer);
    return $this->db->count_all_results('customer');
  }

  function get_customer()
  {
    $result = $this->db->get('customer');
    return $result;
  }

  function save_customer($id_pelanggan, $nama_pelanggan, $tipe_customer, $wilayah, $email, $password)
  {
    $date = date('Y-m-d');
    $data = array(
      'id_pelanggan' => $id_pelanggan,
      'nama_pelanggan' => $nama_pelanggan,
      'tipe_customer' => $tipe_customer,
      'wilayah' => $wilayah,
      'sejak' => $date,
      'email' => $email,
      'password' => $password
    );
    $this->db->insert('customer', $data);
  }

  function update_customer($id_pelanggan, $nama_pelanggan, $tipe_customer, $wilayah, $email, $password)
  {
    $data = array(
      'nama_pelanggan' => $nama_pelanggan,
      'tipe_customer' => $tipe_customer,
      'wilayah' => $wilayah,
      'email' => $email,
      'password' => $password
    );
    $this->db->where('id_pelanggan', $id_pelanggan);
    $this->db->update('customer', $data);
  }

  function delete_customer($id_pelanggan)
  {
    $this->db->where('id_pelanggan', $id_pelanggan);
    $this->db->delete('customer');
  }

  // ------------------------------------------------------------------------

}

/* End of file Customer_model.php */
/* Location: ./application/models/Customer_model.php */
