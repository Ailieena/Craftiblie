<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="/public/CSS/style.css">
    <link rel="stylesheet" type="text/css" href="/public/CSS/projects.css">

    <script src="https://kit.fontawesome.com/b4f670463c.js" crossorigin="anonymous"></script>
    <title>PROJECTS</title>
</head>

<body>
<div class="header">
    <img src="/public/img/logo1.png" class="header-logo-img">
</div>
<div class="base-container">
    <nav>
        <ul>
            <li>
                <i class="fas fa-project-diagram"></i>
                <a href="#" class="button">projects</a>
            </li>
            <li>
                <i class="fas fa-project-diagram"></i>
                <a href="#" class="button">projects</a>
            </li>
            <li>
                <i class="fas fa-project-diagram"></i>
                <a href="#" class="button">projects</a>
            </li>
            <li>
                <i class="fas fa-project-diagram"></i>
                <a href="#" class="button">projects</a>
            </li>
        </ul>
    </nav>
    <main>
        <header>
            <div class="search-bar">
                <form>
                    <input placeholder="search project">
                </form>
            </div>
            <div class="add-project">
                <i class="fas fa-plus"></i> add project
            </div>
        </header>
        <section class="project-form">
            <h1>UPLOAD</h1>
            <form action="addProject" method="POST" ENCTYPE="multipart/form-data">
                <div class="messages">
                    <?php
                    if(isset($messages)){
                        foreach($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <input name="title" type="text" placeholder="title">
                <textarea name="description" rows=5 placeholder="description"></textarea>

                <input type="file" name="file"/><br/>
                <button type="submit">send</button>
            </form>
        </section>
    </main>
</div>
</body>