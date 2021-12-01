<?php /** @var Array $data */?>
<script src="validationBlog.js"></script>
<div class="container">
    <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <form method="post" action="?c=auth&a=upload" onsubmit="">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Názov</label>
                    <input type="text"
                           id="title" class="form-control" name="title" id="exampleFormControlInput1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Text</label>
                    <input type="text" id="text" class="form-control" name="text" id="exampleFormControlInput2" required>
                </div>
                <div id="submit-info">
                    Formulár obsahuje chyby a nie je možné ho odoslať.
                </div>
                <input type="submit" value="Zverejniť blog" id="submit">
            </form>
        </div>
    </div>
</div>



