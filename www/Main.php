<?php
// PHP7/HTML5, EDGE/CHROME                                     *** Main.php ***

// ****************************************************************************
// * TJsTools-test     Библиотека JavaScript - прикладных прототипов объектов *
// ****************************************************************************

//                                                   Автор:       Труфанов В.Е.
//                                                   Дата создания:  13.01.2020
// Copyright © 2020 tve                              Посл.изменение: 11.02.2020

// Подключаем файлы библиотеки прикладных модулей и рабочего пространства

$TPhpPrown=$SiteHost.'/TPhpPrown';
require_once $TPhpPrown."/TPhpPrown/CommonPrown.php";
require_once $TPhpPrown."/TPhpPrown/Findes.php";
require_once $TPhpPrown."/TPhpPrown/getTranslit.php";
require_once $TPhpPrown."/TPhpPrown/iniConstMem.php";
require_once $TPhpPrown."/TPhpPrown/isCalcInBrowser.php";
require_once $TPhpPrown."/TPhpPrown/MakeType.php";
require_once $TPhpPrown."/TPhpPrown/ViewGlobal.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>TJsTools: Библиотека JavaScript - прикладных прототипов объектов</title>
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Anonymous+Pro:400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="Styles/Styles.css">

<link rel="stylesheet" type="text/css" 
   href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.3/themes/ui-lightness/jquery-ui.css">
<script
   src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.2.min.js">
</script>
<script 
   src="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.11.2/jquery-ui.min.js">
</script>

<link rel="stylesheet" href="qunit-2.9.2.css">
<script src="qunit-2.9.2.js" ></script> 

<script>
   function trima(text) 
   {
      return (text || "").replace(/^\s+|\s+$/g, "");
   }
</script>



</head>
<body>

<?php
// Определяем сайтовые константы
define ("ChooseAll",  "Выбрать все классы"); // Первая кнопка Submit  
define ("ToTest",     "Протестировать");      // Вторая кнопка Submit 

// Инициализируем список прикладных классов библиотеки TJsTools 
$aTJsTools=array
(            
   'iniWorkSpace'   =>'cформировать массив параметров рабочего пространства сайта',   
   'Findes'         =>'выбрать из строки подстроку, соответствующую регулярному выражению',   
   'isCalcInBrowser'=>'определить по родительским браузерам работает ли функция Calc для CSS',   
   'MakeType'       =>'преобразовать значение к заданному типу',
   'MakeUserError'  =>'cгенерировать ошибку/исключение или просто сформировать сообщение об ошибке',
);
// ****************************************************************************
// *            Вывести список прикладных классов библиотеки TJsTools         *
// ****************************************************************************

// Выводим форму для следующего тестирования, которая предоставляет пользователю
// несколько вариантов выбора: 

// все флажки имеют одно имя (formDoor[]). Одно имя говорит о том, 
// что все флажки связаны между собой. Квадратные скобки указывают на то, 
// что все значения будут доступны из одного массива. 
// То есть $_POST['formDoor'] возврашает массив, содержащий значения флажков, 
// которые были выбраны пользователем.
// 
// С помощью кнопки "Выбрать всё" и запроса соответствующего типа
// http://localhost:84/index.php?
//    formSubmit=%D0%92%D1%8B%D0%B1%D1%80%D0%B0%D1%82%D1%8C+%D0%B2%D1%81%D1%91
//    &
//    formDoor%5B%5D=Findes можно выбрать все флажки

function FunctionsCheckbox($aTJsTools,$isCheck=ToTest)
{
   $Result = true;
   echo '<form action="'.htmlentities($_SERVER['PHP_SELF']).'" method="post">';
   echo '<p>Укажите прототифункции TPhpPrown, которые следует протестировать?<br><br>';
   echo '<input type="submit" name="formSubmit" value="'.ChooseAll.'"/><br><br>';
   foreach($aTJsTools as $k=>$v)
   {
      if ($isCheck==ChooseAll)
      {
         echo '<input type="checkbox" checked name="formDoor[]" value="'.$k.'"/>'.$k.' - '.$v.'<br>';
      }
      else
      {
         echo '<input type="checkbox" name="formDoor[]" value="'.$k.'"/>'.$k.' - '.$v.'<br>';
      }
   }
   echo '</p>';
   echo '<input type="submit" name="formSubmit" value="'.ToTest.'"/><br><br>';
   echo '</form>';
   return $Result;
}
// ---
//phpinfo();
//echo 'Работаю!<br>';
//echo $SiteRoot.'<br>';
//echo $SiteHost.' Работаю!<br>';
//echo $TPhpPrown.' Работаю!<br>';
//echo $UserAgent.' Работаю!<br>';
//prown\ViewGlobal(avgSERVER);
// ---

if (prown\isComRequest(ChooseAll,'formSubmit'))
{
   FunctionsCheckbox($aTJsTools,ChooseAll);
}
else if (prown\isComRequest(ToTest,'formSubmit'))
{
   // Вырисовываем чекбоксы для тестирования
   FunctionsCheckbox($aTJsTools,ToTest);
   // Запускаем тестирование
   MakeTest($SiteRoot,$aTJsTools);
}
else
{
   // Вырисовываем чекбоксы 
   FunctionsCheckbox($aTJsTools,ToTest);
}

?>
<script>
   QUnit.test('Первая функция trima()', function (assert) 
   {
      assert.equal(trima(' x'), 'x', 'Начальные пробелы');
   });
   
   // Let's test this function
   function isEven(val) 
   {
      return val % 2 === 0;
   }

   QUnit.test('isEven()', function(assert) 
   {
      assert.ok(isEven(0), 'Zero is an even number');
      assert.ok(isEven(2), 'So is two');
      assert.ok(isEven(-4), 'So is negative four');
      assert.ok(!isEven(1), 'One is not an even number');
      assert.ok(!isEven(-7), 'Neither does negative seven');
      // Fails
      //assert.ok(isEven(3), 'Three is an even number');
   })
</script>

<!-- 
<h1 id="qunit-header">Заголовок страницы</h1>
<h2 id="qunit-banner"></h2>
<div id="qunit-testrunner-toolbar">Панель инструментов</div>
<h2 id="qunit-userAgent">UserAgent</h2>
<div id="qunit"></div>
<ol id="qunit-tests"></ol>
-->  
<!-- 
Делаем общий вывод прохождения тестов
в следующей последовательности: 
   а) заголовок страницы;
   б) разделитель (если он не был вызван ранее, в остальных случаях 
      без <div id="qunit"></div> тоже выводится один раз);    
   в) панель инструментов (если она не была вызвана отдельно);    
   г) UserAgent (если он не был вызван отдельно); 
   д) По клику на числе проверок в тесте, разворачивается список проверок   
<div id="qunit"></div>
-->
<h2 id="qunit-userAgent"></h2>
<h2 id="qunit-banner"></h2>
<ol id="qunit-tests"></ol>
<h2 id="qunit-userAgent"></h2>

</body> 
</html>
<?php
// *************************************************************** Main.php ***
