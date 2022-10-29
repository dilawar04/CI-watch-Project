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
          echo form_open('',$attributes);
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
                        <input name="model_number" id="model_number" type="text"  class="form-control <?php echo form_error('model_number') ? 'error' : NULL ?>" placeholder="Model Number" value="<?php echo set_value('model_number'); ?>">

                        <?php echo form_error('model_number', '<div class="alert alert-danger">','</div>') ?>

                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="model_year" id="model_year" type="text"  class="form-control <?php echo form_error('Model_Year') ? 'error' : NULL ?>" placeholder="Model Year" value="<?php echo set_value('model_year'); ?>">

                        <?php echo form_error('model_year', '<div class="alert alert-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="item_shape" id="item_shape" type="text"  class="form-control <?php echo form_error('Item Shape') ? 'error' : NULL ?>" placeholder="Item Shape" value="<?php echo set_value('item_shape'); ?>">
                        <?php echo form_error('item_shape', '<div class="alert alert-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="display_type" id="display_type" type="text"  class="form-control" placeholder="Display Type">
                      </div>
                    </div>  
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="case_material" id="case_material" type="text"  class="form-control" placeholder="Case Material">
                      </div>
                    </div>
                    <div class="row form-row">
                        <div class="col-md-12">
                        <input name="case_diameter" id="case_diameter" type="text"  class="form-control" placeholder="Case Diameter">
                      </div>
                    </div>
                    <div class="row form-row">
                        <div class="col-md-12">
                        <input name="case_thickness" id="case_thickness" type="text"  class="form-control" placeholder="Case Thickness">
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
        
                  <h4>Basic Information</h4>
                  
                    <div class="row form-row">
                        <div class="col-md-12">
                        <input name="band_material" id="band_material" type="text"  class="form-control" placeholder="Band Material">
                      </div>
                    </div>
                    <div class="row form-row">
                        <div class="col-md-12">
                        <input name="band_size" id="band_size" type="text"  class="form-control" placeholder="Band Size">
                      </div>
                    </div>
                    
                    <div class="row form-row">
                        <div class="col-md-12">
                        <input name="band_width" id="band_width" type="text"  class="form-control" placeholder="Band Width">
                      </div>
                    </div>
                    <div class="row form-row">
                        <div class="col-md-12">
                        <input name="band_color" id="band_color" type="text"  class="form-control" placeholder="Band Color">
                      </div>
                    </div>
                    <div class="row form-row">
                        <div class="col-md-12">
                        <input name="dial_color" id="dial_color" type="text"  class="form-control" placeholder="Dial Color">
                      </div>
                    </div>
                    <div class="row form-row">
                        <div class="col-md-12">
                        <input name="item_weight" id="item_weight" type="text"  class="form-control" placeholder="Item Weight">
                      </div>
                    </div>
                    <div class="row form-row">
                        <div class="col-md-12">
                        <input name="movement" id="movement" type="text"  class="form-control" placeholder="Movement">
                      </div>
                    </div>
                </div>
              </div>
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