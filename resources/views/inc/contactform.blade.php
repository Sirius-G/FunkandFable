<div class="contact_form">
    <p>All fields required</p>
    <form onsubmit="mailFormFandF(this.name.value, this.email.value, this.phone.value, this.eventdate.value, this.location.value, this.message.value)">
        <fieldset class="border p-3 rounded">
            <legend class="float-none w-auto px-2">Contact Details</legend>

            <div class="row">
                <div class="col-sm-12">
                    <label for="name" class="label" style="margin-top: -35px;"><strong>Full Name: </strong></label><br>
                    <input tabindex="6" type="text" name="name" id="name" class="field item" placeholder="Please enter your full name" required><br>
                </div>
                <div class="col-sm-12 col-md-6" style="margin-top: -10px;">
                    <label for="email" class="label"><strong>Email Address: </strong></label><br>
                    <input tabindex="7" type="email" name="email" id="email" class="field item" placeholder="Please enter your email address" required><br>
                </div>
                <div class="col-sm-12 col-md-6" style="margin-top: -10px;">
                    <label for="phone" class="label"><strong>Phone Number: </strong></label><br>
                    <input tabindex="8" type="phone" name="phone" id="phone" class="field item" placeholder="Please enter your phone number" required><br>
                </div>
            </div>
        </fieldset>
        <br>
        <fieldset class="border p-3 rounded">
            <legend class="float-none w-auto px-2">Event Details</legend>
            <div class="row">
                <div class="col-sm-12 col-md-6 date-wrapper">
                    <label for="eventdate" class="label" style="margin-top: -35px;"><strong>Date: </strong></label><br>
                    <!-- <input tabindex="9" type="date" name="eventdate" id="eventdate" class="field item" required> -->
                    <input tabindex="9" type="text" name="eventdate" id="eventdate"  class="dfield flatpickr item" placeholder="Please select the event date" required>
                    <i class="fa fa-calendar calfield" style="color: #333;"></i>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label for="eventdate" class="label" style="margin-top: -35px;"><strong>Location: </strong></label><br>
                    <input tabindex="10" type="text" name="location" id="location" class="field item" placeholder="Please enter the event location" required>
                </div>
            </div>
            <label for="msg" class="label"  style="margin-top: -10px;"><strong>Enquiry: </strong></label><br>
            <textarea tabindex="11" name="message" id="msg" class="texta item" placeholder="Tell us more about your event..." required data-gramm="false" data-gramm_editor="false" data-enable-grammarly="false"></textarea><br>
        </fieldset>

        <div class="text-center">
            <input tabindex="12" type="submit" class="btn btn-primary btn-lg px-4 py-2 rounded-5 shadow-sm hover-button item mt-4" value="Send Message">
        </div>
    </form>
</div>