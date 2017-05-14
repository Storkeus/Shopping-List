function viewList()
{
    $.get("viewList.php", function(products)
         {
        $("#listItemsContainer").html(products);
    });
}