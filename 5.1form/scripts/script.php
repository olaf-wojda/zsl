<?php  
    if(!empty($_POST['name']) and !empty($_POST['geometric']))
    {
        switch($_POST['geometric'])
        {
            case 'kwadrat';
            header("location: ./square.php");
            break;
            case 'prostokat';
            header("location: ./rectangle.php");
            break;
        }
    }
    else
    {
        echo('wypelnij wszystkie pola');
    }
?>