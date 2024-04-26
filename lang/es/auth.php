<?php

return [
    'return_to_login' => 'Return to Login',
    'failed' => 'No se pudo encontrar ninguna cuenta que coincida con esas credenciales.',

    'login' => [
        'title' => 'Login to Continue',
        'button' => 'Log In',
        'required' => [
            'username_or_email' => 'A username or email must be provided.',
            'password' => 'Please enter your account password.',
        ],
    ],

    'forgot_password' => [
        'title' => 'Request Password Reset',
        'label' => '¿Olvidaste tu contraseña?',
        'label_help' => 'Ingresa la dirección de correo electrónico de tu cuenta para recibir instrucciones sobre cómo restablecer tu contraseña.',
        'button' => 'Send Email',
        'required' => [
            'email' => 'A valid email address must be provided to continue.',
        ],
    ],

    'reset_password' => [
        'title' => 'Reset Password',
        'button' => 'Reset Password',
        'new_password' => 'New Password',
        'confirm_new_password' => 'Confirm New Password',
        'requirement' => [
            'password' => 'Passwords must be at least 8 characters in length.',
        ],
        'required' => [
            'password' => 'A new password is required.',
            'password_confirmation' => 'Your new password does not match.',
        ],
        'validation' => [
            'password' => 'Your new password should be at least 8 characters in length.',
            'password_confirmation' => 'Your new password does not match.',
        ],
    ],

    'checkpoint' => [
        'title' => 'Device Checkpoint',
        'recovery_code' => 'Recovery Code',
        'recovery_code_description' => 'Enter one of the recovery codes generated when you setup 2-Factor authentication on this account in order to continue.',
        'authentication_code' => 'Authentication Code',
        'authentication_code_description' => 'Enter the two-factor token generated by your device.',
        'button' => 'Continue',
        'lost_device' => "I've Lost My Device",
        'have_device' => 'I Have My Device',
    ],

    'two_factor' => [
        'label' => 'Token de 2 Factores',
        'label_help' => 'Esta cuenta requiere un segundo nivel de autenticación para continuar. Por favor, ingresa el código generado por tu dispositivo para completar este inicio de sesión.',
        'checkpoint_failed' => 'El token de autenticación de dos factores no era válido.',
    ],

    'throttle' => 'Demasiados intentos de inicio de sesión. Por favor, inténtalo de nuevo en :seconds segundos.',
    'password_requirements' => 'La contraseña debe tener al menos 8 caracteres de longitud y debe ser única para este sitio.',
    '2fa_must_be_enabled' => 'El administrador ha requerido que la Autenticación de 2 Factores esté habilitada para tu cuenta para poder usar el Panel.',
];
