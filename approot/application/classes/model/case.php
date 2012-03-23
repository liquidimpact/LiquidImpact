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
        $sql = "INSERT INTO cases(`name`, `description`, `client_id`)
                VALUES('{$data['name']}', '{$data['description']}', {$data['client_id']})
                ";
        list($id, $rows) = $this->insert($sql);
        return $id;
    }

    public function del_case($case_id)
    {}

    public function update_case($case_id, $data)
    {
        $feilds = $this->generate_field($data);

        $sql = "UPDATE cases
                SET
                  {$feilds}
                WHERE
                  `case_id` = {$case_id}
                ";
        return $this->update($sql);
    }

    public function get_page($page, $per_page = 20)
    {
        $offset = ($page - 1)* $per_page;
//        SELECT case_id,  cases.name, cases.description, category, clients.name as client_name FROM `cases` left JOIN `clients` on cases.client_id = clients.client_id
        $sql = "SELECT
                  case_id, cases.name, cases.description, category, clients.name AS client_name
                FROM
                  `cases`
                LEFT JOIN `clients` ON cases.client_id = clients.client_id
                ORDER BY
                  case_id
                LIMIT {$offset}, {$per_page}
                ";

        $result = $this->query($sql);
        return $result->as_array();
    }
}