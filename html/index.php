<?php include_once'../core/reception.php';?>
<!doctype html>
<html>
<head>
    <style type='text/css'>
        .block {
            background:#EDE6D4;
            width: 500px;
            padding: 5px;
            float: right;
        }
        .block2{
            width: 400px;
            padding: 5px;
            float: left;
        }
    </style>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div class="block2">
<form method="post" enctype="multipart/form-data">
    Файл <input type="file" name="myFile"><br/><br/>
    <input type="submit" value="Отправить"><br/><br/>
    <a href="list.php">Список тестов</a>
</form>
</div>
<div class="block">
    <details>
        <summary>readme</summary>
            Для корректной работы загружаемый файл должен быть формата JSON и иметь следующую структуру:
            <pre>
            [
                {"question":  "Первый вопрос",
                "option":{
                    "a": "Вариант ответа 1",
                    "b": "Вариант ответа 2",
                    "c": "Вариант ответа 3",
                    "d": "Вариант ответа 4"
                    },
                "answer":"Правильный отет"},

                {"question": "Как зовут талисмана баскетбольной
                    команды NBA Denver Nuggets?",
                "option":{
                    "a": "Рокки",
                    "b": "Сэнди",
                    "c": "Эрик"
		            },
                "answer":"Рокки"}
            ]
            </pre>
    </details>
</div>
</body>
</html>