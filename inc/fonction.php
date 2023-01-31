<?php
function get_icons()
{
    $req = 'SELECT * FROM icons';
}
function get_icons_by_id($id)
{
    $dbh = dbConnexion();
    $req = 'SELECT * FROM icons WHERE id="'.$id.'"';

    //echo '<div>'.$req.'</div>';
    $result = $dbh->query($req);
    if(!$result)
    {
        die("error");
    } else 
    {
        $icon = Array();
        while($row = $result->fetch ()) 
        {
            $icon = array(
                'id'     => utf8_encode($row['id']),
                'name'      => utf8_encode($row['name']),
                'file_name'       => utf8_encode($row['file_name'])
            );
        }
        return $icon;
    }

}

function get_icons_by_name($name)
{
    $dbh = dbConnexion();
    $name == "" ? $where = '1' : $where = 'name="'.$name.'"';
    $req = 'SELECT * FROM icons WHERE '.$where;

    echo '<div>'.$req.'</div>';
    $result = $dbh->query($req);
    if(!$result)
    {
        die("error");
    } else 
    {
        $fiche = Array();
        while($row = $result->fetch ()) 
        {
            $fiche[] = array(
                'id'     => utf8_encode($row['id']),
                'name'      => utf8_encode($row['name']),
                'file_name'       => utf8_encode($row['file_name'])
            );
        }
        return $fiche;
    }
}

function get_icons_by_tag($name)
{
    $dbh = dbConnexion();
    $req = 'SELECT id_icon FROM icons__tags 
                    WHERE tag="'.$name.'"';

    //echo '<div>'.$req.'</div>';
    $result = $dbh->query($req);
    if(!$result)
    {
        die("error");
    } else 
    {
        $fiche = Array();
        while($row = $result->fetch ()) 
        {
            $fiche[] = get_icons_by_id($row['id_icon']);
        }
        return $fiche;
    }
}
function get_icon_by_id_parent($id_parent)
{
    $req = 'SELECT * FROM icons WHERE parent ="'.$id_parent.'"';
}

?>