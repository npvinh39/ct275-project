<?php

function is_administrator($user = 'admin') {
	return (isset($_SESSION['user']) && ($_SESSION['user'] === $user));
}
