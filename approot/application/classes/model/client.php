<?php defined('SYSPATH') or die('No direct script access.');

class Model_Client extends Model_Base {

    public function get_client($client_id)
    {
        $sql = "SELECT *
                FROM clients
                WHERE
                  client_id = {$client_id}
                ";
        $result = $this->query($sql);

        return $result->current();
    }

    public function get_page($page, $per_page = 20)
    {
        $offset = ($page - 1) * $per_page;
        $sql = "SELECT *
                FROM clients
                LIMIT {$offset}, {$per_page}
                ";

        $result = $this->query($sql);

        return $result->as_array();
    }

    public function get_all()
    {
        $sql = 'SELECT * FROM clients';

        $result = $this->query($sql);

        return $result->as_array();
    }

    public function update_client($client_id, $data)
    {
        $feilds = $this->generate_field($data);

        $sql = "UPDATE clients
                SET
                  {$feilds}
                WHERE
                  `client_id` = {$client_id}
                ";
        return $this->update($sql);
    }

    public function del_client($client_id)
    {
        $sql = "DELETE FROM clients WHERE client_id = {$client_id}";
        return $this->delete($sql);
    }

    public function new_client($data)
    {
        $sql = "INSERT INTO clients(`name`, `description`)
                VALUES('{$data['name']}', '{$data['description']}')
                ";
        list($client_id, $rows) = $this->insert($sql);
        return $client_id;
    }

    public function update_logo($client_id, $path)
    {
        $sql = "UPDATE clients
                SET
                  `logo` = '$path'
                WHERE
                  `client_id` = {$client_id}
                ";
        return $this->update($sql);
    }
}