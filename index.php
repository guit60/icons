<?php
    require('/home/tucherch/www/guillaumeroberge.com/icons/inc/config.php');
    $page = $_GET['p'];
    switch($page)
    {
        case "search":
                require('/home/tucherch/www/guillaumeroberge.com/icons/php/search.php');
            break;
        case "":
                require('/home/tucherch/www/guillaumeroberge.com/icons/php/search.php');
            break;
    }
    
?>
