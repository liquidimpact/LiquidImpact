<?php defined('SYSPATH') or die('No direct script access.');

class Model_Resource extends Model_Base {

    public function get_resource($rid)
    {
        $sql = "SELECT *
                FORM resources WHERE `resource_id` == {$rid}";

        $result = $this->query($sql);
        return $result->current();
    }

    public function rm($rid)
    {
        $sql = "DELETE * FROM resources WHERE `resouce_id` = {$rid}";

        return $this->delete($sql);
    }

    public function add($data)
    {
        $sql = "INSERT INTO resource(`fpath`)
                values ({$data['fpath']})
                ";
        list($id, $row) = $this->insert($sql);
        return $id;
    }

    public function get_page($page, $per_page = 20)
    {
        $offset = ($page - 1) * $per_page;
        $sql = "SELECT *
                FROM resources
                ORDER BY
                  `resource_id` DESC
                LIMIT {$per_page}, {$offset};
                ";

//        $result = $this->query($sql);
//        return $result->as_array();
        return array();
    }
}