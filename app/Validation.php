<?php


namespace ToDo;


class Validation
{
    private static $errors = [];

    public static function validate($data)
    {
        self::validateSubject($data);
        self::validatePriority($data);
        self::validateDate($data);
        return self::$errors;
    }

    private function validateSubject()
    {
        if (empty($_POST['subject']) || !preg_match('/\w{5,255}$/', $_POST['subject'])) {
           self::$errors[] = "The subject field should be from 5 to 255 symbols";
        }
    }

    private function validatePriority()
    {
        if (empty($_POST['priority'])) {
            self::$errors[] = "The priority field should not be empty";
        }
    }

    private function validateDate()
    {
        if ($_POST['duedate'] < date("Y-m-d")) {
            self::$errors[] = "The date can't be in the past";
        }
    }
}

