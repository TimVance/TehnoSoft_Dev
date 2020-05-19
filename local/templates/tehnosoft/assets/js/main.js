$("#showSortOptions").click(function () {
    if ($(".filter").css("display") == "none") {
        $(".filter").css("display", "block");
    } else {
        $(".filter").css("display", "none");
    }
});

$(document).ready(function () {
    buy_btns = $('a[href*="ADD2BASKET"]');
    buy_btns.each(
        function () {
            $(this).attr("rel", $(this).attr("href"));
        }
    );
    buy_btns.attr("href", "javascript:void(0);");

    $('a[rel*="ADD2BASKET"]').click(function () {
        let el = $(this);
        el.find('span').html('<span class="lds-ellipsis"><span></span><span></span><span></span><span></span></span>');
        $.ajax({
            type: "GET",
            url: $(this).attr("rel"),
            dataType: "html",
            success: function (out) {
                el.find('span').text("Добавить еще");
                BX.onCustomEvent('OnBasketChange');
            }
        });
    });

});