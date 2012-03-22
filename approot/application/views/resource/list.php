<table class="table table-striped">
    <thead>
    <tr>
        <td>#</td>
        <td>Name</td>
        <td>ShortCode</td>
        <td>Comment</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($rlist as $r):?>
    <tr>
        <td><?php echo $r['resource_id'];?></td>
        <td><?php echo $r['name'];?></td>
        <td><?php echo $r['short'];?></td>
        <td><?php echo $r['comment'];?></td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>