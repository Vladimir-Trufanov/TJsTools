// JavaScript/PHP7/HTML5, EDGE/CHROME                     *** isEvenTest.js ***

// ****************************************************************************
// * TJsPrown:                   Test "Проверить, четно ли числовое значение" *
// ****************************************************************************

//                                                   Автор:       Труфанов В.Е.
//                                                   Дата создания:  03.06.2019
// Copyright © 2019 tve                              Посл.изменение: 12.02.2020

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
// ********************************************************** isEvenTest.js ***
