<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
$allowedTypes = ['image/jpeg', 'image/png', 'application/pdf']; 
$maxFileSize = 15 * 1024 * 1024; 
if (isset($_FILES['file'])) { 
$file = $_FILES['file']; 
if ($file['error'] === UPLOAD_ERR_OK) { 
$fileType = mime_content_type($file['tmp_name']); 
$fileSize = $file['size']; 
if (in_array($fileType, $allowedTypes)) { 
if ($fileSize <= $maxFileSize) { 
$uploadDir = 'uploads/'; 
$uploadPath = $uploadDir . basename($file['name']); 
if (move_uploaded_file($file['tmp_name'], $uploadPath)) { 
echo 'File uploaded successfully!'; 
} else { 
echo 'Failed to move uploaded file.';} 
} else { 
echo 'File size exceeds the maximum limit.';} 
} else { 
echo 'Invalid file type.';} 
} else { 
echo 'Error occurred during file upload.';} 
} else { 
echo 'No file uploaded.'; 
} 
} 
?>

<!DOCTYPE html> 
<html> 
<head> 
<title>File Upload</title> 
</head> 
<body> 
<form method="POST" enctype="multipart/form-data"> 
<input type="file" name="file"> 
<input type="submit" value="Upload"> 
</form> 
</body> 
</html>