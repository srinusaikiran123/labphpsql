<?php
if (isset($_SESSION["username"]))
{
    ?>
    <a href = "/blog/postupdate/<?php echo($slug); ?>" />Update Blog</a>
    <br/>
    <a href = "/blog/" />View Blogs</a>
    <?php
}
?>
<main>
<?php echo($content); ?>
</main>
<aside>
<p>Authored by: <a href = "mail to: <?php echo($author); ?>"> <?php echo($author); ?> </a> </p>
</aside>