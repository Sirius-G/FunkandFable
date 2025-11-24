function showActive(id){
    //highlight current menu item
    var listItems = document.querySelectorAll('li');
    listItems.forEach(function(item, index) {
        // Check if the current list item's index matches the 'id'
        if (index == id-1) {
            // Add the 'active' class to the current list item
            item.classList.add('active');
        } else {
            // Remove the 'active' class from other list items
            item.classList.remove('active');
        }
    });
}

/* ===========================================
                CONTACT FORM FUNCTION
============================================ */
function mailFormFandF(name, email, phone, eventday, eventmonth, eventyear, location, msg){
// Set recipient email address
let recipient = 'contact@funkandfable.com';

let mailBody =
  "Contact Details%0A" +
  "Name: " + encodeURIComponent(name) + "%0A" +
  "Email Address: " + encodeURIComponent(email) + "%0A" +
  "Phone Number: " + encodeURIComponent(phone) + "%0A%0A" +
  "Event Details:%0A" +
  "Date:%0A" +
  "Day: " + encodeURIComponent(eventday) + "%0A" +
  "Month: " + encodeURIComponent(eventmonth) + "%0A" +
  "Year: " + encodeURIComponent(eventyear) + "%0A" +
  "Location: " + encodeURIComponent(location) + "%0A%0A" +
  "Enquiry Message:%0A" + encodeURIComponent(msg) + "%0A%0A" +
  "Best regards,%0A" + encodeURIComponent(name);


window.location.href =
  "mailto:" + recipient +
  "?subject=" + encodeURIComponent("Funk and Fable Contact Form Enquiry") +
  "&body=" + mailBody;



   /* window.location.href='mailto:'+recipient+'?subject=Contact Form Message
    &body=
    'Contact Name: '+name+
    'Contact Email Address: '+email+
    'Contact Telephone Number: '+phone+
    'Event Details'%0A%0A
    'Event Day: '+eventday+
    'Event Month: '+eventmonth+
    'Event Year: '+eventyear+
    'Event Location: '+location+
    'Enquiry: '+msg+'
    %0A%0ABest regards,
    %0A%0A'+name+'%0A('+email+')';*/
}


/* ===========================================
        KEYBOARD ACCESS FOR ENTER KEY
============================================ */
document.addEventListener('keydown', function(event) {
    //Make all .item elements focusable
    var items = Array.from(document.querySelectorAll('.item'));
    items.forEach(item => item.setAttribute('tabindex', '0'));

    if (event.key === 'Enter') { // Check if the pressed key is Enter
        var focusedElement = document.activeElement;
        if (focusedElement && focusedElement.classList.contains('item')) {
            focusedElement.click(); // Trigger click event
        }
    } else if (event.key === 'Tab') { // Check if the pressed key is Tab
      var focusedElement = document.activeElement;
      var items = document.querySelectorAll('.item');
      var firstItem = items[0];
      var lastItem = items[items.length - 1];
      
      if (focusedElement === lastItem && !event.shiftKey) { // If last item and Tab key is pressed
          event.preventDefault(); // Prevent default tab behavior
          firstItem.focus(); // Set focus to the first item
      } else if (focusedElement === firstItem && event.shiftKey) { // If first item and Shift+Tab key is pressed
          event.preventDefault(); // Prevent default tab behavior
          lastItem.focus(); // Set focus to the last item
      }
    } 
  });


  /* ===========================================
        TESTIMONIALS CAROUSEL
============================================ */
 document.addEventListener('DOMContentLoaded', function() {
    const carouselInner = document.querySelector('#testimonialCarousel .carousel-inner');
    const rawTestimonials = Array.from(document.querySelectorAll('.raw-testimonial'));

    // Function to build slides based on current screen width
    function buildCarousel() {
        const itemsPerSlide = window.innerWidth < 768 ? 1 : 2;
        carouselInner.innerHTML = ''; // Clear existing slides

        for (let i = 0; i < rawTestimonials.length; i += itemsPerSlide) {
            const slide = document.createElement('div');
            slide.classList.add('carousel-item');
            if (i === 0) slide.classList.add('active');

            const slideRow = document.createElement('div');
            slideRow.classList.add('d-flex', 'justify-content-center', 'w-100', 'g-3');

            const chunk = rawTestimonials.slice(i, i + itemsPerSlide);
            chunk.forEach(item => {
                const wrapper = document.createElement('div');
                wrapper.classList.add('px-2');
                wrapper.style.flex = `0 0 ${100 / itemsPerSlide}%`;
                wrapper.style.maxWidth = `${100 / itemsPerSlide}%`;
                wrapper.appendChild(item.firstElementChild.cloneNode(true));
                slideRow.appendChild(wrapper);
            });

            slide.appendChild(slideRow);
            carouselInner.appendChild(slide);
        }
    }

    // Initial build
    buildCarousel();

    // Rebuild carousel on screen resize
    let resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            buildCarousel();
        }, 200); // debounce to avoid excessive rebuilds
    });
});


// ============== JS DATE PICKER ===========================
// document.querySelectorAll('.flatpickr').forEach(input => {
//     input.addEventListener('touchstart', () => input.focus());
// });


// document.addEventListener("DOMContentLoaded", function () {
//     flatpickr(".flatpickr", {
//         dateFormat: "Y-m-d",      // Format
//         allowInput: true,         // Allow manual input
//         altInput: true,           // Tidy display
//         altFormat: "d/m/Y",       // UK format
//         disableMobile: true       // Force Flatpickr on iPhone - prevent default
//     });
// });

document.querySelectorAll('.date-part').forEach((input, index, arr) => {
    input.addEventListener('input', function () {
        if (this.value.length === this.maxLength) {
            // Move to next input if it exists
            if (index < arr.length - 1) {
                arr[index + 1].focus();
            }
        }
    });

    // Optional: move back on backspace
    input.addEventListener('keydown', function (e) {
        if (e.key === 'Backspace' && this.value.length === 0 && index > 0) {
            arr[index - 1].focus();
        }
    });
});

