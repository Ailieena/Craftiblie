<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="/public/CSS/style.css">
    <link rel="stylesheet" type="text/css" href="/public/CSS/upload.css">

    <script src="https://kit.fontawesome.com/b4f670463c.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b4f670463c.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/public/js/search.js" defer></script>
    <script type="text/javascript" src="/public/js/statistics.js" defer></script>
    <script type="text/javascript" src="/public/js/search.js" defer></script>
    <title>Upload</title>
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
    <main>
    <!-- <form method="post" action="addProject" ENCTYPE="multipart/form-data"> -->
    <div class="upload-pattern">
  <h2>Upload a Pattern</h2>
  <div class="messages">
      <?php
          if(isset($messages)){
              foreach($messages as $message) {
                  echo $message;
              }
          }
      ?>
  </div>
  <form action="addProject" method="POST" enctype="multipart/form-data">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required>
    
    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea>
    
    <label for="pattern-type">Type:</label>
    <select id="pattern-type" name="pattern-type" required>
      <option value="">-- Select a type --</option>
      <option value="1">Clothing</option>
      <option value="2">Household objects</option>
      <option value="3">Decorations</option>
    </select>
    
    <label for="pattern-category">Category:</label>
    <select id="pattern-category" name="pattern-category" required>
      <option value="">-- Select a category --</option>
      <option value="1">Knitting</option>
      <option value="2">Crochet</option>
      <option value="3">Cross-stitch</option>
      <option value="4">Embroidery</option>
    </select>
    
    <label for="pattern-file">Pattern File:</label>
    <input type="file" id="pattern-file" name="pattern-file" required>
    
    <label for="image-file">Image File (optional):</label>
    <input type="file" id="image-file" name="image-file">
    
    <input type="submit" value="Upload">
  </form>
</div>
<script src="/public/js/upload-select.js"></script>
</div>
</body>