<?php
    include 'header.php'
?>
<div class="article-container
" style="background: ghostwhite; 
  font-size: 20px; 
  padding: 10px; 
  border: 1px solid lightgray; 
  margin-left: 300px;
  margin-right:300px;">
<center><form action="search.php" method = "POST">
    <input type="text" name = "search" placeholder="Search">
    <button type = "submit" name = "submit-search">Search</button>
</form></center>

<center><h1>Browse</h1></center>
<center><h2>All Articles</h2></center>

    <?php
        $sql = "SELECT * FROM article";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);
        if ($queryResults > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<a href='article.php?title=".$row['a_title']."&date=".$row['a_date']."'><div class='article-box'>
                    <h3>".$row['a_title']."</h3>
                    <p>".$row['a_text']."</p>
                    <p>".$row['a_date']."</p>
                    <p>".$row['a_author']."</p>
                </div></a>";
            }
        }
    ?>
</div>
</body>
</html>