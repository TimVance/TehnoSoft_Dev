$(document).ready(
    function(){
        buy_btns = $('a[href*="ADD2BASKET"]');
        buy_btns.each(
            function(){
                $(this).attr("rel", $(this).attr("href"));
            }
        );
        buy_btns.attr("href","javascript:void(0);");

        $('a[rel*="ADD2BASKET"]').click(function(){
            let el = $(this);
            $.ajax({
                type: "GET",
                url: $(this).attr("rel"),
                dataType: "html",
                success: function(out){
                    el.text("Добавить еще");
                    BX.onCustomEvent('OnBasketChange');
                }
            });
        });

    }
);