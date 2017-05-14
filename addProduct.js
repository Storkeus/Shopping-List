$("#addProductForm").submit(function(e) {
        var productName=$("#productName").val();
        var productAmount=$("#productAmount").val();
    
        $.ajax({
            url: "addProduct.php",
            data:{
                productName: productName,
                productAmount: productAmount
            },
            
            succes: function(){
            viewList();
        }
        });
    e.preventDefault();
    });