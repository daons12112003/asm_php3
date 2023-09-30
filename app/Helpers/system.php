<?php
function uploadFile($nameFolder, $file){
    // Lấy tên file ảnh ghép với thời gian
    $fileName = time().'_'.$file->getClientOriginalName();
    return $file->storeAs($nameFolder,$fileName,'public');
}