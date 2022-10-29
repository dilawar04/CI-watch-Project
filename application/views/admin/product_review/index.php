<!-- BEGIN PAGE CONTAINER-->
        
    <div class="page-content">
    <div class="content">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h2><?php echo $title; ?></h2>
        </div>
        <!-- END PAGE TITLE -->
        <!-- BEGIN PlACE PAGE CONTENT HERE -->
        <div class="col-md-14">
            <div class="grid simple ">
                <div class="grid-body no-border">
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#" id="activeAllStatus" class="btn btn-primary tip" data-toggle="tooltip" title="Active Selected"><i class="fa fa-eye"></i></a>
                            <a href="#" id="deactiveAllStatus" class="btn btn-primary tip" data-toggle="tooltip" title="Deactive Selected"><i class="fa fa-eye-slash"></i></a>
                            <a href="#" id="deleteAll" class="btn btn-primary tip" data-toggle="tooltip" title="Delete Selected"><i class="fa fa-trash"></i></a>
                            <a href="/admin/product_review/add" class="btn btn-primary tip" data-toggle="tooltip" title="Create"><i class="fa fa-plus"></i></a>
                        </div>
                        <?php echo form_open('',['name' => 'formSearch','id' => 'formSearch','method' => 'get']); ?>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="per_page" onchange="javascript:document.forms['formSearch'].submit()" class="form-control">
                                            <option value="15" <?php echo ($this->input->get('per_page') == '15') ? 'Selected': NULL ?>>15</option>
                                            <option value="25" <?php echo ($this->input->get('per_page') == '25') ? 'Selected': NULL ?>>25</option>
                                            <option value="50" <?php echo ($this->input->get('per_page') == '50') ? 'Selected': NULL ?>>50</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <input type="text" name="q" class="form-control" placeholder="Search" value="">
                                        <span class="input-group-btn">
                                                <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search" aria-hidden="true"></i></button>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                    <br>
                    <?php if ($product_reviews) : ?>
                        <?php echo  form_open('', ['name' => 'formView', 'id' => 'formView']); ?>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width:1%">
                                    <div class="checkbox check-default">
                                        <input id="checkbox10" type="checkbox" value="1" class="checkall">
                                        <label for="checkbox10"></label>
                                    </div>
                                </th>
                                <th style="width:30%">Title</th>
                                <th style="width:20%">Email</th>
                                <th style="width:10%">Status</th>
                                <th style="width:10%">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($product_reviews as $product_review) : ?>
                            <tr>
                                <td>
                                    <div class="checkbox check-default">
                                        <input id="checkbox<?php echo $product_review->id ?>" type="checkbox" name="checkAll[]" class="checkParam" value="<?php echo $product_review->id; ?>">
                                        <label for="checkbox<?php echo $product_review->id ?>"></label>
                                    </div>
                                </td>
                                <td><?php echo $product_review->name ; ?></td>
                                <td><?php echo $product_review->email ; ?></td>
                                <td>
                                    <?php if($product_review->status == 'DEACTIVE') : ?><a class="singleStatus" href="/admin/product_review/status/<?php echo $product_review->id; ?>">
                                    <span class="label label-important">Deactive</span></a>
                                    <?php else: ?><a class="singleStatus" href="/admin/product_review/status/<?php echo $product_review->id; ?>">
                                    <span class="label label-info">Active</span></a>
                                <?php endif ?>
                                </td>
                                <td>
                                    <a href="/admin/product_review/edit/<?php echo $product_review->id; ?>" class="label label-info"> <i class="fa fa-edit"></i></a>
                                    <a href="/admin/product_review/delete/<?php echo $product_review->id; ?>" class="label label-important singleDelete"> <i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                    </table>
                    <?php echo form_close(); ?>
                    <div>
                        <?php echo $this->pagination->create_links(); ?>
                        <!-- <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul> -->
                    </div>
                    <?php else: ?>
                    <div class="alert alert-info">
                        <strong>Info!</strong> No Record Found!
                    </div>
                <?php endif ?>
                </div>
            </div>
        </div>
        <!-- END PLACE PAGE CONTENT HERE -->
    </div>
</div>
<script>

    $(document).ready(function() {
        // SINGLE STATUS
        $('.singleStatus').on('click', function(event) {
            event.preventDefault(); // DISABLE LINK FUNTIONALITY
            var self = $(this);
            var href = self.attr('href');

            self.html('<img src="/assets/admin/img/loading.gif" width="24" height="24">');

            $.get(href, function(response) {
                if (response == 'ACTIVE') 
                    self.html('<span class="label label-info">Active</span>');
                else
                    self.html('<span class="label label-important">Dective</span>');

            });
        });

        // SINGLE DELETE
        $('.singleDelete').on('click', function(event){
            event.preventDefault();
            if (confirm('Are you sure you want to delete this?'))
             {
                var self = $(this);
                var href = self.attr('href');
                self.html('<img src="/assets/admin/img/loading.gif" width="24" height="24">');

                $.get(href, function(response){
                    if (response)
                    {
                        self.closest('tr').css("background-color","red").fadeOut(2000);
                        self.remove();
                    }

                });
             }
            else
                return false;
        });

        // ACTIVE ALL STATUS
        $('#activeAllStatus').on('click' ,function(event){
            event.preventDefault();
            if ($('.checkParam:checked').length > 0) 
            {
                var formSerials = $('#formView').serialize();
                $.post('/admin/product_review/active_all_status',formSerials, function(response){
                    if (response > 0)
                    window.location.href = '/admin/product_review';

                });
            }
            else
                alert('Check to laga bawalay');
        });
        $('#deactiveAllStatus').on("click" ,function(event){
            event.preventDefault();

            if ($('.checkParam:checked').length > 0) 
            {
                var formSerials = $('#formView').serialize();
                $.post('/admin/product_review/deactive_all_status',formSerials, function(response){
                    if (response > 0)
                    window.location.href = '/admin/product_review';

                });
            }
            else
                alert('Check to laga bawalay');
        });
         // DELLETE ALL
        $("#deleteAll").on('click', function(event) {
            event.preventDefault();
            if ($('.checkParam:checked').length > 0) 
            {
                var formSerials = $("#formView").serialize();
                $.post('/admin/product_review/delete_all', formSerials, function(response) {
                    if (response > 0 ) 
                        window.location.href = '/admin/product_review';
                });
            }
            else 
                alert("Check to laga bawalay");
        });
    });
    


</script>
<!-- END PAGE CONTAINER
