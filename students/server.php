<?php
include "../connection.php";

//students csv file processing
if(isset($_POST['students_upload'])){
    $file_name = $_FILES["file"]["name"];
    $temp_name = $_FILES["file"]["tmp_name"];

    $file = fopen($temp_name,"r");

    $row_count =  count(file($temp_name));

    $count = 0;

    while ($row = fgetcsv($file)) {
        $count++;
        if($count == 1){
            continue;
        }
        $adm_no = $row[0];
        $name = $row[1];
        $name = strtoupper($name);
        $form = $row[2];
        $stream = $row[3];
        $stream = strtoupper($stream);

        $sql1 = "delete from students_tbl where adm_no=$adm_no";
        $res1 = mysqli_query($conn,$sql1);
        $sql = "insert into students_tbl (name,adm_no,form,stream) values ('$name','$adm_no','$form','$stream')";

        $res = mysqli_query($conn,$sql);

        if($res){
            header("location: index.php");
        }else{
            echo "Error in upload";
        }
    }

};
?>