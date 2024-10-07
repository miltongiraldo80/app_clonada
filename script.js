document.addEventListener('DOMContentLoaded', () => {
    const cartButton = document.getElementById('cart-button');
    const cartItems = document.getElementById('cart-items');
    const cartCount = document.getElementById('cart-count');

    let cart = [];

    cartButton.addEventListener('click', () => {
        cartItems.style.display = cartItems.style.display === 'block' ? 'none' : 'block';
    });

    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', () => {
            const item = button.getAttribute('data-item');
            const price = button.getAttribute('data-price');
            addToCart(item, price);
        });
    });

    function addToCart(item, price) {
        const existingItem = cart.find(cartItem => cartItem.item === item);
        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            cart.push({ item, price, quantity: 1 });
        }
        updateCart();
    }

    function updateCart() {
        cartItems.innerHTML = '';
        cart.forEach(cartItem => {
            const div = document.createElement('div');
            div.innerHTML = `${cartItem.item} - $${cartItem.price} x ${cartItem.quantity}`;
            cartItems.appendChild(div);
        });
        cartCount.textContent = cart.reduce((total, item) => total + item.quantity, 0);
    }
});
