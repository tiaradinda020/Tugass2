<?php 	
include('koneksi.php');
$db = new lecturers_address();
$data = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tampil-lecturers.php">Lecturers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil-course.php">Course</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="address.php">Address</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="course_id.php">Course_id</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
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
		}
		?>
	</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>