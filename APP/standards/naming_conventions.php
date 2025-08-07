<?php // -- CBA Standard Navigation Page - Version # 25080601 -- ?>
<?php
require_once __DIR__ . '/../_inc/_init.php';
$pageTitle = "CBA Standards | Introduction";
ob_start();
?>
<?php // CBA Page Content Start ?>
<section id="content">
    <main class="container mt-5">
        <h1 class="mb-4">Naming Conventions</h1>
        <p>Consistent and descriptive naming is critical for maintainable code, team collaboration, and long-term system stability. The following conventions apply across all Custom Business Applications (CBA) projects.</p>
        <h3 class="mb-2">General Principles</h3>
        <ul class="ml-4">
            <li>Names must be <strong>descriptive and meaningful</strong>, not abbreviated to the point of ambiguity.</li>
            <li>Use <strong>camelCase</strong> for variables and function names in PHP.</li>
            <li>Use <strong>PascalCase</strong> for class names and model objects.</li>
            <li>Use <strong>UPPER_SNAKE_CASE</strong> for constants.</li>
            <li>Avoid single-letter or ambiguous names like <code>$x</code> or <code>temp</code>.</li>
            <li>Be consistent with naming across similar files, modules, or functions.</li>
        </ul>
        <h3 class="mb-2">File and Folder Naming</h3>
        <ul class="ml-4">
            <li>All folder names: <code>lowercase_with_underscores</code></li>
            <li>PHP files: <code>snake_case.php</code> (e.g., <code>user_profile.php</code>)</li>
            <li>Templates and includes: prefixed with underscore (e.g., <code>_header.php</code>, <code>_nav.php</code>)</li>
        </ul>
        <h3 class="mb-2">Database Naming</h3>
        <ul class="ml-4">
            <li>Table names: <code>plural_snake_case</code> (e.g., <code>users</code>, <code>order_items</code>)</li>
            <li>Primary keys: <code>uid</code></li>
            <li>Foreign keys: <code>{related_table}_uid</code> (e.g., <code>user_uid</code>)</li>
            <li>Use <code>created_at</code> and <code>updated_at</code> for timestamp fields</li>
        </ul>
        <h3 class="mb-2">Form and UI Elements</h3>
        <ul class="ml-4">
            <li>Input names: <code>snake_case</code> matching backend variable names</li>
            <li>HTML uids: <code>lowercase-with-dashes</code> (e.g., <code>user-form</code>)</li>
            <li>CSS classes: <code>lowercase-with-dashes</code></li>
        </ul>
        <h3 class="mb-2">API Endpoints</h3>
        <ul class="ml-4">
            <li>Use RESTful conventions and plural nouns (e.g., <code>/api/users</code>, <code>/api/orders</code>)</li>
            <li>Use lowercase with hyphens for paths (e.g., <code>/user-profile</code>)</li>
        </ul>
        <h3 class="mb-2">Examples</h3>
        <pre>
            <code class="code">// PHP
$userFirstName = 'John';
class OrderProcessor { ... }
define('MAX_RETRIES', 5);

// File
_tpl/footer.php

// Database
Table: users
Field: created_at
Foreign Key: order_uid

// HTML
&lt;input type="text" name="email_address" uid="email-address"&gt;
            </code>
        </pre>
        <p><strong>Note:</strong> These conventions are enforced during code reviews and contribute to project health, clarity, and maintainability.</p>
    </main>
</section>
<?php // CBA Page Content End ?>
<?php
$content = ob_get_clean();

include __DIR__ . '/../_tpl/layout.php';
?>

