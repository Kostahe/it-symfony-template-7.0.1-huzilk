<?php

namespace App\Model;

/**
 * @author Konstantyn Huzil
 */
class Strings
{
    /**
     * @param string $string
     * @return string
     * @author Konstantyn Huzil
     */
    public static function addslashes(string $string): string
    {
        return addslashes($string);
    }

    /**
     * @param int $codepoint
     * @return string
     * @author Konstantyn Huzil
     */
    public static function chr(int $codepoint): string
    {
        return chr($codepoint);
    }

    /**
     * @param string $separator
     * @param string $string
     * @param int $limit
     * @return array
     * @author Konstantyn Huzil
     */
    public static function explode(string $separator, string $string, int $limit = PHP_INT_MAX): array
    {
        return explode($separator, $string, $limit);
    }

    /**
     * @param array|string|null $separator
     * @param array|null $array
     * @return string
     * @author Konstantyn Huzil
     */
    public static function implode(array|string|null $separator, ?array $array): string
    {
        return implode($separator, $array);
    }

    /**
     * @param array|string $separator
     * @param array|null $array
     * @return string
     * @author Konstantyn Huzil
     */
    public static function join(array|string|null $separator, ?array $array): string
    {
        return join($separator, $array);
    }

    /**
     * @param string $string
     * @param bool $binary
     * @return string
     * @author Konstantyn Huzil
     */
    public static function md5(string $string, bool $binary = false): string
    {
        return md5($string, $binary);
    }

    /**
     * @param string $character
     * @return int
     * @author Konstantyn Huzil
     */
    public static function ord(string $character): int
    {
        return ord($character);
    }

    /**
     * @param string $haystack
     * @param string $needle
     * @param bool $before_needle
     * @return string|false
     * @author Konstantyn Huzil
     */
    public static function strchr(string $haystack, string $needle, bool $before_needle = false): string|false
    {
        return strchr($haystack, $needle, $before_needle);
    }

    /**
     * @param string $string
     * @return int
     * @author Konstantyn Huzil
     */
    public static function strlen(string $string): int
    {
        return strlen($string);
    }

    /**
     * @param string $haystack
     * @param string $needle
     * @param int $offset
     * @return int|false
     * @author Konstantyn Huzil
     */
    public static function strpos(string $haystack, string $needle, int $offset = 0): int|false
    {
        return strpos($haystack, $needle, $offset);
    }

    /**
     * @param string $haystack
     * @param string $needle
     * @return string|false
     * @author Konstantyn Huzil
     */
    public static function strrchr(string $haystack, string $needle): string|false
    {
        return strrchr($haystack, $needle);
    }

    /**
     * @param string $string
     * @return string
     * @author Konstantyn Huzil
     */
    public static function strrev(string $string): string
    {
        return strrev($string);
    }

    /**
     * @param string $haystack
     * @param string $needle
     * @param bool $before_needle
     * @return string|false
     * @author Konstantyn Huzil
     */
    public static function strstr(string $haystack, string $needle, bool $before_needle = false): string|false
    {
        return strstr($haystack, $needle, $before_needle);
    }

    /**
     * @param string $string
     * @return string
     * @author Konstantyn Huzil
     */
    public static function strtolower(string $string): string
    {
        return strtolower($string);
    }

    /**
     * @param string $string
     * @return string
     * @author Konstantyn Huzil
     */
    public static function strtoupper(string $string): string
    {
        return strtoupper($string);
    }

    /**
     * @param array|string $string
     * @param array|string $replace
     * @param array|int $offset
     * @param array|int|null $length
     * @return array|string
     * @author Konstantyn Huzil
     */
    public static function substr_replace(array|string $string, array|string $replace, array|int $offset, array|int|null $length = null): array|string
    {
        return substr_replace($string, $replace, $offset, $length);
    }

    /**
     * @param string $string
     * @param int $offset
     * @param int|null $length
     * @return string
     * @author Konstantyn Huzil
     */
    public static function substr(string $string, int $offset, ?int $length): string
    {
        return substr($string, $offset, $length);
    }

    /**
     * @param string $string
     * @return string
     * @author Konstantyn Huzil
     */
    public static function ucfirst(string $string): string
    {
        return ucfirst($string);
    }

    /**
     * @param string $string
     * @param string $separators
     * @return string
     * @author Konstantyn Huzil
     */
    public static function ucwords(string $string, string $separators = " \t\r\n\f\v"): string
    {
        return ucwords($string, $separators);
    }

}