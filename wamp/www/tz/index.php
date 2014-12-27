<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="CSS/table.css">
    <script type="text/javascript" src="JS/sorttable.js"></script>

</head>
<body>

<div>
    <table>
        <thead>
        <tr>
            <th onclick="sort_table(news, 0, asc1); asc1 *= -1; asc2 = 1; asc3 = 1;  asc4 = 1; ">Дата новости</th>
            <th onclick="sort_table(news, 1, asc2); asc2 *= -1; asc3 = 1; asc4 = 1;  asc1 = 1; ">Заголовок</th>
            <th onclick="sort_table(news, 2, asc3); asc3 *= -1; asc4 = 1; asc1 = 1;  asc2 = 1; ">Автор</th>
            <th onclick="sort_table(news, 3, asc4); asc4 *= -1; asc1 = 1; asc2 = 1;  asc3 = 1; ">ID новости</th>
        </tr>
        </thead>
        <tbody id="news">
        <?php

        $conn=mysqli_connect("localhost","","", "test");
        if(!isset($_GET['page'])){
            $page=1;
        }
        else{
            $page = $_GET['page'];
        }

        $per_page = 10;
        $start = (($page-1)*$per_page);
        $sql = "SELECT * FROM News";
        $result = $conn->query($sql);
        $pages =  ceil($result->num_rows/$per_page);

        $sql = "SELECT add_date , title , author.name , news.id FROM news INNER JOIN author ON news.author_id=author.id LIMIT $start, $per_page";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $date = new DateTime($row["add_date"]);
                echo "<tr>"
                    ."<td>".$date->format('d.m.Y')."</td>"
                    ."<td>".$row["title"]."</td>"
                    ."<td>".$row["name"]."</td>"
                    ."<td>".$row["id"]."</td>"
                    ."</tr>";
            }
            for($index=1;$index<=$pages;$index++)
            {
                echo '<a href="?page='.$index.'">'.$index.'</a>';
            }
        }

        ?>
        </tbody>
    </table>

</div>

</body>
</html>
