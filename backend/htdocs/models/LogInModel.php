<?php
require_once 'Database.php';

class LogInModel extends Model
{
    protected static $_table_name = 'users';

    public function findUserByEmail($email)
    {
        $db = Database::getInstance()->getDb();
        $stmt = $db->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        return $user;
    }

}