 <!-----Sara---->

<?php

function image_validation($image_name,$image_size,$image_temp,$image_type){
    if (empty($image_name)){
    return " please select a file";
    }

$file_info= new finfo(FILEINFO_MIME_TYPE);
$mime_type=$file_info->file($image_temp);

$allowed_image_types=['image/jpeg','image/jpg','image/gif', 'image/png'];

if (in_array($mime_type,$allowed_image_types)==false){
    return "only jpeg ,png, and gif image files are allowed";

}

$upload_max_size=2*1024*1024; //2MB

if ($image_size>$upload_max_size){
    return "Image must not be longer than 2MB";
}

return "success";

}

?>