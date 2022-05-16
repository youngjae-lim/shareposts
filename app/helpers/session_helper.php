<?php

  session_start();

  // Flash message helper
  // Usage - flash('register_success', 'Your are now registered');
  // Display in View -  echo flash('register_success');
function flash($name = '', $message = '', $class = 'alert alert-success')
{
    if (!empty($name)) {
        if (!empty($message)) {
            if (!empty($_SESSION[$name])) {
                unset($_SESSION[$name]);
            }

            if (!empty($_SESSION[$name . '_class'])) {
                unset($_SESSION[$name . '_class']);
            }
            // Set new session values
            $_SESSION[$name] = $message;
            $_SESSION[$name . '_class'] = $class;
        } elseif (!empty($_SESSION[$name])) {
            echo '<div class="' . $_SESSION[$name . '_class'] . '" id="msg-flash">' . $_SESSION[$name] . '</div>';

            // Unset the existing session values
            unset($_SESSION[$name]);
            unset($_SESSION[$name . '_class']);
        }
    }
}

function isLoggedIn()
{
    if (isset($_SESSION['user_id'])) {
        return true;
    } else {
        return false;
    }
}
