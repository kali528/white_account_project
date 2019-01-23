<div class="login-container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 widget">
	        <div class='row'>
	            <div class="widget-header col-lg-12">
	                <div class="col-lg-6" >
	                    <p style="margin-top: 10px;">
	                        <strong>Bricks Core</strong>
	                    </p>
	                </div>
	            </div>
	        </div>
	        <div class="row wiget-content">
				<div class="col-lg-12 col-lg-offset-3">
					<h3>Login</h3>
					<p>Pleace enter username and password,	 then press Login.</p>
					<div>
						<div class="widget_content">
							<form action="/core/login/verify" method="POST">
								<div class="input-group input-group-md col-lg-6" >
									<label  for="">Username:</label>
									<input type="email" class="form-control" name="user_name"
									>
								</div>
								<div class="input-group input-group-md col-lg-6" >
									<label  for="">Password:</label>
									<input type="password" class="form-control" name="password">
								</div>
								<br>
								<div class="input-group input-group-md col-lg-6" >
									<input type="submit" class="btn btn-primary form-control" id="login-submit" name="submit" value="Login">
								</div>
								<br>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>