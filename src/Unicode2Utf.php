<?php
namespace Crlt\Tools;

class Unicode2Utf
{
    public function transform($content)
    {
        $replacedString = preg_replace("/\\\\u(\w{4})/", "&#x$1;", $content);
        $unicodeString = mb_convert_encoding($replacedString, 'UTF-8', 'HTML-ENTITIES');
        return $unicodeString;
    }
}

