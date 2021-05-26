<html>
<head>
  <title>Тест</title>
</head>
<body>
<form method='get'>
<b>1.Гипертекст это:</b><br>
<input name="answer[12]" type="radio" value="Верно">это текст, содержащий гиперссылки<br>
<input name="answer[12]" type="radio" value="Неверно">это программа для просмотра веб-страниц на экране монитора<br>
<input name="answer[12]" type="radio" value="Неверно">это гипертекстовый документ в Интернете
<b>2.Программа для просмотра гипертекстовых страниц называется:</b><br>
<input name="answer[1]" type="radio" value="Неверно">Сервер<br>
<input name="answer[1]" type="radio" value="Верно">Браузер<br>
<input name="answer[1]" type="radio" value="Неверно">HTML<br>
<br>
<b>3.Как иначе называются визуальные html-редакторы?</b><br>
<input name="answer[2]" type="radio" value="Верно">WYSIWYG-редакторы<br>
<input name="answer[2]" type="radio" value="Неверно">Веб-редакторы<br>
<input name="answer[2]" type="radio" value="Неверно">Тег-редакторы<br>
<br>
<b>4.Какие программы используются для просмотра Web-страниц в Интернете?</b><br>
<input name="answer[3]" type="radio" value="Верно">Internet Explorer или Opera<br>
<input name="answer[3]" type="radio" value="Неверно">MicroSoft Word или Word Pad<br>
<input name="answer[3]" type="radio" value="Неверно">MicroSoft Access или MicroSoft Works<br>
<br>
<b>5.При помощи каких программ можно создавать веб-страницы на языке разметки гипертекста?</b><br>
<input name="answer[4]" type="radio" value="Неверно">Редакторы исходного кода<br>
<input name="answer[4]" type="radio" value="Неверно">Графические редакторы<br>
<input name="answer[4]" type="radio" value="Верно">Текстовые редакторы<br>
<br>
<b>6.Что такое тэг:</b><br>
<input name="answer[5]" type="radio" value="Верно">команда, заключенная в угловые скобки<br>
<input name="answer[5]" type="radio" value="Неверно">указатель ссылки<br>
<input name="answer[5]" type="radio" value="Неверно">гиперссылка<br>
<br>
<b>7.Назовите атрибут обязательный для тега "img"</b><br>
<input name="answer[6]" type="radio" value="Неверно">with<br>
<input name="answer[6]" type="radio" value="Верно">src<br>
<input name="answer[6]" type="radio" value="Неверно">title<br>
<br>
<b>8.Программа для создания Web-страницы с использованием языка HTML:</b><br>
<input name="answer[7]" type="radio" value="Неверно">Paint<br>
<input name="answer[7]" type="radio" value="Неверно">MS Word<br>
<input name="answer[7]" type="radio" value="Верно">Блокнот<br>
<br>
<b>9.Тег позволяет задать:</b><br>
<input name="answer[8]" type="radio" value="Неверно">моноширинный шрифт<br>
<input name="answer[8]" type="radio" value="Верно">полужирный шрифт<br>
<input name="answer[8]" type="radio" value="Неверно">курсив<br>
<br>
<b>10.В чём разница между echo и print?</b><br>
<input name="answer[9]" type="radio" value="Неверно">Между этими функциями нет никакой разницы<br>
<input name="answer[9]" type="radio" value="Неверно">echo можно использовать как часть выражения, а print нет<br>
<input name="answer[9]" type="radio" value="Верно">print можно использовать как часть выражения, а echo нет<br>
<br>
<b>11.Содержимое одного и того же HTML-документа отображается одинаково во всех браузерах.</b><br>
<input name="answer[10]" type="radio" value="Верно">нет<br>
<input name="answer[10]" type="radio" value="Неверно">да<br>
<br>
<b>12.Что такое cms?</b><br>
<input name="answer[11]" type="radio" value="Неверно">Это система управления гиперссылками<br>
<input name="answer[11]" type="radio" value="Верно">Это система управления сайтом<br>
<input name="answer[11]" type="radio" value="Неверно">Это разметка рисунков и графики<br>
<br>


<br>
<input type='submit' name="Submit" value='Завершить'>
</form>
<?php
$k=0;
   if (is_array($_GET['answer'])){
   foreach($_GET['answer'] as $value) 
        {
         if ($value=='Верно') { 
         $k=$k+1;
        }
        echo $value, '<br>'; 
        }
  echo "У вас {$k} правильных ответов", '<br>'; 
      }
?>
</body>
</html>