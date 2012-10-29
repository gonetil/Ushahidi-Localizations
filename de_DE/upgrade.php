<?php defined('SYSPATH') OR die('No direct access allowed.');
// DO NOT EDIT
// This file is automatically generated from the matching PO file
// Updates should be made through Transifex
// I18n generated at: 2012-10-29 12:10+0000
// PO revision date:  2012-08-23 19:47+0000
$lang = array(
	'upgrade' => array(
		'between' => 'Ungültige Eingabe. Enweder 1 für Ja oder 0 für Nein.',
	) ,
	'upgrade_automatic' => 'Automatisches Update',
	'upgrade_available' => 'Verfügbare Updates',
	'upgrade_continue_btn_text' => 'Fortfahren',
	'upgrade_db_btn_text' => 'Aktualisieren',
	'upgrade_db_text_1' => 'So, die Datenbank wird jetzt aktualisiert von Version',
	'upgrade_db_text_2' => 'auf die neueste Datenbank Version',
	'upgrade_db_text_3' => 'Klicke auf den Update Button und relax während ich das Wunder vollbringe.',
	'upgrade_db_text_4' => 'Wen ich das Backup machen soll, musst Du auf den Button klicken und ich werde mein Bestes geben :-).',
	'upgrade_db_text_5' => 'Backup machen vor dem Update? (<strong style="color:#FF0000;">Sehr zu empfehlen!!</strong>)',
	'upgrade_db_title' => 'Ushahidi Datenbank Aktualisierung',
	'upgrade_db_info' => 'Ushahidi wurde aktualisiert! Bevor Du weitermachen kannst, musst Du die Datenbank auf die neueste Version aktualisieren (%s).',
	'upgrade_db_up_to_date' => 'Deine Datenbankversion ist aktuell.',
	'upgrade_failed' => 'Aktualisierung fehlgeschlagen',
	'upgrade_manual' => 'Manuelles Update',
	'upgrade_status' => 'Ushahidi Aktualisierungsstatus',
	'upgrade_text_1' => 'Untenstehend ist erklärt, wie Du Deine Ushahidi-Instanz manuell aktualisieren kannst',
	'upgrade_text_2' => '<dl><dt><strong>Herunterladen</strong></dt>',
	'upgrade_text_3' => '<dd>- Lade die letzte Ushahidi Version herunter von',
	'upgrade_text_4' => '<dt><strong>Backup</strong></dt><dd>- .htaccess, ./applications/config/config.php, ./applications/config/database.php and ./applications/config/auth.php files. </dd><dd>- Nur für den Fall dass etwas schief gehen könnte, erstelle bitte vorher ein Backup Deiner kompletten Ushahidi Installation</dd><dt><strong>Kopiere Dateien</strong></dt><dd>- Entpacke die heruntergeladene ZIP Datei</dd><dd>- Abhängig vom verwendeten Betriebssystem auf dem Server, kannst Du Dein bevorzugtest Tool (z.B. Telnet, FTP, SSH) zum Einloggen auf dem Server verwenden und alle alten Dateien mit neuen ersetzen.</dd><dt><strong>Aktualisiere Datenbank</strong></dt><dd>- Bestimme zuerst die Version des Datenbank Schemas über den <strong>db_version</strong> Wert in der Einstellungstablle oder schaue nach der Ushahidi Aktualisierunginfo ganz oben auf dieser Seite </dd><dd>- Wenn Du bei Version 25 bist, musst schrittweise upgraden, also von 25-26, 26-27, 27-28 und so weiter bis zur letzten SQL Datei in Deinem<strong>/sql</strong> Verzeichnis.</dd><dd>- Mit Deinem Datenbank Programm aktualisierst Du die Datenbank, indem Du den zugehörigen upgradex-x.sql Befehl in der Datei ausführst.</dd></dl>',
	'upgrade_tables' => '<strong>Schritt 3:</strong> Schau in den <strong>sql</strong> Ordner. Führe das Upgrade manuell durch<xx>-<xx>.sql Datei, ausgehend von der derzeitigen Datenbankversion Deiner Installation bis zur finalen sql Upgradedatei.',
	'upgrade_text_5' => 'Für ein automatisches Update, klicke bitte auf die Schaltfläche unten.',
	'upgrade_text_6' => 'Für ein automatisches Upgrade, klicke bitte auf den unten stehenden Knopf.',
	'upgrade_title_text' => 'Du verwendest derzeit Ushahidi v%s mit der Datenbank Version %d, welches auf %s läuft.',
	'upgrading' => 'Updating...',
	'upgrade_ftp_text' => 'Um mit dem einfachen Upgrade weiterzumachen, werden die folgenden Informationen für den FTP Server benötigt, auf dem die Website gehostet ist.',
	'upgrade_ftp_hostname' => 'FTP Hostname: <span>Example: "localhost"</span>',
	'upgrade_ftp_password' => 'FTP Passwort:',
	'upgrade_ftp_username' => 'FTP Benutzername:',
	'upgrade_status_info' => 'Du verwendest die neueste Version von Ushahidi.',
	'upgrade_status_info_2' => 'Du brauchst nicht zu aktualisieren.',
	'upgrade_db_version' => 'Datenbankversion: %d',
	'upgrade_warning_software_version' => 'Achtung: Die Software Version in der Datei version.php und in der Datenbank stimmen nicht überein.',
	'upgrade_warning_db_version' => 'Achtung: Die Software Version in der Datei version.php und in der Datenbank stimmen nicht überein.',
	'upgrade_database' => 'Datenbank:',
	'ushahidi_release_version' => 'Ushahidi %s',
	'beta' => 'BETA!',
	'download' => 'Herunterladen der neuesten Version von Ushahidi...',
	'log_file' => 'Log Datei',
	'successfully_downloaded' => 'Erfolgreich heruntergeladen. Entpacke...',
	'failed_downloading' => 'Fehler beim Herunterladen.',
	'successfully_unpacked' => 'Erfolgreich entpackt. Kopiere Dateien..',
	'failed_unpacking' => 'Fehler beim Entpacken.',
	'successfully_copied' => 'Erfolgreich kopiert. Upgrae Datenbank...',
	'failed_copying' => 'Fehler beim Kopieren der Dateien.',
	'backup_success' => 'Datenbankbackup und -upgrade erfolgreich.',
	'backup_failed' => 'Fehler beim Backup der Datenbank.',
	'dbupgrade_success' => 'Datenbank Upgrade erfolgreich.',
	'deleting_files' => 'Löschen heruntergeladener Dateien...',
	'upgrade_success' => 'UPGRADE ERFOLGREICH.  Zeige die <a href="%s" target="_blank">Log Datei</a> an',
);
