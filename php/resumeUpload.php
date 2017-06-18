<?php
	if(isset($_FILES['resumeUploadField'])) {

		$UploadName = $_FILES['resumeUploadField']['name']; 
		$UploadName = mt_rand(100000, 999999).$UploadName;
		$UploadTmp = $_FILES['resumeUploadField']['tmp_name'];  
		$UploadType = $_FILES['resumeUploadField']['type ']; 
		$FileSize = $_FILES['resumeUploadField']['size']; 
		$UploadName = preg_replace("#[^a-z0-9.]#i", "", $UploadName);
		
		/*if(($FileSize > 5000)){
			
			die("File size cannot exceed 5MB");
			
		}*/

		if(!UploadTmp){
			die("No file selected, please upload again");
			
		}
		else{
			move_uploaded_file($UploadTmp, "resumes/$UploadName");
		}	
	}
?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Resume Upload</title>
	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css'>
	<link rel="stylesheet" href="css/upload.css">
</head>
<body>

<div class="upload-block">
	<h1>InWIC 2017 - Upload Resume Here</h1>
	<p>Please use the naming standard below for your filename to be uploaded:<br>LastName_FirstName_School_Resume.xxx (.doc, .docx, .pdf, .rtf are all acceptable formats)</p>


	<form action="resumeUpload.php" method="post" name="resumeUploadForm" id="resumeUploadForm" enctype = "multipart/form-data">
	<label for="resumeUploadField"></label>
	<div class="browse-btn">
		<input type="file" name="resumeUploadField" id="resumeUploadField"><br><br>
	</div>
	<div class="submit-btn">	
		<input type="submit" name="uploadBtn" id="uploadBtn" value="Upload">
	</div>
	</form> 
</div>
</body>
</html>