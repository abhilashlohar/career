
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  
 
  


  <!-- Page -->
  <div class="page animsition">
    
    <div class="page-content container-fluid">
      <div class="row">
        <div class="col-md-6">
          <!-- Panel Wizard Form -->
          <div class="panel" id="exampleWizardForm">
            <div class="panel-heading">
              <h3 class="panel-title">Wizard Form</h3>
            </div>
            <div class="panel-body">
              <!-- Steps -->
              <div class="pearls row">
                <div class="pearl current col-xs-4">
                  <div class="pearl-icon"><i class="icon wb-user" aria-hidden="true"></i></div>
                  <span class="pearl-title">Account Info</span>
                </div>
                <div class="pearl col-xs-4">
                  <div class="pearl-icon"><i class="icon wb-payment" aria-hidden="true"></i></div>
                  <span class="pearl-title">Billing Info</span>
                </div>
                <div class="pearl col-xs-4">
                  <div class="pearl-icon"><i class="icon wb-check" aria-hidden="true"></i></div>
                  <span class="pearl-title">Confirmation</span>
                </div>
              </div>
              <!-- End Steps -->

              <!-- Wizard Content -->
              <div class="wizard-content">
                <div class="wizard-pane active" id="exampleAccount" role="tabpanel">
                  <form id="exampleAccountForm">
                    <div class="form-group">
                      <label class="control-label" for="inputUserName">Username</label>
                      <input type="text" class="form-control" id="inputUserName" name="username" required="required">
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputPassword">Password</label>
                      <input type="password" class="form-control" id="inputPassword" name="password"
                      required="required">
                    </div>
                  </form>
                </div>
                <div class="wizard-pane" id="exampleBilling" role="tabpanel">
                  <form id="exampleBillingForm">
                    <div class="form-group">
                      <label class="control-label" for="inputCardNumber">Card Number</label>
                      <input type="text" class="form-control" id="inputCardNumber" name="number" placeholder="Card number">
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputCVV">CVV</label>
                      <input type="text" class="form-control" id="inputCVV" name="cvv" placeholder="CVV">
                    </div>
                  </form>
                </div>
                <div class="wizard-pane" id="exampleGetting" role="tabpanel">
                  <div class="text-center margin-vertical-20">
                    <i class="icon wb-check font-size-40" aria-hidden="true"></i>
                    <h4>We got your order. Your product will be shipping soon.</h4>
                  </div>
                </div>
              </div>
              <!-- End Wizard Content -->

            </div>
          </div>
          <!-- End Panel Wizard One Form -->
        </div>
     </div>

        
     


    </div>
  </div>
  <!-- End Page -->
