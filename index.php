<!DOCTYPE HTML>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shopping list!</title>
        <meta name="description" content="Create your own shopping list! Beauty in simplicity. Useful web application for creating shopping list.">
        <meta name="keywords" content="shopping list, web application, list of task">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">

        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <article>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h1><strong>Shopping List!</strong></h1>
                        </div>
                    </div>
                </article>
                
                <article>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            Insert a name of product and confirm with green button.
                        </div>
                    </div>
                </article>
            </nav>
            
            <main>
                <article>
                    <div class="row">
                        <form id="addProductForm">
                            <div class="col-xs-8">
                                <label for="productName">Product:</label>
                                <input type="text" class="form-control" id="productName" value="" placeholder="Eggs">
                            </div>
                            <div class="col-xs-4">
                                <label for="productAmount">Amount:</label>
                                <input type="number" value="" class="form-control" id="productAmount" placeholder="1">
                            </div>
                            <div class="col-xs-12">
                                <input type="submit" class="btn btn-block btn-success" value="ADD">
                            </div>
                        </form>
                    </div>
                </article>
                
                <article id="listItemsContainer">
                </article>
            </main>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="viewList.js"></script>
        <script src="addProduct.js"></script>
        <script src="deleteProduct.js"></script>
        <script>
            $(function(){
               viewList(); 
            });
        </script>
        
        
    </body>
</html>