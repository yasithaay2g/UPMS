<?php 
require_once('inc/connection1.php');


// Downloads files
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // fetch file to download from database
    $sql = "SELECT * FROM uploadf WHERE file_id=$id";
    $result = mysqli_query($db, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'upload/' . $file['file_name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('upload/' . $file['file_name']));
        readfile('upload/' . $file['file_name']);

        // Now update downloads count
       // $newCount = $file['downloads'] + 1;
        //$updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
       // mysqli_query($conn, $updateQuery);
        exit;
    }

}


?>