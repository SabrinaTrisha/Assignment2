<?php
	include 'cart-add-electronics.php';
	include 'cart-add-mencloths.php';
	include 'cart-add-womancloths.php';

	if ($electronics=1 && $mencloths=1 && $womancloths=1) {
		header('location:cart-all.php');
	}

	elseif ($electronics=1 && $mencloths=0 && $womancloths=0) {
		header('location:cart-electronics.php');
	}

	elseif ($electronics=0 && $mencloths=1 && $womancloths=0) {
		header('location:cart-men.php');
	}

	elseif ($electronics=0 && $mencloths=0 && $womancloths=1) {
		header('location:cart-woman.php');
	}

	else{
		header('location:cart-empty.php');
	}
?>