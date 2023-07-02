<?php require dirname(__DIR__) . "/views/inc/" . 'header.view.php'; ?>
<section class="container">
    <h1 class="text-primary"><?php echo $job->job_title ?></h1>
    <div class="row">
        <div class="col-12 col-md-6">
            <h2> <span class="font-weight-bold"> Location:</span> <?php echo $job->location ?></h3>
                <h2> <span class="font-weight-bold">Salary:</span> <?php echo $job->salary ?></h3>
                    <h2><span class="font-weight-bold">Company:</span> <?php echo $job->company ?></h2>
        </div>
        <div class="col-12 col-md-6">
            <h2><span class="font-weight-bold">Contact User:</span> <?php echo $job->contact_user ?></h2>
            <h2><span class="font-weight-bold">Contact Email:</span> <?php echo $job->contact_email ?></h2>
            <h2><span class="font-weight-bold">Description:</span> <?php echo $job->description ?></h2>
        </div>
    </div>
</section>
<?php require dirname(__DIR__) . "/views/inc/" . 'footer.view.php'; ?>