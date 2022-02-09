
window.addEventListener("load", function () {

    let category = document.getElementById("category-nav")
    let dropdown = document.querySelector(".product-category-list")

    category.addEventListener("mouseenter", function () {
        dropdown.style.display = "block";
    })

    dropdown.addEventListener("mouseleave", function () {
        dropdown.style.display = "none";
    })

});
