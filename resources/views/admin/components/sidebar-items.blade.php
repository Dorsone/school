@if(auth()->user()->role == 3)
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="fas fa-solid fa-user-lock"></i>
            <p>
                Foydalanuvchilar
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('admin.admins.index')}}" class="nav-link">
                    <i class="fas fa-solid fa-user-check"></i>
                    <p>
                        Adminlar
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.moderators.index')}}" class="nav-link">
                    <i class="fas fa-solid fa-user-edit"></i>
                    <p>
                        Moderatorlar
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.teachers.index')}}" class="nav-link">
                    <i class="fas fa-regular fa-user-tie"></i>
                    <p>
                        O`qituvchilar
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.students.index')}}" class="nav-link">
                    <i class="fas fa-regular fa-user-graduate"></i>
                    <p>
                        O`quvchilar
                    </p>
                </a>
            </li>
        </ul>
    </li>
@endif

<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="fas fa-solid fa-comments"></i>
        <p>
            Xabarlar
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{route('admin.reviews.index')}}" class="nav-link">
                <i class="fas fa-solid fa-comment"></i>
                <p>
                    Yangi Sharhlar
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.messages.index')}}" class="nav-link">
                <i class="fas fa-regular fa-envelope"></i>
                <p>
                    Xabarlar
                </p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item">
    <a href="{{route('admin.news.index')}}" class="nav-link">
        <i class="fas fa-solid fa-newspaper"></i>
        <p>
            Yangiliklar
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{route('admin.lessons.index')}}" class="nav-link">
        <i class="fas fa-solid fa-comment"></i>
        <p>
            Ochiq darslar
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{route('admin.levels.index')}}" class="nav-link">
        <i class="fas fa-solid fa-users"></i>
        <p>
            Sinflar
        </p>
    </a>
</li>

@if(auth()->user()->role == 3)
    <li class="nav-item">
    <a href="{{route('admin.settings.index')}}" class="nav-link">
        <i class="fas fa-cogs"></i>
        <p>
            Sozlamalar
        </p>
    </a>
</li>
@endif
