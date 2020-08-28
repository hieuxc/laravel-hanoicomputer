$(".cate-item").each(function () {
    $(this).click(function () {
        $("#category_name").val($(this).text());
        $("#edit_link").attr(
            "href",
            "/admin/categories/" + $(this).data("id") + "/edit"
        );
        $("#delete_link").attr(
            "action",
            "/admin/categories/" + $(this).data("id")
        );
    });
});
$("#delete_btn,#edit_link").each(function () {
    $(this).click(function (e) {
        if ($("#category_name").val() == "") {
            e.preventDefault();
            $("#category_name").addClass("is-invalid");
            $("#error_category_name").text("Hãy chọn danh mục");
            $("#modal_confirm_delete").modal("hide");
        }
    });
});

