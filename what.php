<?php 

class orang {
	public $nama;
	public $lahir;
	public $kelas;
	public $status;
	public $istri;
	public $pekerjaan;

	public function __construct($nama, $lahir, $kelas, $status, $istri, $pekerjaan){
		$this->nama = $nama;
		$this->lahir = $lahir;
		$this->kelas = $kelas;
		$this->status = $status;
		$this->istri = $istri;
		$this->pekerjaan = $pekerjaan;
	}
		
		public function get_nama(){
			return $this->nama;
		}
	
		public function get_lahir(){
			return $this->lahir;
		}
		
		public function get_kelas(){
			return $this->kelas;
		}
		
		public function get_status(){
			return $this->status;
		}

		public function get_istri(){
			return $this->istri;
		}
		public function get_pekerjaan(){
			return $this->pekerjaan;
		}
}


?>