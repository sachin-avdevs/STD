<?php // -- CBA Standard Components Page - Version # 25080701 -- ?>
<?php
require_once __DIR__ . '/../_inc/_init.php';
$pageTitle = "CBA Standards | Introduction";
ob_start();
?>
<?php // CBA Page Content Start ?>
<?php include __DIR__ . '/../standards/_inc/c_css.php'; ?>
<section id="content">
    <main class="container mt-5">
        <h1 class="mb-4">Components</h1>
        <p>Components includes interactive elements like datepickers, buttons, alert boxes, modals, tabs, dropdowns, and sliders, along with UI widgets such as charts, stats, tables, forms, and tooltips for enhanced user experience. The following components apply across all Custom Business Applications (CBA) projects.</p>
        <h3 class="mb-2">Forms</h3>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <textarea class="form-control" id="inputAddress" placeholder="1234 Main St"></textarea>
            </div>
            <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary float-right">Sign in</button>
        </form>
        <div class="clear"></div>
        <h3 class="mb-2">Datepicker</h3>
        <form action="#" method="post" class="nobottommargin">
            <div class="input-daterange date-group bottommargin-sm">
                <div class="row">
                    <div class="col-md-6 bottommargin-sm">
                        <label for="datepicker">Default Date</label>
                        <input type="text" value="" class="form-control tleft" id="datepicker" placeholder="MM/DD/YYYY">
                    </div>
                    <div class="col-md-6 bottommargin-sm">
                        <label for="datetimepicker">Default Date & Time Picker</label>
                        <input type="text" class="form-control datetimepicker-input tleft" id="datetimepicker" data-toggle="datetimepicker" data-target="#datetimepicker" placeholder="MM/DD/YYYY HH:MM AM/PM" />
                    </div>
                </div>
            </div>
        </form>
    </main>
</section>
<?php // CBA Page Content End ?>
<?php
$content = ob_get_clean();

include __DIR__ . '/../_tpl/layout.php';

include __DIR__ . '/../standards/_inc/c_scripts.php';

?>

