<?php /** @var Array $data */?>
<link rel="stylesheet" href="public/css.css">
<div class="container">
    <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <?php if ($data['error'] != "") {?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Chyba!</strong> Nesprávne meno alebo heslo.
                </div>
            <?php } ?>
            <form method="post" action="?c=auth&a=login">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" name="login" id="exampleFormControlInput1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Heslo</label>
                    <input type="password" class="form-control" name="password" id="exampleFormControlInput2" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Prihlásiť</button>
                </div>
            </form>
        </div>
    </div>
</div>



