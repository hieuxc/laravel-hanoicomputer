$(".cate-item").each(function () {
    $(this).click(function () {
        $("#parent_id_label").val($(this).text());
        $("#parent_id").val($(this).data("id"));
    });
});
