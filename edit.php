<?php

if ($_SERVER['REMOTE_ADDR']!="89.64.2.76") die("not authorized");

$url = '/hobbit/edit.php';
$file = 'napis.txt';

if (isset($_POST['text'])) {
    $_POST['text']=str_replace(" ", "&nbsp;", $_POST['text']);
    file_put_contents($file, $_POST['text']." ");

    header(sprintf('Location: %s', $url));
    printf('<a href="%s">Moved</a>.', htmlspecialchars($url));
    exit();
}

$text = file_get_contents($file);
$text=str_replace("&nsbp;", " ", $text);

?>
<form action="" method="post">
<textarea name="text"><?php echo $text; ?></textarea><br />
<input type="submit" />
<input type="reset" />
</form>