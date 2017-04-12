<?php
    $name = 'Руслан';
    $num = 48;
    setcookie ("user_name", $name, time()+3600);
    setcookie ("user_id", $num, time()+3600);
    //echo "Привет, $name, ты живешь в квартире номер $num! \n Мы Anonimous - жди нас.";
    print_r($_COOKIE);