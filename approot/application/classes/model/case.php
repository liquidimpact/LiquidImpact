<?php defined('SYSPATH') or die('No direct script access.');

class Model_Case extends Model_Base {

    public function get_case($case_id)
    {
        $sql = "SELECT *
                FROM
                    cases
                WHERE
                    case_id = {$case_id}
                ";
        $result = $this->query($sql);
        return $result->current();
    }

    public function new_case($data)
    {
        $sql = "INSERT INTO
                ";

        return $this->insert($sql);
    }

    public function del_case($case_id)
    {}

    public function update_case($data)
    {
        $sql = "";
        parent::update($sql);
    }

    public function get_page($page, $per_page = 20)
    {
        $offset = ($page - 1)* $per_page;

        $sql = "SELECT *
                FROM cases
                ORDER BY
                  case_id
                LIMIT {$per_page}, {$offset}
                ";

//        $result = $this->query($sql);
//        return $result->as_array();
        return array();
    }
}