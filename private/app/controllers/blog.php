<?php

class Blog extends Controller
{
    function__construct()
    {
        parent::__construct();
    
}

function Index()
{
    $this -> model("BlogModel");
    $posts = $this -> BlogModel -> getAllPosts();
    $input = Array("posts" => $posts);
    $this -> view("template/header");
    $this -> view("blog/index", $input);
    $this -> view("template/footer");

}
function Read($postId)
{
    $this -> model("BlogModel");
    $post = $this -> BlogModel -> getPostById
}