<?php require dirname(__DIR__) . "/views/inc/" . 'header.view.php'; ?>


<section class="container">
    <h1 class="mb-4">Latest Jobs</h1>
    <?php foreach ($data as $job) { ?>
        <div class="d-flex shadow-sm p-3 mb-5 bg-body-tertiary rounded">
            <div class="p-2 flex-grow-1">
                <h3><a class="text-decoration-none" href="<?= ROOT ?>/singleJob?id=<?php echo $job->id ?>"><?php echo $job->job_title ?> (<span><?php echo $job->location ?></span>)</a></h3>
                <span><?php echo $job->salary ?></span>
                <p class="fw-light"><?php echo $job->description ?></p>
            </div>
            <div class="p-2">
                <a href="<?= ROOT ?>/edit?id=<?php echo $job->id ?>" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </div>
        </div>
    <?php } ?>
    <nav aria-label="Page navigation example" class="d-flex justify-content-center align-items-center">
        <form method="post">
            <ul class="pagination">
                <?php for ($i = 0; $i < $total_page; $i++) { ?>
                    <?php if ($i == $active_page) { ?>
                        <li class="page-item active"><input style="width:40px" class="page-link" id='page_link' name="page_link" type="submit" value="<?php echo $i + 1 ?>"> </li>
                    <?php } else { ?>

                        <li class="page-item"><input style="width:40px" class="page-link" id='page_link' name="page_link" type="submit" value="<?php echo $i + 1 ?>"> </li>
                    <?php } ?>

                <?php  } ?>
            </ul>
        </form>
    </nav>
</section>


<?php require dirname(__DIR__) . "/views/inc/" . 'footer.view.php'; ?>