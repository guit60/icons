<?php
    $icons = Array();
    $tags = Array();
    //
    $q = $_GET['q'];
    //echo $q;
    $icons = get_icons_by_name($q);
    //
    //echo '<pre>'.print_r($icons).'</pre>';
    $tags = get_icons_by_tag($q);
    //
    //echo '<pre>'.print_r($tags).'</pre>';
    $results = array_merge($icons, $tags);
    //echo '<pre>'.print_r($results).'</pre>';
    //die;
    $html_icons = "";
    for($i = 0; $i < sizeof($results); $i++)
    {
        $html_icons .= '<div id="'.$results[$i]['id'].'" class="grid-item">
        <img src="img/svg/'.$results[$i]['file_name'].'.svg">
        <span>'.$results[$i]['name'].'</span></div>';
    }
    require('/home/tucherch/www/guillaumeroberge.com/icons/view/search_view.php'); 
?>