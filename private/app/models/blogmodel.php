<?php
class  BlogModel extends Model

{
    function __construct()
    {
        parent:: __construct();
    }
    function getAllPosts()
    {
        $sql = "SELECT slug, title, author, post_date FROM posts";
        $statement = $this ->db-> prepare($sql);
        $statement -> execute();
        return $statement -> fetchAll();
    }
    function getPostById($postId)
    {
        $sql = "SELECT slug, title, content, author, post_date FROM posts WHERE slug = ? ";
        $statement = $this ->db-> prepare($sql);
        $statement -> execute(Array($postId));
        return $statement -> fetch();
    }
    function createPost($title, $author, $content)
    {
        $slug = (str_replace(" ", "-", strtolower($title)) . random_int(1000 , 999999));
        $sql = "INSERT INTO `posts` (`slug`, `title`, `content`, `author`) VALUES (?,?,?,?)";
        $statement = $this ->db-> prepare($sql);
        $statement -> execute(Array($slug, $title, $content, $author));
        return $slug;
    }

      function updateBlog($slug, $title, $author, $content)
{
    $update_sql = "UPDATE `posts` set `title` = ? , `content` = ? , `author`= ? where `slug` = ?";
    $update_statement = $this->db-> prepare($update_sql);
    $update_statement -> execute(Array($title, $content, $author, $slug));
    return $slug;

}

}

?>