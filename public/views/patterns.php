<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="/public/CSS/style.css">
    <link rel="stylesheet" type="text/css" href="/public/CSS/projects.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
<!--    <link rel="stylesheet" href="https://kit.fontawesome.com/b4f670463c.css" crossorigin="anonymous">-->
    <script src="https://kit.fontawesome.com/b4f670463c.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/public/js/search.js" defer></script>
    <script type="text/javascript" src="/public/js/statistics.js" defer></script>
    <script type="text/javascript" src="/public/js/search.js" defer></script>
    <title>Patterns</title>
</head>

<body>
<div class="header" id="myHeader">
    <img src="/public/img/logo1.png" class="header-logo-img" alt="">
    <div class="spacer"></div>
    <nav>
        <ul>
            <li><a href="/patterns">Patterns</a></li>
            <li><a href="/projects">Projects</a></li>
            <li><a href="/addProject">Upload</a></li>
            <li><a href="/profile">Profile</a></li>
        </ul>
    </nav>
</div>
<div class="base-container">
    <div class="main-view">
        <div class="search-bar">
            <form>
                <input placeholder="search patterns">
            </form>
        </div>

        <section class="projects">
            <?php foreach ($patterns as $pattern): ?>
                <div id="<?= $pattern->getId(); ?>">
                    <div>
                        <h2><?= $pattern->getTitle(); ?></h2>
                        <div class="social-section">
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    </div>
    <div class="filter-menu">
        <form class="h3f">
            <div class="filter-section">
                <h3>Category</h3>
                <label><input type="checkbox" name="category" value="knitting"> Knitting</label>
                <label><input type="checkbox" name="category" value="crochet"> Crochet</label>
                <label><input type="checkbox" name="category" value="cross-stitch"> Cross-stitch</label>
                <label><input type="checkbox" name="category" value="embroidery"> Embroidery</label>
            </div>
            <div class="filter-section">
                <h3>Type</h3>
                <label><input type="checkbox" name="type" value="clothing"> Clothing</label>
                <label><input type="checkbox" name="type" value="household"> Household Objects</label>
                <label><input type="checkbox" name="type" value="decorations"> Decorations</label>
            </div>
            <button type="submit">Apply</button>
        </form>
    </div>
</div>
</body>