<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end fixed-top nav-mystyle">
	<!-- Logo -->
	<a class="nav-link" href="./"><small style="color:lightblue">
			<i class="fas fa-cloud"></i><span style="color:whitesmoke">&nbspALGARVE FR<i class="fas fa-sun" style="color:#ffbd00"></i>M SKY&nbsp</span><i class="fas fa-cloud"></i></small>
	</a>
	<!-- Navbar icon -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
	<!-- Links -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link <?php if ($CURRENT_PAGE == "index") {?>active<?php }?>" href="./index.php"><i class='fas fa-home'></i></a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?php if ($CURRENT_PAGE == "faq") {?>active<?php }?>" href="./faq.php">FAQ</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?php if ($CURRENT_PAGE == "about") {?>active<?php }?>" href="./about.php">Sobre</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?php if ($CURRENT_PAGE == "clients") {?>active<?php }?>" href="./login_input.php">Área de Cliente</a>
			</li>
		</ul>
	</div>
</nav>

