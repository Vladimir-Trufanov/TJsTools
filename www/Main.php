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
require_once $TPhpPrown."/TPhpPrownTests/FunctionsBlock.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>TJsTools: Библиотека JavaScript - прикладных прототипов объектов</title>
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Anonymous+Pro:400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet">

<link rel="stylesheet" type="text/css" 
   href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.3/themes/ui-lightness/jquery-ui.css">
<script
   src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.2.min.js">
</script>
<script 
   src="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.11.2/jquery-ui.min.js">
</script>

<link rel="stylesheet" href="https://code.jquery.com/qunit/qunit-2.9.2.css">
<script src="https://code.jquery.com/qunit/qunit-2.9.2.js"></script>

</head>
<body>

<?php
// Определяем сайтовые константы
define ("ChooseAll",  "Выбрать все прототипы"); // Первая кнопка Submit  
define ("ToTest",     "Протестировать");        // Вторая кнопка Submit 

// Инициализируем список прикладных классов библиотеки TJsTools 
$aTJsTools=array
(            
   'TCookie'   =>'установить, удалить кукисы. Определить свойства кукисов',   
   'isEven'    =>'проверить, четно ли числовое значение',   
   'Trim'      =>'убрать пробелы и табуляции с начала и конца текста',   
);

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
   echo ('ChooseAll<br>');
   FunctionsCheckbox($aTJsTools,ChooseAll);
}
else if (prown\isComRequest(ToTest,'formSubmit'))
{
   echo ('ToTest<br>');
   // Вырисовываем чекбоксы для тестирования
   FunctionsCheckbox($aTJsTools,ToTest);
   // Запускаем тестирование
   MakeTest($SiteRoot,$aTJsTools,'JS');
   LeadTest();
}
else
{
   echo ('3<br>');
   // Вырисовываем чекбоксы 
   FunctionsCheckbox($aTJsTools,ToTest);
}



/*
echo '<script src="TJsTools/Trim.js"></script>';
echo '<script src="TJsToolsTests/TTrimTest.js"></script>'; 

echo '<script src="TJsTools/isEven.js"></script>'; 
echo '<script src="TJsToolsTests/TisEvenTest.js"></script>'; 
*/


?>
</body> 
</html>
<?php
// *************************************************************** Main.php ***
