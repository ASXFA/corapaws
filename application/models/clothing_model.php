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
        return $this->db->get('product',$where)->result();
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