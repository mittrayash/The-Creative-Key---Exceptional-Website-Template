<?php

require('includes/config.php');

			if(isset($_REQUEST['submit']))
			{
			$conn = mysqli_connect('localhost','root','','signup') or die(mysqli_error($conn));
			if($conn==true)
			{
			echo "ok";
			}
			$target_dir = "style/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
           $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
         
         $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
         if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}

			$title=$_REQUEST['title-blog'];
			$author="Ayush";
			
			$article=$_REQUEST['article-blog'];
		
			$stmt = $db->prepare('INSERT INTO blog(author, title, article) VALUES (:author,:title,:article)');
			$stmt->execute(array(
				':author' => $author,
				':title' => $title,
				':article' => $article
		));
		$id = $db->lastInsertId('id');
			if($stmt==true)
			{
			echo "ok";
			}
			else{echo "Nk";}
			}
			
			?>	