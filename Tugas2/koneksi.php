<?php 
class database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "jkb_lecture";
    protected $koneksi = "";

    function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->user, $this->pass,$this->db);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error(); 
		}
	}

}

class lecturers extends database {
    function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from lecturers");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
    }
}

class course_lecturers extends database {
    function tampil_data()
    {
        $data = mysqli_query($this->koneksi,"select * from course_lecturers");
        while($row = mysqli_fetch_array($data)){
            $record[] = $row;
        }
        return $record;
    }
}

class lecturers_address extends lecturers {
    function tampil_data()
    {
        $data = mysqli_query($this->koneksi,"SELECT * FROM lecturers WHERE address = 'JL.Mawar'");
        while($row = mysqli_fetch_array($data)){
            $record[] = $row;
        }
        return $record;
    } 
}

class course_id extends course_lecturers {
    function tampil_data()
    {
        $data = mysqli_query($this->koneksi,"SELECT * FROM course_lecturers WHERE course_id = 220");
        while($row = mysqli_fetch_array($data)){
            $record[] = $row;
        }
        return $record;
    } 
}
?>