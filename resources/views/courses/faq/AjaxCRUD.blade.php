<script>
    // FAQs Modal Function
    const faqmodel = new bootstrap.Modal("#faq-modal");
    $(".faq").click(function () {

        $("#faqmessagepara").text("")
        let id = $(this).data("id");
        $("#faqcancelBtn").data("course-id", id);
        $("#faqformBtnAjax").data("course-id", id);
        $("#faqcancelBtn").click()
        let createURL = "{{route('create-courses-faq', ":cource_id")}}";
        $("#faq-form").attr("action", createURL.replace(":cource_id", id))

        let faqAjaxURL = "{{route("faqAjax",":id")}}";
        faqAjaxURL = faqAjaxURL.replace(":id", id)
        $.ajax({
            url: faqAjaxURL,
            success: function (result) {
                let data = "";
                for (r in result) {
                    data += `<tr class="datarow">
                                    <td>${result[r]["id"]}</td>
                                    <td class="text-start"><b>Ques - </b>${result[r]["title"]}
                            <br>
                            <b>Ans - </b>${result[r]["description"]}</td>
                                    <td>
                                        <a class="btn btn-success btn-sm edit-faq"
                                           data-faq-id="${result[r]["id"]}"
                                           data-enq="${result[r]["translations"][0]["title"]}"
                                           data-ena="${result[r]["translations"][0]["description"]}"
                                           data-hiq="${result[r]["translations"][1]["title"]}"
                                           data-hia="${result[r]["translations"][1]["description"]}"
                                           data-course-id="${id}"
                                           data-bs-toggle="tooltip"
                                           data-bs-title="Edit FAQ">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                        <button type="button" class="btn btn-danger btn-sm faqremove"
                                                data-id="${result[r]["id"]}" data-bs-toggle="tooltip" data-bs-title="Delete FAQ">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                    </td>
                                </tr>`;
                }
                $("#faq-table").html(data);
            }
        });
        faqmodel.show();
    });


    // Faq Create Function
    $(document).on('click', "#faqformBtnAjax", function () {
        let id = $(this).data("course-id");
        let createURL = "{{route('createfaqAjax', ":cource-id")}}";
        faqAjaxURL = createURL.replace(":cource-id", id)
        $.ajax({
            url: faqAjaxURL,
            type: "POST",
            data: $("#faq-form").serialize(),
            success: function (result) {
                console.log(result)
                data = `<tr class="datarow">
                                    <td>${result["id"]}</td>
                                    <td class="text-start"><b>Ques - </b>${result["title"]}
                            <br>
                            <b>Ans - </b>${result["description"]}</td>
                                    <td>
                                        <a class="btn btn-success btn-sm edit-faq"
                                           data-faq-id="${result["id"]}"
                                           data-enq="${result["translations"][0]["title"]}"
                                           data-ena="${result["translations"][0]["description"]}"
                                           data-hiq="${result["translations"][1]["title"]}"
                                           data-hia="${result["translations"][1]["description"]}"
                                           data-course-id="${id}"
                                           data-bs-toggle="tooltip"
                                           data-bs-title="Edit FAQ">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                        <button type="button" class="btn btn-danger btn-sm faqremove"
                                                data-id="${result["id"]}" data-bs-toggle="tooltip" data-bs-title="Delete FAQ">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                    </td>
                                </tr>`;
                $("#faq-table").append(data);

                $("#faqcancelBtn").click()
                $("#faqmessagepara").text("Faq has been added Successfully.")
                $("#faqmessagepara").removeClass("text-danger")
                $("#faqmessagepara").addClass("text-success")

            },
            error: function () {
                $("#faqmessagepara").text("All (En/Hi) fields must be Filled!")
                $("#faqmessagepara").addClass("text-danger")
            }


        });
    });

    // FAQ Update Function
    $(document).on("click", ".edit-faq", function () {
        let updateURL = "{{route('edit-courses-faq', [":course-id",":faq-id"])}}";
        updateURL = updateURL.replace(":faq-id", $(this).data("faq-id"))
        updateURL = updateURL.replace(":course-id", $(this).data("course-id"))
        $("#faq-form").attr("action", updateURL);
        $("#enq").val($(this).data("enq"))
        $("#ena").val($(this).data("ena"))
        $("#hiq").val($(this).data("hiq"))
        $("#hia").val($(this).data("hia"))
        $("#faqformBtn").show()
        $("#faqformBtnAjax").hide()
    })


    // FAQ Cancel Button Function
    $(document).on("click", "#faqcancelBtn", function () {
        $("#faqmessagepara").text("")
        let createURL = "{{route('create-courses-faq', ":cource_id")}}";
        createURL = createURL.replace(":course-id", $(this).data("course-id"))
        $("#faq-form").attr("action", createURL);
        $("#ena").val("")
        $("#hiq").val("")
        $("#hia").val("")
        $("#enq").val("")
        $("#faqformBtn").hide()
        return false
    });

    // FAQ Delete Function
    $(document).on('click', ".faqremove", function () {
        const faqDeleteURL = '{{route('deletefaqAjax', ':del_id')}}';
        let row = $(this).parents(".datarow");
        let faq_id = $(this).data('id');
        let DeleteURL = faqDeleteURL.replace(':del_id', faq_id)
        $(".delete-msg").text("Are you sure you want to Permanently delete FAQ ...");
        $('#delete-record').attr('href', "#");
        $('#delete-courses').modal('show');
        $('#delete-record').off("click").on("click", function () {
            $.ajax({
                url: DeleteURL,
                success: function (response) {
                    row.remove();
                    $("#faqmessagepara").text("FAQ has been deleted Successfully.")
                    $("#faqmessagepara").addClass("text-success")
                },
                error: function (res) {
                    console.log(res)
                }
            })
            $('#delete-courses').modal('hide');
        })
        return false;
    });
</script>
