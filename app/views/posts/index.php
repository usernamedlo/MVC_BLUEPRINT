<h2>Liste des posts</h2>
<ul>
    <?php foreach ($posts as $post) : ?>
        <li>
            <a href=''>
                <?php echo $post['titre']; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>