<table class="table table-striped">
    <thead>
    <tr>
        <td>#</td>
        <td>Name</td>
        <td>Categroy</td>
        <td>Client</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($case_list as $case):?>
        <tr>
    <td><?php echo $case['case_id'];?></td>
    <td><a href="/case/edit/<?php echo $case['case_id'];?>"><?php echo $case['name'];?></a></td>
    <td><?php echo He::$category[$case['category']];?></td>
    <td><?php echo $case['client_name'];?></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>