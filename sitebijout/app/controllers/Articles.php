<?php
class Articles extends Controller
{
    public function __construct()
    {
        // verifier login d admin
        if (!isLoggdIn()) {
            redirect('users/login');
        }
        $this->articleModel = $this->model('Article');
    }
    public function index()
    {
        // Get articles
        $articles = $this->articleModel->getArticles();
        $data = [
            'articles' => $articles
        ];
        $this->view('articles/index', $data);
    }
    public function dashbord()
    {
        // Get articles
        $articles = $this->articleModel->getArticles();
        $data = [
            'articles' => $articles
        ];
        $this->view('articles/dashbord', $data);
    }
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'name_prod' => trim($_POST['name']),
                'quantite' => trim($_POST['quantite']),
                'prix' => trim($_POST['prix']),
                // 'image' =>trim($_POST['image']),
                'user_id' => $_SESSION['user_id'],
                'name_prod_err' => '',
                'quantite_err' => '',
                'prix_err' => '',
                // 'image_err' => '',
            ];

            // validation 
            if (empty($data['name_prod'])) {
                $data['name_prod_err'] = 'please enter name article';
            }
            if (empty($data['quantite'])) {
                $data['quantite_err'] = 'please enter quantite';
            }
            if (empty($data['prix'])) {
                $data['prix_err'] = 'please enter prix';
            }
            // if(empty($data['image'])){
            // //     $data['image_err'] = 'please enter image';
            // }

            // make sure no errors
            if (empty($data['name_prod_err']) && empty($data['quantite_err']) && empty($data['prix_err'])) {
                if ($this->articleModel->addArticle($data)) {
                    flash('artile add', 'Article Added');
                    redirect('articles/dashbord');
                } else {
                    die('wrong');
                }
            } else {
                $this->view('articles/add', $data);
            }
        } else {
            $data = [
                'name_prod' => '',
                'quantite' => '',
                'prix' => '',
                'image' => '',
                'user_id' => '',
                'name_prod_err' => '',
                'quantite_err' => '',
                'prix_err' => '',
                'image_err' => '',
            ];

            $this->view('articles/add', $data);
        }
    }
}
