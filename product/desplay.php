<?php
        // Initialize the session
        session_start();
        
        // Check if the user is logged in, if not then redirect him to login page
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            header("location: ../index.php");
            exit;
        }
        ?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="payment.css">
<link rel="stylesheet" href="../purchases/styles.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="use.fontawesome.com/releases/v5.15.4/css/all.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>

<body> 
<div class="header">
<div class="container">
<div class="navbar">
<div class="logo">
<img src="https://tse2.mm.bing.net/th?id=OIP.7yaXURN2zUfsnqZDKm0YdQHaHa&pid=Api&P=0&h=180" width="125 px">
</div>
<nav class="navbar">
    <ul>
        <li><a href="desplay.php">Product Inventory</a></li>
        <li><a href="../purchases/payment.html">Payment and Accounting</a></li>
        <li><a href="../purchases/logistics.html">Logistics</a></li>
        <li><a href="../purchases/customer_service.html">Customer Service</a></li>
        <li><a href="../purchases/reports.html">Reports</a></li>
        <a href="../app/logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </ul>
</nav>
<img src="https://tse2.mm.bing.net/th?id=OIP.4mDv4lolzqtKDPHHU7ZasgHaHa&pid=Api&P=0&h=180" width="70px" height="70px">
</div>
<div class="row">
<div class="col-2">
<h1>Low Ray's Bag Shop<br>Trendy bags!</h1>
<p>Affordable & suit to your liking <br>site for all your fashion needs</p>

</div>
</div>
</div>
</div>
<!-----Features Products--------->

<div class="small-container">
    <h2 class="title"> Featured Products</h2>
    <div class="row">
    
         

        <div class="product-box">
        <div id="productsDisplay" class="card-grid"></div>
        
   
    
    <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cartModalLabel">List poducts in cart</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="cartModalBody">
  

                <div class="container">
        <div id="productsDisplay" class="row"></div>
    </div>



                </div>
                <div class="modal-footer">
                    <p class="mr-auto" id="totalPrice"></p>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="buyButton">Buy</button>
                </div>
            </div>
        </div>
    </div>
    <hr>
            <hr style="border-top: 3px solid #b30047;">
        <hr>

        <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Product Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="productModalBody">
                    <!-- Product details will be dynamically inserted here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="proceedBuyButton">Proceed to Buy</button>
                </div>
            </div>
        </div>
    </div>




    

    <script>
        fetch('products-api.php')
    .then(response => response.json())
    .then(data => {
        const productsContainer = document.getElementById('productsDisplay');
        data.forEach(product => {
            const cardHTML = `
                <div class="card">
                    <img class="card-img-top" src="${product.img}" alt="${product.title}">
                    <div class="card-body">
                        <h5 class="card-title">${product.title}</h5>
                        <p class="card-text">${product.description}</p>
                        <p class="card-text">Price: ₱${product.rrp}</p>
                        <p class="card-text">Quantity: ${product.quantity}</p>
                        <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#cartModal"onclick="buyProduct(${product.id}, '${product.title}', ${product.rrp})">
                                    <i class="fas fa-shopping-cart"></i> Buy
                                </button>
                        <button class="btn btn-add-to-cart" onclick="addToCart(${product.id}, '${product.title}', ${product.rrp})">
                            <i class="fas fa-cart-plus"></i> Add to Cart
                        </button>
                          
                                
                    </div>
                </div>
            `;
            productsContainer.innerHTML += cardHTML;
        });
    })
    .catch(error => console.error('Error:', error));
 
    function buyProduct(productId, productName, productPrice) {
            // Here you can add logic to handle the purchase of the product
            console.log(`Buying product: ${product.title} - ₱${productPrice}`);
            alert('Buying product!');
        }



        function showProductDetails(productId, productName, productDescription, productPrice, productImg) {
            const productModalBody = document.getElementById('productModalBody');
            const modalContent = `
                <div class="row">
                    <div class="col-md-6">
                        <img src="${productImg}" class="img-fluid" alt="${productName}">
                    </div>
                    <div class="col-md-6">
                        <h2>${productName}</h2>
                        <p>${productDescription}</p>
                        <p>Price: ₱${productPrice}</p>
                    </div>
                </div>
            `;
            productModalBody.innerHTML = modalContent;
            $('#productModal').modal('show'); // Show the modal
        }

        // Function to handle the "Proceed to Buy" button click
        document.getElementById('proceedBuyButton').addEventListener('click', () => {
            // Add logic here to proceed with the purchase
            alert('Proceeding with the purchase...');
            // Redirect to the checkout page or perform other actions
        });


        let cart = {};

        function buyProduct(productId, productName, productPrice) {
            if (cart[productId]) {
                cart[productId].quantity++;
            } else {
                cart[productId] = { name: productName, quantity: 1, price: productPrice };
            }
            displayCart();
        }

        function removeFromCart(productId) {
            if (cart[productId]) {
                cart[productId].quantity--;
                if (cart[productId].quantity <= 0) {
                    delete cart[productId];
                }
            }
            displayCart();
        }

        function deleteFromCart(productId) {
            delete cart[productId];
            displayCart();
        }

        function displayCart() {
            const cartModalBody = document.getElementById('cartModalBody');
            const totalPriceElement = document.getElementById('totalPrice');
            let cartHTML = '';
            let totalPrice = 0;

            for (const [productId, product] of Object.entries(cart)) {
                const productTotal = product.quantity * product.price;
                totalPrice += productTotal;
                cartHTML += `
                    <div>
                    
                        <p>Product Name: ${product.name}, Quantity: ${product.quantity}, Total: ₱${productTotal}</p>
                        <button class="btn btn-danger btn-sm" onclick="removeFromCart(${productId})">-</button>
                        <button class="btn btn-secondary btn-sm" onclick="deleteFromCart(${productId})">Remove</button>
                    </div>
                `;
            }

            cartModalBody.innerHTML = cartHTML;
            totalPriceElement.innerHTML = `Total Price: ₱${totalPrice}`;
        }

        document.getElementById('buyButton').addEventListener('click', () => {
            window.location.href = '../backups/user.php';
        });

        function addToCart(productId, productName, productPrice) {
            if (cart[productId]) {
                cart[productId].quantity++;
            } else {
                cart[productId] = { name: productName, quantity: 1, price: productPrice };
            }
            displayCart();
        }

        function removeFromCart(productId) {
            if (cart[productId]) {
                cart[productId].quantity--;
                if (cart[productId].quantity <= 0) {
                    delete cart[productId];
                }
            }
            displayCart();
        }

        function deleteFromCart(productId) {
            delete cart[productId];
            displayCart();
        }

        function displayCart() {
            const cartModalBody = document.getElementById('cartModalBody');
            const totalPriceElement = document.getElementById('totalPrice');
            let cartHTML = '';
            let totalPrice = 0;

            for (const [productId, product] of Object.entries(cart)) {
                const productTotal = product.quantity * product.price;
                totalPrice += productTotal;
                cartHTML += `
                    <div>
                        <p>Product Name: ${product.name}, Quantity: ${product.quantity}, Total: ₱${productTotal}</p>
                        <button class="btn btn-danger btn-sm" onclick="removeFromCart(${productId})">-</button>
                        <button class="btn btn-secondary btn-sm" onclick="deleteFromCart(${productId})">Remove</button>
                    </div>
                `;
            }

            cartModalBody.innerHTML = cartHTML;
            totalPriceElement.innerHTML = `Total Price: ₱${totalPrice}`;
        }

        document.getElementById('buyButton').addEventListener('click', () => {
            window.location.href = '../backups/user.php';
        });
        function addToCart(productId, productName, productPrice) {
    if (cart[productId]) {
        cart[productId].quantity++;
    } else {
        cart[productId] = { name: productName, quantity: 1, price: productPrice };
    }
    displayCart();

    // Show information about the added product
    const addedProductInfo = `Added to cart: ${productName}, Price: ₱${productPrice}`;
    alert(addedProductInfo);
}


     

     


    </script>
    <script src="../javascript/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
