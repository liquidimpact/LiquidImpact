<?php defined('SYSPATH') or die('No direct script access.');

class Model_Base extends Model_Database {
   public function query($sql)
   {
       return $this->_db->query(Database::SELECT, $sql);
   }

    public function delete($sql)
    {
        return $this->_db->query(Database::DELETE, $sql);
    }

    public function update($sql)
    {
        return $this->_db->query(Database::UPDATE, $sql);

    }

    public function insert($sql)
    {
        return $this->_db->query(Database::INSERT, $sql);
    }

    protected function generate_field($data)
    {
        $arr = array();
        foreach($data as $key=>$val)
        {
            array_push($arr, "`{$key}` = '{$val}'");
        }
        return implode(',', $arr);
    }
}