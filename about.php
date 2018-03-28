<?php 
	$userName = 'Сергей Садчиков';
	$userAge = '27';
	$userMail = 's.p.sadchikov@gmail.com';
	$userLocation = 'г.Екатеринбург';
	$userProf = 'junior Web-developer';	
 ?>

<!DOCTYPE>
<html lang="ru">
    <head>
        <title><?= $userName ?> - <?= $userProf ?></title>
        <meta charset="utf-8">
        <style>
            body {
                font-family: sans-serif;  
            }
            
            dl {
                display: table-row;
            }
            
            dt, dd {
                display: table-cell;
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h1>Страница пользователя <?= $userName ?></h1>
        <dl>
            <dt>Имя</dt>
            <dd><?= $userName ?></dd>
        </dl>
        <dl>
            <dt>Возраст</dt>
            <dd><?= $userAge ?></dd>
        </dl>
        <dl>
            <dt>Адрес электронной почты</dt>
            <dd><a href="<?= $userMail ?>"><?= $userMail ?></a></dd>
        </dl>
        <dl>
            <dt>Город</dt>
            <dd><?= $userLocation ?></dd>
        </dl>
        <dl>
            <dt>О себе</dt>
            <dd><?= $userProf ?></dd>
        </dl>
    </body>
</html>
