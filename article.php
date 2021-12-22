<?php
    include 'header.php';
?>
<h1>Article Page</h1>
<div class="article-container">
    <?php
        $title = mysqli_real_escape_string($conn,$_GET['title']);
        $date = mysqli_real_escape_string($conn,$_GET['date']);
        $sql = "SELECT * FROM article WHERE a_title='$title' AND a_date='$date'";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result); 
        if ($queryResults > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['a_title']=="Red Dead Redemption II") {
                    header("Location: rdr2.html");
                }
                if ($row['a_title']=="Valorant") {
                    header("Location: valorant.html");
                }
                if ($row['a_title']=="Need For Speed") {
                    header("Location: needforspeed.html");
                }
            }
        }
    ?>
</div>
</body>
</html>