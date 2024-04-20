<?php
function cipher(string $text, int $key): string
{
    $russianAlphabet = 'абвгдежзийклмнопрстуфхцчшщъыьэюя';
    $russianAlphabetArray = preg_split('//u', $russianAlphabet, -1, PREG_SPLIT_NO_EMPTY);

    $englishAlphabet = range('a', 'z');

    $textChars = preg_split('//u', $text, -1, PREG_SPLIT_NO_EMPTY);

    $result = '';
    foreach ($textChars as $symbol) {
        $currentAlphabet = $englishAlphabet;
        if (in_array($symbol, $russianAlphabetArray)) {
            $currentAlphabet = $russianAlphabetArray;
        }
        $currentIndex = array_search($symbol, $currentAlphabet);
        $newIndex = ($currentIndex + $key) % count($currentAlphabet);
        $result .= $currentAlphabet[$newIndex];
    }
    return $result;
}

echo cipher('абвгд', 1); // Результат должен быть "бвгде"
