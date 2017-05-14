$("#listItemsContainer").on("click", '.delete', function(){
                   $.ajax({
                   url:"deleteProduct.php",
                   data:{product: $(this).prev().prev().text()},
                   });
                    viewList();
                   });