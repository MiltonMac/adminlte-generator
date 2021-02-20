@anycan(['view_docentes','create_docentes','edit_docentes'])
<li class="nav-item">
    <a href="{{ route('docentes.index') }}"
       class="nav-link {{ Request::is('docentes*') ? 'active' : '' }}">
        <p>Docentes</p>
    </a>
</li>
@endcan


