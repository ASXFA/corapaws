<?php 

class Clothing_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('product')->result();
    }

    public function getById($id)
    {
        $where = array('product_id' => $id);
        return $this->db->get_where('product',$where)->result();
    }

    public function buat_kode(){
        $this->db->select('RIGHT(product.product_id,4) as kode', FALSE);
        $this->db->order_by('product_id','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('product');      //cek dulu apakah ada sudah ada kode di tabel.    
        if($query->num_rows() <> 0){      
         //jika kode ternyata sudah ada.      
         $data = $query->row();      
         $kode = intval($data->kode) + 1;    
        }
        else {      
         //jika kode belum ada      
         $kode = 1;    
        }
        $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        $kodejadi = "CLT".$kodemax;    // hasilnya ODJ-9921-0001 dst.
        return $kodejadi;  
    }

    public function addNewProduct($sizes,$colors,$img)
    {
        $data = array(
            'product_id' => $this->input->post('product_id') , 
            'product_name' => $this->input->post('product_name'),
            'product_desc' => $this->input->post('product_desc'),
            'product_size' => $sizes,
            'product_color' => $colors,
            'product_price' => $this->input->post('price'),
            'product_image' => $img
        );
        $this->db->insert('product',$data);
    }
    
    public function delete_product($where)
    {
        $this->db->where($where);
        $this->db->delete('product');
    }
    // another tables function

    public function imageById($id)
    {
        $where = array('product_image_id_product' => $id);
        return $this->db->get_where('product_image',$where)->result();
    }

    public function size()
    {
        return $this->db->get('size')->result();
    }

    public function color()
    {
        return $this->db->get('color')->result();
    }
}

?>