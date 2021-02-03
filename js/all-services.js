
$(document).on("click", ".nav-item", function () {
    $('.span-services').removeClass('is-active');
    $(this).find('.span-services').addClass("is-active");
})