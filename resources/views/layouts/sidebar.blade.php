<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://randomuser.me/api/portraits/men/1.jpg" alt="User Image">
    <div>
        <p class="app-sidebar__user-name">John Doe</p>
        <p class="app-sidebar__user-designation">Frontend Developer</p>
    </div>
    </div>
    <ul class="app-menu">
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-laptop"></i><span class="app-menu__label">Usuário</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-ui-checks"></i><span class="app-menu__label">Chamados</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
        <ul class="treeview-menu">
        <li><a class="treeview-item" href="{{route('chamados.index')}}"><i class="icon bi bi-circle-fill"></i> Chamados</a></li>
        </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-table"></i><span class="app-menu__label">Empresas</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
        <ul class="treeview-menu">
        <li><a class="treeview-item" href="table-basic.html"><i class="icon bi bi-circle-fill"></i> Basic Tables</a></li>
        <li><a class="treeview-item" href="table-data-table.html"><i class="icon bi bi-circle-fill"></i> Data Tables</a></li>
        </ul>
    </li>
</aside>
