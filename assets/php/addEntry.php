<?php
session_start();
if(!isset($_SESSION['loggedin'])){
    header('Location: assets/pages/login.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Oliver Staddon | Add Post</title>

    <link rel="stylesheet" href="../style/reset.css">
    <link rel="stylesheet" href="../style/style.css">

    <script src="../scripts/stars.js"></script> 
    <script src="../scripts/addPost.js"></script>
    <script src="../scripts/loginStatus.js"></script>
    <script src="../scripts/previewPost.js"></script>

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
        <section class="post-box">
            <h3 class="postLogin-box-header">Create Post</h3>
            <form action="addPost.php" method="post">
                <input type="text" id="title" name="title" placeholder="Title" required>
                
                <textarea id="content" name="content" placeholder="Blog content here" required></textarea>
                
                <div class="post-box-button-container">
                    <button type="submit">Post</button>
                    <button type="button">Preview</button>
                    <button type="reset">Clear</button>
                </div>
            </form>
        </section>

        <aside class="modal" id="preview-modal" >
            <div class="modal-content">
                <h3 id="preview-header">Post Preview</h3>
                <div class="blog-entry" id="preview-blog-entry">
                    <div class="blog-entry-header">
                        <span id="preview-title"></span>
                    </div>
                    <div class="blog-entry-content" id="preview-entry-content"></div> <!-- content will go here -->
                </div>
                <div class="modal-buttons">
                    <button id="confirm-post">Post</button>
                    <button id="close-modal">Edit</button>
                </div>
            </div>
        </aside>

        <section class="center-img">
            <img src="../imgs/kyubey.gif" width="125" height="125" alt="Kyubey">
        </section>
    </main>

    <footer class="footer" id="contact">
        <a href="https://www.linkedin.com/in/oliverstaddon/" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 310 310">
                <path d="
                    M72.16,99.73H9.927c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5H72.16c2.762,0,5-2.238,5-5V104.73
                    C77.16,101.969,74.922,99.73,72.16,99.73z
                "/>
                <path d="
                    M41.066,0.341C18.422,0.341,0,18.743,0,41.362C0,63.991,18.422,82.4,41.066,82.4
                    c22.626,0,41.033-18.41,41.033-41.038C82.1,18.743,63.692,0.341,41.066,0.341z
                "/>
                <path d="
                    M230.454,94.761c-24.995,0-43.472,10.745-54.679,22.954V104.73c0-2.761-2.238-5-5-5h-59.599
                    c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5h62.097c2.762,0,5-2.238,5-5v-98.918c0-33.333,9.054-46.319,32.29-46.319
                    c25.306,0,27.317,20.818,27.317,48.034v97.204c0,2.762,2.238,5,5,5H305c2.762,0,5-2.238,5-5V194.995
                    C310,145.43,300.549,94.761,230.454,94.761z
                "/>
            </svg>
        </a>
        
        <a href="https://github.com/oliverstaddon" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 98 96">
                <path d="
                    M48.854 0C21.839 0 0 22 0 49.217c0 21.756 13.993 40.172 33.405 46.69 
                    2.427.49 3.316-1.059 3.316-2.362 0-1.141-.08-5.052-.08-9.127-13.59 
                    2.934-16.42-5.867-16.42-5.867-2.184-5.704-5.42-7.17-5.42-7.17-4.448-3.015.324-3.015.324-3.015 
                    4.934.326 7.523 5.052 7.523 5.052 4.367 7.496 11.404 5.378 14.235 4.074.404-3.178 
                    1.699-5.378 3.074-6.6-10.839-1.141-22.243-5.378-22.243-24.283 0-5.378 1.94-9.778 
                    5.014-13.2-.485-1.222-2.184-6.275.486-13.038 0 0 4.125-1.304 13.426 5.052a46.97 
                    46.97 0 0 1 12.214-1.63c4.125 0 8.33.571 12.213 1.63 9.302-6.356 13.427-5.052 
                    13.427-5.052 2.67 6.763.97 11.816.485 13.038 3.155 3.422 5.015 7.822 5.015 13.2 
                    0 18.905-11.404 23.06-22.324 24.283 1.78 1.548 3.316 4.481 3.316 9.126 0 6.6-.08 
                    11.897-.08 13.526 0 1.304.89 2.853 3.316 2.364 19.412-6.52 33.405-24.935 33.405-46.691C97.707 
                    22 75.788 0 48.854 0z
                "/>
            </svg>
        </a>
        <p><a href="mailto:orstaddon@live.co.uk">orstaddon@live.co.uk</a></p>
    </footer>

</body>
</html>