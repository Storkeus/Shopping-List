$(".delete").click(fuction(){
                   $.ajax({
                   url:"deleteProduct.php",
                   data: $(this).prev().text();
                   });
viewList();
                   });