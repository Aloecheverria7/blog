@extends('layouts.app')

@yield('title')

@section('content')
<div class="page-content" >
		<div class="wizard-v1-content">
			<div class="wizard-form">
		        <form class="form-register" id="form-register" action="#" method="post">
		        	<div id="form-total">
						<h2>
			            	<span class="step-icon"><i class="zmdi zmdi-card"></i></span>
			            	<span class="step-number">Step 2</span>
			            	<span class="step-text">Payment Infomation</span>
			            </h2>
						<section>
			                <div class="inner">
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="card-type">Card Type</label>
										<select name="card-type" id="card-type" class="form-control">
											<option value="" disabled selected>Select Credit Card Type</option>
											<option value="Business Credit Cards">Business Credit Cards</option>
											<option value="Limited Purpose Cards">Limited Purpose Cards</option>
											<option value="Prepaid Cards">Prepaid Cards</option>
											<option value="Charge Cards">Charge Cards</option>
											<option value="Student Credit Cards">Student Credit Cards</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-3">
										<label for="card-number">Card Number</label>
										<input type="text" name="card-number" class="card-number" id="card-number" placeholder="ex: 489050625008xxxx">
									</div>
									<div class="form-holder">
										<label for="cvc">CVC</label>
										<input type="text" name="cvc" class="cvc" id="cvc" placeholder="xxx">
									</div>
								</div>
								<div class="form-row form-row-2">
									<div class="form-holder">
										<label for="month">Expiry Month</label>
										<select name="month" id="month" class="form-control">
											<option value="" disabled selected>Expiry Month</option>
											<option value="January">January</option>
											<option value="February">February</option>
											<option value="March">March</option>
											<option value="February">February</option>
											<option value="April">April</option>
											<option value="May">May</option>
										</select>
									</div>
									<div class="form-holder">
										<label for="year">Expiry Year</label>
										<select name="year" id="year" class="form-control">
											<option value="" disabled selected>Expiry Year</option>
											<option value="2018">2018</option>
											<option value="2017">2017</option>
											<option value="2016">2016</option>
											<option value="2015">2015</option>
											<option value="2014">2014</option>
											<option value="2013">2013</option>
										</select>
									</div>
								</div>
							</div>
			            </section>
			            </div>
			            </form>
			            </div>
			            </div>
			            </div>

			            @stop
