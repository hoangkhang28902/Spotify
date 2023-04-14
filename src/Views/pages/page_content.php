<?php
    if (!empty($_GET['page'])) {
    $page= trim($_GET['page']);
        if(file_exists($page)){
            include($page);
        } else {
            echo "404 not found";
        }
    }
    else {
        echo "This anchor tage has no url";
    }
?>