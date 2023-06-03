<!-- References
https://www.techiediaries.com/php-file-upload-tutorial/ -->

<?php 
header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");

include_once 'dbfun.php';
$link=connect();
$response = array();
$upload_dir = 'uploads/';
$server_url = 'http://localhost/lunamar/';

$target_dir = "uploads/";

if($_FILES['myFile'])
{
    $file = $_FILES['myFile'];
    $f_name = $_FILES["myFile"]["name"];
    $t_name = $_FILES["myFile"]["tmp_name"];
    $error = $_FILES["myFile"]["error"];

    $target = $target_dir . basename($_FILES["myFile"]["name"]);
    $imageFileType = 
  strtolower(pathinfo($target,PATHINFO_EXTENSION));

    if($error > 0){
        $response = array(
            "status" => "error",
            "error" => true,
            "message" => "Error uploading the file!"
        );
    }else 
    {
        $random_name = rand(1000,1000000)."-".$f_name;
        $upload_name = $upload_dir.strtolower($random_name);
        $upload_name = preg_replace('/\s+/', '-', $upload_name);

        if(move_uploaded_file($t_name , $upload_name)) {
                if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg"
|| $imageFileType == "gif" ) {
    $fileType = 'image';
}

else{
    $fileType = 'video';
}

            $sql = "INSERT INTO images (imgName,type) VALUES ('$upload_name','$fileType')";            
              mysqli_query($link, $sql);
            $response = array(
                "status" => "success",
                "error" => false,
                "message" => "File uploaded successfully",
                "url" => $server_url."/".$upload_name
              );
        }else
        {
            $response = array(
                "status" => "error",
                "error" => true,
                "message" => "Error uploading the file!"
            );
        }
    }    

}else{
    $response = array(
        "status" => "error",
        "error" => true,
        "message" => "No file was sent!"
    );
}

echo json_encode($response);
?>