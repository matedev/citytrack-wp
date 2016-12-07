<div class="modal fade" id="modal-contact">
  <div class="modal-dialog">
    <div class="modal-content">
     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <div class="modal-header text-center text-light"><h1><?php _e( 'Contact Us', 'citytrack')?></h1></div>

      <div class="modal-body">
        <form id="contactform" method="POST" role="form">
          <div class="form-group">
            <label for="user-name" class="text-blue"><?php echo __("Name", "citytrack"); ?></label>
            <input type="text" class="form-control no-empty" id="user-name" name="user-name" placeholder="<?php echo __("Enter your name", "citytrack"); ?>">
          </div>

           <div class="form-group">
            <label for="user-email" class="text-blue"><?php echo __("E-mail", "citytrack"); ?></label>
            <input type="email" class="form-control no-empty" id="user-email" name="user-email" placeholder="<?php echo __("Enter your e-mail", "citytrack"); ?>">
          </div>

          <div class="form-group">
            <label for=subject" class="text-blue"><?php echo __("Subject", "citytrack"); ?></label>
            <input type="text" class="form-control no-empty" id="subject" name="subject" placeholder="<?php echo __("Enter subject", "citytrack"); ?>">
          </div>

          <div class="form-group">
            <label for="message" class="text-blue"><?php echo __("Message", "citytrack"); ?></label>
            <textarea id="message" name="message" class="form-control no-empty" rows="3"></textarea>
          </div>
          <div class="form-group">
            <input id="locale" class="hidden" type="text" name="locale" value="<?php echo get_locale(); ?>">
          </div>
          <div class="btnwrap text-right"> 
            <button id="contantform-send" type="submit" class="btn btn-blue sendbtn"><?php echo __("Send", "citytrack"); ?></button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="modal-attend">
  <div class="modal-dialog">
    <div class="modal-content">
     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <div class="modal-header text-center text-light"><h1></h1></div>

      <div class="modal-body">
        <p id="event-desc" class="text-light text-center"></p>
        <form id="attendform" method="" role="form">
          <div class="form-group">
            <label for="user-name" class="text-blue"><?php echo __("Name", "citytrack"); ?></label>
            <input type="text" class="form-control no-empty" id="user-name" name="user-name" placeholder="<?php echo __("Enter your name", "citytrack"); ?>">
          </div>

           <div class="form-group">
            <label for="user-email" class="text-blue"><?php echo __("E-mail", "citytrack"); ?></label>
            <input type="email" class="form-control no-empty" id="user-email" name="user-email" placeholder="<?php echo __("Enter your e-mail", "citytrack"); ?>"
                  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
          </div>
          <div class="form-group">
            <input id="event-name" class="hidden" type="text" name="event-name">
            <input id="event-date" class="hidden" type="text" name="event-date">
            <input id="event-time" class="hidden" type="text" name="event-time">
            <input id="locale" class="hidden" type="text" name="locale" value="<?php echo get_locale(); ?>">
          </div>
          <div class="btnwrap text-right"> 
            <button id="attendform-send" type="submit" class="btn btn-blue sendbtn"><?php echo __("Attend", "citytrack"); ?></button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<div id="error-modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <div class="modal-header text-center text-light"><h1><?php echo __("Sorry!", "citytrack"); ?></h1></div>
          <div class="modal-body text-center">
            <?php echo __("Something went wrong!", "citytrack"); ?>
          </div>
        </div>
    </div>
</div>

<div id="error-reg-modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <div class="modal-header text-center text-light"><h1><?php echo __("Sorry!", "citytrack"); ?></h1></div>
          <div class="modal-body text-center">
            <?php echo __("Already registered phone number or e-mail.", "citytrack"); ?>
          </div>
        </div>
    </div>
</div>

<div id="thanks-modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <div class="modal-header text-center text-light"><h1><?php echo __("Thank you!", "citytrack"); ?></h1></div>
          <div class="modal-body text-center">
              <?php echo __("We received your message!", "citytrack"); ?>
          </div>
        </div>
    </div>
</div>