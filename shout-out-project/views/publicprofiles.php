<div class="mainContainer">

    <div class="row">
        <div class="col-md-8">
            <?php if ($_GET['userid']) { ?>
                <?php displayShouts($_GET['userid']); ?>
            <?php } else { ?>
            <h2>Active Users</h2>
            <?php displayUsers(); ?>
            <?php } ?>
        </div>
        <div class="col-md-4">
            <?php displaySearch(); ?>
            <hr>
            <?php displayShoutBox(); ?>
        </div>
    </div>

</div>