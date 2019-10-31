<?php
function upload($nombre,$dir = "uploads"){
  if (isset($_FILES[$nombre])) {
    $ext = pathinfo($_FILES[$nombre]["nombre"], PATHINFO_EXTENSION);
    $hash = md5(time() . $_FILES[$nombre]["tmp_name"]);
    $path = "$dir/$hash.$ext";
    move_uploaded_file($_FILES[$nombre]["tmp_name"], $path);
    return $path;
  }
  return null;
 }
