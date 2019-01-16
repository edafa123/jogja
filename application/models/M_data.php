<?php 
 
class M_data extends CI_Model{
	//function tampil_data(){
	//	return $this->db->get('user');
	//}

    function tampil_data($params=array()){
        $this->db->select('*');
        $this->db->from('user');

        if(!empty($params['id'])){
            $this->db->where('id', $params['id']);
            $query=$this->db->get()->row();
        }else{
            $query=$this->db->get()->result();
        }

            return $query;
    }
    
    function tambah($params=array(), $id=null){
        if ($id != null){
            $this->db->where('id', $id);
            $query=$this->db->update('user', $params);
        }else{
            $query=$this->db->insert('user', $params);
        }
        return $query;
    }
    function hapus($id){
        $this->db->where('id', $id);
        $query=$this->db->delete('user');
    }	
    function cari($key){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->like('nama',$key);
        $this->db->or_like('alamat',$key);
        $this->db->or_like('pekerjaan',$key);
        return $this->db->get()->result();
    }
}