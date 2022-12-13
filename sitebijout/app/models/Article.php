<?php
class Article {
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getArticles(){
        $this->db->query('SELECT * FROM `produits`');
        $results = $this->db->resultSet();
        return $results;
    }
    public function  addArticle($data){
        $this->db->query('INSERT INTO produits(name_prod,quantite,prix,admin_id) VALUES (:name, :quantite, :prix ,:admin)');

        $this->db->bind(':name', $data['name_prod']);
        $this->db->bind(':quantite', $data['quantite']);
        $this->db->bind(':prix', $data['prix']);
        $this->db->bind(':admin', $data['user_id']);

        //   execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}