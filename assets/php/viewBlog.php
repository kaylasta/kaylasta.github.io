<?php
session_start();

date_default_timezone_set('UTC');

include 'connect.php';

// fetch all blog posts without sorting or filtering
$sql = "SELECT * FROM blog_posts";
$result = $conn->query($sql);

$blogPosts = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $blogPosts[] = $row;
    }
}

// get sorting criteria from the URL
$sort = $_GET['sort'] ?? 'newest'; // default to newest
$month = $_GET['month'] ?? null; // get the selected month if available

// sort the blog posts using PHP
if ($sort === 'oldest') {
    usort($blogPosts, function ($a, $b) {
        return strtotime($a['created_at']) <=> strtotime($b['created_at']);
    });
} elseif ($sort === 'title_asc') {
    usort($blogPosts, function ($a, $b) {
        return strcmp($a['title'], $b['title']);
    });
} elseif ($sort === 'title_desc') {
    usort($blogPosts, function ($a, $b) {
        return strcmp($b['title'], $a['title']);
    });
} elseif ($sort === 'month' && $month) {
    $blogPosts = array_filter($blogPosts, function ($post) use ($month) {
        return date('m', strtotime($post['created_at'])) === $month;
    });
    usort($blogPosts, function ($a, $b) {
        return strtotime($b['created_at']) <=> strtotime($a['created_at']);
    });
} else { // newest
    usort($blogPosts, function ($a, $b) {
        return strtotime($b['created_at']) <=> strtotime($a['created_at']);
    });
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oliver Staddon | Blog</title>
    
    <link rel="stylesheet" href="../style/reset.css">
    <link rel="stylesheet" href="../style/style.css">

    <script src="../scripts/stars.js"></script>
    <script src="../scripts/loginStatus.js"></script>
    <script src="../scripts/blogSort.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="./index.php" class="logo">Oliver</a>
            <ul class="nav-links">
                <li><a href="./index.php">Home</a></li>
                <li><a href="./projects.php">Projects</a></li>
                <li class="dropdown">
                    <a href="./viewBlog.php">Blog</a>
                    <div class="dropdown-content" id="blog-dropdown">
                        <a href="../pages/login.html">Login</a>
                    </div>
                </li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="blog-page" id="blog">
            <div class="blog-container">
                <h2 class="heading-content">Blog</h2>
                <span class="heading-content-sub">Keep up to date with my life and what I do</span>
                
                <form method="GET" class="sort-form">
                    <label for="sort">Sort by:</label>
                    <select name="sort" id="sort">
                        <!-- each option checks the URL if the choice is currently set...if not it is default '' -->
                        <!-- selected option displayed in url will be used to update dropdown using 'selected' -->
                        <option value="newest" <?= ($_GET['sort'] ?? '') === 'newest' ? 'selected' : '' ?>>Newest First</option>
                        <option value="oldest" <?= ($_GET['sort'] ?? '') === 'oldest' ? 'selected' : '' ?>>Oldest First</option>
                        <option value="title_asc" <?= ($_GET['sort'] ?? '') === 'title_asc' ? 'selected' : '' ?>>Title (A-Z)</option>
                        <option value="title_desc" <?= ($_GET['sort'] ?? '') === 'title_desc' ? 'selected' : '' ?>>Title (Z-A)</option>
                        <option value="month" <?= ($_GET['sort'] ?? '') === 'month' ? 'selected' : '' ?>>By Month</option>
                    </select>

                    <?php if (($_GET['sort'] ?? '') === 'month'): ?>
                        <label for="month">Select Month:</label>
                        <select name="month" id="month">
                            <option value="" <?= empty($_GET['month']) ? 'selected' : '' ?> disabled>-Select Month-</option>
                            <option value="01" <?= ($_GET['month'] ?? '') === '01' ? 'selected' : '' ?>>January</option>
                            <option value="02" <?= ($_GET['month'] ?? '') === '02' ? 'selected' : '' ?>>February</option>
                            <option value="03" <?= ($_GET['month'] ?? '') === '03' ? 'selected' : '' ?>>March</option>
                            <option value="04" <?= ($_GET['month'] ?? '') === '04' ? 'selected' : '' ?>>April</option>
                            <option value="05" <?= ($_GET['month'] ?? '') === '05' ? 'selected' : '' ?>>May</option>
                            <option value="06" <?= ($_GET['month'] ?? '') === '06' ? 'selected' : '' ?>>June</option>
                            <option value="07" <?= ($_GET['month'] ?? '') === '07' ? 'selected' : '' ?>>July</option>
                            <option value="08" <?= ($_GET['month'] ?? '') === '08' ? 'selected' : '' ?>>August</option>
                            <option value="09" <?= ($_GET['month'] ?? '') === '09' ? 'selected' : '' ?>>September</option>
                            <option value="10" <?= ($_GET['month'] ?? '') === '10' ? 'selected' : '' ?>>October</option>
                            <option value="11" <?= ($_GET['month'] ?? '') === '11' ? 'selected' : '' ?>>November</option>
                            <option value="12" <?= ($_GET['month'] ?? '') === '12' ? 'selected' : '' ?>>December</option>
                        </select>
                    <?php endif; ?>
                </form>
    
                <?php if (!empty($blogPosts)): // check if there are entries ?>
                    <?php foreach ($blogPosts as $post): // get each post ?>
                        <div class="blog-entry">
                            <div class="blog-entry-header">
                                <span><?= htmlspecialchars($post['title']) ?></span>
                                <span>
                                    <?= date('jS F Y, g:i', strtotime($post['created_at'])) // formatted ?> UTC
                                </span>
                            </div>
                            <div class="blog-entry-content">
                                <p><?= nl2br(htmlspecialchars($post['content'])) // convert new lines to <br> ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No blog posts available.</p>
                <?php endif; ?>
            </div>
        </section>

        <section class="center-img">
            <img src="../imgs/kyubey.gif" width="125" height="125" alt="Kyubey">
        </section>
    </main>

    <footer class="footer" id="contact">
        <a href="https://www.linkedin.com/in/oliverstaddon/" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 310 310">
                <path d="M72.16,99.73H9.927c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5H72.16c2.762,0,5-2.238,5-5V104.73C77.16,101.969,74.922,99.73,72.16,99.73z"/>
                <path d="M41.066,0.341C18.422,0.341,0,18.743,0,41.362C0,63.991,18.422,82.4,41.066,82.4c22.626,0,41.033-18.41,41.033-41.038C82.1,18.743,63.692,0.341,41.066,0.341z"/>
                <path d="M230.454,94.761c-24.995,0-43.472,10.745-54.679,22.954V104.73c0-2.761-2.238-5-5-5h-59.599c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5h62.097c2.762,0,5-2.238,5-5v-98.918c0-33.333,9.054-46.319,32.29-46.319c25.306,0,27.317,20.818,27.317,48.034v97.204c0,2.762,2.238,5,5,5H305c2.762,0,5-2.238,5-5V194.995C310,145.43,300.549,94.761,230.454,94.761z"/>
            </svg>
        </a>
        <a href="https://github.com/oliverstaddon" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 98 96">
                <path d="M48.854 0C21.839 0 0 22 0 49.217c0 21.756 13.993 40.172 33.405 46.69 2.427.49 3.316-1.059 3.316-2.362 0-1.141-.08-5.052-.08-9.127-13.59 2.934-16.42-5.867-16.42-5.867-2.184-5.704-5.42-7.17-5.42-7.17-4.448-3.015.324-3.015.324-3.015 4.934.326 7.523 5.052 7.523 5.052 4.367 7.496 11.404 5.378 14.235 4.074.404-3.178 1.699-5.378 3.074-6.6-10.839-1.141-22.243-5.378-22.243-24.283 0-5.378 1.94-9.778 5.014-13.2-.485-1.222-2.184-6.275.486-13.038 0 0 4.125-1.304 13.426 5.052a46.97 46.97 0 0 1 12.214-1.63c4.125 0 8.33.571 12.213 1.63 9.302-6.356 13.427-5.052 13.427-5.052 2.67 6.763.97 11.816.485 13.038 3.155 3.422 5.015 7.822 5.015 13.2 0 18.905-11.404 23.06-22.324 24.283 1.78 1.548 3.316 4.481 3.316 9.126 0 6.6-.08 11.897-.08 13.526 0 1.304.89 2.853 3.316 2.364 19.412-6.52 33.405-24.935 33.405-46.691C97.707 22 75.788 0 48.854 0z"/>
            </svg>
        </a>
        <p><a href="mailto:orstaddon@live.co.uk">orstaddon@live.co.uk</a></p>
    </footer>
</body>
</html>