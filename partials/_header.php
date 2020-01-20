<!-- Find active page -->
<?php
    $current_url = $_SERVER['REQUEST_URI'];
    $current_url = substr($_SERVER['REQUEST_URI'], 1);
    $current_url = str_replace(".php", "", $current_url);
?>
<header>
    <a href="/" id="logo"></a>
    <menu>
        <nav>
            <a href="./" <?php if ($current_url == "") { ?>class="current"<?php }; ?>>Home</a>
            <a href="./introduction.php" <?php if ($current_url == "introduction") { ?>class="current"<?php }; ?>>Introduction</a>
            <a href="./calendar.php" <?php if ($current_url == "calendar") { ?>class="current"<?php }; ?>>Calendar</a>
            <a href="./assignments.php" <?php if ($current_url == "assignments") { ?>class="current"<?php }; ?>>Assignments</a>
            <a href="./people.php" <?php if ($current_url == "people") { ?>class="current"<?php }; ?>>People</a>
        </nav>
        <div id="byline"></div>
    </menu>
</header>