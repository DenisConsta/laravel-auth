<aside class="sidebar">
    <nav class="nav">
        <ul class="w-100">
            <li class="
            @if (request()->getpathInfo() == '/admin/projects')
                active
            @endif
            "><a href="{{route('admin.projects.index')}}"><i class="fa-solid fa-diagram-project mx-3"></i> Project </a></li>
            <li class="
            @if (request()->getpathInfo() == '/admin/projects/create')
                active
            @endif
            "><a href=" {{route('admin.projects.create')}} ">New Project</a></li>

        </ul>
    </nav>
</aside>


