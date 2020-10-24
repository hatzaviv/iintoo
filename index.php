<!DOCTYPE html>
<html>
    <head>
        
        <?php require_once('metatags.php'); ?>
        
    </head>
    <body>

        <?php require_once('topBar.php'); ?>

        <main>

            <h1>Welcome to iintoo shop</h1>

            <button onclick="toggleAddProduct();">Add Product</button>

            <section id="addProduct">
                <article>
                    <h3>Add a new product:</h3>
                    <form id="addProductForm">
                        <input type="hidden" name="action" value="addProduct" />
                        <label for="addProductTitle">Product Title:</label>
                        <input type="text" name="addProductTitle" id="addProductTitle" placeholder="Product Title" />
                        <br />
                        <label for="addProductPrice">Product Price:</label>
                        <input type="number" name="addProductPrice" id="addProductPrice" placeholder="Product Price" />
                        <br />
                        <label for="addProductDescription">Product Description:</label>
                        <br />
                        <textarea name="addProductDescription" id="addProductDescription" placeholder="Product Description"></textarea>
                        <br />
                        <label for="addProductImage">Product Image (URL):</label>
                        <input type="text" name="addProductImage" id="addProductImage" placeholder="Product Image URL" />
                        <br />
                        <label for="addProductOnSale">Product On Sale:</label>
                        <input type="checkbox" name="addProductOnSale" id="addProductOnSale" />
                    </form>
                    <button onclick="shop.addProduct()">SUBMIT</button>
                </article>
            </section>

            <div id="messageBox"></div>

            <section id="productsContainer">

            </section>

            
            
        </main>

        <?php require_once('footer.php'); ?>

        <!-- load jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="shop.js"></script>

        <script>

            function toggleAddProduct(){
                $("#addProduct").toggle("slow");
            }

            var shop = new Shop();
            shop.getProducts();
            // shop.drawProducts();
        </script>
        
    </body>
</html>