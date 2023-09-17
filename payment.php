<?php
session_start();
?>
<!DOCTYPE html>
<html>
 
<head>
    <title>
        Select and upload multiple
        files to the server
    </title>
    <style>
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
.upload{
    
    background-color:  #d5f4e6;
}
    </style>
</head>
 
<body>
 
 <h1>Upload fitness certificate of each member in a combined pdf format</h1>   
    <form action="" method="post"
            enctype="multipart/form-data">
 <div class="upload">
        <h2>Upload Documents</h2>
         <h4> Select files to upload:<br><br>
        <input type="file" name="fileUpload[]" multiple>
        <br><br>
        <input type="submit" name="submit" value="Upload" >
</h4>
</div>
</form>
<div class="pagination">
  <a href="#">&laquo;</a>
  <a href="book.php">1</a>
  <a class="active" href="#">2</a>
  
  <a href="#">&raquo;</a>
</div>
</body>
 
</html>             

<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'form');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Check if form was submitted
if(isset($_POST['submit'])) {

   
        
        $countfiles = count($_FILES['fileUpload']['name']);
        
        
        for($i=0;$i<$countfiles;$i++){
            $target_dir = "uploadedDoc/";
            $target_file = $target_dir . basename($_FILES["fileUpload"]["name"][$i]);
            
            if(move_uploaded_file($_FILES['fileUpload']['tmp_name'][$i],$target_file))
            {
                $sql = "INSERT INTO documents (fitness,email) VALUES (?,?)";
                $stmt = mysqli_prepare($link, $sql);
                mysqli_stmt_bind_param($stmt, "ss", $param_path,$email_id);
                $param_path = $target_file;
                $email_id=$_SESSION['username'];
                if (mysqli_stmt_execute($stmt)) {
                   
                    echo "Files uploaded successfully.";
                    echo "Proceed to Payment. ";
                }
            } else {
               
                    echo "File(s) coudn't be uploaded.";
               
            }
                
        }
        
    }

	

?>
