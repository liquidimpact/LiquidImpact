<form class="form-horizontal" action="/case/edit" method="POST">
<?php if (array_key_exists('case_id', $case)):?>
    <input type="hidden" name="case_id" id="case_id" value="<?php echo $case['case_id'];?>" />
    <legend>Edit case</legend>
<?php else: ?>
    <legend>Add case</legend>
<?php endif;?>
    <fieldset>
      <div class="control-group">
        <label class="control-label" for="name">Name</label>
        <div class="controls">
          <input type="text" class="input-xlarge" id="name" name="name" value="<?php echo $case['name'];?>" />
          <p class="help-block">Case Name</p>
        </div>
      </div>
    <div class="control-group">
    <label class="control-label" for="category">Select list</label>
    <div class="controls">
      <select id="category" name="category">
        <?php foreach(He::$category as $key=>$val):?>
        <option value="<?php echo $key;?>" <?php if($case['category'] == $key):?> selected="selected" <?php endif;?>><?php echo $val;?></option>
        <?php endforeach;?>
      </select>
        <p class="help-block">Choose case category.</p>
    </div>
    <div class="control-group">
        <label class="control-label" for="category">Assign Company</label>
        <div class="controls">
          <select id="clients" name="client_id">
            <option value="0">Assign None</option>
            <?php foreach($client_list as $c):?>
            <option value="<?php echo $c['client_id'];?>" <?php if($case['client_id'] == $c['client_id']):?> selected="selected" <?php endif;?>><?php echo $c['name'];?></option>
            <?php endforeach;?>
          </select>
            <p class="help-block">If the case assign a company, choose it.</p>
        </div>
    </div>
    </div>
      <div class="control-group">
        <label class="control-label" for="content">Description</label>
        <div class="controls">
          <textarea rows="10" cols="50" class="input-xxlarge" name="description" id="description"><?php echo $case['description'];?></textarea>
        </div>
      </div>
      <div class="form-actions">
        <button type="submit" class="btn btn-primary">Save</button>
        <button class="btn">Cancel</button>
      </div>
    </fieldset>
  </form>