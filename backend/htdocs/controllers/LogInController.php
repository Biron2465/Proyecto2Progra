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
            echo json_encode(['success' => true, 'message' => 'Login successful']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Invalid credentials']);
        }
    }

    public function logout()
    {
        // Deshacer la configuración de todas las variables de sesión
        $_SESSION = array();

        // Si se desea, destruir la sesión por completo
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }

        // Finalmente, destruir la sesión
        session_destroy();

        echo json_encode(['success' => true, 'message' => 'Logged out successfully']);
    }
}
?>