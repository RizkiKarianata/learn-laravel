<aside id="sidebar-wrapper">
	<div class="sidebar-brand">
		<a href="/home">My School</a>
	</div>
	<div class="sidebar-brand sidebar-brand-sm">
		<a href="/home">MS</a>
	</div>
	<ul class="sidebar-menu">
		<li class="menu-header">First Menu</li>
		<li class="{{request()->is('home') ? 'active' : ''}}"><a class="nav-link" href="/home"><i class="fas fa-fire"></i> <span>Home</span></a></li>
		<li class="menu-header">Second Menu</li>
		<li class="nav-item dropdown {{request()->is('classes', 'classes/create', 'classes/show/*', 'classes/edit/*', 'lessons', 'lessons/create', 'lessons/show/*', 'lessons/edit/*') ? 'active' : ''}}">
			<a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Master</span></a>
			<ul class="dropdown-menu">
				<li class="{{request()->is('classes', 'classes/create', 'classes/show/*', 'classes/edit/*') ? 'active' : ''}}"><a class="nav-link" href="/classes">Classes</a></li>
				<li class="{{request()->is('lessons', 'lessons/create', 'lessons/show/*', 'lessons/edit/*') ? 'active' : ''}}"><a class="nav-link" href="/lessons">Lessons</a></li>
			</ul>
		</li>
	</ul>
	<div class="mt-4 mb-4 p-3 hide-sidebar-mini">
		<a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
			<i class="fas fa-rocket"></i> Documentation
		</a>
	</div>
</aside>