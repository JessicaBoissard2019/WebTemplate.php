<!-- Chapter 4 Web Template Project (PAGE 215 - 216) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Template</title>
</head>
<body style = "background-color: lightsteelblue;">
    <?php include "inc_header.html"; ?>
    <div style = "width: 20%; text-align: center; float: left">
    <?php include "inc_buttonNav.html"; ?>
    </div>
    <!-- Start of dynamic content section -->
     <?php
        if(isset($_GET["content"])) {
            switch ($_GET["content"]) {
                case "About Us":
                    include "inc_about.html";
                    break;
                case "Contact Us":
                    include "inc_contact.html";
                    break;
                case "Home":
                    include "inc_home.html";
                    break;
            } # End of switch
        } else {
            # No button was clicked
            include "inc_home.html";
        }
     ?>
     <!-- End of dynamic content section -->
     <?php include "inc_footer.php"; ?>
</body>
</html>