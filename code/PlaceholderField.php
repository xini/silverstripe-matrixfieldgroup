<?php
/**
 * Hidden field.
 *
 * @package forms
 * @subpackage fields-dataless
 */
class PlaceholderField extends DatalessField
{

    public function FieldHolder($properties = array())
    {
        return $this->Field($properties);
    }

    public function __construct()
    {
        $name = "placeholder-".rand(0, 1000);
        parent::__construct($name);
    }
}
