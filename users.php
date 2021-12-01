<?php include 'layout/header.php';?>
<?php include 'layout/wrapperstart.php';?>

<div class="card">
								<!--begin::Card header-->
								<div class="card-header border-0 pt-6">
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
											<input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search user">
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
											
											<!--end::Export-->
											<!--begin::Export-->
											<button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_bulk_add_user">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="black"></rect>
													<path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="black"></path>
													<path d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="#C4C4C4"></path>
												</svg>
											</span>
											<!--end::Svg Icon-->Bulk Upload
											</button>
											
											<!--begin::Add user-->
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black"></rect>
													<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black"></rect>
												</svg>
											</span>
											<!--end::Svg Icon-->Add User</button>
											<!--end::Add user-->
										</div>
										<!--end::Toolbar-->
										
									</div>
									<!--end::Card toolbar-->
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								<div class="card-body">
									<div id="kt_table_users_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive"><table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_table_users">
										<!--begin::Table head-->
										<thead>
											<!--begin::Table row-->
											<tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
												
												<th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="User: activate to sort column ascending" style="width: 201.781px;">User</th>
												<th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 125px;">Role</th>
												<th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Last login: activate to sort column ascending" style="width: 125px;">Last login</th>
												<th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Joined Date: activate to sort column ascending" style="width: 125px;">Joined Date</th>
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
													<!--begin:: Avatar -->
													<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
														<a href="javascript:;">
															<div class="symbol-label">
																<img src="https://preview.keenthemes.com/rider-html-pro/assets/media/avatars/150-4.jpg" alt="Emma Smith" class="w-100">
															</div>
														</a>
													</div>
													<!--end::Avatar-->
													<!--begin::User details-->
													<div class="d-flex flex-column">
														<a href="javascript:;" class="text-gray-800 text-hover-primary mb-1">Emma Smith</a>
														<span>e.smith@kpmg.com.au</span>
													</div>
													<!--begin::User details-->
												</td>
												<!--end::User=-->
												<!--begin::Role=-->
												<td>Administrator</td>
												<!--end::Role=-->
												<!--begin::Last login=-->
												<td data-order="2021-11-27T20:03:44+05:30">
													<div class="badge badge-light fw-bolder">Yesterday</div>
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
											</tr><tr class="even">
												<!--begin::User=-->
												<td class="d-flex align-items-center">
													<!--begin:: Avatar -->
													<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
														<a href="javascript:;">
															<div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
														</a>
													</div>
													<!--end::Avatar-->
													<!--begin::User details-->
													<div class="d-flex flex-column">
														<a href="javascript:;" class="text-gray-800 text-hover-primary mb-1">Melody Macy</a>
														<span>melody@altbox.com</span>
													</div>
													<!--begin::User details-->
												</td>
												<!--end::User=-->
												<!--begin::Role=-->
												<td>Analyst</td>
												<!--end::Role=-->
												<!--begin::Last login=-->
												<td data-order="2021-11-28T19:43:44+05:30">
													<div class="badge badge-light fw-bolder">20 mins ago</div>
												</td>
												<!--end::Last login=-->
												<!--begin::Joined-->
												<td data-order="2021-06-24T20:43:00+05:30">24 Jun 2021, 8:43 pm</td>
												<!--begin::Joined-->
												<!--begin::Action=-->
												
												<td class="text-end">
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-pen"></i></a>
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-trash"></i></a>
												</td>
												<!--end::Action=-->
											</tr><tr class="odd">
												<!--begin::User=-->
												<td class="d-flex align-items-center">
													<!--begin:: Avatar -->
													<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
														<a href="javascript:;">
															<div class="symbol-label">
																<img src="https://preview.keenthemes.com/rider-html-pro/assets/media/avatars/150-26.jpg" alt="Max Smith" class="w-100">
															</div>
														</a>
													</div>
													<!--end::Avatar-->
													<!--begin::User details-->
													<div class="d-flex flex-column">
														<a href="javascript:;" class="text-gray-800 text-hover-primary mb-1">Max Smith</a>
														<span>max@kt.com</span>
													</div>
													<!--begin::User details-->
												</td>
												<!--end::User=-->
												<!--begin::Role=-->
												<td>Developer</td>
												<!--end::Role=-->
												<!--begin::Last login=-->
												<td data-order="2021-11-25T20:03:44+05:30">
													<div class="badge badge-light fw-bolder">3 days ago</div>
												</td>
												<!--end::Last login=-->
												<!--begin::Joined-->
												<td data-order="2021-09-22T21:23:00+05:30">22 Sep 2021, 9:23 pm</td>
												<!--begin::Joined-->
												<!--begin::Action=-->
												<td class="text-end">
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-pen"></i></a>
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-trash"></i></a>
												</td>
												<!--end::Action=-->
											</tr><tr class="even">
												<!--begin::User=-->
												<td class="d-flex align-items-center">
													<!--begin:: Avatar -->
													<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
														<a href="javascript:;">
															<div class="symbol-label">
																<img src="https://preview.keenthemes.com/rider-html-pro/assets/media/avatars/150-4.jpg" alt="Sean Bean" class="w-100">
															</div>
														</a>
													</div>
													<!--end::Avatar-->
													<!--begin::User details-->
													<div class="d-flex flex-column">
														<a href="javascript:;" class="text-gray-800 text-hover-primary mb-1">Sean Bean</a>
														<span>sean@dellito.com</span>
													</div>
													<!--begin::User details-->
												</td>
												<!--end::User=-->
												<!--begin::Role=-->
												<td>Support</td>
												<!--end::Role=-->
												<!--begin::Last login=-->
												<td data-order="2021-11-28T15:03:44+05:30">
													<div class="badge badge-light fw-bolder">5 hours ago</div>
												</td>
												<!--end::Last login=-->
												<!--begin::Joined-->
												<td data-order="2021-05-05T14:40:00+05:30">05 May 2021, 2:40 pm</td>
												<!--begin::Joined-->
												<!--begin::Action=-->
												
												<td class="text-end">
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-pen"></i></a>
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-trash"></i></a>
												</td>
												<!--end::Action=-->
											</tr><tr class="odd">
												<!--begin::User=-->
												<td class="d-flex align-items-center">
													<!--begin:: Avatar -->
													<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
														<a href="javascript:;">
															<div class="symbol-label">
																<img src="https://preview.keenthemes.com/rider-html-pro/assets/media/avatars/150-15.jpg" alt="Brian Cox" class="w-100">
															</div>
														</a>
													</div>
													<!--end::Avatar-->
													<!--begin::User details-->
													<div class="d-flex flex-column">
														<a href="javascript:;" class="text-gray-800 text-hover-primary mb-1">Brian Cox</a>
														<span>brian@exchange.com</span>
													</div>
													<!--begin::User details-->
												</td>
												<!--end::User=-->
												<!--begin::Role=-->
												<td>Developer</td>
												<!--end::Role=-->
												<!--begin::Last login=-->
												<td data-order="2021-11-26T20:03:44+05:30">
													<div class="badge badge-light fw-bolder">2 days ago</div>
												</td>
												<!--end::Last login=-->
												<!--begin::Joined-->
												<td data-order="2021-07-25T06:43:00+05:30">25 Jul 2021, 6:43 am</td>
												<!--begin::Joined-->
												<!--begin::Action=-->
												
												<td class="text-end">
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-pen"></i></a>
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-trash"></i></a>
												</td>
												<!--end::Action=-->
											</tr><tr class="even">
												<!--begin::User=-->
												<td class="d-flex align-items-center">
													<!--begin:: Avatar -->
													<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
														<a href="javascript:;">
															<div class="symbol-label fs-3 bg-light-warning text-warning">M</div>
														</a>
													</div>
													<!--end::Avatar-->
													<!--begin::User details-->
													<div class="d-flex flex-column">
														<a href="javascript:;" class="text-gray-800 text-hover-primary mb-1">Mikaela Collins</a>
														<span>mikaela@pexcom.com</span>
													</div>
													<!--begin::User details-->
												</td>
												<!--end::User=-->
												<!--begin::Role=-->
												<td>Administrator</td>
												<!--end::Role=-->
												<!--begin::Last login=-->
												<td data-order="2021-11-23T20:03:44+05:30">
													<div class="badge badge-light fw-bolder">5 days ago</div>
												</td>
												<!--end::Last login=-->
												<!--begin::Joined-->
												<td data-order="2021-05-05T11:30:00+05:30">05 May 2021, 11:30 am</td>
												<!--begin::Joined-->
												<!--begin::Action=-->
												
												<td class="text-end">
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-pen"></i></a>
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-trash"></i></a>
												</td>
												<!--end::Action=-->
											</tr><tr class="odd">
												<!--begin::User=-->
												<td class="d-flex align-items-center">
													<!--begin:: Avatar -->
													<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
														<a href="javascript:;">
															<div class="symbol-label">
																<img src="https://preview.keenthemes.com/rider-html-pro/assets/media/avatars/150-8.jpg" alt="Francis Mitcham" class="w-100">
															</div>
														</a>
													</div>
													<!--end::Avatar-->
													<!--begin::User details-->
													<div class="d-flex flex-column">
														<a href="javascript:;" class="text-gray-800 text-hover-primary mb-1">Francis Mitcham</a>
														<span>f.mitcham@kpmg.com.au</span>
													</div>
													<!--begin::User details-->
												</td>
												<!--end::User=-->
												<!--begin::Role=-->
												<td>Trial</td>
												<!--end::Role=-->
												<!--begin::Last login=-->
												<td data-order="2021-11-07T20:03:44+05:30">
													<div class="badge badge-light fw-bolder">3 weeks ago</div>
												</td>
												<!--end::Last login=-->
												<!--begin::Joined-->
												<td data-order="2021-10-25T20:43:00+05:30">25 Oct 2021, 8:43 pm</td>
												<!--begin::Joined-->
												<!--begin::Action=-->
												
												<td class="text-end">
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-pen"></i></a>
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-trash"></i></a>
												</td>
												<!--end::Action=-->
											</tr><tr class="even">
												<!--begin::User=-->
												<td class="d-flex align-items-center">
													<!--begin:: Avatar -->
													<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
														<a href="javascript:;">
															<div class="symbol-label fs-3 bg-light-danger text-danger">O</div>
														</a>
													</div>
													<!--end::Avatar-->
													<!--begin::User details-->
													<div class="d-flex flex-column">
														<a href="javascript:;" class="text-gray-800 text-hover-primary mb-1">Olivia Wild</a>
														<span>olivia@corpmail.com</span>
													</div>
													<!--begin::User details-->
												</td>
												<!--end::User=-->
												<!--begin::Role=-->
												<td>Administrator</td>
												<!--end::Role=-->
												<!--begin::Last login=-->
												<td data-order="2021-11-27T20:03:44+05:30">
													<div class="badge badge-light fw-bolder">Yesterday</div>
												</td>
												<!--end::Last login=-->
												<!--begin::Joined-->
												<td data-order="2021-04-15T21:23:00+05:30">15 Apr 2021, 9:23 pm</td>
												<!--begin::Joined-->
												<!--begin::Action=-->
												
												<td class="text-end">
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-pen"></i></a>
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-trash"></i></a>
												</td>
												<!--end::Action=-->
											</tr><tr class="odd">
												<!--begin::User=-->
												<td class="d-flex align-items-center">
													<!--begin:: Avatar -->
													<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
														<a href="javascript:;">
															<div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
														</a>
													</div>
													<!--end::Avatar-->
													<!--begin::User details-->
													<div class="d-flex flex-column">
														<a href="javascript:;" class="text-gray-800 text-hover-primary mb-1">Neil Owen</a>
														<span>owen.neil@gmail.com</span>
													</div>
													<!--begin::User details-->
												</td>
												<!--end::User=-->
												<!--begin::Role=-->
												<td>Analyst</td>
												<!--end::Role=-->
												<!--begin::Last login=-->
												<td data-order="2021-11-28T19:43:44+05:30">
													<div class="badge badge-light fw-bolder">20 mins ago</div>
												</td>
												<!--end::Last login=-->
												<!--begin::Joined-->
												<td data-order="2021-12-20T10:30:00+05:30">20 Dec 2021, 10:30 am</td>
												<!--begin::Joined-->
												<!--begin::Action=-->
												
												<td class="text-end">
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-pen"></i></a>
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-trash"></i></a>
												</td>
												<!--end::Action=-->
											</tr><tr class="even">
												<!--begin::User=-->
												<td class="d-flex align-items-center">
													<!--begin:: Avatar -->
													<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
														<a href="javascript:;">
															<div class="symbol-label">
																<img src="https://preview.keenthemes.com/rider-html-pro/assets/media/avatars/150-6.jpg" alt="Dan Wilson" class="w-100">
															</div>
														</a>
													</div>
													<!--end::Avatar-->
													<!--begin::User details-->
													<div class="d-flex flex-column">
														<a href="javascript:;" class="text-gray-800 text-hover-primary mb-1">Dan Wilson</a>
														<span>dam@consilting.com</span>
													</div>
													<!--begin::User details-->
												</td>
												<!--end::User=-->
												<!--begin::Role=-->
												<td>Developer</td>
												<!--end::Role=-->
												<!--begin::Last login=-->
												<td data-order="2021-11-25T20:03:44+05:30">
													<div class="badge badge-light fw-bolder">3 days ago</div>
												</td>
												<!--end::Last login=-->
												<!--begin::Joined-->
												<td data-order="2021-03-10T21:23:00+05:30">10 Mar 2021, 9:23 pm</td>
												<!--begin::Joined-->
												<!--begin::Action=-->
												
												<td class="text-end">
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-pen"></i></a>
                                                    <a href="javascript:;" class="menu-link px-3"><i class="fa fa-trash"></i></a>
												</td>
												<!--end::Action=-->
											</tr></tbody>
										<!--end::Table body-->
									</table></div><div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dataTables_paginate paging_simple_numbers" id="kt_table_users_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_table_users_previous"><a href="javascript:;" aria-controls="kt_table_users" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="javascript:;" aria-controls="kt_table_users" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="javascript:;" aria-controls="kt_table_users" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="javascript:;" aria-controls="kt_table_users" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item next" id="kt_table_users_next"><a href="javascript:;" aria-controls="kt_table_users" data-dt-idx="4" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
								</div>
								<!--end::Card body-->
							</div>

<?php include 'layout/wrapperend.php';?>
<?php include 'addBulkUserModal.php';?>
<?php include 'addUserModal.php';?>
<?php include 'layout/footer.php';?>