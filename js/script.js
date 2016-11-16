$(document).ready(function(){
    $('#next').click(function(){
        var fd = new for();
        $.ajax ({
            url: "process.php?action=ajax",
            type: "POST",
            data: ,
            processData: false,
            contentType: false,
            success: function(data){
                $('#products').empty();
                $.each(data, function (i, product){
                    $('#products').append("<div class=\"item  col-xs-4 col-lg-4\">
                    <div class=\"thumbnail\">
                        <img class=\"group list-group-image\" src=\"+product.image_url+\" alt=\"\" />
                        <div class=\"caption\">
                        <h4 class=\"group inner list-group-item-heading\">
                    +product.name+</h4>
                    <p class=\"group inner list-group-item-text\">
                    +product.description+</p>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-md-6\">
                        <p class=\"lead\">
                    $+product.price+</p>
                    </div>
                    <div class=\"col-xs-12 col-md-6\">
                        <a class=\"btn btn-success\" href=\"#\">Добавить в корзину</a>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>");
                });
            }
        });
        return false;
    });
});
