<?php include 'layout/header.php';?>
<?php include 'layout/wrapperstart.php';?>


<div class="card">
								<!--begin::Card header-->
								<div class="card-header border-0 p-4">
									<!--begin::Card title-->
									<div class="card-title">
										<!--begin::Search-->
										<div class="d-flex align-items-center position-relative my-1">
											<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
											<span class="svg-icon svg-icon-1 position-absolute ms-6">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
													<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
												</svg>
											</span>
											<!--end::Svg Icon-->
											<input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search lead">
										</div>
										<!--end::Search-->
									</div>
									<!--begin::Card title-->
									<!--begin::Card toolbar-->
									<div class="card-toolbar">
										<!--begin::Toolbar-->
										<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
											<!--begin::Filter-->
											<button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
											<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
											<span class="svg-icon svg-icon-2">
												<i class="fas fa-download"></i>
											</span>
											<!--end::Svg Icon-->Export</button>
											
											<!--end::Filter-->
											<!--begin::Export-->
											<button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_bulk_add_lead">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="black"></rect>
													<path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="black"></path>
													<path d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="#C4C4C4"></path>
												</svg>
											</span>
											<!--end::Svg Icon-->Bulk Upload</button>
											<!--end::Export-->
											<!--begin::Add user-->
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_lead">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black"></rect>
													<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black"></rect>
												</svg>
											</span>
											<!--end::Svg Icon-->Add Lead</button>
											<!--end::Add user-->
										</div>
										<!--end::Toolbar-->
										<!--begin::Group actions-->
										<div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
											<div class="fw-bolder me-5">
											<span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>
											<button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
										</div>
										<!--end::Group actions-->
										
										<!--end::Modal - New Card-->
										<!--begin::Modal - Add task-->
										<div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
											<!--begin::Modal dialog-->
											<div class="modal-dialog modal-dialog-centered mw-650px">
												<!--begin::Modal content-->
												<div class="modal-content">
													<!--begin::Modal header-->
													<div class="modal-header" id="kt_modal_add_user_header">
														<!--begin::Modal title-->
														<h2 class="fw-bolder">Add User</h2>
														<!--end::Modal title-->
														<!--begin::Close-->
														<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
															<span class="svg-icon svg-icon-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
																	<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<!--end::Close-->
													</div>
													<!--end::Modal header-->
													<!--begin::Modal body-->
													<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
														<!--begin::Form-->
														<form id="kt_modal_add_user_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
															<!--begin::Scroll-->
															<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px" style="">
																
																<!--begin::Input group-->
																<div class="fv-row mb-7 fv-plugins-icon-container">
																	<!--begin::Label-->
																	<label class="required fw-bold fs-6 mb-2">Full Name</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" name="user_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name" value="Emma Smith">
																	<!--end::Input-->
																<div class="fv-plugins-message-container invalid-feedback"></div></div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="fv-row mb-7 fv-plugins-icon-container">
																	<!--begin::Label-->
																	<label class="required fw-bold fs-6 mb-2">Contact</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" name="user_contact" class="form-control form-control-solid mb-3 mb-lg-0">
																	<!--end::Input-->
																<div class="fv-plugins-message-container invalid-feedback"></div></div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="fv-row mb-7 fv-plugins-icon-container">
																	<!--begin::Label-->
																	<label class="required fw-bold fs-6 mb-2">Email</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="email" name="user_email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" value="e.smith@kpmg.com.au">
																	<!--end::Input-->
																<div class="fv-plugins-message-container invalid-feedback"></div></div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="fv-row mb-7 fv-plugins-icon-container">
																	<!--begin::Label-->
																	<label class="required fw-bold fs-6 mb-2">Role</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<select class="form-control form-select">
																		<option>Role 1</option>
																		<option>Role 2</option>
																	</select>
																	<!--end::Input-->
																<div class="fv-plugins-message-container invalid-feedback"></div></div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="fv-row mb-7 fv-plugins-icon-container">
																	<!--begin::Label-->
																	<label class="required fw-bold fs-6 mb-2">Active</label>
																	<!--end::Label-->
																	<select class="form-control form-select">
																		<option>Yes</option>
																		<option>No</option>
																	</select>	
																	<!--end::Input group-->
															</div>
															<!--end::Scroll-->
														<div></div></form>
														<!--end::Form-->
													</div>
													<!--end::Modal body-->
												</div>
												<!--end::Modal content-->
											</div>
											<!--end::Modal dialog-->
										</div>
										<!--end::Modal - Add task-->
									</div>
									<!--end::Card toolbar-->
								</div>
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								<div class="card-body">
								<!--begin::lead performance-->
									<section id="lead-performance" class="mt-1 mb-4">
											<div class="row">
												<div class="col-md-12">
												<div class="progress">
													<div class="progress-bar progress-bar-danger" role="progressbar" title="Poor Clients" style="width: 50.9091%;"></div>
													<div class="progress-bar progress-bar-warning" role="progressbar" title="Average Clients" style="width: 20%;"></div>
													<div class="progress-bar progress-bar-success" role="progressbar" title="Good Clients" style="width: 7.27273%;"></div>
													<div class="progress-bar progress-bar-unrated" role="progressbar" title="Unrated Clients" style="width: 41.8182%;"></div>
												</div>
												</div>
											</div>
											<div class="d-flex mt-5 justify-content-between align-items-stretch align-self-stretch table-responsive">
												<a class="box box-primary text-center" type="bad" href="javascript:;">
													<h5><i class="fa fa-circle"></i> <span class="poor_count">28</span> Total Leads</h5>
													
												</a><a class="box box-primary text-center bad" type="bad" href="javascript:;">
													<h5><i class="fa fa-circle bad"></i> <span class="poor_count">28</span> Not Interested</h5>
													
												</a>
												<a class="box text-center average" type="average" href="javascript:;">
													<h5><i class="fa fa-circle average"></i> <span class="avg_count">50</span> New</h5>
												
												</a>
												<a class="box text-center good" type="good" href="javascript:;">
													<h5><i class="fa fa-circle good"></i> <span class="good_count">4</span> Converted</h5>
												
												</a>
												<a class="box text-center unrated" type="unrated" href="javascript:;">
													<h5><i class="fa fa-circle unrated"></i> <span class="unrated_count">23</span> Dead</h5>
													
												</a>
											</div>
										
										</section>
										<hr/>
								<!--begin::lead performance-->
                                    <div class="table-responsive">
                                    <div id="kt_table_users_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive"><table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_table_users">
										<!--begin::Table head-->
										<thead>
											<!--begin::Table row-->
											<tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
												
												<th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="User: activate to sort column ascending" style="width: 201.781px;">Lead Name</th>
												<th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 125px;">Assigned User</th>
												<th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Last login: activate to sort column ascending" style="width: 125px;">Status</th>
												<th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Joined Date: activate to sort column ascending" style="width: 125px;">Last Activity</th>
												<th class="text-end min-w-100px sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 100px;">Actions</th></tr>
											<!--end::Table row-->
										</thead>
										<!--end::Table head-->
										<!--begin::Table body-->
										<tbody class="text-gray-600 fw-bold">
											
											
											<!--end::Table row-->
										<tr class="odd">
												<!--begin::User=-->
												<td class="d-flex align-items-center">
													<!--begin::User details-->
													<div class="d-flex flex-column">
														<a href="leadDetails.php" class="text-gray-800 text-hover-primary mb-1">Lead name</a>
														<span>e.smith@kpmg.com.au</span>
													</div>
													<!--begin::User details-->
												</td>
												<!--end::User=-->
												<!--begin::Role=-->
												<td>Pradnya Shirke</td>
												<!--end::Role=-->
												<!--begin::Last login=-->
												<td data-order="2021-11-27T20:03:44+05:30">
													<div class="badge badge-light-warning fw-bolder">New</div>
												</td>
												<!--end::Last login=-->
												<!--begin::Joined-->
												<td data-order="2021-11-10T11:30:00+05:30">10 Nov 2021, 11:30 am</td>
												<!--begin::Joined-->
												<!--begin::Action=-->
												<td class="text-end">
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-pen"></i></a>
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-trash"></i></a>
												</td>
												<!--end::Action=-->
											</tr>
											<!--end::Table row-->
										<tr class="even">
												<!--begin::User=-->
												<td class="d-flex align-items-center">
													<!--begin::User details-->
													<div class="d-flex flex-column">
														<a href="leadDetails.php" class="text-gray-800 text-hover-primary mb-1">Lead name</a>
														<span>e.smith@kpmg.com.au</span>
													</div>
													<!--begin::User details-->
												</td>
												<!--end::User=-->
												<!--begin::Role=-->
												<td>Pradnya Shirke</td>
												<!--end::Role=-->
												<!--begin::Last login=-->
												<td data-order="2021-11-27T20:03:44+05:30">
													<div class="badge badge-light-warning fw-bolder">New</div>
												</td>
												<!--end::Last login=-->
												<!--begin::Joined-->
												<td data-order="2021-11-10T11:30:00+05:30">10 Nov 2021, 11:30 am</td>
												<!--begin::Joined-->
												<!--begin::Action=-->
												<td class="text-end">
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-pen"></i></a>
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-trash"></i></a>
												</td>
												<!--end::Action=-->
											</tr>
											<!--end::Table row-->
										<tr class="odd">
												<!--begin::User=-->
												<td class="d-flex align-items-center">
													<!--begin::User details-->
													<div class="d-flex flex-column">
														<a href="leadDetails.php" class="text-gray-800 text-hover-primary mb-1">Lead name</a>
														<span>e.smith@kpmg.com.au</span>
													</div>
													<!--begin::User details-->
												</td>
												<!--end::User=-->
												<!--begin::Role=-->
												<td>Pradnya Shirke</td>
												<!--end::Role=-->
												<!--begin::Last login=-->
												<td data-order="2021-11-27T20:03:44+05:30">
													<div class="badge badge-light-warning fw-bolder">New</div>
												</td>
												<!--end::Last login=-->
												<!--begin::Joined-->
												<td data-order="2021-11-10T11:30:00+05:30">10 Nov 2021, 11:30 am</td>
												<!--begin::Joined-->
												<!--begin::Action=-->
												<td class="text-end">
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-pen"></i></a>
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-trash"></i></a>
												</td>
												<!--end::Action=-->
											</tr>
											<!--end::Table row-->
										<tr class="odd">
												<!--begin::User=-->
												<td class="d-flex align-items-center">
													<!--begin::User details-->
													<div class="d-flex flex-column">
														<a href="leadDetails.php" class="text-gray-800 text-hover-primary mb-1">Lead name</a>
														<span>e.smith@kpmg.com.au</span>
													</div>
													<!--begin::User details-->
												</td>
												<!--end::User=-->
												<!--begin::Role=-->
												<td>Pradnya Shirke</td>
												<!--end::Role=-->
												<!--begin::Last login=-->
												<td data-order="2021-11-27T20:03:44+05:30">
													<div class="badge badge-light-danger fw-bolder">On Hold</div>
												</td>
												<!--end::Last login=-->
												<!--begin::Joined-->
												<td data-order="2021-11-10T11:30:00+05:30">10 Nov 2021, 11:30 am</td>
												<!--begin::Joined-->
												<!--begin::Action=-->
												<td class="text-end">
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-pen"></i></a>
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-trash"></i></a>
												</td>
												<!--end::Action=-->
											</tr>
											<!--end::Table row-->
										<tr class="odd">
												<!--begin::User=-->
												<td class="d-flex align-items-center">
													<!--begin::User details-->
													<div class="d-flex flex-column">
														<a href="leadDetails.php" class="text-gray-800 text-hover-primary mb-1">Lead name</a>
														<span>e.smith@kpmg.com.au</span>
													</div>
													<!--begin::User details-->
												</td>
												<!--end::User=-->
												<!--begin::Role=-->
												<td>Pradnya Shirke</td>
												<!--end::Role=-->
												<!--begin::Last login=-->
												<td data-order="2021-11-27T20:03:44+05:30">
													<div class="badge badge-light-info fw-bolder">Demo given</div>
												</td>
												<!--end::Last login=-->
												<!--begin::Joined-->
												<td data-order="2021-11-10T11:30:00+05:30">10 Nov 2021, 11:30 am</td>
												<!--begin::Joined-->
												<!--begin::Action=-->
												<td class="text-end">
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-pen"></i></a>
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-trash"></i></a>
												</td>
												<!--end::Action=-->
											</tr>
											<!--end::Table row-->
										<tr class="odd">
												<!--begin::User=-->
												<td class="d-flex align-items-center">
													<!--begin::User details-->
													<div class="d-flex flex-column">
														<a href="leadDetails.php" class="text-gray-800 text-hover-primary mb-1">Lead name</a>
														<span>e.smith@kpmg.com.au</span>
													</div>
													<!--begin::User details-->
												</td>
												<!--end::User=-->
												<!--begin::Role=-->
												<td>Pradnya Shirke</td>
												<!--end::Role=-->
												<!--begin::Last login=-->
												<td data-order="2021-11-27T20:03:44+05:30">
													<div class="badge badge-light-dark fw-bolder">Not Interested</div>
												</td>
												<!--end::Last login=-->
												<!--begin::Joined-->
												<td data-order="2021-11-10T11:30:00+05:30">10 Nov 2021, 11:30 am</td>
												<!--begin::Joined-->
												<!--begin::Action=-->
												<td class="text-end">
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-pen"></i></a>
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-trash"></i></a>
												</td>
												<!--end::Action=-->
											</tr>
											<!--end::Table row-->
										<tr class="odd">
												<!--begin::User=-->
												<td class="d-flex align-items-center">
													<!--begin::User details-->
													<div class="d-flex flex-column">
														<a href="leadDetails.php" class="text-gray-800 text-hover-primary mb-1">Lead name</a>
														<span>e.smith@kpmg.com.au</span>
													</div>
													<!--begin::User details-->
												</td>
												<!--end::User=-->
												<!--begin::Role=-->
												<td>Pradnya Shirke</td>
												<!--end::Role=-->
												<!--begin::Last login=-->
												<td data-order="2021-11-27T20:03:44+05:30">
													<div class="badge badge-light-success fw-bolder">Converted</div>
												</td>
												<!--end::Last login=-->
												<!--begin::Joined-->
												<td data-order="2021-11-10T11:30:00+05:30">10 Nov 2021, 11:30 am</td>
												<!--begin::Joined-->
												<!--begin::Action=-->
												<td class="text-end">
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-pen"></i></a>
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-trash"></i></a>
												</td>
												<!--end::Action=-->
											</tr>
                                        </tbody>
										<!--end::Table body-->
									</table></div><div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dataTables_paginate paging_simple_numbers" id="kt_table_users_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_table_users_previous"><a href="javascript:;" aria-controls="kt_table_users" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="javascript:;" aria-controls="kt_table_users" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="javascript:;" aria-controls="kt_table_users" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="javascript:;" aria-controls="kt_table_users" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item next" id="kt_table_users_next"><a href="javascript:;" aria-controls="kt_table_users" data-dt-idx="4" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
								
                                    </div>
                                </div>
								<!--end::Card body-->

                                </div>
								<!--end::Card-->

<?php include 'layout/wrapperend.php';?>

<?php include 'addBulkLeadModal.php';?>
<?php include 'addLeadModal.php';?>
<?php include 'layout/footer.php';?>