<div class="modal fade" id="modal-contact">
  <div class="modal-dialog">
    <div class="modal-content">
     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <div class="modal-header text-center text-light">Contact us</div>

      <div class="modal-body">
        <form id="contactform" method="" role="form">
          <div class="form-group">
            <label for="name" class="text-blue">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
          </div>

           <div class="form-group">
            <label for="name" class="text-blue">E-mail</label>
            <input type="text" class="form-control" id="e-mail" name="email" placeholder="Enter your e-mail">
          </div>

          <div class="form-group">
            <label for="name" class="text-blue">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject">
          </div>

          <div class="form-group">
            <label for="name" class="text-blue">Message</label>
            <textarea name="msg" id="input" class="form-control" rows="3"></textarea>
          </div>

          <div class="btnwrap text-right"> 
            <button type="submit" class="btn btn-blue sendbtn">Send</button>
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
      <div class="modal-header text-center text-light"><h1>Attend to the</h1></div>

      <div class="modal-body">
        <p id="event-desc" class="text-light text-center"></p>
        <form id="attendform" method="" role="form">
          <div class="form-group">
            <label for="name" class="text-blue">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
          </div>

           <div class="form-group">
            <label for="name" class="text-blue">E-mail</label>
            <input type="email" class="form-control" id="e-mail" name="email" placeholder="Enter your e-mail">
          </div>

          <div class="btnwrap text-right"> 
            <button type="submit" class="btn btn-blue sendbtn">Attend</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>