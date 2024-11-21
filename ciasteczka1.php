<?php
// Sprawdzenie, czy ciasteczko 'moje' jest ustawione
if (!isset($_COOKIE['moje']))
{
    // Jeśli ciasteczko nie jest ustawione, ustawiamy je z wartością 'witamy na stronie'
    setcookie('moje','witamy ponownie');
    // Przypisanie informacji o pierwszym wejściu na stronę
    $info="witamy na stronie";
}
else
{
    // Jeśli ciasteczko jest ustawione, przypisujemy informację o ponownym wejściu na stronę
    $info="witamy ponownie";
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>Ciasteczka</title>
</head>
<body>

<?php
// Wyświetlenie informacji o stanie ciasteczka
echo $info;
?>

</body>
</html>