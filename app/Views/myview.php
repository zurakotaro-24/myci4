<!-- Importing the layout file for this view -->
<?= $this->extend('components/layout') ?>

<!-- Initializing the content section, which will then be inside the layout file view. -->
<!-- All views must have this to use the layout view with header and footer. -->
<?= $this->section('content') ?>

    <?= $page_title ?? 'default na title sa view'; ?> 

    <h1>Welcome to CI4 from View</h1>
    <h3>Subjects: </h3>
    <ul>
        
        <!-- Defensive programming, always check first if something is not empty before executing something -->
        <?php
            // if(!empty($subjects))
            // {
            //     foreach($subjects as $sub) 
            //     {
            //         echo "<li>$sub</li>";
            //     }    
            // }
            // else 
            // {
            //     echo "<p>No records found</p>";
            // }    
        ?>

        <?php if(!empty($subjects)): ?>
            <?php foreach($subjects as $i => $sub): ?>
                <li> Sub number: <?= ($i+1) . " " . $sub; ?> </li>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No records par</p>
        <?php endif; ?>
    </ul>

<?= $this->endSection() ?>