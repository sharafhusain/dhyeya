<div class="modal fade modal-xl" id="faq-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="d-inline">FAQs</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="faq-form" action="" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <div class="">
                                <label for="en.title" class="form-label">FAQ Question (en)</label>
                                <input class="form-control" type="text" id="enq" name="en[title]"
                                       value="{{old('en.title')}}">
                            </div>

                            <div class="">
                                <label for="en.description" class="form-label">Answer (en)</label>
                                <input class="form-control" type="text" id="ena" name="en[description]"
                                       value="{{old('en.description')}}">
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="">
                                <label for="hi.title" class="form-label">FAQ Question (hi)</label>
                                <input class="form-control" type="text" id="hiq" name="hi[title]"
                                       value="{{old('hi.title')}}">
                            </div>

                            <div class="">
                                <label for="hi.description" class="form-label">Answer (hi)</label>
                                <input class="form-control" type="text" id="hia" name="hi[description]"
                                       value="{{old('hi.description')}}">
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="faqformBtn" class="btn  btn-danger">Update</button>
                    <a id="faqformBtnAjax" class="btn  btn-ex-blue">Create</a>
                    <a id="faqcancelBtn" data-course-id="" class="btn btn-ex-blue">Cancel</a>
                    <p id="faqmessagepara" class="d-inline ms-5"></p>
                </form>
                <div class="p-3">
                    <div class="row justify-content-center mx-auto">
                        <table
                            class="table table-striped table-hover table-sm table-responsive align-middle text-center">
                            <thead>
                            <tr>
                                <th scope="col" style="width:50px;">#</th>
                                <th scope="col">FAQ</th>
                                <th scope="col" style="width:120px;">Action</th>
                            </tr>
                            </thead>
                            <tbody id="faq-table">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
