<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="/public/CSS/style.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="/public/img/logo1.png" class="logo-img">
        </div>
        <div class="login-container">
            <form class="login" action="login" method="POST">
                <div class="messages">
                    <?php
                        if(isset($messages)){
                            foreach($messages as $message) {
                                echo $message;
                            }
                        }
                    ?>
                </div>
                <input name="email" type="text" placeholder="email@email.com">
                <input name="password" type="password" placeholder="password">
                <button type="submit">LOGIN</button>
            </form>
        </div>
    </div>
</body>