<?php
// Pandora - The Free Monitoring System
// This code is protected by GPL license.
// Este codigo esta protegido por la licencia GPL.
// Sancho Lerena <slerena@gmail.com>, 2003-2006
// Raul Mateos <raulofpandora@gmail.com>, 2004-2006
?>
<?php
if (comprueba_login() == 0){
	$id_user = $_SESSION["id_usuario"];
	if ( (give_acl($id_user, 0, "LM")==1) OR (give_acl($id_user, 0, "AW")==1 ) OR (give_acl($id_user, 0, "PM")==1) OR (give_acl($id_user, 0, "DM")==1) OR (give_acl($id_user, 0, "UM")==1 )){

?>

<div class="bg">
	<div class="imgl"><img src="images/upper-left-corner.gif" width="5" height="5" alt=""></div>
	<div class="tit"><?php echo $lang_label["godmode_header"] ?></div>
	<div class="imgr"><img src="images/upper-right-corner.gif" width="5" height="5" alt=""></div>
</div>
<div id="menug">
	<div id="god">
	
<?php 
	if ((give_acl($id_user, 0, "AW")==1)){
		if (isset($_GET["sec2"]) && ereg("modificar_agente",$_GET["sec2"])){
			echo '<div id="god1s"><ul class="mn"><li><a href="index.php?sec=gagente&amp;sec2=godmode/agentes/modificar_agente" class="mn">'.$lang_label["manage_agents"].'</a></li></ul></div>';
		}
		else echo '<div id="god1"><ul class="mn"><li><a href="index.php?sec=gagente&amp;sec2=godmode/agentes/modificar_agente" class="mn">'.$lang_label["manage_agents"].'</a></li></ul></div>';
		if (isset($_GET["sec"]) && $_GET["sec"] == "gagente"){
			if (isset($_GET["sec2"]) && ereg("manage_config",$_GET["sec2"])){
				echo "<div id='arrowgs'><ul class='mn'><li><a href='index.php?sec=gagente&amp;sec2=godmode/agentes/manage_config' class='mn'>".$lang_label["manage_config"]."</a></li></ul></div>";
			}
			else echo "<div id='arrowg'><ul class='mn'><li><a href='index.php?sec=gagente&amp;sec2=godmode/agentes/manage_config' class='mn'>".$lang_label["manage_config"]."</a></li></ul></div>";
			if (isset($_GET["sec2"]) && ereg("lista_grupos",$_GET["sec2"])){
				echo "<div id='arrowgs'><ul class='mn'><li><a href='index.php?sec=gagente&amp;sec2=godmode/grupos/lista_grupos' class='mn'>".$lang_label["manage_groups"]."</a></li></ul></div>";
			}
			else echo "<div id='arrowg'><ul class='mn'><li><a href='index.php?sec=gagente&amp;sec2=godmode/grupos/lista_grupos' class='mn'>".$lang_label["manage_groups"]."</a></li></ul></div>";
		}
	}
	if ((give_acl($id_user, 0, "LM")==1)){
		if (isset($_GET["sec2"]) && ereg("modificar_alerta",$_GET["sec2"])){
			echo '<div id="god2s"><ul class="mn"><li><a href="index.php?sec=galertas&amp;sec2=godmode/alertas/modificar_alerta" class="mn">'.$lang_label["manage_alerts"].'</a></li></ul></div>';
		}
		else echo '<div id="god2"><ul class="mn"><li><a href="index.php?sec=galertas&amp;sec2=godmode/alertas/modificar_alerta" class="mn">'.$lang_label["manage_alerts"].'</a></li></ul></div>';
	}
	if ((give_acl($id_user, 0, "UM")==1)){
		if (isset($_GET["sec2"]) && ereg("lista_usuarios",$_GET["sec2"])){
			echo '<div id="god3s"><ul class="mn"><li><a href="index.php?sec=gusuarios&amp;sec2=godmode/usuarios/lista_usuarios" class="mn">'.$lang_label["manage_users"].'</a></li></ul></div>';
		}
		else echo '<div id="god3"><ul class="mn"><li><a href="index.php?sec=gusuarios&amp;sec2=godmode/usuarios/lista_usuarios" class="mn">'.$lang_label["manage_users"].'</a></li></ul></div>';
	}
	if ( (give_acl($id_user, 0, "PM")==1)){
		if (isset($_GET["sec2"]) && ereg("lista_perfiles",$_GET["sec2"])){
			echo '<div id="god4s"><ul class="mn"><li><a href="index.php?sec=gperfiles&amp;sec2=godmode/perfiles/lista_perfiles" class="mn">'.$lang_label["manage_profiles"].'</a></li></ul></div>';
		}
		else echo '<div id="god4"><ul class="mn"><li><a href="index.php?sec=gperfiles&amp;sec2=godmode/perfiles/lista_perfiles" class="mn">'.$lang_label["manage_profiles"].'</a></li></ul></div>';
		if (isset($_GET["sec2"]) && ereg("modificar_server",$_GET["sec2"])){
			echo '<div id="god5s"><ul class="mn"><li><a href="index.php?sec=gservers&amp;sec2=godmode/servers/modificar_server" class="mn">'.$lang_label["manage_servers"].'</a></li></ul></div>';
        }
		else echo '<div id="god5"><ul class="mn"><li><a href="index.php?sec=gservers&amp;sec2=godmode/servers/modificar_server" class="mn">'.$lang_label["manage_servers"].'</a></li></ul></div>';
        if (isset($_GET["sec2"]) && ereg("admin_access_logs",$_GET["sec2"])){
			echo '<div id="god6s"><ul class="mn"><li><a href="index.php?sec=glog&amp;sec2=godmode/admin_access_logs" class="mn">'.$lang_label["system_audit"].'</a></li></ul></div>';
		}
		else echo '<div id="god6"><ul class="mn"><li><a href="index.php?sec=glog&amp;sec2=godmode/admin_access_logs" class="mn">'.$lang_label["system_audit"].'</a></li></ul></div>';
		if (isset($_GET["sec2"]) && ereg("setup$",$_GET["sec2"])){
			echo '<div id="god7s"><ul class="mn"><li><a href="index.php?sec=gsetup&amp;sec2=godmode/setup/setup" class="mn">'.$lang_label["setup_screen"].'</a></li></ul></div>';
		}
		else echo '<div id="god7"><ul class="mn"><li><a href="index.php?sec=gsetup&amp;sec2=godmode/setup/setup" class="mn">'.$lang_label["setup_screen"].'</a></li></ul></div>';
		
		if (isset($_GET["sec"]) && $_GET["sec"] == "gsetup"){
			if (isset($_GET["sec2"]) && ereg("links$",$_GET["sec2"])){
				echo "<div id='arrowgs'><ul class='mn'><li><a href='index.php?sec=gsetup&amp;sec2=godmode/setup/links' class='mn'>".$lang_label["setup_links"]."</a></li></ul></div>";
			}
			else echo "<div id='arrowg'><ul class='mn'><li><a href='index.php?sec=gsetup&amp;sec2=godmode/setup/links' class='mn'>".$lang_label["setup_links"]."</a></li></ul></div>";
		}
	}
	if ((give_acl($id_user, 0, "DM")==1)){
		if (isset($_GET["sec2"]) && ereg("db_main",$_GET["sec2"])){
			echo '<div id="god8s"><ul class="mn"><li><a href="index.php?sec=gdbman&amp;sec2=godmode/db/db_main" class="mn">'.$lang_label["db_maintenance"].'</a></li></ul></div>';
		}
		else echo '<div id="god8"><ul class="mn"><li><a href="index.php?sec=gdbman&amp;sec2=godmode/db/db_main" class="mn">'.$lang_label["db_maintenance"].'</a></li></ul></div>';
		if (isset($_GET["sec"]) && $_GET["sec"] == "gdbman"){
			if (isset($_GET["sec2"]) && ereg("db_info",$_GET["sec2"])){
				echo "<div id='arrowgs'><ul class='mn'><li><a href='index.php?sec=gdbman&amp;sec2=godmode/db/db_info' class='mn'>".$lang_label["db_info"]."</a></li></ul></div>";
			}
			else echo "<div id='arrowg'><ul class='mn'><li><a href='index.php?sec=gdbman&amp;sec2=godmode/db/db_info' class='mn'>".$lang_label["db_info"]."</a></li></ul></div>";
			if (isset($_GET["sec2"]) && ereg("db_purge",$_GET["sec2"])){
				echo "<div id='arrowgs'><ul class='mn'><li><a href='index.php?sec=gdbman&amp;sec2=godmode/db/db_purge' class='mn'>".$lang_label["db_purge"]."</a></li></ul></div>";
			}
			else echo "<div id='arrowg'><ul class='mn'><li><a href='index.php?sec=gdbman&amp;sec2=godmode/db/db_purge' class='mn'>".$lang_label["db_purge"]."</a></li></ul></div>";
			if (isset($_GET["sec2"]) && ereg("db_refine",$_GET["sec2"])){
				echo "<div id='arrowgs'><ul class='mn'><li><a href='index.php?sec=gdbman&amp;sec2=godmode/db/db_refine' class='mn'>".$lang_label["db_refine"]."</a></li></ul></div>";
			}
			else echo "<div id='arrowg'><ul class='mn'><li><a href='index.php?sec=gdbman&amp;sec2=godmode/db/db_refine' class='mn'>".$lang_label["db_refine"]."</a></li></ul></div>";
			if (isset($_GET["sec2"]) && ereg("db_audit",$_GET["sec2"])){
				echo "<div id='arrowgs'><ul class='mn'><li><a href='index.php?sec=gdbman&amp;sec2=godmode/db/db_audit' class='mn'>".$lang_label["db_audit"]."</a></li></ul></div>";
			}
			else echo "<div id='arrowg'><ul class='mn'><li><a href='index.php?sec=gdbman&amp;sec2=godmode/db/db_audit' class='mn'>".$lang_label["db_audit"]."</a></li></ul></div>";
			if (isset($_GET["sec2"]) && ereg("db_event",$_GET["sec2"])){
				echo "<div id='arrowgs'><ul class='mn'><li><a href='index.php?sec=gdbman&amp;sec2=godmode/db/db_event' class='mn'>".$lang_label["db_event"]."</a></li></ul></div>";
			}
			else echo "<div id='arrowg'><ul class='mn'><li><a href='index.php?sec=gdbman&amp;sec2=godmode/db/db_event' class='mn'>".$lang_label["db_event"]."</a></li></ul></div>";
		}
	}
?>
	</div>
</div>
<?php
	} // end verify access to this menu
}
?>