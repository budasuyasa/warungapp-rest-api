<?php

class ModMain extends CI_Model
{
    function _isValidAccessToken($accessToken)
    {
        $cekToken = $this->db->where('userAccessToken', $accessToken)
                             ->get('tb_user');
        if($cekToken->num_rows() > 0){
            return true;
        }
        
        return false;
    }
}
