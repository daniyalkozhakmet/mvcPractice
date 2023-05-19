<?php require dirname(__DIR__) . "/views/inc/" . 'header.view.php'; ?>
<?php show($response) ?>

<section class="container">
    <h1 class="mb-4">Latest Jobs</h1>
    <?php foreach ($response['data'] as $job) { ?>
        <div class="d-flex shadow-sm p-3 mb-5 bg-body-tertiary rounded">
            <div class="p-2 flex-grow-1">
                <h3><?php echo $job->job_title ?> (<span><?php echo $job->location ?></span>)</h3>
                <span><?php echo $job->salary ?></span>
                <p class="fw-light"><?php echo $job->description ?></p>
            </div>
            <div class="p-2">
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </div>
        </div>
    <?php } ?>
    <nav aria-label="Page navigation example" class="d-flex justify-content-center align-items-center">
        <ul class="pagination">
            <?php for ($i = 0; $i < $response['total_page']; $i++) { ?>
                <li class="page-item"><a class="page-link" href="#" id='page_link'><?php echo $i + 1 ?></a></li>
            <?php  } ?>
        </ul>
        <form action="<?php echo APP . '/controllers/Home.php' ?>" method="post" id="pagination_form">
            <input type="text" hidden name="page">
        </form>
    </nav>
</section>


<?php require dirname(__DIR__) . "/views/inc/" . 'footer.view.php'; ?>