<?php // -- CBA Home Page - Version # 25080601 -- ?>
<?php
require_once __DIR__ . '/../_inc/_init.php';
$pageTitle = "CBA Standards | Introduction";
ob_start();
?>
<?php // CBA Page Content Start ?>
<section id="content">
    <main class="container mt-5">
        <h1 class="mb-2">Introduction</h1>

        <p>Welcome to the <strong>CBA Standards Portal</strong>, the central repository for all standards, expectations, and development requirements related to our <strong>Custom Business Applications (CBA)</strong>.</p>

        <p>This site is maintained collaboratively by:</p>
        <ul>
            <li><strong>Smile Information Services (SIS)</strong> – Project Owner</li>
            <li><strong>AVDevs Solutions</strong> – Production Manager & Senior Developer</li>
        </ul>

        <h3 class="mb-2">Purpose</h3>
        <p>The purpose of this portal is to:</p>
        <ul>
            <li>Define and document coding standards, UI/UX guidelines, version control procedures, and more</li>
            <li>Ensure consistency across all CBA projects and teams</li>
            <li>Provide a reference point for all team members to follow as development progresses</li>
            <li>Maintain a living document—updated as changes, decisions, and improvements occur</li>
        </ul>

        <h3 class="mb-2">Audience</h3>
        <p>This site is intended for:</p>
        <ul>
            <li>Project Owners and Managers overseeing development direction</li>
            <li>Developers and Engineers contributing to code and functionality</li>
            <li>Designers and QA analysts ensuring consistency and compliance</li>
        </ul>

        <h3 class="mb-2">Ongoing Updates</h3>
        <p>As new features are developed or standards are refined:</p>
        <ul>
            <li>This portal will be updated accordingly</li>
            <li>All team members should reference this site regularly for the latest practices</li>
        </ul>
    </main>
</section>
<?php // CBA Page Content End ?>
<?php
$content = ob_get_clean();

include __DIR__ . '/../_tpl/layout.php';
?>
