<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    public static function formatPrettyPhoneNumber($phone_number)
    {
        if ($phone_number == null) return '';
        if (strlen($phone_number) < 10) return '';
        $phone_number = str_replace('+1', '', $phone_number);
        return substr($phone_number, 0, 3) . '-' . substr($phone_number, 3, 3) . '-' . substr($phone_number, 6);
    }

    public static function formatPrettyDatetime($datetime, $hour_offset)
    {
        return date("m-d-y g:i a", strtotime($datetime) + (3600 * $hour_offset));
    }

    public static function extractNumbers($str, $str_between_numbers = '')
    {
        $matches = [];
        preg_match_all('!\d+!', $str, $matches);
        return implode($str_between_numbers, $matches[0]);
    }

    public static function filterRowId($id)
    {
        if ($id == null) die("An error has occured");

        $id = Utility::extractNumbers($id);

        return $id;
    }

    public static function getHashedPassword($password)
    {
        return password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
    }

    public static function getLastOfUrl()
    {
        return strrchr($_SERVER['REQUEST_URI'], '/');
    }

    public static function handleActiveNavigation($active_url)
    {
        if (self::getLastOfUrl() == $active_url) echo 'class="active"';
    }

    public static function getAlphaNumeric($str, $length)
    {
        return preg_replace("/[^a-zA-Z0-9 ]+/", "", trim(substr($str, 0, $length)));
    }

    public static function generateRandomString($min_length = 15, $max_length = 30, $alpha_num_only = false)
    {
        $length = rand($min_length, $max_length);
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        if (!$alpha_num_only) $characters .= '!@#$^&*()';
        $characters_length = strlen($characters);
        $random_string = '';
        for ($i = 0; $i < $length; $i++) $random_string .= $characters[rand(0, $characters_length - 1)];
        return $random_string;
    }

    public static function getFirstNameFromStr($name)
    {
        return strpos($name, ' ') !== false ? substr($name, 0, strpos($name, ' '))
            : $name;
    }
}
