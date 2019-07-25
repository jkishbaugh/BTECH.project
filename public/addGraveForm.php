<?php
    require_once("../private/initialize.php");

    $error = "";

    if(isPostRequest()){
        //set variables from form
        $firstName = '';
        $lastName = '';
        $birthDate = '';
        $deathDate = '';
        $photoFileName = $_FILES["fileToUpload"]["name"];
        $photo= "img\\".$_FILES["name"];
        $tempPhotoFileName = $_FILES["fileToUpload"]["tmp_name"];
        //validate incoming data
          if(isset($_POST['firstName'])){
             $firstName = $_POST['firstName'];
          }else{
              $error= "First Name must be included to add a new record";
          }

           if(isset($_POST['lastName'])){
               $lastName = $_POST['lastName'];
           }else{
               $error= "Last Name must be included to add a new record";
          }
            if(isset($_POST['birthdate'])&& $_POST['birthdate']){
                $birthDate = $_POST['birthdate'];
            }else{
                $error= "Birth date must be included to add a new record";
          }

            if(isset($_POST['birthdate'])&& $_POST['birthdate']){
                $deathDate = $_POST['birthdate'];
            }else{
                $error= "Death date must be included to add a new record";
            }



        //reload page and display errors if exist or

            //insert new grave
            //upload image
            //redirect if success


    }




    include("../Shared/header.php");

    echo"<h3>". $photoFileName."/ ".$tempPhotoFileName. " / ".$photo."</h3>";

    ?>


    <div class="addAncestorTitle"></div>
    <div>
        <h2>Add Your Ancestor</h2>
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
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div><!--END ROW -->

            <input class="addGrave" type="submit" name="submit" value="Save Record">

        </form>
    </div>

<?php
    include("../Shared/footer.php");
    ?>