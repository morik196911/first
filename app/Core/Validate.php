<?php
namespace App\Core;

class Validate {
    public function print_array($data) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    public function checkInArray() {
        
    }
  /*
  Ограничение вывода слов
  Если важно не отрывать знаки препинания от слов
  */
    function truncateWordsWithPunctuation($text, $wordCount) {
    // Разбиваем по пробелам, но сохраняем знаки препинания с словами
    $words = preg_split('/(\s+)/u', $text, -1, PREG_SPLIT_DELIM_CAPTURE);
    
    // Фильтруем только слова (убираем пустые элементы и пробелы)
    $filteredWords = array_filter($words, function($word) {
        return trim($word) !== '';
    });
    
    if (count($filteredWords) <= $wordCount) {
        return $text;
    }
    
    $truncated = array_slice($filteredWords, 0, $wordCount);
    return implode(' ', $truncated) . '...';
}

}