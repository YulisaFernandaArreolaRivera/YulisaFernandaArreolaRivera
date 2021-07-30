<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
 <div class="app-sidebar__user">
 <div>
 <p class="app-sidebar__user-name">Farmacia Sana Sana</p>
 <p class="app-sidebar__user-designation"> </p>
 </div>
 </div>
 <ul class="app-menu">
 <li>
 <a class="app-menu__item active" href="#"><i class="appmenu__icon fa fa-dashboard"></i>
 <span class="app-menu__label">Dashboard</span>
 </a>
 </li>

 <li>
 <a class="app-menu__item {{ Route::currentRouteName() == 'admin.contacts.index' ? 'active' : '' }}" href="{{ route('admin.contacts.index') }}">
<i class="app-menu__icon fa fa-tags"></i>
 <span class="app-menu__label">Contactos</span>
 </a>
 </li>
 
 <li>
 <a class="app-menu__item {{ Route::currentRouteName() == 'admin.categories.index' ? 'active' : ''}}"
 href="{{ route('admin.categories.index') }}">
 <i class="app-menu__icon fa fa-tags"></i>
 <span class="app-menu__label">Categorias</span>
 </a>
 </li>


 <li>
 <a class="app-menu__item {{ Route::currentRouteName() == 'admin.products.index' ? 'active' : '' }}" href="{{ route('admin.products.index') }}">
<i class="app-menu__icon fa fa-tags"></i>
 <span class="app-menu__label">Productos</span>
 </a>
 </li>

 <li>
 <a class="app-menu__item {{ Route::currentRouteName() == 'admin.ofertas.index' ? 'active' : '' }}" href="{{ route('admin.ofertas.index') }}">
<i class="app-menu__icon fa fa-tags"></i>
 <span class="app-menu__label">Ofertas</span>
 </a> 
 </li>

 </ul>
</aside>
 </ul>
</aside>
