<script>
function wishlist() {
    alert("Added to Wishlist ❤️");
}

function login() {
    alert("Login / Signup Page");
}

function cart() {
    alert("Your Cart is Empty 🛒");
}

document.getElementById("searchInput").addEventListener("keypress", function(e) {
    if (e.key === "Enter") {
        alert("Searching for: " + this.value);
    }
});

function cart(){
    alert("Added to cart shop for more")
}
</script>
