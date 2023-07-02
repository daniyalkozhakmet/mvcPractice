<?php require dirname(__DIR__) . "/views/inc/" . 'header.view.php'; ?>
<section class="container">
    <h1>Create new Job</h1>
    <form class="my-3" method="POST">
        <div class="form-group my-1">
            <label>Job title</label>
            <input type="text" class="form-control" name='job_title' aria-describedby="emailHelp" placeholder="Enter job title">
            <?php if (isset($errors['job_title'])) { ?>
                <small id="emailHelp" class="form-text text-danger"><?php echo $errors['job_title'] ?></small>
            <?php } ?>
        </div>
        <div class="form-group my-1">
            <label>Company</label>
            <input type="text" class="form-control" name='company' aria-describedby="emailHelp" placeholder="Enter job company">
            <?php if (isset($errors['company'])) { ?>
                <small id="emailHelp" class="form-text text-danger"><?php echo $errors['company'] ?></small>
            <?php } ?>
        </div>
        <div class="form-group my-1">
            <label>Location</label>
            <input type="text" class="form-control" name='location' aria-describedby="emailHelp" placeholder="Enter location">
            <?php if (isset($errors['location'])) { ?>
                <small id="emailHelp" class="form-text text-danger"><?php echo $errors['location'] ?></small>
            <?php } ?>
        </div>
        <div class="form-group my-1">
            <label>Salary</label>
            <input type="text" class="form-control" name='salary' aria-describedby="emailHelp" placeholder="Enter salary">
            <?php if (isset($errors['salary'])) { ?>
                <small id="emailHelp" class="form-text text-danger"><?php echo $errors['salary'] ?></small>
            <?php } ?>
        </div>
        <div class="form-group my-1">
            <label>Contact email</label>
            <input type="email" class="form-control" name='contact_email' aria-describedby="emailHelp" placeholder="Enter contact email">
            <?php if (isset($errors['contact_email'])) { ?>
                <small id="emailHelp" class="form-text text-danger"><?php echo $errors['contact_email'] ?></small>
            <?php } ?>
        </div>
        <div class="form-group my-1">
            <label>Contact User</label>
            <input type="text" class="form-control" name='contact_user' aria-describedby="emailHelp" placeholder="Enter contact user">
            <?php if (isset($errors['contact_user'])) { ?>
                <small id="emailHelp" class="form-text text-danger"><?php echo $errors['contact_user'] ?></small>
            <?php } ?>
        </div>
        <div class="form-group my-1">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='description'></textarea>
            <?php if (isset($errors['description'])) { ?>
                <small id="emailHelp" class="form-text text-danger"><?php echo $errors['description'] ?></small>
            <?php } ?>
        </div>
        <div class="form-group my-1">
            <label for="exampleFormControlSelect1">Category</label>
            <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                <?php foreach ($categories as $category) { ?>
                    <option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
                <?php } ?>
            </select>
            <?php if (isset($errors['category_id'])) { ?>
                <small id="emailHelp" class="form-text text-danger"><?php echo $errors['category_id'] ?></small>
            <?php } ?>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>
<?php require dirname(__DIR__) . "/views/inc/" . 'footer.view.php'; ?>