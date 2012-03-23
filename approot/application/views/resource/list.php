
<script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="/uploadify/swfobject.js"></script>
<script type="text/javascript" src="/uploadify/jquery.uploadify.v2.1.4.min.js"></script>
<script type="text/javascript">
// <![CDATA[
$(document).ready(function() {
  $('#file_upload').uploadify({
    'uploader'  : '/uploadify/uploadify.swf',
    'script'    : '/resource/upload',
    'cancelImg' : '/uploadify/cancel.png',
    'folder'    : '/uploads',
    'auto'      : true
  });
});
// ]]>
</script>
<input id="file_upload" type="file" name="file_upload" />

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