
										<!--begin::Modal - Add task-->
										<div class="modal fade" id="kt_modal_bulk_add_lead" tabindex="-1" aria-hidden="true">
											<!--begin::Modal dialog-->
											<div class="modal-dialog modal-dialog-centered mw-650px">
												<!--begin::Modal content-->
												<div class="modal-content">
													<!--begin::Modal header-->
													<div class="modal-header" id="kt_modal_add_user_header">
														<!--begin::Modal title-->
														<h2 class="fw-bolder">Bulk Lead Upload</h2>
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
													<div class="modal-body scroll-y mx-5 my-7">
														<ol>
															<li>Download a <a href="#">template.</a></li>
															<li>Add your datat to the template file.</li>
															<li>Upload it below for processing.</li>
														</ol>
														<!--begin::Form-->
														<form id="kt_modal_add_user_form" class="mt-4form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
															<!--begin::Scroll-->
															<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px" style="">
																
																<!--begin::Input group-->
																<div class="fv-row mb-7 fv-plugins-icon-container">
																	<!--begin::Label-->
																	<label class="required fw-bold fs-6 mb-2">Upload File</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="file" name="" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="" value="">
																	<!--end::Input-->
																<div class="fv-plugins-message-container invalid-feedback"></div></div>
																<!--end::Input group-->
															
															<!--end::Scroll-->
															<!--begin::Actions-->
															<div class="text-center pt-15">
																<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Cancel</button>
																<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
																	<span class="indicator-label">Upload</span>
																	<span class="indicator-progress">Please wait... 
																	<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																</button>
															</div>
															<!--end::Actions-->
														<div></div></form>
														<!--end::Form-->
													</div>
													<!--end::Modal body-->
												</div>
												<!--end::Modal content-->
											</div>
											<!--end::Modal dialog-->
										</div>
										</div>
										<!--end::Modal - Add task-->