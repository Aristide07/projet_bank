<?php



if(isset($_POST) && !empty($_POST))
 {
    //Processuce d'insertion

	$req->bindParam(':mont_transaction', $_POST['montant_transaction']);
	$req->bindParam(':nbre_trans', $_POST['nbre_transaction']);
	$req->bindParam(':chgt_trans', $_POST['chgt_transaction']);
	$req->bindParam(':chgt_mt_trans', $_POST['chgt_montant']);
	$req->bindParam(':prod_mois', $_POST['produit_mensuel']);
	$req->bindParam(':mois_inact', $_POST['mois_inactivite']);
    $req->bindParam(':contact', $_POST['nbre_contact']);
    $req->bindParam(':solde', $_POST['solde_renouv']);
    $req->bindParam(':taux_util', $_POST['taux_utilisation']);
	$req->execute();

	echo "Enregistrement effectuer avec succès";

 }else {
 	echo ("champs obligatoire, veuillez reprendre");
 }
 ?>