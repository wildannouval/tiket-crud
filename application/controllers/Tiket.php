<?php
class Tiket extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('tiket_model');
    }

    function index(){
        $data['tiket'] = $this->tiket_model->get_tiket();
        $this->load->view('tiket_view',$data);
    }

    function add_new(){
        $this->load->view('add_tiket_view');
    }

    function save(){
        $nama_penumpang = $this->input->post('nama_penumpang');
        $alamat_penumpang = $this->input->post('alamat_penumpang');
        $tujuan = $this->input->post('tujuan');
        $tanggal_keberangkatan = $this->input->post('tanggal_keberangkatan');
        $harga_tiket = $this->input->post('harga_tiket');
        $this->tiket_model->save($nama_penumpang,$alamat_penumpang,$tujuan,$tanggal_keberangkatan,$harga_tiket);
        redirect('tiket');
    }

    function delete(){
        $tiket_id = $this->uri->segment(3);
        $this->tiket_model->delete($tiket_id);
        redirect('tiket');
    }

    function get_edit(){
        $tiket_id = $this->uri->segment(3);
        $result = $this->tiket_model->get_tiket_id($tiket_id);

        if($result->num_rows() > 0){
            $i = $result->row_array();
            $data = array(
                'tiket_id' => $i['tiket_id'],
                'nama_penumpang' => $i['nama_penumpang'],
                'alamat_penumpang' => $i['alamat_penumpang'],
                'tujuan' => $i['tujuan'],
                'tanggal_keberangkatan' => $i['tanggal_keberangkatan'],
                'harga_tiket' => $i['harga_tiket']
            );
            $this->load->view('edit_tiket_view',$data);
        }else{
            echo "Data Was Not Found";
        }
    }

    function update(){
        $tiket_id = $this->input->post('tiket_id');
        $nama_penumpang = $this->input->post('nama_penumpang');
        $alamat_penumpang = $this->input->post('alamat_penumpang');
        $tujuan = $this->input->post('tujuan');
        $tanggal_keberangkatan = $this->input->post('tanggal_keberangkatan');
        $harga_tiket = $this->input->post('harga_tiket');

        $this->tiket_model->update($tiket_id,$nama_penumpang,$alamat_penumpang,$tujuan,$tanggal_keberangkatan,$harga_tiket);

        redirect('tiket');
    }
}
?>