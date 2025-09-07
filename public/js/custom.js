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
function mailFormFandF(name, email, phone, eventdate, location, msg){
// Set recipient email address
let recipient = 'contact@funkandfable.com';

let mailBody =
  "Contact Details%0A" +
  "Name: " + encodeURIComponent(name) + "%0A" +
  "Email Address: " + encodeURIComponent(email) + "%0A" +
  "Phone Number: " + encodeURIComponent(phone) + "%0A%0A" +
  "Event Details:%0A" +
  "Date: " + encodeURIComponent(eventdate) + "%0A" +
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
    'Event Date: '+eventdate+
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

