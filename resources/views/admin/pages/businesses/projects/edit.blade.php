@extends('admin.layouts.app')
@section('title','IMS | Update Project')


@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Update Project</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Project</a></li>
                                <li class="breadcrumb-item active">Update </li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 mb-3 ">
                                    <!-- <div class="mb-3"> -->
                                    <label class="form-label" for="project-title-input">Project Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="project-title-input"
                                        placeholder="Enter project title">
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <!-- <div class="mb-3"> -->
                                    <label class="form-label" for="project-thumbnail-img">Logo</label>
                                    <input class="form-control" id="project-thumbnail-img" type="file"
                                        accept="image/png, image/gif, image/jpeg">
                                </div>
                            </div>

                            <div class="col-lg-12 mb-3 ">
                                <div class="mb-lg-0">
                                    <label for="projectDescriptionTextarea" class="form-label">Project's Description</label>
                                    <textarea class="form-control" id="projectDescriptionTextarea" rows="4"></textarea>
                                </div>
                            </div>



                            <div class="row">
                                <!-- <div class="col-lg-4">
                                    <div class="mb-3 mb-lg-0">
                                        <label for="choices-priority-input" class="form-label">Priority</label>
                                        <select class="form-select" data-choices data-choices-search-false
                                            id="choices-priority-input">
                                            <option value="High" selected>High</option>
                                            <option value="Medium">Medium</option>
                                            <option value="Low">Low</option>
                                        </select>
                                    </div>
                                </div> -->

                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="mobileInput" class="form-label">Mobile <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="mobileInput"
                                            placeholder="Enter project's mobile">
                                        <!-- <label for="datepicker-deadline-input" class="form-label">Deadline</label>
                                        <input type="text" class="form-control" id="datepicker-deadline-input"
                                            placeholder="Enter due date" data-provider="flatpickr"> -->
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="emailInput" class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="emailInput"
                                            placeholder="Enter project's email">
                                        <!-- <label for="datepicker-deadline-input" class="form-label">Deadline</label>
                                        <input type="text" class="form-control" id="datepicker-deadline-input"
                                            placeholder="Enter due date" data-provider="flatpickr"> -->
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="addressTextarea" class="form-label">Address <span class="text-danger">*</span></label>
                                        <textarea class="form-control" id="addressTextarea" rows="1"></textarea>
                                    </div>
                                </div>


                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="choices-subdistrict-input" class="form-label">Subdistrict <span class="text-danger">*</span></label>
                                        <select class="form-select" data-choices data-choices-search-false
                                            id="choices-subdistrict-input">
                                            <option value="Please Select Subdistrict" selected>Please Select
                                                Subdistrict
                                            </option>
                                            <option value="Mymensingh">Mymensingh</option>
                                            <option value="Dhaka">Dhaka</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="choices-district-input" class="form-label">District <span class="text-danger">*</span></label>
                                        <select class="form-select" data-choices data-choices-search-false
                                            id="choices-district-input">
                                            <option value="Please Select District" selected>Please Select District
                                            </option>
                                            <option value="Mymensingh">Mymensingh</option>
                                            <option value="Dhaka">Dhaka</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="choices-division-input" class="form-label">Division <span class="text-danger">*</span></label>
                                        <select class="form-select" data-choices data-choices-search-false
                                            id="choices-division-input">
                                            <option value="Please Select Division" selected>Please Select Division
                                            </option>
                                            <option value="Mymensingh">Mymensingh</option>
                                            <option value="Dhaka">Dhaka</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="choices-privecy-input" class="form-label">Privecy <span class="text-danger">*</span></label>
                                        <select class="form-select" data-choices data-choices-search-false
                                            id="choices-privecy-input">
                                            <option value="Private" selected>Private</option>
                                            <option value="Public">Public</option>
                                            <!-- <option value="Team">Team</option> -->
                                        </select>
                                    </div>
                                </div>


                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="choices-status-input" class="form-label">Status <span class="text-danger">*</span></label>
                                        <select class="form-select" data-choices data-choices-search-false
                                            id="choices-status-input">
                                            <option value="Active" selected>Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->



                </div>
                <!-- end col -->

                <div class="col-lg-7">
                    <div class="text-end mb-4">
                        <!-- <button type="submit" class="btn btn-secondary w-sm">Draft</button> -->
                        <button type="submit" class="btn btn-success w-sm">Save</button>
                        <button type="reset" onclick="history.back()" class="btn btn-danger w-sm">Back</button>
                    </div>
                    
                    
                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

@endsection