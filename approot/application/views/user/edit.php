<form class="form-horizontal" action="/user/edit" method="POST">
<?php if (array_key_exists('user_id', $user)):?>
    <input type="hidden" name="user_id" id="user_id" value="<?php echo $user['user_id'];?>" />
    <legend>Edit user</legend>
<?php else: ?>
    <legend>Add user</legend>
<?php endif;?>
    <fieldset>
      <div class="control-group">
        <label class="control-label" for="name">Name</label>
        <div class="controls">
          <input type="text" class="input-xlarge" id="name" name="name" value="<?php echo $user['name'];?>" />
          <p class="help-block">User Name</p>
        </div>
      </div>
        <div class="control-group">
          <label class="control-label" for="password">Password</label>
          <div class="controls">
            <input type="password" class="input-xlarge" id="password" name="password" />
            <p class="help-block">Password, more than 8 characters</p>
            <input type="password" class="input-xlarge" id="repasword" name="repasword" />
            <p class="help-block">Password, repeat again</p>
          </div>
        </div>
        <label class="control-label" for="permission">Permission</label>
            <div class="controls">
              <select id="permission" name="permission">
                <?php foreach(He::$permission as $key=>$val):?>
                <option value="<?php echo $key;?>" <?php if($user['permission'] == $key):?> selected="selected" <?php endif;?>><?php echo $val;?></option>
                <?php endforeach;?>
              </select>
                <p class="help-block">Choose case permission.</p>
            </div>
      <div class="form-actions">
        <button type="submit" class="btn btn-primary">Save</button>
        <button class="btn">Cancel</button>
      </div>
    </fieldset>
  </form>