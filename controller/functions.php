<?php

function is_administrator($user = 'eWWtD(Iv9$Mw^CQXevjmCmwAAzTIS*t5ykV^wZ5brat5+V4M6b') {
	return (isset($_SESSION['user']) && ($_SESSION['user'] === $user));
}
