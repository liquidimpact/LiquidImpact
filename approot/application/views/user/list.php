<table class="table table-striped">
    <thead>
    <tr>
        <td>#</td>
        <td>Name</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($user_list as $u):?>
    <tr>
        <td><?php echo $u['user_id'];?></td>
        <td><?php echo $u['name'];?></td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>