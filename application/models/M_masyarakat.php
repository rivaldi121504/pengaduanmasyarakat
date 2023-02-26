<?php
class M_masyarakat extends CI_Model{

    public function tambahMasyarakat($data){
        return $this->db->insert('masyarakat',$data);
    }

    public function login($data){
        $this->db->select('nik,nama');
        $this->db->from('masyarakat');
        $this->db->where($data);
        $query=$this->db->get();
        return $query->result_array();
    }

    public function tambahAduan($data){
        return $this->db->insert('pengaduan',$data);
    }

    public function tampilAduan(){
        $this->db->where('nik',$this->session->nik);

        $query=$this->db->get('pengaduan');
        return $query->result_array();
    }
}
?>