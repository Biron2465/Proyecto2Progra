<?php
require_once ('models/LogInModel.php');

class LogInController extends Controller
{
    public function login()
    {
        $email = Input::get('email');
        $password = Input::get('password');
        $loginModel = new LogInModel();
        $user = $loginModel->findUserByEmail($email);

        if ($user && $password === $user['password']) {
            Auth::login($user, $password);
            $_SESSION['user'] = $user;
            echo json_encode(['success' => true, 'message' => 'Login successful', 'user' => $user]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Invalid credentials']);
        }
    }

}
?>