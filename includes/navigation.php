<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>

<!-- Begin Navigation -->

<div id="navigation">
  <ul id="navigation-items">
    <li <?php if ($page == 'about.php') { echo 'class="current"'; } ?>><a href="about.php">About</a></li>
    <li <?php if ($page == 'resume.php') { echo 'class="current"'; } ?>><a href="http://students.washington.edu/susanwen/0pdffiles/ShufanSusanWenResume.pdf" target="_blank">Resume</a></li>
    <li <?php if ($page == 'portfolio.php' or $page == 'portfolioAmazon.php' or $page == 'portfolioGoogleCloud.php' or $page == 'portfolioUxpertise.php' or $page == 'portfolioMobileAds.php' or $page == 'portfolioFieldwork.php') { echo 'class="current"'; } ?>><a href="portfolio.php">Portfolio</a></li>

    <!--
Would like to combine portfolio items.
Need to put it in the previous one, but have not figure out yet.
-->
    <li <?php if ($page == 'contact.php') { echo 'class="current"'; } ?>><a href="contact.php">Contact</a></li>
    <li <?php if ($page == 'blog.php') { echo 'class="current"'; } ?>><a href="blog.php">Blog</a></li>
  </ul>
</div>
