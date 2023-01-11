<?php

foreach ($_POST['check1'] as $check_key1) {
    echo $check_key1;
}

foreach ($_POST['check2'] as $check_key2) {
    echo $check_key2;
}

foreach ($_POST['check3'] as $check_key3) {
    echo $check_key3;
}
foreach ($_POST['check4'] as $check_key4) {
    echo $check_key4;
}
foreach ($_POST['check5'] as $check_key5) {
    echo $check_key5;
}
foreach ($_POST['check6'] as $check_key6) {
    echo $check_key6;
}

foreach ($_POST['check8'] as $check_key8) {
    echo $check_key8;
}
foreach ($_POST['check9'] as $check_key9) {
    echo $check_key9;
}


$to = 'pashagkjunost@gmail.com';
$subject = 'Обратный звонок';
$message = '
                <html>
                    <head>
                        <title>' . $subject . '</title>
                    </head>
                    <body>
                        <p>Имя: ' . $_POST['name'] . '</p>
                        <p> Вопрос 1: ' . $check_key1 . $_POST['checktext1'] . '</p>
                        <p> Вопрос 2: ' . $check_key2 . '</p>
                        <p> Вопрос 3: ' . $check_key3 . '</p>
                        <p> Вопрос 4: ' . $check_key4 . '</p>
                        <p> Вопрос 5: ' . $check_key5 . $_POST['checktext2'] . '</p>
                        <p> Вопрос 6: ' . $check_key6 . $_POST['checktext3'] . '</p>
                        <p> Вопрос 7: ' . $_POST['check7'] . $_POST['checktext4'] . '</p>
                        <p> Вопрос 8: ' . $check_key8 . '</p>
                        <p> Вопрос 9: ' . $check_key9 . '</p>
                        <p> Вопрос 10: ' . $_POST['checktext5'] . '</p>     
                        <p style="color: red;"> ПромоКод: ' . $_POST['promocode'] . '</p>
                    </body>
                </html>';
$headers = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: Отправитель <from@example.com>\r\n";
mail($to, $subject, $message, $headers);
?>