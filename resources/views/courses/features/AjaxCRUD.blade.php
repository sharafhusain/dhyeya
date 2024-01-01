<script>
    // Feature Modal Function
    const featuresmodel = new bootstrap.Modal("#features-modal");
    $(".features").click(function () {
        $("#messagepara").text("")
        $("#formBtn").show()
        $("#submitbtn").hide()
        let id = $(this).data("id");
        $("#cancelBtn").data("course-id", id);
        $("#cancelBtn").click()
        $("#formBtn").data("course-id", id);
        let featureAjaxURL = "{{route("featureAjax",[":id","course"])}}";
        featureAjaxURL = featureAjaxURL.replace(":id", id)
        $.ajax({
            url: featureAjaxURL,
            success: function (result) {
                let data = "";
                for (r in result) {
                    data += `<tr class="datarow"><td>${result[r]["id"]}</td><td>${result[r]["title"]}</td>
                                    <td>
                                        <a class="btn btn-success btn-sm edit-feature" data-course-id="${id}" data-feature-id="${result[r]["id"]}" data-hi="${result[r]["translations"][1]["title"]}" data-en="${result[r]["translations"][0]["title"]}" data-bs-toggle="tooltip" data-bs-title="Edit Feature" >
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                        <button type="button" class="btn btn-danger btn-sm feature-del-btn"
                                                data-feature-id="${result[r]["id"]}" data-course-id="${id}"  data-bs-toggle="tooltip" data-bs-title="Delete Feature">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                    </td></tr>`;
                }
                $("#table-display-data").html(data);
            }
        });
        featuresmodel.show();
    });

    // Feature Create Function
    $(document).on('click', "#formBtn", function () {
        let id = $(this).data("course-id");
        let createURL = "{{route('createFeatureAjax', ":cource-id")}}";
        featureAjaxURL = createURL.replace(":cource-id", id)
        $.ajax({
            url: featureAjaxURL,
            type: "POST",
            data: $("#feature-form").serialize(),
            success: function (result) {
                data = `<tr class="datarow"><td>${result["id"]}</td><td>${result["title"]}</td>
                                    <td>
                                        <a class="btn btn-success btn-sm edit-feature" data-course-id="${id}" data-feature-id="${result["id"]}" data-hi="${result["translations"][1]["title"]}" data-en="${result["translations"][0]["title"]}" data-bs-toggle="tooltip" data-bs-title="Edit Feature" >
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                        <button type="button" class="btn btn-danger btn-sm feature-del-btn"
                                                data-feature-id="${result["id"]}" data-course-id="${id}"  data-bs-toggle="tooltip" data-bs-title="Delete Feature">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                    </td></tr>`;
                $("#table-display-data").append(data);

                $("#cancelBtn").click()
                $("#messagepara").text("Features has been added Successfully.")
                $("#messagepara").addClass("text-success")
            },
            error: function () {
                $("#messagepara").text("Features (En/Hi) fields must be Filled!")
                $("#messagepara").addClass("text-danger")
            }


        });
    });


    // Feature Update Function Ajax
    $(document).on("click", ".edit-feature", function () {
        $("#formBtn").hide()
        $("#submitbtn").show()
        let updateURL = "{{route('edit-feature', ":feature-id")}}";
        updateURL = updateURL.replace(":feature-id", $(this).data("feature-id"))
        let self = $(this)
        $("#entitle").val($(this).data("en"))
        $("#hititle").val($(this).data("hi"))

        $("#submitbtn").on("click", function () {
            $.ajax({
                url: updateURL,
                type: "POST",
                data: $("#feature-form").serialize(),
                success: function (result) {
                    self.data("en", $("#entitle").val())
                    self.data("hi", $("#hititle").val())
                    // $(this).parents(".datarow").find("td:eq(1)").text(result.title)
                    self.parents(".datarow").find("td:eq(1)").text(result.title)
                    // console.log("success",self)
                    $("#cancelBtn").click()
                    $("#messagepara").text("Features has been Updated Successfully.")
                    $("#messagepara").addClass("text-success")
                    $("#submitbtn").unbind()
                },
                error: function () {
                    $("#messagepara").text("Features (En/Hi) fields must be Filled!")
                    $("#messagepara").addClass("text-danger")
                }
            });
        })
    })

    // Feature Delete Function
    $(document).on('click', ".feature-del-btn", function () {
        const featureDeleteURL = '{{route('deleteFeatureAjax', ':del_id')}}';
        let row = $(this).parents(".datarow");
        let feature_id = $(this).data('feature-id');
        let deleteURl = featureDeleteURL.replace(':del_id', feature_id)
        $(".delete-msg").text("Are you sure you want to Permanently delete Feature ...");
        $('#delete-record').attr('href', "#");
        $('#delete-courses').modal('show');
        $('#delete-record').off("click").click(function () {
            $.ajax({
                url: deleteURl,
                success: function (response) {
                    $('#delete-courses').modal('hide');
                    row.remove();
                    $("#messagepara").text("Features has been deleted Successfully.")
                    $("#messagepara").addClass("text-success")
                }
            })
        })
        return false;
    });

    // Feature Cancel Button Function
    $(document).on("click", "#cancelBtn", function () {
        $("#messagepara").text("")
        $("#messagepara").removeClass("text-danger")
        $("#formBtn").show()
        $("#submitbtn").hide()
        $("#entitle").val("")
        $("#hititle").val("")
        return false
    });

</script>
