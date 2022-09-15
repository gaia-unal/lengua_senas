<?php
//para eliminar los acentos
function elimina_acentos($text)
    {
        $text = htmlentities($text, ENT_QUOTES, 'UTF-8');
        $text = strtolower($text);
        $patron = array (
            // Espacios, puntos y comas por guion
            //'/[\., ]+/' => ' ',

            // Vocales
            '/\+/' => '',
            '/&agrave;/' => 'a',
            '/&egrave;/' => 'e',
            '/&igrave;/' => 'i',
            '/&ograve;/' => 'o',
            '/&ugrave;/' => 'u',

            '/&aacute;/' => 'a',
            '/&eacute;/' => 'e',
            '/&iacute;/' => 'i',
            '/&oacute;/' => 'o',
            '/&uacute;/' => 'u',

            '/&acirc;/' => 'a',
            '/&ecirc;/' => 'e',
            '/&icirc;/' => 'i',
            '/&ocirc;/' => 'o',
            '/&ucirc;/' => 'u',

            '/&atilde;/' => 'a',
            '/&etilde;/' => 'e',
            '/&itilde;/' => 'i',
            '/&otilde;/' => 'o',
            '/&utilde;/' => 'u',

            '/&auml;/' => 'a',
            '/&euml;/' => 'e',
            '/&iuml;/' => 'i',
            '/&ouml;/' => 'o',
            '/&uuml;/' => 'u',

            '/&auml;/' => 'a',
            '/&euml;/' => 'e',
            '/&iuml;/' => 'i',
            '/&ouml;/' => 'o',
            '/&uuml;/' => 'u',

            // Otras letras y caracteres especiales
            '/&aring;/' => 'a',
            '/&ntilde;/' => 'n',

            // Agregar aqui mas caracteres si es necesario

        );

        $text = preg_replace(array_keys($patron),array_values($patron),$text);
        return $text;
    }


$page = $_POST['page'];
$c = strtolower($_POST['correct']);
$o = strtolower($_POST['nombre']);
$cl = strtolower($_POST['correctLetra']);

$c=elimina_acentos($c);
$o=elimina_acentos($o);
$cl=elimina_acentos($cl);

$correct = (int) $c;
$option = (int) $o;

if ($correct == $option) {

  header("Location: escribenum?id=941826&act=".$page."");
}
elseif ($cl == $o) {

  header("Location: escribenum?id=941826&act=".$page."");
}
else {
  header("Location: escribenum?id=475869&act=".$page."");
}
?>
