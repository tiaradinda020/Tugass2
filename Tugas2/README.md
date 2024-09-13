**<h1> TUGAS 2 </h1>**

**Implemented CRUD using PHP OOP**

<h2> Pengertian CRUD </h2>

Crud adalah singkatan Create, Read, Update, Delete, sederhananya dengan crud ini kita akan memanipulasi data dari database, baik menampilkan, menambahkan, mengupdate serta menghapus data di database dengan menggunakan PHP.


<h2>1.  Membuat Database </h2>

Proses untu menyusun struktur penyimpanan data yang terorganisir untuk mendukung penyimpanan, pengelolaan, dan pengambilan informasi secara efisien. 

- LECTURERS
  
![LECTURERS](https://github.com/user-attachments/assets/c9040f50-9a70-4f00-81c8-7ffe75d55f1e)

- COURSE_LECTURERS
  
![course](https://github.com/user-attachments/assets/7c65beb4-da48-4b5f-ae38-444fd7f416ff)


<h2>2. Membuat Koneksi dan Penggunaan _construct</h2>  

 Koneksi ini menggunakan fungsi mysqli_connect yang mengambil parameter nama host, nama pengguna, kata sandi, dan nama database. Bagian tersebut memastikan bahwa kelas yang mewarisinya memiliki koneksi yang dibutuhkan untuk berkomunikasi dengan database.

```
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
```

<h2>3. Metode Encapsulasi</h2>

private $host, private $user, private $pass, private $db adalah contoh dari enkapsulasi dengan akses kontrol private. Dapat diakses di dalam kelas database itu sendiri, tetapi tidak bisa diakses langsung dari luar kelas atau oleh kelas turunannya. Potected $koneksi bisa diakses di dalam kelas database itu sendiri dan juga oleh kelas turunannya tetapi idak bisa diakses langsung dari luar kelas tersebut.

```
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
```

<h2>4. Metode Inheritance</h2>

1. Kelas lecturers Mewarisi dari database:
   

     ```
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
    ```

2. Kelas course_lecturers Mewarisi dari database:

```
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
```

3. Kelas lecturers_address Mewarisi dari lecturers:

```
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
```

4. Kelas course_id Mewarisi dari course_lecturers:

```
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
```

<h2>5. Metode Polymorphism</h2>

Polymorphism (polimorfisme) adalah konsep yang memungkinkan satu metode atau fungsi memiliki bentuk atau implementasi yang berbeda di berbagai kelas. Diterapkan pada metode ( tampil_data()) didefinisikan override dalam beberapa kelas turunan dengan implementasi berbeda.

```
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
```

<h2> Tampilan Data Tabel </h2>

 Implementasi untuk menampilkan data dari tabel diambil contoh tabel leacturers. Pada tabel lainnya sama saja tetapi diganti dibagian mengambil databasenya. Menggunakan konsep OOP (Object-Oriented Programming) di PHP dan memanfaatkan Bootstrap untuk desain tampilan.
 
 1. Mengambil Data dari Database:

    ```
        <?php 	
    include('koneksi.php');
    $db = new lecturers();
    $data = $db->tampil_data();
    ?>
    ```
2. Tabel untuk Menampilkan Data:

   ```
   <table class="table table-striped table-hover">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Number_phone</th>
			<th>Address</th>
			<th>NIDN</th>
			<th>NIP</th>
      <th>User_id</th>
      <th>Deleted_at</th>
      <th>Created_at</th>
      <th>Updated_at</th>
		</tr>
   ```
3. Untuk Menampilkan Data:

   ```
   <?php 
		$no = 1;
		foreach($data as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['number_phone']; ?></td>
				<td><?php echo $row['address']; ?></td>
				<td><?php echo $row['nidn']; ?></td>
        <td><?php echo $row['nip']; ?></td>
        <td><?php echo $row['user_id']; ?></td>
        <td><?php echo $row['deleted_at']; ?></td>
        <td><?php echo $row['created_at']; ?></td>
        <td><?php echo $row['updated_at']; ?></td>
				
			</tr>
			<?php
   ```

4. Bootstrap JavaScript:

   ```
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
```
