<!DOCTYPE html>
<html lang="sk">
<head>
    <title>Blogisek pre teba</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="public/css.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark justify-content-end">
    <div class="container">
        <a class="navbar-brand" href="#">Blogisek pre teba</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="?c=home">Domov</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?c=home&a=contact">Kontakt</a>
                </li>
                <?php if (\App\Auth::isLogged()) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?c=auth&a=logout">Odhlás sa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?c=Auth&a=blogyForm">Napíš blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?c=Home&a=blogy">Blogy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?c=Home&a=myBlog">Moje blogy</a>
                    </li>

                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= \App\Config\Configuration::LOGIN_URL?>">Prihlasit sa</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="?c=Auth&a=registrationForm">Registrácia</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="?c=Home&a=blogy">Blogy</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row mt-2">
        <div class="col">
            <?= $contentHTML ?>
            <h2>Píšte o svojej záľube tak, ako vám to vyhovuje.<br><br>
                Vytvorte jedinečný a úžasný blog. <br><br>
                Je to jednoduché a bezplatné.  <br><br> </h2>
            <h3>Pomoc pri písaní vášho dokonalého blogu.<br></h3>
            <p1>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham. <br> <br></p1>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container1">
        <div class="row">
            <div class="footer-col">
                <h4>spoločnosť</h4>
                <ul>
                    <li><a href="#">o nás</a></li>
                    <li><a href="#">pomoc</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>sledujte nás</h4>
                <div class="social-links">
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/?lang=sk"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>

