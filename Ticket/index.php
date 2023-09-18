<?php include_once "_header.php" ?>	
	<div class="container">
		<div class="login-page">
			<div class="row">
				<div class="col-sm-8 p-l-0">
					<img src="assets/images/login.jpg" class="img-fluid" alt="Giriş Ekranı" />
				</div>
				<div class="col-sm-4 p-r-0">
					
					<div class="login-right">
						<div class="logo"><img src="https://kodlattir.com/uploads/images/logo.png" alt="" /></div>
						
						<div class="tab">
						
						  <button class="tablinks active" onclick="openCity(event, '1')"><i class="las la-sign-in-alt"></i> Giriş Yap</button>
						  <button class="tablinks" onclick="openCity(event, '2')"><i class="las la-user-plus"></i> Kayıt Ol</button>
						</div>

						<!-- Tab content -->
						<div id="1" class="tabcontent active" style="display:block;">
							<div class="tab-baslik">Lütfen destek sistemine giriş yapınız.</div>
							<form action="" method="POST">
								
								<div class="form-grup">
									<label for="eposta">E-Posta Adresi</label>
									<i class="las la-at"></i>
									<input type="email" placeholder="E-Posta Adresinizi Giriniz." />
								</div>
								
								<div class="form-grup">
									<label for="eposta">Şifreniz</label>
									<i class="las la-unlock"></i>
									<input type="password" placeholder="Şifrenizi Giriniz." />
								</div>
								
								<div class="row">
									<div class="col-sm-8 p-l-0">
										<input type="submit" class="giris-yap" value="Giriş Yap" />
									</div>
									<div class="col-sm-4 p-r-0">
										<a href="sifremi-unuttum.html" class="sifremi-unuttum">Şifremi Unuttum</a>
									</div>
								</div>
								
							</form>
						</div>


					</div>
				
				</div>
			</div>
			
		</div>
	</div>
	
	<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
<?php include_once "_footer.php" ?>