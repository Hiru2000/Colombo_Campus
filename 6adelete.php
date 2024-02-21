<?php
// Include database connection file or include database.php if not already included
include 'database.php';

// Check if ID parameter is set in the URL
if(isset($_GET['id'])) {
    // Sanitize the ID parameter to prevent SQL injection
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Check if the deletion is confirmed
    if(isset($_GET['confirm']) && $_GET['confirm'] == 'true') {
        // SQL query to delete the record with the specified ID
        $sql = "DELETE FROM crud1 WHERE u_number = '$id'";
        
        // Execute the delete query
        if(mysqli_query($conn, $sql)) {
            // If deletion is successful, redirect back to the page with a success message
            header("Location: 6a.php?msg=Record deleted successfully");
            exit();
        } else {
            // If deletion fails, redirect back to the page with an error message
            header("Location: 6a.php?msg=Error deleting record: " . mysqli_error($conn));
            exit();
        }
    } else {
        // If deletion is not confirmed, display a confirmation dialog to the user
        echo "<script>
                var confirmDelete = confirm('Are you sure you want to delete this record?');
                if(confirmDelete) {
                    window.location.href = '6adelete.php?id=$id&confirm=true';
                } else {
                    window.location.href = '6a.php';
                }
              </script>";
    }
} else {
    // If ID parameter is not set in the URL, redirect back to the page with an error message
    header("Location: 6a.php?msg=Invalid request");
    exit();
}
?>