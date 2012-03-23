<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends Model_Base {
    public function get_page($page, $per_page = 20)
    {
        $offset = ($page - 1) * $per_page;
        $sql = "SELECT *
                FROM users
                ORDER BY user_id
                LIMIT $offset, $per_page
                ";
        $result = $this->query($sql);
        return $result->as_array();
    }

    public function get_user($user_id)
    {
        $sql = "SELECT *
                FROM users
                WHERE `user_id` = '$user_id'
                ";

        $result = $this->query($sql);
        return $result->current();
    }


    public function add_user($data)
    {
        $sql = "INSERT INTO users(`name`, `password`, `permission`)
                VALUES('{$data['name']}', '{$data['password']}', {$data['permission']})
                ";
        list($user_id, $rows) = $this->insert($sql);
        return $user_id;
    }

    public function update_user($user_id, $data)
    {
        $feilds = $this->generate_field($data);

        $sql = "UPDATE users
                SET
                  {$feilds}
                WHERE
                  `user_id` = '{$user_id}'
                ";

        return $this->update($sql);
    }

    public function del_user($user_id)
    {
        $sql = "DELETE *
                FROM users
                WHERE `user_id` = '$user_id'
                ";

        return $this->delete($sql);
    }
}