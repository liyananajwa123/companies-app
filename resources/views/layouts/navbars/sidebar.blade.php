<div class="sidebar" data-color="gradient-blue">
    <div class="logo">
        <a href="{{ route('companies.index') }}" class="simple-text logo-normal">
                Companies
        </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <li @if(request()->routeIs('companies.index')) class="active" @endif>
                <a href="{{ route('companies.index') }}">
                    <i class="now-ui-icons design_app"></i>
                    <p>{{ _('Dashboard') }}</p>
                </a>
            </li>
           
        </ul>
        
    </div>
</div>
