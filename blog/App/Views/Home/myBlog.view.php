<?php /** @var Array $data */ ?>
<link rel="stylesheet" href="public/css.css">
<div class="container">
    <?php foreach ($data['blogy'] as $blog) {
        if($blog->getLoginFk() == $_SESSION['name']) { ?>
        <div class="row">
            <div class="container blog">
                <h1>
                    <?= $blog->getTitle() ?>
                </h1>
                <p>
                    <?= $blog->getText() ?>
                </p>
                </form>
                <form method="post" action="?c=home&a=deleteBlog">
                    <input type="hidden" name="blogId" value="<?= $blog->getId() ?>">
                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Vymaž blog</button>
                </form>
                <form method="post" action="?c=home&a=updateBlog">
                    <input type="hidden" name="blogId" value="<?= $blog->getId() ?>">
                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Update blogu</button>
                </form>
            </div>
        </div>
    <?php } } ?>
</div>
