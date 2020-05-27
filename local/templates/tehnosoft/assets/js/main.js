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
                let span = document.createElement('span');
                span.innerText = 'Товар успешно добавлен в корзину!';
                $("#js-notice-cart").prepend(span);
                span.classList.add('show');
                setTimeout(function () {
                    span.classList.remove('show');
                    span.remove();
                }, 3000);
            }
        });
    });
    $(document).on('click', "#js-notice-cart span", function () {
        $(this).removeClass('show');
        $(this).remove();
    });
    $(".js-open-news").click(function () {
        $(this).parent().children(".js-open-content").slideToggle();
    });
});