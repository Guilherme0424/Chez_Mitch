<?php 
include 'app/view/common/header.php'; 


 if (isset($errorMessage)) {
        echo "<div class='error-message'>$errorMessage</div>";
      }


echo $content;

include 'app/view/common/footer.php'; 

