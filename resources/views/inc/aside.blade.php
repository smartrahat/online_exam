    <ul id="accordion">
        <li class="{{ isActive(['home']) }}">
            <a href="{{ url('/home') }}">
                <i class="fa fa-dashboard"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="{{ isActive(['teacher*']) }}">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#teacher" aria-expanded="false" aria-controls="teacher">
                <i class="fa fa-user"></i>
                <span>Teachers</span>
            </a>
            <ul id="teacher" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <li class="{{ isActive(['teachers']) }}"><a href="{{ action('TeacherController@index') }}">Teachers List</a></li>
                <li class="{{ isActive(['teacher/create']) }}"><a href="{{ action('TeacherController@create') }}">Add Teacher</a></li>
                <li><a href="#">Extra</a></li>
            </ul>
        </li>
        <li class="{{ isActive(['student*']) }}">
            <a href="{{ action('StudentController@index') }}">
                <i class="fa fa-user"></i>
                <span>Students</span>
            </a>
        </li>
        <li class="{{ isActive(['departments']) }}">
            <a href="{{ action('DepartmentController@index') }}">
                <i class="fa fa-user"></i>
                <span>Departments</span>
            </a>
        </li>
        <li class="{{ isActive('subjects') }}">
            <a href="{{ action('SubjectController@index') }}">
                <i class="fa fa-user"></i>
                <span>Subjects</span>
            </a>
        </li>

        <a href="?page=notice">
            <li>Notice</li>
        </a>

        <a href="?page=pages">
            <li>Pages</li>
        </a>

        <a href="?page=gallery">
            <li>Gallery</li>
        </a>

        <a href="?page=slider">
            <li>Slider</li>
        </a>

        <a href="?page=download">
            <li>Download</li>
        </a>

        <a href="?page=contacts">
            <li>Contacts</li>
        </a>
        <a href="#"><li>Users</li></a>
        <li>
            <a href="{{ url('/logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                Logout
            </a>
            
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
