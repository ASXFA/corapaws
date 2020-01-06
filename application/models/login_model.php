<?php 

class Login_model extends CI_Model
{
    public function check_admin()
    {
        $email = $this->input->post('email');
        $pass = md5($this->input->post('pass'));

        return $this->db->query("SELECT * FROM admin WHERE email='$email' AND pass='$pass' LIMIT 1");
    }
}

?>