<?php // -- CBA Standard Components Page - Version # 25080701 -- ?>
<?php
require_once __DIR__ . '/../_inc/_init.php';
$pageTitle = "CBA Standards | Introduction";
ob_start();
?>
<?php // CBA Page Content Start ?>
<section id="content">
    <main class="container mt-5">
        <h1 class="mb-4">Notes</h1>
        <p>This section includes important development notes such as frequently used SQL queries, key configuration settings, debugging tips, command references, and critical reminders. It serves as a quick reference guide for efficient development and troubleshooting.</p>
        <h3 class="mb-2">Database</h3>
        <div class="clear"></div>
    </main>
</section>
<?php // CBA Page Content End ?>
<?php
$content = ob_get_clean();

include __DIR__ . '/../_tpl/layout.php';
?>

