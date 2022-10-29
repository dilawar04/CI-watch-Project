<div class="page-content">
    <div class="content">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h2><?php echo $title; ?></h2>
        </div>
        <!-- END PAGE TITLE -->
        <!-- BEGIN PlACE PAGE CONTENT HERE -->
        <?php 
          $attributes = ['name' => 'formAdd' , 'id' => 'formAdd'];
          echo form_open_multipart('',$attributes);
        ?>
        <div class="col-md-14">
            <div class="grid simple">
                <div class="grid-body no-border">
                    <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              &nbsp;
            </div>
            <div class="grid-body no-border">
              <!-- <?php if (validation_errors()): ?>
                <div class="alert alert-danger">
                  <?php echo validation_errors(); ?>
                </div>
              <?php endif ?> -->
              <?php if (isset($error)):?>
                <div class="alert alert-danger"><?php echo $error ?></div>
                <?php endif ?>
      <form class="form-no-horizontal-spacing" id="form-condensed"> 
              <div class="row column-seperation">
                <div class="col-md-6">
                  <h4>Basic Information</h4>            
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="create_date" id="create_date" type="text"  class="form-control <?php echo form_error('create_date') ? 'error' : NULL ?>" placeholder="Date" value="<?php echo set_value('create_date'); ?>">
                        <?php echo form_error('create_date', '<div class="alert alert-danger">','</div>') ?>
                      </div>
                    </div>
                    <!-- <div class="row form-row">
                      <div class="col-md-12">
                        <select name="media_type" id="media_type" class="form-control">
                          <option>:: Select Brand ::</option>
                          <option> Video </option>
                          <option> Slideshow </option>
                        </select>
                      </div>
                    </div> -->
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="title" id="title" type="text"  class="form-control <?php echo form_error('title') ? 'error' : NULL ?>" placeholder="TItLE" value="<?php echo set_value('title'); ?>">
                        <?php echo form_error('title', '<div class="alert alert-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="slug" id="slug" type="text"  class="form-control <?php echo form_error('slug') ? 'error' : NULL ?>" placeholder="Slug" value="<?php echo set_value('slug'); ?>" readonly>
                        <?php echo form_error('slug', '<div class="alert alert-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="part_number" id="part_number" type="text"  class="form-control" placeholder="Part Number">
                      </div>
                    </div>  
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="price" id="price" type="text"  class="form-control" placeholder="Price">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <textarea name="description" id="description" rows="8" class="form-control" placeholder="Descriptions"></textarea>
                        
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
        
                  <h4>Postal Information</h4>
                  <div class="row form-row">
                      <div class="col-md-12">
                        <input name="product_img" id="product_img" type="file"  class="form-control">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <textarea name="meta_description" id="meta_description" rows="8" class="form-control" placeholder="Meta Descriptions"></textarea>
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input type="text" name="meta_keyword" id="meta_keyword" class="form-control tagsinput" data-a-sign="$" data-role="tagsinput">
                      </div>
                    </div>
                </div>
              </div>
      </form>
            </div>
          </div>
       <div class="form-actions">
          <button class="btn btn-danger btn-cons" type="submit"><i class="fa fa-save"></i> Save </button>
          <a href="/admin/product/" class="btn btn-primary btn-cons" type="button"><i class="fa fa-times"></i> Cancel </a>
        </div>
        </div>
      </div>
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>
        <!-- END PLACE PAGE CONTENT HERE -->
    </div>
</div>