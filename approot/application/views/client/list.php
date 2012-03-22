<table class="table table-striped">
    <thead>
    <tr>
        <td>#</td>
        <td>Name</td>
        <td>Description</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($client_list as $client):?>
        <tr>
    <td><?php echo $client['client_id'];?></td>
    <td><?php echo $client['name'];?></td>
    <td><?php echo $client['description'];?></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>