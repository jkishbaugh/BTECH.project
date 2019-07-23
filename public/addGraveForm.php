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




    include(SHARED_PATH."/header.php");
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
            <div class="w3-half">
                <input type="date" name="birthdate" placeholder="Example: 1900-05-05" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
            </div>
            <div class="w3-half">
                <input type="hidden" name="veteran">
                <input type="checkbox" name="veteran" value="Veteran">
            </div>
        </div>
        <h4>Message</h4>
        <input class="message" type="textarea" name = "message">
        <input class="contactSubmit" type="submit" name="submit" value="Send Email">
    </form>
<?php
    include(SHARED_PATH."/footer.php");
    ?>