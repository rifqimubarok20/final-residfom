<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Update News</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Update News</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <?php foreach ($news as $news_item) { ?>
                <form method="POST" action="<?= site_url() . 'news/update' ?>">
                    <div class="form-group">
                        <label for="title"> Title </label>
                        <input type="hidden" name="id" class="form-control" value="<?= $news_item->id ?>">
                        <input type="text" name="title" class="form-control" id="title" value="<?= $news_item->title ?>">
                    </div>
                    <div class="form-group">
                        <label for="body"> Body </label>
                        <input type="text" name="body" class="form-control" id="body" value="<?= $news_item->body ?>" rows="3">
                    </div>

                    <button type="reset" class="btn btn-danger" onclick="clearInputFields()">Reset</button>
                    <button type="submit" class="btn btn-primary">Save</button>

                </form>
            <?php } ?>
        </div>
    </section>
</div>