<?php

#Pasta interna (caso não esteja no diretório raíz)
$internalFolder = "banco-de-questoes/";

# Arquivos diretórios raízes para host e físico
    define("DIRECTORYHOST", "http://{$_SERVER['HTTP_HOST']}/{$internalFolder}");
    
    if (substr($_SERVER["DOCUMENT_ROOT"], -1) == "/")
    {
        define("DIRECTORYPHYSICAL", "{$_SERVER['DOCUMENT_ROOT']}{$internalFolder}");
    }
    else{
        define("DIRECTORYPHYSICAL", "{$_SERVER['DOCUMENT_ROOT']}/{$internalFolder}");
    }

# Diretórios Específicos
    define("DIRECTORYCSS", DIRECTORYHOST."public/css");
    define("DIRECTORYJS", DIRECTORYHOST."public/js");
    define("DIRECTORYHTML", DIRECTORYHOST."public/html");
    define("DIRECTORYFONTS", DIRECTORYHOST."public/fontes");
    define("DIRECTORYIMG", DIRECTORYHOST."public/img");
    define("DIRECTORYVIEW", DIRECTORYPHYSICAL."app/view");

# Banco de dados
    define("HOST", "localhost");
    define("USER", "root");
    define("PASSWORD", "");
    define("DATABASE", "db_banco_de_questoes");
?>