<?php  
    if(!empty($_POST['name']) and !empty($_POST['geometric']))
    {
        switch($_POST['geometric'])
        {
            case 'kwadrat';
            echo("kwadrat");
            break;
            case 'prostokat';
            echo('prostokat');
            break;
        }
    }
    else
    {
        echo('wypelnij wszystkie pola');
    }
?>