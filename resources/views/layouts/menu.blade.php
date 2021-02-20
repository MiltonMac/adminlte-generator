@canany(['view_docentes','create_docentes','edit_docentes'])
<li class="nav-item">
    <a href="{{ route('docentes.index') }}"
       class="nav-link {{ Request::is('docentes*') ? 'active' : '' }}">
        <p>Docentes</p>
    </a>
</li>
@endcan



<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>Users</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('roles.index') }}"
       class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
        <p>Roles</p>
    </a>
</li>


