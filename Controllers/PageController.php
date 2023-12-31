<?php
require_once 'AuthController.php';

class PageController
{
    private $authController;

    public function __construct()
    {
        $this->authController = new AuthController;
    }

    public function route()
    {
        $url = $_SERVER['REQUEST_URI'];
        //echo 'REQUEST_URI : ' . $_SERVER['REQUEST_URI'];

        //$urltrim = ltrim($url, '/ecom-2/mvc/');
        $explodeUrl = explode('/', $url);
        var_dump($explodeUrl[3]);
        switch ($explodeUrl[3]) {
            case 'home':
                $this->home();
                break;

            case 'register':
                $this->register();
                break;

            case 'products':
                $this->products();
                break;

            case 'login':
                $this->login();
                break;
            default:
                $this->home();
                break;
        }
    }

    public function home()
    {
        // Logique pour la page d'accueil
        echo "Page d'accueil";
    }

    public function login()
    {
        echo "Page de login";

        // Logique pour la page de connexion
        // Afficher la page de connexion
        require_once('./Views/login.php');

        // Gérer la soumission du formulaire
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->authController->login();
        }
    }

    public function register()
    {
        // Logique pour la page d'inscription
        require_once('./Views/register.php');
        echo "Page d'inscription";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->authController->register();
        }
    }

    public function products()
    {
        // Logique pour la page du tableau de bord
        require_once('./Views/products.php');

        echo "Page products";
    }

    // Ajoutez d'autres méthodes pour d'autres pages

    public function notFound()
    {
        // Page non trouvée (404)
        echo "Page non trouvée";
    }
}
