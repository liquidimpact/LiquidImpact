<form class="form-horizontal" action="/client/edit" method="POST" enctype="multipart/form-data">
  <?php if (array_key_exists('client_id', $client)):?>
      <input type="hidden" name="client_id" id="client_id" value="<?php echo $client['client_id'];?>" />
      <legend>Edit Client</legend>
  <?php else: ?>
      <legend>Add Client</legend>
  <?php endif;?>
      <fieldset>
        <div class="control-group">
          <label class="control-label" for="name">Name</label>
          <div class="controls">
            <input type="text" class="input-xlarge" id="name" name="name" value="<?php echo $client['name'];?>" />
            <p class="help-block">Client Name</p>
          </div>
        </div>
        <div class="control-group">
  <?php if (array_key_exists('client_id', $client)):?>
      <img class="client_logo" src="<?php echo $client['logo'];?>"/>
          <input type="hidden" name="logo" value="<?php echo $client['logo'];?>" />
  <?php endif;?>
          <label class="control-label" for="logo">Client Logo</label>
          <div class="controls">
            <input class="input-file" id="logo" type="file" name="logo">
            <p class="help-block">If not modify then left blank.</p>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="content">Description</label>
          <div class="controls">
            <textarea rows="10" cols="50" class="input-xxlarge" name="description" id="description"><?php echo $client['description'];?></textarea>
          </div>
        </div>
        <div class="form-actions">
          <button type="submit" class="btn btn-primary">Save</button>
          <button class="btn">Cancel</button>
        </div>
      </fieldset>
    </form>