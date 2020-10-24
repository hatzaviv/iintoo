
function Shop(){

    var s = this;
    this.products = null;

    this.getProducts = function(){
        // console.log("getProducts");
        $.post("rpc/products.rpc.php",
            {
                action: "getProducts"
            },
                function(data, status){
                    s.products = data.products;
                    s.drawProducts();
                    // console.log("Data: " + data + "\nStatus: " + status);
            });
    }

    this.drawProducts = function(){
        // console.log("drawProducts");
        // console.log(s.products);
        let productsContent = "";
        s.products.forEach(product => {
            productsContent += s.drawProduct(product);
        });
        $("#productsContainer").html(productsContent)
    }

    this.drawProduct = function(product){
        // console.log("drawProduct");
        // console.log(product);
        let productContent = "";
        let productImage = (product.image == "") ? "images/gift.jpg" : product.image;
        let productOnSale = (product.on_sale == 1) ? "SALE" : "";
        let productTitle = (product.on_sale != "") ? product.title : "";
        let productPrice = product.price + "$";
        let productDescription = (product.description != "") ? product.description : "";
        productContent += '<article class="product">' + 
            '<div class="productImageContainer">' + 
                '<img src="' + productImage + '" class="productImage" />' +
                '<div class="productOnSale">' + productOnSale + '</div>' +
            '</div>' +
            '<div class="productInfo">' +
                '<div class="productTitle">' + productTitle + '</div>' +
                '<div class="productPrice">' + productPrice + '</div>' +
                '<div class="productDescription">' + productDescription + '</div>' +
            '</div>' +
        '</article>';
        return productContent;
    }

    this.addProduct = function(){
        // console.log("addProduct");
        // console.log($("#addProductForm").serialize());
        if($("#addProductTitle").val() == "" || $("#addProductPrice").val() == ""){
            // window.scrollTo(0, 0);
            alert("Come on at least enter a title and price...");
            // $("#messageBox").html();
        }
        else{
            let data = $("#addProductForm").serialize();
            $.post("rpc/products.rpc.php",
                data,
                    function(data, status){
                        // console.log("Data: " + data + "\nStatus: " + status);
                        s.getProducts();
                        window.scrollTo(0, 0);
                        $("#messageBox").html(data.msg);
                        s.clearForm();
                        toggleAddProduct();
                });
        }
    }

    this.clearForm = function(){
        $('#addProductForm').find("input[type=text], input[type=number], textarea").val("");
    }
}