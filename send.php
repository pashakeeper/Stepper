<?


    $to =  "komymail@mail.ru";
    $from = 'otkogomail@mail.ru';
    $charset = "utf-8";
    $subject = '=?'.$charset.'?B?'.base64_encode("Сообщение с сайта").'?=';
    $headerss ="Content-type: text/html; charset=$charset\r\n";
    $name = '=?'.$charset.'?B?'.base64_encode("От пользователя").'?=';  //Имя_отправителя   c//
    $headerss.="From: $name <$from>\r\n";
    $headerss.="MIME-Version: 1.0\r\n";
    $headerss.="Date: ".date('D, d M Y h:i:s')."\r\n";
    $msg = "Сообщение: <br>Имя: ".$_POST["check_text"].'<br>Телефон: '.$_POST["name"].'<br>Сообщение: ';
    mail($to, $subject, $msg, $headerss);
    echo 'Сообщение успешно отправлено!';
// if((isset($_POST['check_value'])&&$_POST['check_value']!="")&&(isset($_POST['check_text'])&&$_POST['check_text']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
//         $to = 'pashagkjunost@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
//         $subject = 'Обратный звонок'; //Загаловок сообщения
//         $message = '
//                 <html>
//                     <head>
//                         <title>'.$subject.'</title>
//                     </head>
//                     <body>
//                         <p>Имя: '.$_POST['name'].'</p>
//                         <p>Телефон: '.$_POST['phone'].'</p>                        
//                     </body>
//                 </html>'; //Текст нащего сообщения можно использовать HTML теги
//         $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
//         $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
//         mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
// }