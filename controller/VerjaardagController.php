<?php

require(ROOT . "model/VerjaardagModel.php");

function index()
{
	render("verjaardag/index", array(
		'mensen' => getAllMensen(),
		'maanden' => getAllMaanden()
	));
}
function delete($id)
{
	if (!deleteMens($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "verjaardag/index");
}
function create()
{
	render("verjaardag/create");
}
function createSave()
{
	if (!createMens()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "verjaardag/index");
}
function edit($id)
{
	render("verjaardag/edit", array(
		'mens' => getMens($id)
	));
}

function editSave()
{
	if (!editMens()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "verjaardag/index");
} 

