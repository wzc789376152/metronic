<div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert">
	<div class="m-alert__icon">
		<i class="flaticon-exclamation m--font-warning"></i>
	</div>
	<div class="m-alert__text">
		The Metronic Datatable allows the end user to select single or multiple rows using checkbox to perform operations over rows.
	</div>
</div>

<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Record Selection Datatable
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
				<li class="m-portlet__nav-item">
					<?php Page::getGlobalPartialView('content/general/action-dropdown');?>
				</li>
			</ul>
		</div>
	</div>
	<div class="m-portlet__body">
		<!--begin: Search Form -->
		<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
			<div class="row align-items-center">
				<div class="col-xl-8 order-2 order-xl-1">
					<div class="form-group m-form__group row align-items-center">
						<div class="col-md-4">
							<div class="m-form__group m-form__group--inline">
								<div class="m-form__label">
									<label>Status:</label>
								</div>
								<div class="m-form__control">
									<select class="form-control m-bootstrap-select m-bootstrap-select--solid" id="m_form_status">
										<option value="">All</option>
										<option value="1">Pending</option>
										<option value="2">Delivered</option>
										<option value="3">Canceled</option>
									</select>
								</div>
							</div>
							<div class="d-md-none m--margin-bottom-10"></div>
						</div>
						<div class="col-md-4">
							<div class="m-form__group m-form__group--inline">
								<div class="m-form__label">
									<label class="m-label m-label--single">Type:</label>
								</div>
								<div class="m-form__control">
									<select class="form-control m-bootstrap-select m-bootstrap-select--solid" id="m_form_type">
										<option value="">All</option>
										<option value="1">Online</option>
										<option value="2">Retail</option>
										<option value="3">Direct</option>
									</select>
								</div>
							</div>
							<div class="d-md-none m--margin-bottom-10"></div>
						</div>
						<div class="col-md-4">
							<div class="m-input-icon m-input-icon--left">
								<input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="m_form_search">
								<span class="m-input-icon__icon m-input-icon__icon--left">
									<span><i class="la la-search"></i></span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 order-1 order-xl-2 m--align-right">
					<a href="#" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air">
						<span>
							<i class="la la-cart-plus"></i>
							<span>New Order</span>
						</span>
					</a>					
					<div class="m-separator m-separator--dashed d-xl-none"></div>
				</div>
			</div>
		</div>
		<!--end: Search Form -->

		<!--begin: Selected Rows Group Action Form -->
		<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30 collapse" id="m_datatable_group_action_form">
			<div class="row align-items-center">
				<div class="col-xl-12">
					<div class="m-form__group m-form__group--inline">
						<div class="m-form__label m-form__label-no-wrap">
							<label class="m--font-bold m--font-danger-">Selected <span id="m_datatable_selected_number">0</span> records:</label>
						</div>
						<div class="m-form__control">
							<div class="btn-toolbar">
								<div class="dropdown">
							    	<button type="button" class="btn btn-accent btn-sm dropdown-toggle" data-toggle="dropdown">
							      		Update status
							    	</button>
								    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
								      	<a class="dropdown-item" href="#">Pending</a>
								      	<a class="dropdown-item" href="#">Delivered</a>
								      	<a class="dropdown-item" href="#">Canceled</a>
								    </div>
							  	</div>
								&nbsp;&nbsp;&nbsp;
								<button class="btn btn-sm btn-danger" type="button" id="m_datatable_check_all">Delete All</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end: Selected Rows Group Action Form -->

		<!--begin: Datatable -->
		<div class="m_datatable" id="record_selection"></div>
		<!--end: Datatable -->
	</div>
</div>