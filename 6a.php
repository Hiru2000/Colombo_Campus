<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Competible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>U 06 A</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #ecadef;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

h1:hover
{
  color: purple;
}

body {
  background-image: url('images/b.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

td i.fas.fa-edit {
    margin-right: 10px; /* Adjust the value as needed for the desired spacing */
}
</style>
</head>
<body>


<!--bootstrap-->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

   <div class="topnav">
  
   <div class="search-container my-1">
      <form method ="post">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
  </div>

<div class="container">
  <?php
  if(isset($_GET['msg'])){
      $msg= $_GET['msg'];
      echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
      '.$msg.'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }
  ?>
  <style>
h1 {text-align: center;
color:#B2BEB5 ;}

</style>
  <h1>U Number Information</h1>
  <a href="index.php" class="btn btn-dark mb-3">Back</a>
  <a href="6anew.php" class="btn btn-dark mb-3">Add New</a>
  <table class="table table-hover text-center">
  <thead class="table-secondary">
    <tr>
      <th scope="col">U Number</th>
      <th scope="col">Patient Name</th>
      <th scope="col">BHD Number</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Specimen Type, Side & Site</th>
      <th scope="col">Received Date & Time</th>
      <th scope="col">Lab Color Processor</th>
      <th scope="col">Report Deliver Date</th>
      <th scope="col">View & Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    // Include database connection file or include database.php if not already included
    include "database.php";
    $search = isset($_POST['search']) ? $_POST['search'] : '';
    $sql="SELECT * FROM crud1";  
    if (!empty($search)) {
      $sql .= " WHERE u_number LIKE '%$search%' OR patient_name LIKE '%$search%'";
  }                              
    $result = mysqli_query($conn, $sql);  
    if ($result && mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>
           <td>' . $row['u_number'] . '</td>
           <td>' . $row['patient_name'] . '</td>
           <td>' . $row['bhd_number'] . '</td>
           <td>' . $row['age'] . '</td>
           <td>' . $row['gender'] . '</td>
           <td>' . $row['specimen_name'] . '</td>
           <td>' . $row['sample_date_time'] . '</td>
           <td>' . $row['labcolor_processor'] . '</td>
           <td>' . $row['report_deliver_date'] . '</td>
            <td>
            <a href="https://drive.google.com/drive/home?"class="link-dark"  target="_blank" rel="noopener noreferrer"><i class="fa fa-eye fs-5 me-3"></i></a>
            <i class = "fa-solid fa-upload"></i>
            <i class = "fas fa-edit me-3"></i>
            <a href="6adelete.php?id=' . $row['u_number'] . '" class="link-dark"><i class="fa-solid fa-trash fs-7"></i></a>
            </a>
           </td>
         </tr>';
        }
      }else {
          echo '<tr><td colspan="9"><h2 class="text-danger">No data found</h2></td></tr>';
      }

      mysqli_close($conn);
      ?>
  </tbody>
</table>
</div>
</body>
</html>



