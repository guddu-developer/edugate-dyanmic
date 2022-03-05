
<?php
$conn=mysqli_connect("localhost","root","","edugate");

$page_num = 1;
$page_limit = 5;

if (isset($_GET['page'])) {
    // Checking that it is a valid number
    $page_num = filter_var($_GET['page'], FILTER_VALIDATE_INT, [
        'options' => [
            'default' => 1,
            'min_range' => 1
        ]
    ]);
}

$page_offset = $page_limit * ($page_num - 1);

$query = mysqli_query($conn, "SELECT * FROM gallery ORDER BY id LIMIT $page_limit OFFSET $page_offset");
$total_posts = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM gallery"));
$total_page = ceil($total_posts / $page_limit);
$next_page = $page_num + 1;
$prev_page = $page_num - 1;

if ($total_page < $page_num) {
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination in PHP with MySQLi</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="container">
        <h1>Posts</h1>
        <div class="list">
            <?php
            if (mysqli_num_rows($query) > 0) :
                while ($row = mysqli_fetch_array($query)) :
                    echo '<div class="item"><h3>' . $row['id'] . '</h3><p>' . $row['image'] . '</p></div>';
                endwhile;
            ?>
                <ul class="pagination">
                    <?php
                    if ($page_num > 1) :
                        echo '<li><a href="?page=' . $prev_page . '" class="page_link">Prev</a></li>';
                    endif;

                    for ($i = 1; $i <= $total_page; $i++) :
                        if ($i == $page_num) {
                            echo '<li><span>' . $i . '</span></li>';.
                        } 
                        // else if($i)
                        else {
                            echo '<li><a href="?page=' . $i . '">' . $i . '</a></li>';
                            // if ($i<$page_num ) {
                            //     break;
                            // }
                        }
                    endfor;

                    // echo  "<li><a  >...</a></li>";

                    if ($total_page + 1 != $next_page) :
                        echo '<li><a href="?page=' . $next_page . '" class="page_link">Next</a></li>';
                    endif;
                    ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>

</body>

</html>
