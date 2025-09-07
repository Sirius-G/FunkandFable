<div class="contact_form">
    <p>All fields required</p>
    <form onsubmit="mailForm(this.name.value, this.email.value, this.message.value)">
        <fieldset class="border p-3 rounded">
            <legend class="float-none w-auto px-2">Contact Details</legend>

            <label for="name" class="label" style="margin-top: -35px;"><strong>Full Name: </strong></label><br>
            <input tabindex="6" type="text" name="name" id="name" class="field item" placeholder="Please enter your full name" required><br>

            <label for="email" class="label"><strong>Email Address: </strong></label><br>
            <input tabindex="7" type="email" name="email" id="email" class="field item" placeholder="Please enter your email address" required><br>

            <label for="phone" class="label"><strong>Phone Number: </strong></label><br>
            <input tabindex="8" type="phone" name="phone" id="phone" class="field item" placeholder="Please enter your phone number" required><br>
        </fieldset>
        <br>
        <fieldset class="border p-3 rounded">
            <legend class="float-none w-auto px-2">Event Details</legend>

            <label for="eventdate" class="label" style="margin-top: -35px;"><strong>Date: </strong></label><br>
            <input tabindex="9" type="date" name="eventdate" id="eventdate" class="field item" required><br>

            <label for="eventdate" class="label"><strong>Location: </strong></label><br>
            <input tabindex="10" type="text" name="eventlocation" id="eventlocation" class="field item" placeholder="Please enter the event location (include venue name, street name and postal code)" required><br>

            <label for="msg" class="label"><strong>Enquiry: </strong></label><br>
            <textarea tabindex="11" name="message" id="msg" class="texta item" placeholder="Tell us more about your event..." required data-gramm="false" data-gramm_editor="false" data-enable-grammarly="false"></textarea><br>
        </fieldset>

        <div class="text-center">
            <input tabindex="12" type="submit" class="btn btn-primary btn-lg px-4 py-2 rounded-5 shadow-sm hover-button item mt-4" value="Send Message">
        </div>
    </form>
</div>