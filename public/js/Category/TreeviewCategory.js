$(".treeview").each(function (item) {
    $(this).click(function () {
        $(this).parent().children(".treeview-menu").first().toggle();
        $(this).children(".cate-icon").toggleClass("cate-icon-down");
    });
});
