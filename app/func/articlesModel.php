<?php

class ArticleModel {
    
    public static function getAll ($limit = null) {
        $stmt = (!is_null($limit)) ? 'SELECT * FROM articles LIMIT '.$limit . 'ORDER BY id DESC' : 'SELECT * FROM articles ORDER BY id DESC';
    }
    
    public static function get ($id) {}

    public static function create ($article) {}

    public static function update ($article, $id) {}

    public static function delete ($id) {}
}