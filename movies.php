<?php 
    include("myfunction.php");

    $mysqli = connectToDatabase();

    $sql = "SELECT movie_id, movie_name, genre, price, dateofrelease FROM pet";
    $result = $mysqli -> query($sql);?>
    
    <table class="table table-dark table-striped-columns">

   
    <?php while($a_row = $result->fetch_assoc()):?>
        
        <tr>
            <td><?=$a_row['movie_id']?></td>
            <td><?=$a_row['movie_name']?></td>
            <td><?=$a_row['genre']?></td>
            <td><?=$a_row['price']?></td>
            <td><?=$a_row['date of release']?></td>
        </tr>
        <?php endwhile;?>
    </table>