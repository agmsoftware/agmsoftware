<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses extends CI_Controller {

	// tampilkan apa yang diinput
	function show()
	{
		// hasil submit dari form
		$data['nama_mhs']	=$_POST['nama_mhs'];
		$data['no_mhs']=$_POST['no_mhs'];
		$data['matkul_mhs']	=$_POST['matkul_mhs'];

		// tampilkan view
		$this->load->view('show', $data);
		
	}


}



//$data_to_be_pass=$_POST['data_to_be_pass'];
 
//$res="Data Passed Successfully: ".$data_to_be_pass;
//echo json_encode($res);
 

//include('db.php');

