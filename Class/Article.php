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

    /*
     * Title de l'article
     */
    var $title_Article;

    function __construct($idArticle)
    {
        $bdd = Database::getInstance();
        $request = $bdd->prepare('SELECT * FROM Article WHERE idArticle = ?');
        $request->execute(array($idArticle));
        $request->fetch();

        $this->id_Article = $request['idArticle'];
        $this->body_Article = $request['corps'];
        $this->title_Article = $request['titre'];
    }

    /*
     *
     */
    function newArticle()
    {

    }

    /*
     *  Genère le code html pour l'article
     */
    function htmlArticle()
    {
        echo    "<div class=\"blog-post\" id=".$this->id_Article.">
                    <div class=\"title\">
                        ".$this->title_Article."
                    </div>
                    <div class=\"body\">
                        ".$this->body_Article."
                    </div>
                </div>";
    }
}