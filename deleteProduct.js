$(".delete").click(function(){
                   $.ajax({
                   url:"deleteProduct.php",
                   data:{product: $(this).prev().text()},
                   });
                    viewList();
                   });