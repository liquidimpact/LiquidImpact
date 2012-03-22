<form class="form-horizontal" action="/client/edit" method="POST">
<?php if (array_key_exists('client_id', $client)):?>
    <input type="hidden" name="client_id" id="client_id" value="<?php echo $client['client_id'];?>" />
    <legend>Edit Client</legend>
<?php else: ?>
    <legend>Add Client</legend>
<?php endif;?>
    <fieldset>
      <div class="control-group">
        <label class="control-label" for="client_name">Name</label>
        <div class="controls">
          <input type="text" class="input-xlarge" id="client_name" name="client_name" value="<?php echo $client['client_name'];?>" />
          <p class="help-block">Client Name</p>
        </div>
      </div>
      <div class="control-group">
<?php if (array_key_exists('client_id', $client)):?>
    <img class="client_log" src="<?php echo $client['client_log'];?>"/>
        <input type="hidden" name="client_log" value="<?php echo $client['client_log'];?>" />
<?php endif;?>
        <label class="control-label" for="fileInput">Client Logo</label>
        <div class="controls">
          <input class="input-file" id="fileInput" type="file">
          <p class="help-block">If not modify then left blank.</p>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="content">Content</label>
        <div class="controls">
          <textarea rows="10" cols="50" class="input-xxlarge" name="content" id="content"><?php echo $client['content'];?></textarea>
        </div>
      </div>
      <div class="form-actions">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button class="btn">Cancel</button>
      </div>
    </fieldset>
  </form>