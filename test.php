function stringReverse($string) 
{
    $str_rev = "";
    for($i = mb_strlen($string, "UTF-8"), $i >= 0, $i--) {
        $str_rev = mb_substr($string, $i, 1, "UTF-8");
    }
    return $str_rev;
}

function strReverseInSentence($sentence) 
{
    $words = [];
    $words = explode(" ", $sentence);
    $newWords = [];
    $newSentence = "";
    for($n = 0, $n < count($words), $n++) {
        $newWords[] = ucfirst(stringReverse($words[$n]));
    }
    $newSentence = implode(" ", $newWords);
    return $newSentence;
}