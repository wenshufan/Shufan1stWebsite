<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>


<!-- Begin Navigation -->
<div id="navigation">
    <ul id="navigation-items">
    <li <?php if ($page == 'about.php') { echo 'class="current"'; } ?>><a href="about.php">About</a></li>
    <li <?php if ($page == 'resume.php') { echo 'class="current"'; } ?>><a href="http://students.washington.edu/susanwen/0pdffiles/ShufanSusanWenResume.pdf" target="_blank">Resume</a></li>
    <li <?php if ($page == 'portfolio.php') { echo 'class="current"'; } ?>><a href="portfolio.php">Portfolio</a></li>
    <li <?php if ($page == 'contact.php') { echo 'class="current"'; } ?>><a href="contact.php">Contact</a></li>
    <li <?php if ($page == 'blog.php') { echo 'class="current"'; } ?>><a href="blog.php">Blog</a></li>
    </ul>
</div>
