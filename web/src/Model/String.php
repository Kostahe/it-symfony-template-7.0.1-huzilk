<?php

class String {
    public static function addslashes(string $string): string {
        return addslashes($string);
    }
    public static function chr(int $codepoint): string {
        return chr($codepoint);
    }
    public static function explode(string $separator, string $string, int $limit = PHP_INT_MAX): array {
        return explode($separator, $string, $limit);
    }
    public static function implode(string $separator, array $array): string {
        return implode($separator, $array);
    }
    public static function join(object $separator, array $array): string {
        return join($separator, $array);
    }
    public static function md5(string $string, bool $binary = false): string {
        return md5($string)
    }
    


}