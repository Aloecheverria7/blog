<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="top-bar">
      <div class="container">
          <div class="row d-flex align-items-center">
              <div class="col-md-6 d-md-block d-none">
                  <p>Contactanos: +34 610341742 O gruposerviluz@gmail.com</p>
              </div>
              <div class="col-md-6">
                  <div class="d-flex justify-content-md-end justify-content-between">
                      <ul class="list-inline contact-info d-block d-md-none">
                          <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                      </ul>
                      <div class="login">
                      <a href="#" data-toggle="modal" data-target="#login-modal" class="login-btn">
                      <i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">Iniciar Sesión</span></a>
                      <a href="{{url('/clientes')}}" class="signup-btn"><i class="fa fa-user"></i>
                      <span class="d-none d-md-inline-block">Registrarse</span></a></div>

                     
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Top bar end-->
  <!-- Login Modal-->
  <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
      <div role="document" class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 id="login-modalLabel" class="modal-title">Customer Login</h4>
                  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                  <form>
                      <div class="form-group">
                          <input id="email_modal" type="text" placeholder="email" class="form-control">
                      </div>
                      <div class="form-group">
                          <input id="password_modal" type="password" placeholder="password" class="form-control">
                      </div>
                      <p class="text-center">
                          <button class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Log in</button>
                      </p>
                  </form>
                  <p class="text-center text-muted">Not registered yet?</p>
                  <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
              </div>
          </div>
      </div>
  </div>


</section>
