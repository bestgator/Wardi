

<?php $__env->startSection('content'); ?>
					<input type="hidden" id="headerdata" value="<?php echo e(__('CATEGORY')); ?>">
					<input type="hidden" id="attribute_data" value="<?php echo e(__('ADD NEW ATTRIBUTE')); ?>">
					<div class="content-area">
						<div class="mr-breadcrumb">
							<div class="row">
								<div class="col-lg-12">
										<h4 class="heading"><?php echo e(__('Main Categories')); ?></h4>
										<ul class="links">
											<li>
												<a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?> </a>
											</li>
											<li><a href="javascript:;"><?php echo e(__('Manage Categories')); ?></a></li>
											<li>
												<a href="<?php echo e(route('admin-cat-index')); ?>"><?php echo e(__('Main Categories')); ?></a>
											</li>
										</ul>
								</div>
							</div>
						</div>
						<div class="product-area">
							<div class="row">
								<div class="col-lg-12">
									<div class="mr-table allproduct">

                        <?php echo $__env->make('includes.admin.form-success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

										<div class="table-responsiv">
												<table id="geniustable" class="table table-hover dt-responsive" cellspacing="0" width="100%">
													<thead>
														<tr>
															<th width="50px"><input type="checkbox" id="master"></th>
				                        						<th width="20%"><?php echo e(__('Name En')); ?></th>
				                        						<th width="20%"><?php echo e(__('Name Ar')); ?></th>
				                        						<th width="20%"><?php echo e(__('Slug')); ?></th>
																<th width="260" style="width: 260px!important;"><?php echo e(__('Items')); ?></th>
				                        						<th><?php echo e(__('Status')); ?></th>
				                        						<th><?php echo e(__('Options')); ?></th>
														</tr>
													</thead>
													<tfoot>
													<tr>
														<td colspan="5"></td>
														<td colspan="2"><button style="margin-bottom: 10px; margin-left: 5px; border:0px" class="add-btn btn-block delete_all" data-url="<?php echo e(route('BulkDeleteMultiple', 'categories')); ?>"><i class="fas fa-trash"></i> <?php echo e(__('Delete')); ?></button></td>
													</tr>
													</tfoot>
												</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>



										<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">

										<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
												<div class="submit-loader">
														<img  src="<?php echo e(asset('assets/images/'.$gs->admin_loader)); ?>" alt="">
												</div>
											<div class="modal-header">
											<h5 class="modal-title"></h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">

											</div>
											<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
											</div>
										</div>
										</div>
</div>





										<div class="modal fade" id="attribute" tabindex="-1" role="dialog" aria-labelledby="attribute" aria-hidden="true">

										<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
												<div class="submit-loader">
														<img  src="<?php echo e(asset('assets/images/'.$gs->admin_loader)); ?>" alt="">
												</div>
											<div class="modal-header">
											<h5 class="modal-title"></h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">

											</div>
											<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
											</div>
										</div>
										</div>
</div>






<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

	<div class="modal-header d-block text-center">
		<h4 class="modal-title d-inline-block"><?php echo e(__('Confirm Delete')); ?></h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
	</div>

      <!-- Modal body -->
      <div class="modal-body">
            <p class="text-center"><?php echo e(__('You are about to delete this Category. Everything under this category will be deleted')); ?>.</p>
            <p class="text-center"><?php echo e(__('Do you want to proceed?')); ?></p>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
            <a class="btn btn-danger btn-ok"><?php echo e(__('Delete')); ?></a>
      </div>

    </div>
  </div>
</div>



<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>



    <script type="text/javascript">

		var table = $('#geniustable').DataTable({
			   ordering: false,
               processing: true,
               serverSide: true,
               ajax: '<?php echo e(route('admin-cat-datatables')); ?>',
               columns: [
				   		{ data: 'bulk', name: 'bulk' },
                        { data: 'name_en', name: 'name_en' },
                        { data: 'name_ar', name: 'name_ar' },
						{ data: 'slug', name: 'slug' },
                        { data: 'productss', name: 'productss', searchable: false, orderable: false },
                        { data: 'status', searchable: false, orderable: false},
            			{ data: 'action', searchable: false, orderable: false }

                     ],
                language : {
                	processing: '<img src="<?php echo e(asset('assets/images/'.$gs->admin_loader)); ?>">'
                },
				drawCallback : function( settings ) {
	    				$('.select').niceSelect();
				}
            });

      	$(function() {
        $(".btn-area").append('<div class="col-sm-4 table-contents">'+
        	'<a class="add-btn" data-href="<?php echo e(route('admin-cat-create')); ?>" id="add-data" data-toggle="modal" data-target="#modal1">'+
          '<i class="fas fa-plus"></i> Add New Category'+
          '</a>'+
          '</div>');
      });



</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/local/var/www/wardi/resources/views/admin/category/index.blade.php ENDPATH**/ ?>