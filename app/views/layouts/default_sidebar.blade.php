<div class="">
	<div class="main-menu-header">
		<img class="img-radius" src="{{ asset() }}images/user/avatar-2.jpg" alt="User-Profile-Image">
		<div class="user-details">
			<div id="more-details">Bincigar <i class="fa fa-caret-down"></i></div>
		</div>
	</div>
	<div class="collapse" id="nav-user-link">
		<ul class="list-unstyled">
			<li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>Lihat Profil</a></li>
			<li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Pengaturan</a></li>
			<li class="list-group-item"><a href="auth-normal-sign-in.html"><i class="feather icon-log-out m-r-5"></i>Keluar</a></li>
		</ul>
	</div>
</div>

<ul class="nav pcoded-inner-navbar ">
	<li class="nav-item pcoded-menu-caption">
	    <label>Beranda</label>
	</li>
	<li class="nav-item">
	    <a href="{{ base_url('dashboard') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
	</li>
	<li class="nav-item pcoded-menu-caption">
	    <label>Master Data</label>
	</li>
	<li class="nav-item">
	    <a href="{{ base_url('pelanggan') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Pelanggan</span></a>
	</li>
	<li class="nav-item">
	    <a href="{{ base_url('karyawan') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Karyawan</span></a>
	</li>
	<li class="nav-item">
	    <a href="{{ base_url('toko') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-shopping-bag"></i></span><span class="pcoded-mtext">Toko</span></a>
	</li>
	<li class="nav-item pcoded-hasmenu">
	    <a href="javascript:;" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Dropdown</span></a>
	    <ul class="pcoded-submenu">
	        <li><a href="{{ base_url('') }}">Menu 1</a></li>
	        <li><a href="{{ base_url('') }}">Menu 2</a></li>
	    </ul>
	</li>
</ul>