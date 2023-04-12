<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
		<a class="navbar-brand" href="/Main/index">eCommerce</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="/User/index">Log In</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/User/register">Register</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/User/profile">Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="?lang=fr_CA"><?= _('French') ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="?lang=en"><?= _('English') ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="?lang=ar"><?= _('Arabic') ?></a>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Main
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="/Main/logUser">Write your name in LogBook</a></li>
						<li><a class="dropdown-item" href="/Main/viewUserLog">View LogBook</a></li>
						<li><a class="dropdown-item" href="/Main/index">Index</a></li>
						<li><a class="dropdown-item" href="/Main/index2">Index 2</a></li>
						<li><a class="dropdown-item" href="/Main/Greetings/Nicole">Greet User</a></li>
						<li><a class="dropdown-item" href="/Client/index">Client index</a></li>
						<li><a class="dropdown-item" href="/Client/create">Create Client Record</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>