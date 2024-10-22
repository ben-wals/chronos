<!--
 ____  ____  _  _    _    _    __    __    __      __    ___  ____
(  _ \( ___)( \( )  ( \/\/ )  /__\  (  )  (  )    /__\  / __)( ___)
 ) _ < )__)  )  (    )    (  /(__)\  )(__  )(__  /(__)\( (__  )__)
(____/(____)(_)\_)  (__/\__)(__)(__)(____)(____)(__)(__)\___)(____)

-->

<!DOCTYPE html>
<html>
<head>

    <!-- Tab Styling -->
    <title>Chronos</title>
    <link rel="icon" href="../img/chronos.png">

    <!-- Responsive Design Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Other Meta Tags -->
    <meta property="og:title" content="Chronos">
    <meta property="og:description" content="Manage your homework and timetable better with Chronos.">
    <meta property="og:url" content="http://chronos.theiceburg.net/onboarding/courses">

    <!-- Font Awesome Import -->
    <script src="https://kit.fontawesome.com/7daaf9098f.js" crossorigin="anonymous"></script>

    <!-- Font Import -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- Page Styling -->
    <link rel="stylesheet" href="../stylesheets/onboarding/courses.css">
    <link rel="stylesheet" href="../stylesheets/style.css">
    <link rel="stylesheet" href="../stylesheets/nav-bar.css">
    <link rel="stylesheet" href="../stylesheets/footer.css">
    <link rel="stylesheet" href="../stylesheets/icon-colours.css">
    <link rel="stylesheet" href="../stylesheets/onboarding/style.css">

</head>
<body>

    <!-- Navigation Bar -->
    <nav id="nav-bar">
        <ul id="nav-list">

            <!-- Left Side Elements -->
            <li><a class="nav-left nav-element" href="../"><img src="../img/chronos.png" alt="Chronos Logo" id="nav-logo"></a></li>
            <li><a id="nav-title" class="nav-left nav-element" href="../"><b>Chronos</b></a></li>

            <!-- Right Side Elements -->
            <li><a id="nav-settings" class="nav-right nav-element" href="../settings"><i class="fa-solid fa-gear"></i></a></li>
            <li><a id="nav-launchpad" class="nav-right nav-element" href="../launchpad"><i class="fa-solid fa-rocket"></i> <span id="nav-launchpad-text">Launchpad</span></a></li>
            <li><a id="nav-timetable" class="nav-right nav-element" href="../timetable"><i class="fa-solid fa-calendar-days"></i> Timetable</a></li>
            <li><a id="nav-tasks" class="nav-right nav-element" href="../tasks"><i class="fa-solid fa-circle-check"></i> Tasks</a></li>

        </ul>
    </nav>

    <!-- Page Content -->
    <div id="page-content">

        <!-- Page Titles -->
        <div id="page-title-container">
            <h1 id="page-title"><span id="nav-frac">1 / 3 • </span>Course Creation</h1>
            <progress id="onboarding-progress" value="33" max="100"></progress>
            <p id="onboarding-progress-desc">Onboarding Progress (33% Complete)</p>
        </div>

        <div id="course-tiles">
            <div class="course-tile">
                <i class="fa-solid fa-book fa-3x course-tile-icon"></i><h1 class="course-tile-title">General</h1>
                <hr class="course-tile-divider"></hr>
                <p class="course-tile-description">This is a general course which holds all the events for general school activities such as tutor time and assemblies.</p>
                <div class="course-tile-component-container">
                    <div class="course-tile-component">TT</div>
                    <div class="course-tile-component">Ass</div>
                    <div class="course-tile-component">AE</div>
                </div>
                <div class="course-tile-info-container">
                    <div>
                        <p><b>Locations</b></p>
                        <p>A4, HALL, Str1</p>
                    </div>
                    <div>
                        <p><b>Staff</b></p>
                        <p>PMA, PNA, CBL, CCO</p>
                    </div>
                </div>
            </div>
            <div class="course-tile">
                <i class="fa-solid fa-atom fa-3x course-tile-icon"></i><h1 class="course-tile-title">Physics</h1>
                <hr class="course-tile-divider"></hr>
                <p class="course-tile-description">A set of different ways of thinking that have led to countless descriptions and explanations for the way the universe works.</p>
                <div class="course-tile-component-container">
                    <div class="course-tile-component">M1</div>
                    <div class="course-tile-component">M2</div>
                    <div class="course-tile-component">M3</div>
                    <div><i class="fa-solid fa-arrow-right"></i></div>
                </div>
                <div class="course-tile-info-container">
                    <div>
                        <p><b>Locations</b></p>
                        <p>S10, S11</p>
                    </div>
                    <div>
                        <p><b>Staff</b></p>
                        <p>PCA, JBR</p>
                    </div>
                </div>
            </div>
            <div class="course-tile">
                <i class="fa-solid fa-calculator fa-3x course-tile-icon"></i><h1 class="course-tile-title">Mathematics</h1>
                <hr class="course-tile-divider"></hr>
                <p class="course-tile-description">The main focus of this A-Level is Pure Maths. Covering topics whic tend to be mainly algebraic in nature.</p>
                <div class="course-tile-component-container">
                    <div class="course-tile-component">P1</div>
                    <div class="course-tile-component">S&M1</div>
                    <div class="course-tile-component">P2</div>
                    <div class="course-tile-component">S&M2</div>
                </div>
                <div class="course-tile-info-container">
                    <div>
                        <p><b>Locations</b></p>
                        <p>A4, HALL, Str1</p>
                    </div>
                    <div>
                        <p><b>Staff</b></p>
                        <p>PMA, PNA, CBL, CCO</p>
                    </div>
                </div>
            </div>
            <div class="course-tile">
                <i class="fa-solid fa-laptop fa-3x course-tile-icon"></i><h1 class="course-tile-title">Computer Science</h1>
                <hr class="course-tile-divider"></hr>
                <p class="course-tile-description">Designed for those who wish to go on to higher education courses / employment with knowledge of computer science.</p>
                <div class="course-tile-component-container">
                    <div class="course-tile-component">P1</div>
                    <div class="course-tile-component">P2</div>
                </div>
                <div class="course-tile-info-container">
                    <div>
                        <p><b>Locations</b></p>
                        <p>1, 20, 21</p>
                    </div>
                    <div>
                        <p><b>Staff</b></p>
                        <p>SJO, PTO, GPA</p>
                    </div>
                </div>
            </div>
            <div class="course-tile" id="add-course-tile">
                <h1>Add Course</h1>
                <i class="fa-solid fa-circle-plus fa-2x"></i>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer id="footer">
        <ul id="footer-list">
            <li><a class="nav-left nav-element" href="../"><img src="../img/chronos.png" alt="Chronos Logo" id="nav-logo"></a></li>
            <li><a id="nav-title" class="nav-left nav-element" href="../"><b>Chronos</b></a></li>
            <li><span id="footer-legal" class="footer-right">Powered By <a class="footer-link" href="https://theiceburg.net">The Iceburg</a><br>© Ben Wallace <?php echo date("Y"); ?></span></li>
            <li><span id="footer-report" class="footer-right">Found and issue with this page? Report it <a class="footer-link" href="https://github.com/ben-wals/chronos/issues/new?title=Ref%3A%20onboarding%2Fcourses">here</a>.</span></li>
        </ul>
    </footer>
</body>