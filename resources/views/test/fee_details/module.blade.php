<div class="modal fade modal-xl" id="installment-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="d-inline">Fee Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="installment-form" action="" method="post">
                    @csrf
                    <div class="row mb-2">
                        <div class="col">
                            <label for="student_type" class="form-label">Student Type</label>
                            <select class="form-select" id="student_type" name="student_type">
                                <option value="" disabled selected>Choose Mode</option>
                                <option value="dhyeya" @selected(old('student_type') == 'dhyeya')>Dhyeya
                                </option>
                                <option value="non_dhyeya" @selected(old('student_type') == 'non_dhyeya')>
                                    Non_dhyeya
                                </option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="mode" class="form-label">Mode</label>
                            <select class="form-select" id="mode" name="mode">
                                <option value="" disabled selected>Choose Mode</option>
                                <option value="online" @selected(old('mode') == 'online')>Online</option>
                                <option value="offline" @selected(old('mode') == 'offline')>Offline</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="amount" class="form-label">Amount</label>
                            <input class="form-control" type="text" id="amount" name="amount"
                                   value="{{old('amount')}}">
                        </div>
                    </div>
                    <a id="updateBtnInstallment" class="btn  btn-danger">Update</a>
                    <a id="formBtnInstallment" class="btn  btn-ex-blue">Create</a>
                    <a id="cancelBtnInstallment" data-test-id="" class="btn btn-ex-blue">Cancel</a>
                    <p id="messageparaInstallments" class="d-inline ms-5"></p>
                </form>
                <div class="p-3">
                    <div class="row justify-content-center mx-auto">
                        <table
                            class="table table-striped table-hover table-sm table-responsive align-middle text-center">
                            <thead>
                            <tr>
                                <th scope="col" style="width:50px;">#</th>
                                <th scope="col">Student type</th>
                                <th scope="col">Mode</th>
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
