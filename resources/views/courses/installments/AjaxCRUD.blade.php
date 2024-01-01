<script>
    // Installment Cancel Button Function
    $(document).on("click", "#cancelBtnInstallment", function () {
        $("#messageparaInstallments").text("")
        $("#updateBtnInstallment").hide()
        $("#formBtnInstallment").show()
        $("#enInstallment").val("")
        $("#hiInstallment").val("")
        $("#amount-installment").val("")
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
        $("#cancelBtnInstallment").data("course-id", id);
        $("#formBtnInstallment").data("course-id", id);
        let installmentAjaxURL = "{{route("installmentsAjax",":id")}}";
        installmentAjaxURL = installmentAjaxURL.replace(":id", id)
        $.ajax({
            url: installmentAjaxURL,
            success: function (result) {
                // console.log(result);
                let data = "";
                for (r in result) {
                    data += `<tr class="datarow">
                                    <td>${result[r]["id"]}</td>
                                    <td>${result[r]["title"]}</td>
                                    <td>${result[r]["amount"]}</td>
                                    <td>
                                    <a class="btn btn-success btn-sm installment-edit-btn"
                                    data-id="${result[r]["id"]}"
                                    data-amount="${result[r]["amount"]}"
                                    data-course-id="${result[r]["course_id"]}"
                                    data-hititle="${result[r]["translations"][1]["title"]}"
                                    data-entitle="${result[r]["translations"][0]["title"]}"
                                    data-bs-toggle="tooltip"
                                    data-bs-title="Edit Installment">
                                    <i class="fa-regular fa-pen-to-square"></i></a>
                                    <button type="button" class="btn btn-danger btn-sm installment-del-btn"
                                     data-id="${result[r]["id"]}" data-course-id="${result[r]["course_id"]}" data-bs-toggle="tooltip" data-bs-title="Delete Installment">
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
        let id = $(this).data("course-id");
        let createURL = "{{route('createInstallmentsAjax', ":cource-id")}}";
        installmentsAjaxURL = createURL.replace(":cource-id", id)
        $.ajax({
            url: installmentsAjaxURL,
            type: "POST",
            data: $("#installment-form").serialize(),
            success: function (result) {
                data = `<tr class="datarow">
                                    <td>${result["id"]}</td>
                                    <td>${result["title"]}</td>
                                    <td>${result["amount"]}</td>
                                    <td>
                                    <a class="btn btn-success btn-sm installment-edit-btn"
                                    data-id="${result["id"]}"
                                    data-amount="${result["amount"]}"
                                    data-course-id="${result["course_id"]}"
                                    data-hititle="${result["translations"][0]["title"]}"
                                    data-entitle="${result["translations"][1]["title"]}"
                                    data-bs-toggle="tooltip"
                                    data-bs-title="Edit Installment">
                                    <i class="fa-regular fa-pen-to-square"></i></a>
                                    <button type="button" class="btn btn-danger btn-sm installment-del-btn"
                                     data-id="${result["id"]}" data-course-id="${result["course_id"]}" data-bs-toggle="tooltip" data-bs-title="Delete Installment">
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
        const featureDeleteURL = '{{route('deleteInstallmentsAjax', ["",':del_id'])}}';
        let row = $(this).parents(".datarow");
        let id = $(this).data('id');
        let deleteURl = featureDeleteURL.replace(':del_id', id)
        $(".delete-msg").text("Are you sure you want to Permanently delete Installments ...");
        $('#delete-record').attr('href', "#");
        $('#delete-courses').modal('show');
        $('#delete-record').off("click").click(function () {
            $.ajax({
                url: deleteURl,
                success: function (response) {
                    $('#delete-courses').modal('hide');
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
        let updateURL = "{{route('edit-courses-installment', ":installment-id")}}";
        updateURL = updateURL.replace(":installment-id", $(this).data("id"))
        $("#installment-form").attr("action", updateURL)

        let self = $(this)
        $("#enInstallment").val($(this).data("entitle"))
        $("#hiInstallment").val($(this).data("hititle"))
        $("#amount-installment").val($(this).data("amount"))

        $("#updateBtnInstallment").on("click", function () {
            $.ajax({
                url: updateURL,
                type: "POST",
                data: $("#installment-form").serialize(),
                success: function (result) {
                    self.data("entitle", $("#enInstallment").val())
                    self.data("hititle", $("#hiInstallment").val())
                    self.data("amount", $("#amount-installment").val())
                    self.parents(".datarow").find("td:eq(1)").text(result.title)
                    self.parents(".datarow").find("td:eq(2)").text($("#amount-installment").val())
                    // console.log("success",self)
                    $("#cancelBtnInstallment").click()
                    $("#messageparaInstallments").text("Installment has been Updated Successfully.")
                    $("#messageparaInstallments").addClass("text-success")
                    $("#updateBtnInstallment").unbind()
                },
                error: function () {
                    $("#messageparaInstallments").text("Installment (En/Hi) and Amount fields must be Filled!")
                    $("#messageparaInstallments").addClass("text-danger")
                }
            });
        })
    })


</script>
