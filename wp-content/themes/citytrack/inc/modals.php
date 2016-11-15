<div class="modal fade" id="modal-contact">
  <div class="modal-dialog">
    <div class="modal-content">
     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <div class="modal-header text-center text-light"><h1><?php _e( 'Contact us', 'citytrack')?></h1></div>

      <div class="modal-body">
        <form id="contactform" method="POST" role="form">
          <div class="form-group">
            <label for="user-name" class="text-blue">Name</label>
            <input type="text" class="form-control no-empty" id="user-name" name="user-name" placeholder="Enter your name">
          </div>

           <div class="form-group">
            <label for="user-email" class="text-blue">E-mail</label>
            <input type="email" class="form-control no-empty" id="user-email" name="user-email" placeholder="Enter your e-mail">
          </div>

          <div class="form-group">
            <label for=subject" class="text-blue">Subject</label>
            <input type="text" class="form-control no-empty" id="subject" name="subject" placeholder="Enter subject">
          </div>

          <div class="form-group">
            <label for="message" class="text-blue">Message</label>
            <textarea name="msg" id="input" name="message" class="form-control no-empty" rows="3"></textarea>
          </div>

          <div class="btnwrap text-right"> 
            <button id="contantform-send" type="submit" class="btn btn-blue sendbtn">Send</button>
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
            <label for="user-name" class="text-blue">Name</label>
            <input type="text" class="form-control no-empty" id="user-name" name="user-name" placeholder="Enter your name">
          </div>

           <div class="form-group">
            <label for="user-email" class="text-blue">E-mail</label>
            <input type="email" class="form-control no-empty" id="user-email" name="user-email" placeholder="Enter your e-mail">
          </div>

          <div class="btnwrap text-right"> 
            <button type="submit" class="btn btn-blue sendbtn">Attend</button>
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
          <div class="modal-header text-center text-light"><h1></h1></div>
          <div class="modal-body text-center">
          </div>
        </div>
    </div>
</div>