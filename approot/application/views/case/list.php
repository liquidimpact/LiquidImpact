<table class="table table-striped">
    <thead>
    <tr>
        <td>#</td>
        <td>Name</td>
        <td>Categroy</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($case_list as $case):?>
        <tr>
    <td><?php echo $case['case_id'];?></td>
    <td><?php echo $case['name'];?></td>
    <td><?php echo He::$category[$case['category']];?></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>