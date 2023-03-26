<?php 

    include_once('templates/header.php');

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {

            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>


 <main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title']?></h1>
        <p id="post-description"><?= $currentPost['description']?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/imgs/<?= $currentPost['img'] ?>"></img>
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem in corrupti expedita cum nam excepturi dolores voluptate aperiam quaerat velit similique consequatur cupiditate nobis, totam laudantium provident recusandae! Officiis, facere?
        Pariatur facilis, sapiente soluta incidunt obcaecati nisi amet. Nisi consequatur amet quod quae deserunt. Aliquid officia, rem veniam, quas explicabo asperiores soluta cupiditate nulla, deserunt numquam minus facilis at debitis.
        Nemo facere, quos error perspiciatis, consectetur explicabo nam neque voluptates delectus fugiat quasi qui iusto repudiandae. Quas hic praesentium iste repudiandae architecto eaque magni, laboriosam corporis molestias aperiam cumque voluptate?
        Pariatur eaque obcaecati, quos est ducimus tenetur recusandae repellat, nisi temporibus, amet sunt culpa! Incidunt dignissimos facere id debitis, placeat ipsam, rerum asperiores itaque voluptatibus similique hic porro minus adipisci.
        Sequi nam voluptatibus, cum culpa asperiores explicabo at, iure nisi temporibus odio ab, consectetur soluta voluptas quisquam obcaecati neque! Officia at quis unde inventore! Modi quia quidem porro expedita debitis.</p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem in corrupti expedita cum nam excepturi dolores voluptate aperiam quaerat velit similique consequatur cupiditate nobis, totam laudantium provident recusandae! Officiis, facere?
        Pariatur facilis, sapiente soluta incidunt obcaecati nisi amet. Nisi consequatur amet quod quae deserunt. Aliquid officia, rem veniam, quas explicabo asperiores soluta cupiditate nulla, deserunt numquam minus facilis at debitis.
        Nemo facere, quos error perspiciatis, consectetur explicabo nam neque voluptates delectus fugiat quasi qui iusto repudiandae. Quas hic praesentium iste repudiandae architecto eaque magni, laboriosam corporis molestias aperiam cumque voluptate?
        Pariatur eaque obcaecati, quos est ducimus tenetur recusandae repellat, nisi temporibus, amet sunt culpa! Incidunt dignissimos facere id debitis, placeat ipsam, rerum asperiores itaque voluptatibus similique hic porro minus adipisci.
        Sequi nam voluptatibus, cum culpa asperiores explicabo at, iure nisi temporibus odio ab, consectetur soluta voluptas quisquam obcaecati neque! Officia at quis unde inventore! Modi quia quidem porro expedita debitis.</p>
    </div>
    <aside id="nav-container">
       <h3 id="tags-title">Tags</h3>
       <ul id="tags-list">
           <?php foreach($currentPost['tags'] as $tag): ?>
               <li><a href="#"><?= $tag; ?></a></li>
           <?php endforeach; ?>
       </ul>
       <h3 id="categories-title">Categorias</h3>
       <ul id="categories-list">
           <?php foreach($categories as $category): ?>
               <li><a href="#"><?= $category; ?></a></li>
           <?php endforeach; ?>
       </ul>
    </aside>
 </main>

<?php 

    include_once("templates/footer.php");
?>