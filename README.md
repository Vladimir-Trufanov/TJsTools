TJsTools: Библиотека JavaScript - прикладных прототипов объектов 

Дата создания: 11.02.2020 
Версия:   1.0, 11.02.2020                                 
Автор:      Труфанов В.Е. 
Copyright © 2020 tve                             

   Библиотека JavaScript-прикладных функций содержит набор небольших программных
модулей, которые часто используются при программировании сайтов. 
   Основное назначение функций библиотеки разгрузить серверы и перенести 
работу по взаимодействию пользователей с содержимым сайтов на их компьютеры.
   Часть функций библиотеки помогают сайтам настроиться на браузеры 
пользователей и сделать более удобным их взаимодействие.

Справочник библиотеки TJsTools:

Консоль браузера -
Контейнер LocalStorage -
Обработка события по завершению загрузки страницы - 

Шаблон описания прототипов объектов

Назначение:
Функция выполняет конкретную и часто возникающую задачу - выбрать из строки
подстроку по заданному регулярному выражению и узнать её начальную позицию 
в этой строке. 
Findes возвращает первое или единственное вхождение подстроки в исходной 
строке, а в случае неудачи возвращает пустую строку.
Через третий параметр функция по ссылке возвращает позицию найденного 
фрагмента, начиная с нулевого значения, или -1, если фрагмент не найден.
 
Синтаксис:                                     
$Result=Findes($preg,$string,&$point);

Параметры:
$preg   - текст регулярного выражения;
$string - текст, который должен быть обработан регулярным выражением;
$point  - позиция начала найденного фрагмента после работы 
   регулярного выражения (параметр по ссылке). $point=-1, если фрагмент 
   не найден;  

Возвращаемое значение: 
   $Result  - найденный фрагмент после работы регулярного выражения или
   пустая строка, если фрагмент не был найден
