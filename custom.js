document.addEventListener('DOMContentLoaded', function () {
  var swiper = new Swiper('.testimonialsSwiper', {
      loop: true, // Enable loop
      pagination: {
          el: '.swiper-pagination',
          clickable: true, // Make pagination dots clickable
      },
      autoplay: {
          delay: 5000, // Set the delay between slides in milliseconds (5 seconds in this example)
          disableOnInteraction: false, // Allow manual navigation to interrupt autoplay
      },
      spaceBetween: 20, // Add a gap of 20 pixels between slides
  });
});


    // Get the link element
    var downloadLinks = document.querySelectorAll(".downloadLink");

    downloadLinks.forEach(item => {
         // Add click event listener to the link
    item.addEventListener("click", function(event) {
        // Prevent the default action of the link
        event.preventDefault();

        // Create an anchor element to trigger the download
        var link = document.createElement('a');
        link.href = item.href; // Get the href from the original link
        link.download = 'Mesa Plumbing Coupon.png'; // Specify the filename for the downloaded image
        document.body.appendChild(link);

        // Trigger the click event on the anchor element
        link.click();

        // Cleanup: remove the dynamically created anchor element
        document.body.removeChild(link);
    });
    })

    
    
    
var iframeContainer = document.getElementById('iframeContainer');
let callNowBtns = document.querySelectorAll('.callNowBtn');

for (let i = 0; i < callNowBtns.length; i++) {
    callNowBtns[i].addEventListener('click', function (event) {
        event.preventDefault();
        showIframe();
    });
}

function showIframe() {
    iframeContainer.style.display = 'block'; // Assuming iframeContainer is defined elsewhere in your code
}

function closeIframe() {
    iframeContainer.style.display = 'none'; // Assuming iframeContainer is defined elsewhere in your code
}
