// Owl Carousel JavaScript - Browser Compatible Version
const $ = window.jQuery // Declare the $ variable

$(document).ready(() => {
  // Initialize the carousel
  var owl = $(".pest-products-carousel").owlCarousel({
    loop: true,
    margin: 16,
    nav: false,
    dots: false,
    autoplay: false,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      },
      576: {
        items: 2,
      },
      768: {
        items: 2,
      },
      992: {
        items: 3,
      },
      1200: {
        items: 4,
      },
    },
  })

  // Custom navigation buttons
  $("#nextBtn").click(() => {
    owl.trigger("next.owl.carousel")
  })

  $("#prevBtn").click(() => {
    owl.trigger("prev.owl.carousel")
  })

  // Buy Now button functionality
  $(".btn-buy-now").click(function () {
    var productName = $(this).closest(".product-card").find(".product-name").text()
    var productPrice = $(this).closest(".product-card").find(".product-price").text()

    alert(`Adding ${productName} (${productPrice}) to cart...`)

    // Here you can add actual cart functionality
    // Example: addToCart(productName, productPrice);
  })
})

// Function to add product to cart (placeholder)
function addToCart(productName, price) {
  console.log(`Added ${productName} - ${price} to cart`)
  // Implement actual cart functionality here
}
