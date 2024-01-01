<script>
    // Installment Cancel Button Function
    $(document).on("click", "#cancelBtnInstallment", function () {
        $("#messageparaInstallments").text("")
        $("#updateBtnInstallment").hide()
        $("#formBtnInstallment").show()
        $("#mode").val("")
        $("#student_type").val("")
        $("#amount").val("")
        return false
    });


    // Installment Modal Function
    const installmentmodel = new bootstrap.Modal("#installment-modal");
    $(".installment").click(function () {
        $("#messageparaInstallments").text("")
        $("#updateBtnInstallment").hide()
        $("#formBtnInstallment").show()
        $("#cancelBtnInstallment").click()
        let id = $(this).data("id");
        $("#cancelBtnInstallment").data("test-id", id);
        $("#formBtnInstallment").data("test-id", id);
        let installmentAjaxURL = "{{route("getfeedetails",":id")}}";
        installmentAjaxURL = installmentAjaxURL.replace(":id", id)
        $.ajax({
            url: installmentAjaxURL,
            success: function (result) {
                console.log(result);
                let data = "";
                for (r in result) {
                    data += `<tr class="datarow">
                                    <td>${result[r]["id"]}</td>
                                    <td>${result[r]["student_type"]}</td>
                                    <td>${result[r]["mode"]}</td>
                                    <td>${result[r]["amount"]}</td>
                                    <td>
                                    <a class="btn btn-success btn-sm installment-edit-btn"
                                    data-id="${result[r]["id"]}"
                                    data-amount="${result[r]["amount"]}"
                                    data-test-id="${result[r]["test_id"]}"
                                    data-student_type="${result[r]["student_type"]}"
                                    data-mode="${result[r]["mode"]}"
                                    data-bs-toggle="tooltip"
                                    data-bs-title="Edit Installment">
                                    <i class="fa-regular fa-pen-to-square"></i></a>
                                    <button type="button" class="btn btn-danger btn-sm installment-del-btn"
                                     data-id="${result[r]["id"]}" data-test-id="${result[r]["test_id"]}" data-bs-toggle="tooltip" data-bs-title="Delete Installment">
                                     <i class="fa-regular fa-trash-can"></i></button></td>
                            </tr>`;
                }
                ;
                $("#table-installmentmodel").html(data);
            }
        });
        installmentmodel.show();
    });

    // Installments Create Function
    $(document).on('click', "#formBtnInstallment", function () {
        let id = $(this).data("test-id");
        console.log(id)
        let createURL = "{{route('createfeedetailAjax', ":test-id")}}";
        installmentsAjaxURL = createURL.replace(":test-id", id)
        $.ajax({
            url: installmentsAjaxURL,
            type: "POST",
            data: $("#installment-form").serialize(),
            success: function (result) {
                data = `<tr class="datarow">
                                    <td>${result["id"]}</td>
                                    <td>${result["student_type"]}</td>
                                    <td>${result["mode"]}</td>
                                    <td>${result["amount"]}</td>
                                    <td>
                                    <a class="btn btn-success btn-sm installment-edit-btn"
                                    data-id="${result["id"]}"
                                    data-amount="${result["amount"]}"
                                    data-test-id="${result["test_id"]}"
                                    data-student_type="${result["student_type"]}"
                                    data-bs-toggle="tooltip"
                                    data-bs-title="Edit Installment">
                                    <i class="fa-regular fa-pen-to-square"></i></a>
                                    <button type="button" class="btn btn-danger btn-sm installment-del-btn"
                                     data-id="${result["id"]}" data-test-id="${result["test_id"]}" data-bs-toggle="tooltip" data-bs-title="Delete Installment">
                                     <i class="fa-regular fa-trash-can"></i></button></td>
                            </tr>`;
                $("#table-installmentmodel").append(data);

                $("#messageparaInstallments").text("Installment has been added Successfully.")
                $("#messageparaInstallments").removeClass("text-danger")
                $("#messageparaInstallments").addClass("text-success")
            },
            error: function () {
                $("#messageparaInstallments").text("Installment Title (En/Hi) fields must be Filled and amount must be numeric.")
                $("#messageparaInstallments").addClass("text-danger")
            }
        });
        $("#cancelBtnInstallment").click()
    });


    // Installments Delete Function
    $(document).on('click', ".installment-del-btn", function () {
        const featureDeleteURL = '{{route('deleteInstallmentsAjax', ["test",':del_id'])}}';
        let row = $(this).parents(".datarow");
        let id = $(this).data('id');
        let deleteURl = featureDeleteURL.replace(':del_id', id)
        $(".delete-msg").text("Are you sure you want to Permanently delete Fee Detail ...");
        $('#delete-record').attr('href', "#");
        $('#delete-test').modal('show');
        $('#delete-record').off("click").click(function () {
            $.ajax({
                url: deleteURl,
                success: function (response) {
                    $('#delete-test').modal('hide');
                    row.remove();

                    $("#messageparaInstallments").text("Installment has been deleted Successfully.")
                    $("#messageparaInstallments").removeClass("text-danger")
                    $("#messageparaInstallments").addClass("text-success")
                }
            })
        })
        return false;
    });


    // Installment Update Function Ajax
    $(document).on("click", ".installment-edit-btn", function () {
        $("#formBtnInstallment").hide()
        $("#updateBtnInstallment").show()
        let updateURL = "{{route('edit-feedetail', ["placeholderforurl",":fee-id"])}}";
        updateURL = updateURL.replace(":fee-id", $(this).data("id"))
        $("#installment-form").attr("action", updateURL)

        let self = $(this)
        $("#student_type").val($(this).data("student_type"))
        $("#mode").val($(this).data("mode"))
        $("#amount").val($(this).data("amount"))

        $("#updateBtnInstallment").on("click", function () {
            $.ajax({
                url: updateURL,
                type: "POST",
                data: $("#installment-form").serialize(),
                success: function (result) {
                    self.data("mode", $("#mode").val())
                    self.data("student_type", $("#student_type").val())
                    self.data("amount", $("#amount").val())
                    self.parents(".datarow").find("td:eq(1)").text(result.student_type)
                    self.parents(".datarow").find("td:eq(2)").text($("#mode").val())
                    self.parents(".datarow").find("td:eq(3)").text($("#amount").val())
                    // console.log("success",self)
                    $("#cancelBtnInstallment").click()
                    $("#messageparaInstallments").text("Installment has been Updated Successfully.")
                    $("#messageparaInstallments").addClass("text-success")
                    $("#updateBtnInstallment").unbind()
                },
                error: function () {
                    $("#messageparaInstallments").text("Installment (En/Hi) and Amount fields must be Filled!")
                    $("#messageparaInstallments").addClass("text-danger")
                    $("#updateBtnInstallment").unbind()
                }
            });
        })
    })


</script>
