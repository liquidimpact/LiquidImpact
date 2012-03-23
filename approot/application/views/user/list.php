<table class="table table-striped">
    <thead>
    <tr>
        <td>#</td>
        <td>Name</td>
        <td>Permission</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($user_list as $u):?>
    <tr>
        <td><?php echo $u['user_id'];?></td>
        <td><a href="/user/edit/<?php echo $u['user_id'];?>"><?php echo $u['name'];?></a></td>
        <td><?php echo He::$permission[$u['permission']];?></td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>