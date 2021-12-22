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
<h1>Search Page</h1>

<div class="article-container">
<?php
    if (isset($_POST['submit-search'])) {
        $search = mysqli_real_escape_string($conn,$_POST['search']);
        $sql = "SELECT * FROM article WHERE a_title LIKE '%$search%' OR a_text LIKE '%$search%' OR a_author LIKE '%$search%' OR a_date LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
        if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<a href='article.php?title=".$row['a_title']."&date=".$row['a_date']."'><div class='article-box'>
                    <h3>".$row['a_title']."</h3>
                    <p>".$row['a_text']."</p>
                    <p>".$row['a_date']."</p>
                    <p>".$row['a_author']."</p>
                </div></a>";
            }
        } else {
            echo "There are no results matching your search.";
        }
    }
?>
</div>