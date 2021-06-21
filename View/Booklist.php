<html>
<head></head>
<body>

<h2>JUDUL-JUDUL BUKU</h2>
    <table border="2px solid" style="margin-top:2rem;margin-left:2rem;">
        <thead>
          <tr>
            <td>Title</td>
            <td>Author</td>
            <td>Description</td>
          </tr>
        </thead>
        <?php

            foreach ($books as $book)            {               
                 echo '<tr>
                            <td><a href="index.php?book='.$book->title . '">' . $book->title . '</a></td>
                            <td>'.$book->author . '</td>
                            <td>' . $book->description . '</td>
                        </tr>';
            }
        ?>
    </table>
</body>
</html>
