<?php
    require_once("../private/initialize.php");

    $error="";

    if(isPostRequest()){
        //set variables
        $firstName=isset($_POST['firstName'])?$_POST['firstName']:'';
        $lastName=isset($_POST['lastName'])?$_POST['lastName']:'';
        $birthDate = isset($_POST['birthdate'])?$_POST['birthdate']:'';
        $deathDate = isset($_POST['birthdate'])?$_POST['birthdate']:'';
        $photoFileName = isset($_FILES["fileToUpload"]["name"])?$_FILES["fileToUpload"]["name"]:'';
        $tempPhotoFileName = $_FILES["fileToUpload"]["tmp_name"];
        $photoLocation = "../img/".$photoFileName;
        $targetDir = IMAGE_PATH."\\uploads\\";
        $targetFile = $targetDir.$photoFileName;
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($targetFile,PATHINFO_EXTENSION);
        $key = isset($_POST['uploadKey'])?$_POST['uploadKey']:'';

        //validate incoming data
        if($firstName==''|| $lastName=='' || $birthDate=='' || $deathDate=='' || $photoFileName==''){
            $error = "All fields must be filled out to add a record";
        }else if(!checkDates($birthDate, $deathDate)){

            $error = "Check the dates you have entered. There is a problem.";
        }

        //validate file is real
        if ($error === "") {
            $check = getimagesize($tempPhotoFileName);
            if(!$key==="Sup3rMonk3yIsland"){
                $error = "Please try again your upload key does not match";
                $uploadOk = 0;
            }
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                $error = "File is not an image.";
                $uploadOk = 0;
            }
            if (file_exists($targetFile)) {
                $error = "Sorry, file already exists.";
                $uploadOk = 0;
            }// Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                $error = "Sorry, your file is too large.";
                $uploadOk = 0;
            }// Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif") {
                $error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }// Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                $error = "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {
                if (!move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                    $error = "Sorry, there was an error uploading your file.";

                }
            }
            if ($error === ""){
                $result = insertNewGraveRecord($db, $firstName, $lastName, $birthDate, $deathDate, $photoFileName);
                echo "we have run the query result was: ".$result;
                if($result) {
                    header("Location: index.php");
                }else{
                    $error = "There has been a database error ".mysqli_error($db);
                }
            }
        }





    }

    include("../Shared/header.php");
    ?>


    <div class="addAncestorTitle"></div>
    <div>
        <h2 class="add">Add Your Ancestor</h2>
        <?php
            if($error !== "") {
                echo "<h4 class='error'>Error = `{$error}`</h4>";
            }
         ?>
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
                    <input type="date" name="deathdate" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                </div>
            </div><!--END ROW -->
            <div class="w3-row">
                <div class="w3-half">
                    <label>Select Image To Upload</label>
                    <input type="file" name="fileToUpload">
                </div>
                <div class="w3-half">
                    <label>Upload Key</label>
                    <input type="text" name="uploadKey" >
                </div>
            </div><!--END ROW -->
            <div class="w3-row">
                    <input class="addGrave" type="submit" name="submit" value="Save Record">
            </div>
        </form>
    </div>

<?php
    include("../Shared/footer.php");
    ?>