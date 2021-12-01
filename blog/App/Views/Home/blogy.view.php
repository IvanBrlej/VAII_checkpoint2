<?php /** @var Array $data */ ?>
<link rel="stylesheet" href="public/css.css">
<div class="container">
    <?php foreach ($data['blogy'] as $blog) { ?>
        <div class="row">
            <div class="container blog">
                    <h1>
                        <?= $blog->getTitle() ?>
                    </h1>
                <div class="container blogText">
                    <p>
                        <?= $blog->getText() ?>
                    </p>
                </div>
                </form>
            </div>
        </div>
    <?php } ?>
</div>
