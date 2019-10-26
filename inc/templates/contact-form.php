<?php

/* 

@package brightcapella

    ==================================
            CONTACT-FORM HTML PAGE
    ==================================

*/
?>

<form id="brcContactForm"  action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">

    <div class="form-group">
        <label for="brc_first_name" class="text-dark brc_contact_label">First name</label>
        <input class="w-100 p-3" type="text" placeholder="Your First Name" id="brc_first_name" name="brc_first_name" required="required">
        <div class="brc_err_msg text-danger">
          Please choose a First Name.
        </div>
    </div>

    <div class="form-group">
        <label for="brc_last_name" class="text-dark brc_contact_label">Last name</label>
        <input class="w-100 p-3" type="text" placeholder="Your Last Name" id="brc_last_name" name="brc_last_name" required="required">
        <div class="brc_err_msg text-danger">
          Please choose a First Name.
        </div>
    </div>

    <div class="form-group">
        <label for="brc_email" class="text-dark brc_contact_label">Email</label>
        <input class="w-100 p-3" type="email" placeholder="Your Email" id="brc_email" name="brc_email" required="required">
        <div class="brc_err_msg text-danger">
          Please choose a Email.
        </div>
    </div>

    <div class="form-group">
        <label for="brc_message" class="text-dark brc_contact_label">Message</label>
        <textarea name="message" id="brc_message" class="w-100 p-3" required="required" placeholder="Your Message"></textarea>
        <div class="msg_count text-dark"><span id="msg_value_length"></span><span>/30</span></div>
        <div class="brc_err_msg text-danger">
          Message is Required !.
        </div>
        <div class="min-msg-err text-danger">
          Message should be at least 30 characters.
        </div>
    </div>  

    <button style="font-family: sans-serif;" type="submit" class="btn btn-dark rounded-0" >Submit</button>

    <small class="text-info form-control-msg js-form-submission">Submissions in process, please wait...</small>
    <small class="text-success form-control-msg js-form-success">Message Successfully submitted, thank you!</small>
    <small class="text-danger form-control-msg js-form-error">There was a problem with the Contact Form</small>

</form>