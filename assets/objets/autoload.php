<?php

function loadClass($objet)
{
    require $_SERVER['DOCUMENT_ROOT'] . '/assets/objets/' . $objet . '.php';
}

spl_autoload_register('loadClass');