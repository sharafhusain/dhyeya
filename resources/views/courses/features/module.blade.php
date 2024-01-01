<div class="modal fade modal-xl" id="features-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="d-inline">Features</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="feature-form" onsubmit="return featureValidate()" action="" method="post">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="en.title" class="form-label">Features <span
                                        class="text-muted">(en)</span></label>
                                <input class="form-control" type="text" id="entitle" name="en[title]"
                                       value="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="hi.title" class="form-label">Features <span
                                        class="text-muted">(hi)</span></label>
                                <input class="form-control" type="text" id="hititle" name="hi[title]"
                                       value="">
                            </div>
                        </div>
                    </div>
                    <a id="formBtn" class="btn  btn-ex-blue">Create</a>
                    <a id="submitbtn" class="btn  btn-danger">Update</a>
                    <a id="cancelBtn" data-course-id="" class="btn btn-ex-blue">Cancel</a>
                    <p id="messagepara" class="d-inline ms-5"></p>
                </form>
                <div class="p-3">
                    <div class="row justify-content-center mx-auto">
                        <table
                            class="table table-striped table-hover table-sm table-responsive align-middle text-center">
                            <thead>
                            <tr>
                                <th scope="col" style="width:50px;">#</th>
                                <th scope="col">Features</th>
                                <th scope="col" style="width:150px;">Action</th>
                            </tr>
                            </thead>
                            <tbody id="table-display-data">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
