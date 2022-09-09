$("#faculte").change(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    const facName = $(this).val();

    $.ajax({
        type: "POST",
        url: "dpts",
        data: {
            faculteName: facName,
        },
        success: function (result) {
            $("#dpt").empty();
            $("#dpt").append(
                '<option selected disabled value="">Select</option>'
            );

            if (result && result?.status === "success") {
                result?.data?.map((dpt) => {
                    const dpts = `<option value='${dpt?.name}'> ${dpt?.name} </option>`;
                    $("#dpt").append(dpts);
                });
            }
        },
        error: function (result) {
            console.log("error", result);
        },
    });
});