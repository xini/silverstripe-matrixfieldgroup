<?php

class MatrixFieldGroup extends FieldGroup
{
    
    protected $columnHeaders;
    
    public function __construct($name)
    {
        $this->name = $name;
        
        parent::__construct();
    }
    
    public function FieldHolder($properties = array())
    {
        Requirements::css(MATRIXFIELDGROUP_DIR."/css/matrixfieldgroup.css");
        return $this->Field($properties);
    }
        
    public function getColumnHeaders()
    {
        return $this->columnHeaders;
    }
    
    public function setColumnHeaders($columnHeaders)
    {
        if (is_array($columnHeaders)) {
            $data = array();
            foreach ($columnHeaders as $header) {
                $data[] = array("Title" => $header);
            }
            $this->columnHeaders = new ArrayList($data);
        }
        if ($this->columnHeaders) {
            $this->columnCount = $this->columnHeaders->count();
        }
        return $this;
    }

    public function addRow($items)
    {
        if (func_num_args() != $this->columnCount) {
            trigger_error("Number of fields per row must be the same as number of header strings.", E_USER_ERROR);
        }
        if (!is_array($items) || func_num_args() > 1) {
            $items = func_get_args();
            $title = array_shift($items);
            $this->push(new NakedTextField($title));
        }
        foreach ($items as $field) {
            if ($field) {
                $this->push($field);
            } else {
                $this->push(new PlaceholderField());
            }
        }
        return $this;
    }
}
