<?php

/**
 * Class dbObject
 * get_called_class(): Gets the name of the class the static method is called in
 * get_parent_class(): retrieves the parent class name for object or class
 * get_class(): return the name of the class of an object
 * is_subclass_of: check if the object has this class on of its parents or implements it
 */
abstract class dbObject
{
    const TABLE_NAME='undefined';

    public static function GetAll()
    {
        $c = get_called_class();
        return "SELECT * FROM `".$c::TABLE_NAME."`";
    }
}

class dbPerson extends dbObject
{
    const TABLE_NAME='persons';
}

class dbAdmin extends dbPerson
{
    const TABLE_NAME='admins';
}

echo dbPerson::GetAll()."<br>";//output: "SELECT * FROM `persons`"
echo dbAdmin::GetAll()."<br>";//output: "SELECT * FROM `admins`"