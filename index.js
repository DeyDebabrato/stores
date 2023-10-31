// Get the featured products container
const featuredProducts = document.querySelector('#featured-products');

// Create an array of product objects
const products = [
  {
    name: 'Product 1',
    description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    image: 'product1.jpg',
    price: 19.99
  },
  {
    name: 'Product 2',
    description: 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    image: 'product2.jpg',
    price: 24.99
  },
  {
    name: 'Product 3',
    description: 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
    image: 'product3.jpg',
    price: 29.99
  }
];

// Loop through the products array and create HTML for each product
products.forEach(product => {
  const productHTML = `
    <div class="product">
      <img src="images/${product.image}" alt="${product.name}">
      <h3>${product.name}</h3>
      <p>${product.description}</p>
      <span>$${product.price}</span>
      <button>Add to Cart</button>
    </div>
  `;
  featuredProducts.innerHTML += productHTML;
});

// Add click event listener to Add to Cart buttons
const addToCartButtons = document.querySelectorAll('.product button');
addToCartButtons.forEach(button => {
  button.addEventListener('click', addToCart);
});

// Function to add product to cart
function addToCart(event) {
  const button = event.target;
  const product = button.parentElement;
  const productName = product.querySelector('h3').textContent;
  const productPrice = product.querySelector('span').textContent.replace('$', '');
  
  // Add product to cart (in this example, just console.log the product name and price)
  console.log(`Added ${productName} to cart for $${productPrice}`);
}
