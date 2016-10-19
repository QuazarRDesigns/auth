<?php
require_once 'database/initdbandquery.php';

$article = getArticleDetails();

$posts = array(
    array('Josef Josefson', '21/05/2016', '
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis interdum sapien. Ut ut risus eget ipsum interdum tincidunt sit amet vel tellus. Vestibulum eget augue nec quam porttitor lacinia. Cras at ex vulputate, tempor leo at, malesuada enim. Sed fermentum libero ornare nisl consequat congue. Praesent mattis ligula id erat accumsan, eu elementum eros vehicula. Sed euismod odio sapien, at pretium felis venenatis id. Donec leo lectus, ornare quis gravida in, tempus ut ex. Aliquam cursus libero id nulla lobortis volutpat.'),
    array('Sophie Fielding', '17/03/2016', '
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis interdum sapien. Ut ut risus eget ipsum interdum tincidunt sit amet vel tellus. Vestibulum eget augue nec quam porttitor lacinia. Cras at ex vulputate, tempor leo at, malesuada enim. Sed fermentum libero ornare nisl consequat congue. Praesent mattis ligula id erat accumsan, eu elementum eros vehicula. Sed euismod odio sapien, at pretium felis venenatis id. Donec leo lectus, ornare quis gravida in, tempus ut ex. Aliquam cursus libero id nulla lobortis volutpat.'),
    array('Taylor Deering', '22/08/2016', '
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis interdum sapien. Ut ut risus eget ipsum interdum tincidunt sit amet vel tellus. Vestibulum eget augue nec quam porttitor lacinia. Cras at ex vulputate, tempor leo at, malesuada enim. Sed fermentum libero ornare nisl consequat congue. Praesent mattis ligula id erat accumsan, eu elementum eros vehicula. Sed euismod odio sapien, at pretium felis venenatis id. Donec leo lectus, ornare quis gravida in, tempus ut ex. Aliquam cursus libero id nulla lobortis volutpat.'),
    array('Liam Jackson', '12/10/2016', '
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis interdum sapien. Ut ut risus eget ipsum interdum tincidunt sit amet vel tellus. Vestibulum eget augue nec quam porttitor lacinia. Cras at ex vulputate, tempor leo at, malesuada enim. Sed fermentum libero ornare nisl consequat congue. Praesent mattis ligula id erat accumsan, eu elementum eros vehicula. Sed euismod odio sapien, at pretium felis venenatis id. Donec leo lectus, ornare quis gravida in, tempus ut ex. Aliquam cursus libero id nulla lobortis volutpat.'),
    array('Julia Everheart', '03/04/2016', '
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis interdum sapien. Ut ut risus eget ipsum interdum tincidunt sit amet vel tellus. Vestibulum eget augue nec quam porttitor lacinia. Cras at ex vulputate, tempor leo at, malesuada enim. Sed fermentum libero ornare nisl consequat congue. Praesent mattis ligula id erat accumsan, eu elementum eros vehicula. Sed euismod odio sapien, at pretium felis venenatis id. Donec leo lectus, ornare quis gravida in, tempus ut ex. Aliquam cursus libero id nulla lobortis volutpat.'),
    array('Mia Robertson', '30/9/2016', '
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis interdum sapien. Ut ut risus eget ipsum interdum tincidunt sit amet vel tellus. Vestibulum eget augue nec quam porttitor lacinia. Cras at ex vulputate, tempor leo at, malesuada enim. Sed fermentum libero ornare nisl consequat congue. Praesent mattis ligula id erat accumsan, eu elementum eros vehicula. Sed euismod odio sapien, at pretium felis venenatis id. Donec leo lectus, ornare quis gravida in, tempus ut ex. Aliquam cursus libero id nulla lobortis volutpat.')
);
?>
<div class="site__wrap">
    <div class="sidebar">
         <h1 class="sidebar__heading">Dashboard</h1>
         <h2>Welcome <?php $user = getUserDetails($_SESSION['user_username'], $_SESSION['user_password']);
         echo $user['first_name']. ' ' . $user['last_name']?> </h2>     
    </div>
    <div class="blog">
        <?php
        for ($i = 0; $i < count($posts); $i++) {
            echo '<div class="block">';
            echo "<span class='name'>" . $posts[$i][0] . '</span>';
            echo "<span class='date'>" . $posts[$i][1] . '</span>';
            echo "<span class='content'>" . $posts[$i][2] . '</span>';
            echo '</div>';
            
        }
        ?>
    </div>
</div>

