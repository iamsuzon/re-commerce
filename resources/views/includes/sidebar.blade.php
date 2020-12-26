<div class="side-menu bg-white float-left shadow-sm" id="sideBar">
    <a class="btn btn-success float-right rounded-0" id="openBtn" href="javascript:void(0)" onclick="openNav()">></a>
    <a class="btn btn-danger float-right rounded-0" id="closeBtn" href="javascript:void(0)" onclick="closeNav()">X</a>
    <aside class="menu p-4" id="asideBar">
        <p class="menu-label lead mt-4"></p>
        <ul class="list-group menu-list">
            <li class="">
                <a class="list-group-item list-group-item-action d-inline" href="{{route('manage.dashboard')}}">Dashboard</a>
            </li>
        </ul>

        <p class="menu-label lead"></p>
        <ul class="list-group menu-list">
            <li class="">
                <a class="list-group-item list-group-item-action" href="{{route('posts.index')}}">Manage Post</a>
                <ul class="menu-list submenu">
                    <li>
                        <a class="list-group-item list-group-item-action" href="{{route('category.index')}}">Create Category</a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action" href="{{route('posts.create')}}">Create Post</a>
                    </li>
                </ul>
            </li>
        </ul>

        <p class="menu-label mt-3 lead">

        </p>
        <ul class="menu-list list-group">
            <li class="">
                <a class="list-group-item list-group-item-action" href="{{route('users.index')}}">Manage Users</a>
            </li>
            <li class="">
                <a class="list-group-item list-group-item-action" href="">Roles &amp Permissions</a>
                <ul class="menu-list submenu">
                    <li>
                        <a class="list-group-item list-group-item-action" href="">Roles</a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action" href="">Permissions</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>

<script>
    function openNav() {
        document.getElementById("sideBar").style.marginLeft = "0";
        document.getElementById("openBtn").style.display = "none";
        document.getElementById("closeBtn").style.display = "block";
    }

    function closeNav() {
        document.getElementById("sideBar").style.marginLeft = "-211px";
        document.getElementById("closeBtn").style.display = "none";
        document.getElementById("openBtn").style.display = "block";
    }
</script>
