<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail News</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Detail News</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h4>
                        <?= $news_item->title; ?>
                    </h4>
                    <p class="font-italic" style="font-size: 0.8rem;"><?= $news_item->created ?></p>
                    <p><?= $news_item->body; ?></p>
                </div>
            </div>
        </div>
    </section>
</div>