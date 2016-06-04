<?php
require_once WWW_ROOT . 'controller' . DS . './Controller.php';
require_once WWW_ROOT . 'dao' . DS . 'UserDAO.php';

require WWW_ROOT . 'vendor' . DS . 'autoload.php';

use PHPassLib\Hash\BCrypt;

class HomeController extends Controller {

	private $userDAO;

	function __construct() {
    $this->userDAO = new UserDAO();
	}

  public function index(){
    $errors = array();
    if(!empty($_POST)){

      if(empty($_POST['email'])) {
        $errors['email'] = 'Vul uw email in';
      } else {
        $existing = $this->userDAO->selectByEmail($_POST['email']);
        if(!empty($existing)) {
          $errors['email'] = 'Email adres is reeds in gebruik';
        }
      }

      if(empty($_POST['voornaam'])) {
        $errors['voornaam'] = 'Vul uw voornaam in';
      }

      if(empty($_POST['achternaam'])) {
        $errors['achternaam'] = 'Vul uw achternaam in';
      }

      if(empty($_POST['telefoon'])) {
        $errors['telefoon'] = 'Vul uw telefoonnummer in';
      }

      if(empty($_POST['wachtwoord'])) {
        $errors['wachtwoord'] = 'Kies een wachtwoord';
      }

      if(empty($errors)) {
        $user['password'] = BCrypt::hash($_POST['wachtwoord']);

        $data = array();
        $data['email'] = $_POST['email'];
        $data['username'] = $_POST['voornaam'] . ' ' . $_POST['achternaam'];
        $data['telefoon'] = $_POST['telefoon'];
        $data['punten'] = $_POST['subscription'];
        $data['wachtwoord'] = $user['password'];

        $registration = $this->userDAO->insert($data);
      }

    }

    //index.php?page=index#registerform
    $this->set('errors', $errors);

  }

  public function register(){
    var_dump($_POST);
    die();
    /*
    $errors = array();
    if(!empty($_POST)) {
      if(empty($_POST['email'])) {
        $errors['email'] = 'Vul uw email in';
      } else {
        $existing = $this->userDAO->selectByEmail($_POST['email']);
        if(!empty($existing)) {
          $errors['email'] = 'Email adres is reeds in gebruik op deze website';
        }
      }

      if(empty($_POST['password'])) {
      $errors['password'] = 'Vul een nieuw paswoord in';
      }

      if(empty($_POST['first_name'])){
      $errors['first_name'] ='Vul uw voornaam in';
      }
      if(empty($_POST['last_name'])) {
      $errors['last_name'] ='Vul uw acternaam in';
      }

      if(empty($errors)) {
        $data = array();
        $data['email'] = $_POST['email'];
        $data['password'] = $_POST['password'];
        $data['first_name'] = $_POST['first_name'];
        $data['last_name'] = $_POST['last_name'];
        $data['image'] = $bestandnaam;
        $registration = $this->userDAO->insert($data);
        if(!empty($registration)) {
          $_SESSION['info'] = 'Registration successful';
          header('Location:index.php');
          exit();
        } else {
          $_SESSION['error'] = 'Er liep iets fout!';
        }
      } else {
        $_SESSION['error'] = 'Vervoledig formulier';
      }
    }

    $this->set('errors', $errors);
    */
  }
}


