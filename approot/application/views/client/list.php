<table>
    <thead>
    <tr>
        <td>#</td>
        <td>Name</td>
        <td>text</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($client_list as $client):?>
        <tr>
    <td><?php echo $client['client_id'];?></td>
    <td><?php echo $client['client_name'];?></td>
    <td><?php echo $client['content'];?></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>