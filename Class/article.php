<?php
/**
 * Created by PhpStorm.
 * User: kedoPortable
 * Date: 16/06/2015
 * Time: 12:51
 */

class Article
{

    /*
     * Identidiant de l'article
     */
    var $id_Article;

    /*
     * Corps de l'article
     */
    var $body_Article;

    /*
     * Tableau des médias associés à l'article ( images, video ... )
     */
    var $array_media_article;



    function __construct($array_media_article, $id_Article, $body_Article)
    {
        $this->array_media_article = $array_media_article;
        $this->id_Article = $id_Article;
        $this->body_Article = $body_Article;
    }


}