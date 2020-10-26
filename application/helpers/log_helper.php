<?php
function helper_log($tipe = "", $str = ""){
    $CI =& get_instance();
 
    if (strtolower($tipe) == "login"){
        $log_tipe   = "login";
    }
    elseif(strtolower($tipe) == "logout")
    {
        $log_tipe   = "logout";
    }
    elseif(strtolower($tipe) == "add"){
        $log_tipe   = "add";
    }
    elseif(strtolower($tipe) == "edit"){
        $log_tipe  = "edit";
    }
    elseif(strtolower($tipe) == "delete"){
        $log_tipe  = "delete";
	}
 
	// paramter
    $param['log_user']      = $CI->session->userdata('user_logged')->username;
    $param['log_tipe']      = $log_tipe;
    $param['log_desc']      = $str;
 
    //load model log
    $CI->load->model('m_log');
 
    //save to database 
    $CI->m_log->save_log($param);
}
