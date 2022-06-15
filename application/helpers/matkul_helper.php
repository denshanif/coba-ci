<?php

function berhasil($msg)
{
	return '<div class="alert alert-success" role="alert">'.$msg.'</div>';
}

function gagal($msg)
{
	return '<div class="alert alert-danger" role="alert">'.$msg.'</div>';
}