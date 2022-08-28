$(document).ready(function() {
    $.getJSON( "/shops/listCart", function(data) {
        var li = $("<li />");
        var image = $("<img />", {
            alt: "Cart product Image",
            class: "w-50",
            src: "/img/product-image/1.webp"
        });
        var div_content = $("<div />", {
            class: "content"
        });
        var a_title = $("<a />", {
            href: "#",
            class: "title"
        });
        var span_quantity = $("<span />",{
            class: "quantity-price"
        });
        var span_price = $("<span />",{
            class: "amount"
        });
        var button_remove = $("<button />", {
            class: "remove"
        })
        $(span_quantity).append(1 + " x ");
        $(button_remove).append("×");

        $.each(data, function(id, val) {
            $("#list-shopping-cart").append(li);
            $(li).attr("class", "product_" + id);
            $(li).append(image);
            $(li).append(div_content);
            $(div_content).append(a_title);
            $(div_content).append(span_quantity);
            $(div_content).append(button_remove);
            $(button_remove).attr("onClick", "removeItemCart("+ id + ")");
            $(span_quantity).append(span_price);
            $(a_title).text(val['nome']);
            $(span_price).text(val['preco_por']);
        });
    });
});

function addToCart(id) {
    $.getJSON( "/shops/addProductToCart/" + id, function(data) {
        var li = $("<li />", {
            class: "product_" + id
        });
        var image = $("<img />", {
            alt: "Cart product Image",
            class: "w-50",
            src: "/img/product-image/1.webp"
        });
        var div_content = $("<div />", {
            class: "content"
        });
        var a_title = $("<a />", {
            href: "#",
            class: "title"
        });
        var span_quantity = $("<span />",{
            class: "quantity-price"
        });
        var span_price = $("<span />",{
            class: "amount"
        });
        var button_remove = $("<button />", {
            onClick: "removeItemCart("+ id + ")",
            class: "remove"
        })
        $(span_quantity).append(1 + " x ");
        $(button_remove).append("×");

        $.each(data, function(id, val) {
            $("#list-shopping-cart").append(li);
            $(li).append(image);
            $(li).append(div_content);
            $(div_content).append(a_title);
            $(div_content).append(span_quantity);
            $(div_content).append(button_remove);
            $(span_quantity).append(span_price);
            $(a_title).append(val['nome']);
            $(span_price).append(val['preco_por']);
        });
    });
}

function removeItemCart(id) {
    $.ajax({
        url : "/shops/removeItemCart/" + id,
        method: 'POST',
        dataType: 'JSON',
        cache: false,
        async: false
    }).done((msg) => {
        JSON.stringify(msg);
    }).fail((error) => {
        console.log(error.message);
    });
    $(".product_" + id).remove();
}

function gerenciaListaCarrinho(data, id) {
    var li_list = document.createElement('li');
    $('#list-shopping-cart').appendChild(li_list);

    li_list.append();
}
