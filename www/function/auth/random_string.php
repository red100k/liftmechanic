<?php
# ФУНКЦИИ ГЕНЕРАЦИИ СЛУЧАЙНОЙ СТРОКИ (НАЧАЛО) 
function random_string($length, $chartypes) 
{
    // lower — символы в нижнем регистре
    // upper — символы в верхнем регистре
    // numbers — числа
    // special — специальные символы
    // ПРИМЕР
        // $length = 8;
        // $chartypes = "lower,numbers";
        // $string = random_string($length, $chartypes);
    ///////////////////////////////////////////////////////////
    $chartypes_array=explode(",", $chartypes);
    // задаем строки символов. 
    //Здесь вы можете редактировать наборы символов при необходимости
    $lower = 'abcdefghijklmnopqrstuvwxyz'; // lowercase
    $upper = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; // uppercase
    $numbers = '1234567890'; // numbers
    $special = '^@*+-+%()!?'; //special characters
    $chars = "";
    // определяем на основе полученных параметров, 
    //из чего будет сгенерирована наша строка.
    if (in_array('all', $chartypes_array)) {
        $chars = $lower . $upper. $numbers . $special;
    } else {
        if(in_array('lower', $chartypes_array))
            $chars = $lower;
        if(in_array('upper', $chartypes_array))
            $chars .= $upper;
        if(in_array('numbers', $chartypes_array))
            $chars .= $numbers;
        if(in_array('special', $chartypes_array))
            $chars .= $special;
    }
    // длина строки с символами
    $chars_length = strlen($chars) - 1;
    // создаем нашу строку,
    //извлекаем из строки $chars символ со случайным 
    //номером от 0 до длины самой строки
    $string = $chars{rand(0, $chars_length)};
    // генерируем нашу строку
    for ($i = 1; $i < $length; $i = strlen($string)) {
        // выбираем случайный элемент из строки с допустимыми символами
        $random = $chars{rand(0, $chars_length)};
        // убеждаемся в том, что два символа не будут идти подряд
        if ($random != $string{$i - 1}) $string .= $random;
    }
    // возвращаем результат
    return $string;
}
# ФУНКЦИИ ГЕНЕРАЦИИ СЛУЧАЙНОЙ СТРОКИ (КОНЕЦ)
?>