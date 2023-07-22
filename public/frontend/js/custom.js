$(document).ready(function (){

    $('.addToCartBtn').click(function (e){
        e.preventDefault();

        var products_id = $(this).closest('.product_data').find('.prod_id').val();
        var products_qty = $(this).closest('.product_data').find('.qty-input').val();

        //alert(product_id);
        //alert(product_qty);

        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "POST",
            url: "/addtocart",
            data: {
                'products_id' : products_id,
                'products_qty' : products_qty,
            },
            success: function (response){
                swal(response. status);
            }
        });

    });

    $('.increment-btn').click(function (e){
        e.preventDefault();

       var inc_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(inc_value, 10);
        value = isNaN(value) ? 0 :value;
        if(value < 10)
        {
            value++;
            $(this).closest('.product_data').find('.qty-input').val(value);
        }
    });

    $('.decrement-btn').click(function (e){
        e.preventDefault();

        var dec_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(dec_value, 10);
        value = isNaN(value) ? 0 :value;
        if(value > 1)
        {
            value--;
            $(this).closest('.product_data').find('.qty-input').val(value);

        }
    });

// update delete
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.delete-item').click(function (e) { 
        e.preventDefault();
        
        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        
        $.ajax({
            type: "POST",
            url: "/delete-item",
            data: {
                'prod_id' : prod_id,
            },

            success: function (response) {
                window.location.reload();
                swal("", response. status, "success");
            }
        });
    });

    $('.change-qty').click(function (e) { 
        e.preventDefault();
        
        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        var prod_qty = $(this).closest('.product_data').find('.qty-input').val();
        data = {
            'prod_id' : prod_id,
            'prod_qty' : prod_qty,
        }
        
        $.ajax({
            type: "POST",
            url: "/update-item",
            data: data,

            success: function (response) {
                window.location.reload();
            }
        });

    });

});