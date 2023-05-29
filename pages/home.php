<h1>Home</h1>

<?php

$query = pg_query($db, "select * from carburant");

// Uncomment to debug
// var_dump(pg_fetch_all($results));

$results = pg_fetch_all($query)
?>

<ul>
    <?php
        foreach ($results as $result){
            echo '<li>' . $result["nom"] . '</li>';
        }
    ?>
</ul>

<script>

    // get results from php and store it in a js variable
    const results = <?php echo json_encode($results); ?>

</script>
