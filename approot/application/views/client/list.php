<table class="table table-striped">
    <thead>
    <tr>
        <td>#</td>
        <td>Name</td>
        <td>Description</td>
        <td>Logo</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($client_list as $client):?>
        <tr>
    <td><?php echo $client['client_id'];?></td>
    <td><a href="/client/edit/<?php echo $client['client_id'];?>"><?php echo $client['name'];?></a></td>
    <td><?php echo $client['description'];?></td>
    <td><img src="<?php echo $client['logo'];?>" alt="logo"/></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>