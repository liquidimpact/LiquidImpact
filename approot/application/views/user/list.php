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
        <td><?php echo $u['name'];?></td>
        <td><?php echo He::$permission[$u['permission']];?></td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>