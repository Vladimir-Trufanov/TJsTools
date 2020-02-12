// JavaScript/PHP7/HTML5, EDGE/CHROME                      *** TTrimTest.js ***

// ****************************************************************************
// * TJsPrown:      Test "Убрать пробелы и табуляции с начала и конца текста" *
// ****************************************************************************

//                                                   Автор:       Труфанов В.Е.
//                                                   Дата создания:  03.06.2019
// Copyright © 2019 tve                              Посл.изменение: 12.02.2020

QUnit.test('Первая функция Trim()', function (assert) 
{
   assert.equal(Trim(' x'), 'x', 'Начальные пробелы');
});
// *********************************************************** TTrimTest.js ***