

$(document).ready(function () {

    // Event listener for removing a product
    $(".product-remove").on("click", function () {
        var product = $(this).closest(".product");
        product.remove();
        updateCart();
    });

    // Event listener for quantity changes
    $(".product-quantity input").on("input", function () {
        updateCart();
    });

    // Function to update the cart after removing or changing quantity
    function updateCart() {
        var totalPrice = 0;
        var totalItems = 0;

        // Iterate through each product
        $(".product").each(function () {
            var quantity = parseInt($(this).find(".product-quantity input").val(), 10) || 0;
            var price = parseFloat($(this).find(".product-price").text().replace('$', '')) || 0;

            // Update the total items
            totalItems += quantity;

            // Update the total price for each product
            var subtotal = quantity * price;
            $(this).find(".subtotal").text("$" + subtotal.toFixed(2));

            // Update the total price for the entire cart
            totalPrice += subtotal;
        });

        // Update the total price and total items in the cart
        $("#totalPrice").text("$" + totalPrice.toFixed(2));
        $("#totalItems").text(totalItems);
    }
});
