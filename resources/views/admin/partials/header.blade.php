<header class="app-header">
 <a class="app-header__logo" href="#">{{ config('app.name') }}</a>
 <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" arialabel="Hide Sidebar"></a>
 <ul class="app-nav">
 <li class="app-search">
 <input class="appsearch__input" type="search" placeholder="Search" />
 <button class="app-search__button">
 <i class="fa fa-search"></i>
 </button>
 </li>
 <li class="dropdown">
 <a class="app-nav__item" href="#" data-toggle="dropdown" arialabel="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
 <ul class="app-notification dropdown-menu dropdown-menu-right" >
 <li class="app-notification__title">
 You have 4 new notifications.
 </li>
 <div class="app-notification__content">
 <li>
 <a class="appnotification__item" href="javascript:;">
 <span class="app-notification__icon">
 <span class="fa-stack fa-lg">
 <i class="fa fa-circle fa-stack-2x textdanger"></i>
 <i class="fa fa-hdd-o fa-stack-1x fainverse"></i>
 </span>
 </span>
<div>
 <p class="app-notification__message">
 Mail server not working
 </p>
<p class="appnotification__meta">5 min ago</p>
 </div>
 </a>
 </li>
 <li>
 <a class="appnotification__item" href="javascript:;">
 <span class="app-notification__icon">
 <span class="fa-stack fa-lg">
 <i class="fa fa-circle fa-stack-2x textsuccess"></i>
 <i class="fa fa-money fa-stack-1x fainverse"></i>
 </span>
 </span>
<div>
 <p class="app-notification__message">
 Transaction complete
 </p>
<p class="appnotification__meta">2 days ago</p>
 </div>
 </a>
 </li>
 </div>
 <li class="app-notification__footer">
 <a href="#">See all notifications.</a>
 </li>
 </ul>
 </li>
 <!-- User Menu-->
 <li class="dropdown">
 <a class="app-nav__item" href="#" data-toggle="dropdown" arialabel="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
 <ul class="dropdown-menu settings-menu dropdown-menu-right">
 <li>
 <a class="dropdown-item" href="pageuser.html"><i class="fa fa-cog fa-lg"></i> Settings</a>
 </li>
 <li>
 <a class="dropdown-item" href="pageuser.html"><i class="fa fa-user fa-lg"></i> Profile</a>
 </li>
 <li>

<a class="dropdown-item" href="{{ route('admin.logout') }}"><i class="fa fasign-out fa-lg"></i> Logout</a>

 </li>
 </ul>
 </li>
 </ul>
</header>