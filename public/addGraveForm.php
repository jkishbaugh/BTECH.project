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
        $targetDir = "img/uploads/";
        $targetFile = $targetDir.$photoFileName;
        //validate incoming data
        echo $firstName." ".$lastName;
        echo $photoFileName;
        //upload image

        //insert new grave
        //reload page and display errors if exist or



            //redirect if success


    }




    include("../Shared/header.php");
    ?>


    <div class="addAncestorTitle"></div>
    <div>
        <h2 class="add">Add Your Ancestor</h2>
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