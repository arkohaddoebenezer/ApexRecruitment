
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/cropperjs/dist/cropper.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
				<img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
				<img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li>
						<a href="admin.dashboard" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="/applicants" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-diagram"></span><span class="mtext">Applicants</span>
						</a>
					</li>
					<li>
						<a href="chat.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-chat3"></span><span class="mtext">Recruiters</span>
						</a>
					</li>
					<li>
						<a href="invoice.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-invoice"></span><span class="mtext">Interviews</span>
						</a>
					</li>
					<li>
						<div class="dropdown-divider"></div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Applicant Profile</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<div class="profile-photo">
								<a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
								<img src="vendors/images/photo1.jpg" alt="" class="avatar-photo">
								<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-body pd-5">
												<div class="img-container">
													<img id="image" src="vendors/images/photo2.jpg" alt="Picture">
												</div>
											</div>
											<div class="modal-footer">
												<input type="submit" value="Update" class="btn btn-primary">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<h5 class="text-center h5 mb-0">Ross C. Lopez</h5>
							<p class="text-center text-muted font-14">Lorem ipsum dolor sit amet</p>
							<div class="profile-info">
								<h5 class="mb-20 h5 text-blue">Contact Information</h5>
								<ul>
									<li>
										<span>Email Address:</span>
										FerdinandMChilds@test.com
									</li>
									<li>
										<span>Phone Number:</span>
										619-229-0054
									</li>
									<li>
										<span>Country:</span>
										America
									</li>
									<li>
										<span>Address:</span>
										1807 Holden Street<br>
										San Diego, CA 92115
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
						<div class="card-box height-100-p overflow-hidden">
							<div class="profile-tab height-100-p">
								<div class="tab height-100-p">
									<ul class="nav nav-tabs customtab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">Timeline</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#tasks" role="tab">Phases</a>
										</li>
									</ul>
									<div class="tab-content">
										<!-- Timeline Tab start -->
										<div class="tab-pane fade show active" id="timeline" role="tabpanel">
											<div class="pd-20">
												<div class="profile-timeline">
													<div class="timeline-month">
														<h5>August, 2020</h5>
													</div>
													<div class="profile-timeline-list">
														<ul>
															<li>
																<div class="date">12 Aug</div>
																<div class="task-name"><i class="ion-android-alarm-clock"></i> Task Added</div>
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
																<div class="task-time">09:30 am</div>
															</li>
															<li>
																<div class="date">10 Aug</div>
																<div class="task-name"><i class="ion-ios-chatboxes"></i> Task Added</div>
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
																<div class="task-time">09:30 am</div>
															</li>
															<li>
																<div class="date">10 Aug</div>
																<div class="task-name"><i class="ion-ios-clock"></i> Event Added</div>
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
																<div class="task-time">09:30 am</div>
															</li>
															<li>
																<div class="date">10 Aug</div>
																<div class="task-name"><i class="ion-ios-clock"></i> Event Added</div>
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
																<div class="task-time">09:30 am</div>
															</li>
														</ul>
													</div>
													<div class="timeline-month">
														<h5>July, 2020</h5>
													</div>
													<div class="profile-timeline-list">
														<ul>
															<li>
																<div class="date">12 July</div>
																<div class="task-name"><i class="ion-android-alarm-clock"></i> Task Added</div>
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
																<div class="task-time">09:30 am</div>
															</li>
															<li>
																<div class="date">10 July</div>
																<div class="task-name"><i class="ion-ios-chatboxes"></i> Task Added</div>
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
																<div class="task-time">09:30 am</div>
															</li>
														</ul>
													</div>
													<div class="timeline-month">
														<h5>June, 2020</h5>
													</div>
													<div class="profile-timeline-list">
														<ul>
															<li>
																<div class="date">12 June</div>
																<div class="task-name"><i class="ion-android-alarm-clock"></i> Task Added</div>
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
																<div class="task-time">09:30 am</div>
															</li>
															<li>
																<div class="date">10 June</div>
																<div class="task-name"><i class="ion-ios-chatboxes"></i> Task Added</div>
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
																<div class="task-time">09:30 am</div>
															</li>
															<li>
																<div class="date">10 June</div>
																<div class="task-name"><i class="ion-ios-clock"></i> Event Added</div>
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
																<div class="task-time">09:30 am</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<!-- Timeline Tab End -->
										<!-- Tasks Tab start -->
										<div class="tab-pane fade" id="tasks" role="tabpanel">
											<div class="pd-20 profile-task-wrap">
												<div class="container pd-0">
													<!-- Open Task start -->
													<div class="task-title row align-items-center">
														<div class="col-md-8 col-sm-12">
															<h5>Uncompleted Phase</h5>
														</div>
														<div class="col-md-4 col-sm-12 text-right">
															<a href="task-add" data-toggle="modal" data-target="#task-add" class="bg-light-blue btn text-blue weight-500"><i class="ion-plus-round"></i> Add</a>
														</div>
													</div>
													<div class="profile-task-list pb-30">
														<ul>
															<li>
																<div class="custom-control custom-checkbox mb-5">
																	<input type="checkbox" class="custom-control-input" id="task-1">
																	<label class="custom-control-label" for="task-1"></label>
																</div>
																<div class="task-type">Email</div>
																Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ea earum.
																<div class="task-assign">Assigned to Ferdinand M. <div class="due-date">due date <span>22 February 2019</span></div></div>
															</li>
															<li>
																<div class="custom-control custom-checkbox mb-5">
																	<input type="checkbox" class="custom-control-input" id="task-2">
																	<label class="custom-control-label" for="task-2"></label>
																</div>
																<div class="task-type">Email</div>
																Lorem ipsum dolor sit amet.
																<div class="task-assign">Assigned to Ferdinand M. <div class="due-date">due date <span>22 February 2019</span></div></div>
															</li>
															<li>
																<div class="custom-control custom-checkbox mb-5">
																	<input type="checkbox" class="custom-control-input" id="task-3">
																	<label class="custom-control-label" for="task-3"></label>
																</div>
																<div class="task-type">Email</div>
																Lorem ipsum dolor sit amet, consectetur adipisicing elit.
																<div class="task-assign">Assigned to Ferdinand M. <div class="due-date">due date <span>22 February 2019</span></div></div>
															</li>
															<li>
																<div class="custom-control custom-checkbox mb-5">
																	<input type="checkbox" class="custom-control-input" id="task-4">
																	<label class="custom-control-label" for="task-4"></label>
																</div>
																<div class="task-type">Email</div>
																Lorem ipsum dolor sit amet. Id ea earum.
																<div class="task-assign">Assigned to Ferdinand M. <div class="due-date">due date <span>22 February 2019</span></div></div>
															</li>
														</ul>
													</div>
													<!-- Open Task End -->
													<!-- Close Task start -->
													<div class="task-title row align-items-center">
														<div class="col-md-12 col-sm-12">
															<h5>Completed Phases</h5>
														</div>
													</div>
													<div class="profile-task-list close-tasks">
														<ul>
															<li>
																<div class="custom-control custom-checkbox mb-5">
																	<input type="checkbox" class="custom-control-input" id="task-close-1" checked="" disabled="">
																	<label class="custom-control-label" for="task-close-1"></label>
																</div>
																<div class="task-type">Email</div>
																Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ea earum.
																<div class="task-assign">Assigned to Ferdinand M. <div class="due-date">due date <span>22 February 2018</span></div></div>
															</li>
															<li>
																<div class="custom-control custom-checkbox mb-5">
																	<input type="checkbox" class="custom-control-input" id="task-close-2" checked="" disabled="">
																	<label class="custom-control-label" for="task-close-2"></label>
																</div>
																<div class="task-type">Email</div>
																Lorem ipsum dolor sit amet.
																<div class="task-assign">Assigned to Ferdinand M. <div class="due-date">due date <span>22 February 2018</span></div></div>
															</li>
															<li>
																<div class="custom-control custom-checkbox mb-5">
																	<input type="checkbox" class="custom-control-input" id="task-close-3" checked="" disabled="">
																	<label class="custom-control-label" for="task-close-3"></label>
																</div>
																<div class="task-type">Email</div>
																Lorem ipsum dolor sit amet, consectetur adipisicing elit.
																<div class="task-assign">Assigned to Ferdinand M. <div class="due-date">due date <span>22 February 2018</span></div></div>
															</li>
															<li>
																<div class="custom-control custom-checkbox mb-5">
																	<input type="checkbox" class="custom-control-input" id="task-close-4" checked="" disabled="">
																	<label class="custom-control-label" for="task-close-4"></label>
																</div>
																<div class="task-type">Email</div>
																Lorem ipsum dolor sit amet. Id ea earum.
																<div class="task-assign">Assigned to Ferdinand M. <div class="due-date">due date <span>22 February 2018</span></div></div>
															</li>
														</ul>
													</div>
													<!-- Close Task start -->
													<!-- add task popup start -->
													<div class="modal fade customscroll" id="task-add" tabindex="-1" role="dialog">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLongTitle">Tasks Add</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Close Modal">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body pd-0">
																	<div class="task-list-form">
																		<ul>
																			<li>
																				<form>
																					<div class="form-group row">
																						<label class="col-md-4">Task Type</label>
																						<div class="col-md-8">
																							<input type="text" class="form-control">
																						</div>
																					</div>
																					<div class="form-group row">
																						<label class="col-md-4">Task Message</label>
																						<div class="col-md-8">
																							<textarea class="form-control"></textarea>
																						</div>
																					</div>
																					<div class="form-group row">
																						<label class="col-md-4">Assigned to</label>
																						<div class="col-md-8">
																							<select class="selectpicker form-control" data-style="btn-outline-primary" title="Not Chosen" multiple="" data-selected-text-format="count" data-count-selected-text= "{0} people selected">
																								<option>Ferdinand M.</option>
																								<option>Don H. Rabon</option>
																								<option>Ann P. Harris</option>
																								<option>Katie D. Verdin</option>
																								<option>Christopher S. Fulghum</option>
																								<option>Matthew C. Porter</option>
																							</select>
																						</div>
																					</div>
																					<div class="form-group row mb-0">
																						<label class="col-md-4">Due Date</label>
																						<div class="col-md-8">
																							<input type="text" class="form-control date-picker">
																						</div>
																					</div>
																				</form>
																			</li>
																			<li>
																				<a href="javascript:;" class="remove-task"  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove Task"><i class="ion-minus-circled"></i></a>
																				<form>
																					<div class="form-group row">
																						<label class="col-md-4">Task Type</label>
																						<div class="col-md-8">
																							<input type="text" class="form-control">
																						</div>
																					</div>
																					<div class="form-group row">
																						<label class="col-md-4">Task Message</label>
																						<div class="col-md-8">
																							<textarea class="form-control"></textarea>
																						</div>
																					</div>
																					<div class="form-group row">
																						<label class="col-md-4">Assigned to</label>
																						<div class="col-md-8">
																							<select class="selectpicker form-control" data-style="btn-outline-primary" title="Not Chosen" multiple="" data-selected-text-format="count" data-count-selected-text= "{0} people selected">
																								<option>Ferdinand M.</option>
																								<option>Don H. Rabon</option>
																								<option>Ann P. Harris</option>
																								<option>Katie D. Verdin</option>
																								<option>Christopher S. Fulghum</option>
																								<option>Matthew C. Porter</option>
																							</select>
																						</div>
																					</div>
																					<div class="form-group row mb-0">
																						<label class="col-md-4">Due Date</label>
																						<div class="col-md-8">
																							<input type="text" class="form-control date-picker">
																						</div>
																					</div>
																				</form>
																			</li>
																		</ul>
																	</div>
																	<div class="add-more-task">
																		<a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add Task"><i class="ion-plus-circled"></i> Add More Task</a>
																	</div>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-primary">Add</button>
																	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																</div>
															</div>
														</div>
													</div>
													<!-- add task popup End -->
												</div>
											</div>
										</div>
										<!-- Tasks Tab End -->
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
			
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/cropperjs/dist/cropper.js"></script>
	
	<script>
		window.addEventListener('DOMContentLoaded', function () {
			var image = document.getElementById('image');
			var cropBoxData;
			var canvasData;
			var cropper;

			$('#modal').on('shown.bs.modal', function () {
				cropper = new Cropper(image, {
					autoCropArea: 0.5,
					dragMode: 'move',
					aspectRatio: 3 / 3,
					restore: false,
					guides: false,
					center: false,
					highlight: false,
					cropBoxMovable: false,
					cropBoxResizable: false,
					toggleDragModeOnDblclick: false,
					ready: function () {
						cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
					}
				});
			}).on('hidden.bs.modal', function () {
				cropBoxData = cropper.getCropBoxData();
				canvasData = cropper.getCanvasData();
				cropper.destroy();
			});
		});
	</script>
</body>
</html>