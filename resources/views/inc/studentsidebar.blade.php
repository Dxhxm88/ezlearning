<div class="d-flex flex-column bg-light align-items-center align-items-sm-start px-3 pt-2 pb-4 text-white min-vh-100 sticky-top">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <span class="fs-4 fw-bold">EZ-LEARNING</span>
    </a>
    <ul class="nav nav-pills flex-column mb-auto mt-3">
        <li class="nav-item">
            <a href="{{ route('student.home') }}" class="nav-link link-dark">
                Home
            </a>
        </li>

        <li>
            <a href="{{ route('student.assessment.view') }}" class="nav-link link-dark">
                Assessment
            </a>
        </li>

        <li>
            <a href="{{ route('student.subject.view') }}" class="nav-link link-dark">
                Subject
            </a>
        </li>
    </ul>
    <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle nav-link" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <strong>Abu</strong>
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                <li><a class="dropdown-item" href="{{ route('student.profile') }}">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
</div>
