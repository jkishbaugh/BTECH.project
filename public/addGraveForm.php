<?php
    require_once("../private/initialize.php");

    $error = "";

    if(isPostRequest()){
        //set variables from form
        $firstName=$_POST['firstName'];
        $lastName=$_POST['lastName'];
        $birthDate = $_POST['birthdate'];
        $deathDate = $_POST['birthdate'];
        $photoFileName = $_FILES["fileToUpload"]["name"];
        $tempPhotoFileName = $_FILES["fileToUpload"]["tmp_name"];
        $photoLocation = "../img/".$photoFileName;
        $targetDir = IMAGE_PATH."/uploads/";
        $targetFile = $targetDir.$photoFileName;
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($targetFile,PATHINFO_EXTENSION);


        echo print_r($_FILES);

        //validate file is real
        $check = getimagesize($tempPhotoFileName);
        if($check !== false) {
            $error =  "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            $error =  "File is not an image.";
            $uploadOk = 0;
        }
        if (file_exists($targetFile)) {
            $error =  "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            $error =  "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            $error =  "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $error =  "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                $error =  "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            } else {
                $error =  "Sorry, there was an error uploading your file.";
            }
        }
        //validate incoming data
        if(!$firstName || !$lastName || !$birthDate || !$deathDate || !$photoFileName){
            $error = "All fields must be filled out to add a record";
        }
        //either name contains special characters
        //birthdate is after death date
        //death date is after today
        //birth date is after today

        //insert new grave

        //reload page and display errors if exist or



            //redirect if success


    }




    include("../Shared/header.php");
    ?>


    <div class="addAncestorTitle"></div>
    <div>
        <h2 class="add">Add Your Ancestor</h2>
        <?php if(!$error=""){
            echo "<h4 class='error'>".$error."</h4>";
        } ?>
        <form class="addAncestor" action="" method="post" enctype="multipart/form-data">
            <div class="w3-row">
                <div class="w3-half">
                    <label>First Name</label>
                    <input type="text" name="firstName">
                </div>
                <div class="w3-half">
                    <label>Last Name</label>
                    <input type="text" name="lastName">
                </div>
            </div><!--END ROW -->
            <div class="w3-row">
                <div class="w3-half">
                    <label>Birth Date</label>
                    <input type="date" name="birthdate" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                </div>
                <div class="w3-half">
                    <label>Date of Death</label>
                    <input type="date" name="birthdate" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                </div>
            </div><!--END ROW -->
            <div class="w3-row">
                <label>Select Image To Upload</label>
                <input type="file" name="fileToUpload">
            </div><!--END ROW -->

            <input class="addGrave" type="submit" name="submit" value="Save Record">

        </form>
    </div>

<?php
    include("../Shared/footer.php");
    ?>