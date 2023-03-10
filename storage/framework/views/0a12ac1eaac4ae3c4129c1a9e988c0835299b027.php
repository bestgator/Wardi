 

<?php $__env->startSection('content'); ?>  

	<input type="hidden" id="headerdata" value="<?php echo e(__('COUPON')); ?>">

	<div class="content-area">
		<div class="mr-breadcrumb">
			<div class="row">
				<div class="col-lg-12">
						<h4 class="heading"><?php echo e(__('Coupons')); ?></h4>
						<ul class="links">
							<li>
								<a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?> </a>
							</li>
							<li>
								<a href="<?php echo e(route('admin-coupon-index')); ?>"><?php echo e(__('Coupons')); ?></a>
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
								<table id="geniustable" class="table table-hover dt-responsive" cellspacing="0">
									<thead>
										<tr>
											<th><?php echo e(__('Code')); ?></th>
											<th><?php echo e(__('Type')); ?></th>
											<th><?php echo e(__('Amount')); ?></th>
											<th><?php echo e(__('Product ID')); ?></th>
											<th><?php echo e(__('Orders')); ?></th>
											<th><?php echo e(__('Used')); ?></th>
											<th><?php echo e(__('Sales')); ?></th>
											<th><?php echo e(__('Status')); ?></th>
											<th><?php echo e(__('Options')); ?></th>
										</tr>
									</thead>
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
							<p class="text-center"><?php echo e(__('You are about to delete this Coupon.')); ?></p>
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
			ajax: '<?php echo e(route('admin-coupon-datatables')); ?>',
			columns: [
				{ data: 'code', name: 'code' },
				{ data: 'type', name: 'type' },
				{ data: 'price', name: 'price' },
				{ data: 'product_id', name: 'product_id' },
				{ data: 'orders', name: 'orders', searchable: false, orderable: false },
				{ data: 'used', name: 'used' },
				{ data: 'sales', name: 'sales', searchable: false, orderable: false},
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
				'<a class="add-btn" href="<?php echo e(route('admin-coupon-create')); ?>">'+
				'<i class="fas fa-plus"></i> <?php echo e(__('Add New Coupon')); ?>'+
				'</a>'+
				'</div>'
			);
		});						
		
		$(document).ready(function(){
			$(document).on('click','.orders_data',function(){
				if(admin_loader == 1)
				{
					$('.submit-loader').show();
				}
				$('#modal1').find('.modal-title').html('Coupon Orders');
				$('#modal1 .modal-content .modal-body').html('').load($(this).attr('data-href'),function(response, status, xhr){
						if(status == "success")
						{
							if(admin_loader == 1)
								{
									$('.submit-loader').hide();
								}
						}

					});
				});
		});

	</script>

<?php $__env->stopSection(); ?>   
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/local/var/www/wardi/resources/views/admin/coupon/index.blade.php ENDPATH**/ ?>