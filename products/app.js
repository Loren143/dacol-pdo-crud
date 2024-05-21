function imageExists(url) {
  var http = new XMLHttpRequest();
  http.open('HEAD', url, false);
  http.send();
  return http.status != 404;
}

let cartCounts = {}; // Object to store cart count for each product

function updateCartCount() {
  const cartCountElement = document.getElementById("cartCount");
  let totalCount = 0;
  Object.values(cartCounts).forEach(count => {
    totalCount += count;
  });
  cartCountElement.textContent = `Products in Cart: ${totalCount}`;
}

fetch('data.json')
  .then(response => response.json())
  .then(data => {
    const productListElement = document.getElementById("productlist");
    data.forEach((product, index) => {
      const cardContainer = document.createElement("div");
      cardContainer.classList.add("col");

      const card = document.createElement("div");
      card.classList.add("card", "h-100");

      const row = document.createElement("div");
      row.classList.add("row", "g-0");

      const imageColumn = document.createElement("div");
      imageColumn.classList.add("col-md-4");

      const image = document.createElement("img");

      // Check for the existence of each image file separately
      const jpegImageExists = `product${index + 1}.jpg`;
      const webpImageExists = `product${index + 1}.webp`;
      const jpgImageExists = `product${index + 1}.jpeg`;

      // Assign the image source based on availability
      if (imageExists(jpegImageExists)) {
        image.src = jpegImageExists;
      } else if (imageExists(webpImageExists)) {
        image.src = webpImageExists;
      } else if (imageExists(jpgImageExists)) {
        image.src = jpgImageExists;
      } else {
        // If none of the images exist, set a placeholder or default image
        image.src = "placeholder.jpg"; // You can replace "placeholder.jpg" with the path to your default image
      }

      image.classList.add("img-fluid", "rounded-start");
      image.alt = product.product_name;

      const contentColumn = document.createElement("div");
      contentColumn.classList.add("col-md-8");

      const cardBody = document.createElement("div");
      cardBody.classList.add("card-body");

      const title = document.createElement("h5");
      title.classList.add("card-title");
      title.textContent = product.product_name;

      const description = document.createElement("p");
      description.classList.add("card-text");
      description.textContent = product.product_description;

      const price = document.createElement("p");
      price.classList.add("card-text");
      price.innerHTML = `<small class="text-muted">Price: $${product.product_price}</small>`;

      const dates = document.createElement("p");
      dates.classList.add("card-text");
      dates.innerHTML = `<small class="text-muted">Added: ${product.product_dateAdded}, Expires: ${product.product_ExpirationDate}</small>`;

      const addToCartButton = document.createElement("button");
      addToCartButton.classList.add("btn", "btn-primary");
      addToCartButton.textContent = "Add to Cart";

      const productCount = document.createElement("span");
      productCount.id = `productCount_${index}`;
      productCount.classList.add("ms-2", "badge", "bg-secondary");

      addToCartButton.addEventListener("click", () => {
        // Increment cart count for the product
        if (!cartCounts[product.product_name]) {
          cartCounts[product.product_name] = 0;
        }
        cartCounts[product.product_name]++;
        productCount.textContent = cartCounts[product.product_name];
        updateCartCount();
      });

      cardBody.appendChild(title);
      cardBody.appendChild(description);
      cardBody.appendChild(price);
      cardBody.appendChild(dates);
      cardBody.appendChild(addToCartButton);
      cardBody.appendChild(productCount);

      imageColumn.appendChild(image);
      contentColumn.appendChild(cardBody);

      row.appendChild(imageColumn);
      row.appendChild(contentColumn);

      card.appendChild(row);
      cardContainer.appendChild(card);

      productListElement.appendChild(cardContainer);
    });
  })
  .catch(error => console.error('Error fetching data:', error));
