<?php
include 'database.php';

if(isset($_POST['submit'])){
  $id = $_POST['id'];
  $cedarc_number = $_POST['cedarc_number'];
  $patient_name = $_POST['patient_name'];
  $bhd_number = $_POST['bhd_number'];	
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $specimen_name = $_POST['specimen_name'];
  $sample_date_time	= $_POST['sample_date_time'];
  $slideissue_date = $_POST['slideissue_date'];
  $report_deliver_date = $_POST['report_deliver_date'];

  $sql = "INSERT INTO `cedarc_internal`(`id`, `cedarc_number`, `patient_name`, `bhd_number`,`age`, `gender`, `specimen_name`, `sample_date_time`, `slideissue_date`, `report_deliver_date`) 
  VALUES ('$id','$cedarc_number','$patient_name','$bhd_number','$age',' $gender','$specimen_name ',' $sample_date_time',' $slideissue_date',' $report_deliver_date')";
  
  $result = mysqli_query($conn, $sql);

  if($result) {
    header("Location:cedarc_internal.php?msg=New record created successfully;");
  }
  else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>

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
    <title>Cedarc Internal New</title>

<style>
body {
  background-image: url('images/u.png');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>


  <div class="container">
  <div class="text-center mb-4">
    <h3>Add New Cedarc number</h3>
    <p class="text-muted">Complete the form below to add new Cedarc Number</p>
  </div>
  <div class="container d-flex justify-content-center">
    <form action="" method="post" style="width:50vw; min-width:300px;">
      <div class="raw">
        <div class="col">
           <label class="form-label">CeDARC Number</label>
           <input type="text" class="form-control" name="cedarc_number" placeholder="">
        </div>
        <br>
        <div class="col">
           <label class="form-label">Patient Name</label>
           <input type="text" class="form-control" name="patient_name" placeholder="">
        </div>
        <br>
        <div class="col">
           <label class="form-label">BHD Number</label>
           <input type="text" class="form-control" name="bhd_number" placeholder="">
        </div>
        <br>
        <div class="col">
           <label class="form-label">Age</label>
           <input type="text" class="form-control" name="age" placeholder="">
        </div>
        <br>
        <div class="cform-group mb-3">
           <label>Gender :</label> &nbsp;
           <input type="radio" class="form-check-input" name="gender" id="male" value="male">
           <label for="male" class="form-check-label">Male</label>
           &nbsp;
           <input type="radio" class="form-check-input" name="gender" id="female" value="female">
           <label for="female" class="form-check-label">Female</label>
        </div>
        <div class="col">
           <label class="form-label">Specimen Type,Side & Site</label>
           <input type="text" class="form-control" name="specimen_name" placeholder="">
        </div>
        <br>
        <div class="col">
           <label class="form-label">Received Date & Time</label>
           <input type="datetime-local" class="form-control" id="sample_date_time" name="sample_date_time">
        </div>
        <br>
        <div class="col">
           <label class="form-label">Lab Color Processor</label>
           <input type="date" class="form-control" name="slideissue_date" placeholder="slideissue_date">
        </div>
        <br>
        <div class="col">
           <label class="form-label">Report Deliver Date</label>
           <input type="date" class="form-control" name="report_deliver_date" placeholder="report_deliver_date">
        </div>
      </div>
      <br>
      <div>
      <a href="cedarc_internal.php" class="btn btn-dark">Back</a>
      <button type="submit" class="btn btn-success" name="submit">Save</button>
      <a href="cedarc_innew.php" class="btn btn-danger">Cancel</a>
      </div>
    </form>
  </div>
</div>


<div class="container">
  <?php
  if(isset($_GET['msg'])){
      $msg= $_GET['msg'];
      echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
      '.$msg.'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
      </button>
    </div>';
  }
  ?>
</div>
</body>
</html>




