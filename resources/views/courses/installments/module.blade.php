<div class="modal fade modal-xl" id="installment-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="d-inline">Installment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="installment-form" action="" method="post">
                    @csrf
                    <div class="row mb-2">
                        <div class="col">
                            <label for="en.title" class="form-label">Installment Title (en)</label>
                            <input class="form-control" type="text" id="enInstallment" name="en[title]"
                                   value="{{old('en.title')}}">
                        </div>
                        <div class="col">
                            <label for="hi.title" class="form-label">Installment Title (hi)</label>
                            <input class="form-control" type="text" id="hiInstallment" name="hi[title]"
                                   value="{{old('hi.title')}}">
                        </div>
                        <div class="col">
                            <label for="amount" class="form-label">Amount</label>
                            <input class="form-control" type="text" id="amount-installment" name="amount"
                                   value="{{old('amount')}}">
                        </div>
                    </div>
                    <a id="updateBtnInstallment" class="btn  btn-danger">Update</a>
                    <a id="formBtnInstallment" class="btn  btn-ex-blue">Create</a>
                    <a id="cancelBtnInstallment" data-course-id="" class="btn btn-ex-blue">Cancel</a>
                    <p id="messageparaInstallments" class="d-inline ms-5"></p>
                </form>
                <div class="p-3">
                    <div class="row justify-content-center mx-auto">
                        <table
                            class="table table-striped table-hover table-sm table-responsive align-middle text-center">
                            <thead>
                            <tr>
                                <th scope="col" style="width:50px;">#</th>
                                <th scope="col">Installment Title</th>
                                <th scope="col">Amount</th>
                                <th scope="col" style="width:150px;">Action</th>
                            </tr>
                            </thead>
                            <tbody id="table-installmentmodel">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
