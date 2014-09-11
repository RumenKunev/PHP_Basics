<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CalculateInterest</title>
</head>
<body>
    <form metod="get" action="">
        <p>Enter HTML tags</p>
        <input type="text" name="htmlTag">
        <input type="submit"><br>

<?php
session_start();
if(!isset($_SESSION['counter'])){
    $_SESSION['counter'] = 0;
}
if(isset($_GET['htmlTag'])){

    $tagName = $_GET['htmlTag'];

    function isValidTag($tagName){
         $isValid = false;
        $tagsArr = array('a', 'abbr', 'acronym', 'address', 'applet', 'area', 'b', 'base', 'basefont',
            'bdo', 'bgsound', 'big', 'blockquote', 'blink', 'body', 'br', 'button', 'caption', 'center', 'cite', 'code',
            'col', 'colgroup', 'dd', 'dfn', 'del', 'dir', 'dl', 'div', 'dt', 'embed', 'em', 'fieldset', 'font', 'form',
            'frame', 'frameset', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'head', 'hr', 'html', 'iframe', 'img', 'input',
            'ins', 'isindex', 'i', 'kbd', 'label', 'legend', 'li', 'link', 'marquee', 'menu', 'meta', 'noframe',
            'noscript', 'optgroup', 'option', 'ol', 'p', 'pre', 'q', 's', 'samp', 'script', 'select', 'small', 'span', 'strike',
            'strong', 'style', 'sub', 'sup', 'table', 'td', 'th', 'tr', 'tbody', 'textarea', 'tfoot', 'thead', 'title',
            'tt', 'u', 'ul', 'var');
        foreach ($tagsArr as $tag){
            if($tagName == $tag){
                $isValid = true;
            }
        }
        return $isValid;
    }

    if(isValidTag($tagName)){
        $_SESSION['counter'] += 1;
        echo('Valid HTML tag!' . '<br>');
        echo('Score: ' . $_SESSION['counter']);
    } else {
        echo('Invalid HTML tag!' . '<br>');
        echo('Score: ' . $_SESSION['counter']);
    }
}
?>
    </form>
</body>
</html>