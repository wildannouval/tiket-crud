<?php
class Tiket_model extends CI_Model{
    function get_tiket(){
        $result = $this->db->get('tiket');
        return $result;
    }

    function save($nama_penumpang,$alamat_penumpang,$tujuan,$tanggal_keberangkatan,$harga_tiket){
        $data = array(
            'nama_penumpang' => $nama_penumpang,
            'alamat_penumpang' => $alamat_penumpang,
            'tujuan' => $tujuan,
            'tanggal_keberangkatan' => $tanggal_keberangkatan,
            'harga_tiket' => $harga_tiket,
        );
        $this->db->insert('tiket',$data);
    }

    function delete($tiket_id){
        $this->db->where('tiket_id',$tiket_id);
        $this->db->delete('tiket');
    }

    function get_tiket_id($tiket_id){
        $query = $this->db->get_where('tiket', array('tiket_id'=> $tiket_id));
        return $query;
    }

    function update($tiket_id,$nama_penumpang,$alamat_penumpang,$tujuan,$tanggal_keberangkatan,$harga_tiket){
        $data = array(
            'nama_penumpang' => $nama_penumpang,
            'alamat_penumpang' => $alamat_penumpang,
            'tujuan' => $tujuan,
            'tanggal_keberangkatan' => $tanggal_keberangkatan,
            'harga_tiket' => $harga_tiket,
        );

        $this->db->where('tiket_id',$tiket_id);
        $this->db->update('tiket',$data);
    }
}
?>