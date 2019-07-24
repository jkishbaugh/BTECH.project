<?php
    require_once("../private/initialize.php");

    $error = "";

    if(isPostRequest()){
        //set variables from form
        //validate incoming data
        //reload page and display errors if exist or

            //insert new grave
            //upload image
            //redirect if success


    }




    include("../Shared/header.php");
    ?>
    <form class="addAncestor" action="" method="post">
        <div class="w3-row">
            <div class="w3-half">
                <input type="text" name="firstName" placeholder="First Name">
            </div>
            <div class="w3-half">
                <input type="text" name="lastName" placeholder="Last Name">
            </div>
        </div>
        <div class="w3-row">
            <div class="w3-twothird">
                <input type="date" name="birthdate" placeholder="Example: 1900-05-05" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
            </div>
            <div class="w3-third">
                <input type="hidden" name="veteran" value="false">
                <input type="checkbox" name="veteran" value="true" placeholder="Veteran">
                <input type="hidden" name="famous" value="false">
                <input type="checkbox" name="famous" value="true" placeholder="famous">
            </div>
        </div>

        <input class="contactSubmit" type="submit" name="submit" value="Submit">

    </form>
<?php
    include("../Shared/footer.php");
    ?>