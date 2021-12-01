<?php /** @var Array $data */?>
<link rel="stylesheet" href="public/css.css">
<div class="container">
    <?php foreach ($data['blogy'] as $blog) {
    if($blog->getId() == $data['blogId']) { ?>
    <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <form method="post" action="?c=home&a=update">
                <input type="hidden" name="blogId" value="<?= $blog->getId() ?>">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Názov</label>
                    <input type="text" class="form-control" name="title" id="exampleFormControlInput1" value="<?=$blog->getTitle()?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Text</label>
                    <input type="text" class="form-control" name="text" id="exampleFormControlInput2" value="<?=$blog->getText()?>">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Odoslať</button>
                </div>
            </form>
        </div>
    </div>
    <?php } } ?>
</div>



