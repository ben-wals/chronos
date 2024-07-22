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
            <h1 id="page-title">1 / 3 • Course Creation</h1>
            <progress id="onboarding-progress" value="33" max="100"></progress>
            <p id="onboarding-progress-desc">Onboarding Progress (33% Complete)</p>
        </div>

        <div id="course-tiles">
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