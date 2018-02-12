<?php

class SessionModel {
    
    public static function getCsrf () {
        return $_SESSION['csrf'];
    }
    
    public static function setCsrf () {
        $csrf = '';
        
        return $csrf;
    }
    
    public static function create ($session) {
        $_SESSION = [
            'username' => $session['username'],
            'email' => $session['email'],
            'csrf' => self::setCsrf()
        ];
    }
    
    public static function destroy () {
        session_destroy();
        $_SESSION = [];
    }
}