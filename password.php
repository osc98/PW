<?php
include 'menuvar.php';
?>
<!---->
<div class="container mt-1" style="background: rgba(200,200,200);">
<div class="row renglon">
  <div class="col-md-12">
    <div class="alert alert-dismissible alert-success">
  <p class="mt-1">Recupera tu contraseña colocando un correro registrado</p>
</div>
    
    <form>
    <div class="form-group">
      <div class="row">
      <label class="col-md-2 bg-dark text-white" for="exampleInputEmail1">Email address</label>
      <div class="col-md-10">
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
     </div> 
    </div>

    <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                            <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                            <div class="help-block with-errors"></div>
                        </div>
    <div class="form-group">
    </div>
    <div class="row">
  <div class="col-auto mr-auto"></div>
  <div class="col-auto">
    <button type="submit" class="btn btn-info ">Ingresa</button>
  </div>
</div>

</form>
  </div>
    </div>
    </div>

<!---->
<script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>
