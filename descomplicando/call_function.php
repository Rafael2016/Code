<?php

function Simples(){

    echo 'Testando Chamanda de Função';
}

call_user_func('Simples');

/*ORIENTADO AO OBJETO */
class Luz
{

    public static function teste(){

        echo 'Rafael Luz';
    }

}

call_user_func(array('Luz','teste'));


?>