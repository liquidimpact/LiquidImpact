<?php defined('SYSPATH') or die('No direct script access.');

class Model_Client extends Model_Base {

    public function get_client($client_id)
    {
        $sql = "SELECT *
                FROM cliens
                WHERE
                  client_id = {$client_id}
                ";
        $result = $this->query($sql);

        return $result->current();
    }

    public function get_page($page, $per_page = 20)
    {
        $page = $page - 1;
        $sql = "SELECT *
                FROM clients
                LIMIT $per_page, {$page * $per_page}
                ";

        $result = $this->query($sql);

        return $result->as_array();
    }

    public function update_client($data)
    {
        $sql = '';
        return $this->update($sql);
    }

    public function del_client($client_id)
    {
        $sql = "DELETE * FROM clients WHERE client_id = {$client_id}";
        return $this->delete($sql);
    }

    public function new_client($data)
    {
        $sql = '';
        return $this->insert($sql);
    }
}