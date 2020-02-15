@if (session('inpersonation_id'))
<li class="nav-item">
    <a href="#" class="navbar-nav-link text-danger" onclick="event.preventDefault();
        document.getElementById('impersonations-form').submit();">
        <i class="icon-user-cancel"></i>
        <span class="d-md-none ml-2">Retornar usuario Admin</span>
    </a>
    <form id="impersonations-form" action="{{ route('impersonations.destroy') }}" method="POST" style="display: none;">
        @csrf
    </form>
</li>                
@endif
