<?php
// $Id: admin.php,v 1.18 2004/07/26 17:51:25 hthouzard Exp $
//%%%%%%	Admin Module Name  Articles 	%%%%%
define("_AM_DBUPDATED","Datenbank wurde erfolgreich aktualisiert!");
define("_AM_CONFIG","Artikelkonfiguration");
define("_AM_AUTOARTICLES","Automatisierte Artikel");
define("_AM_STORYID","Artikel-ID");
define("_AM_TITLE","Titel");
define("_AM_TOPIC","Thema");
define("_AM_POSTER","Autor");
define("_AM_PROGRAMMED","Zeitgesteuerte Ver�ffentlichung");
define("_AM_ACTION","Aktion");
define("_AM_EDIT","Bearbeiten");
define("_AM_DELETE","L�schen");
define("_AM_LAST10ARTS","Die letzten %d Artikel");
define("_AM_PUBLISHED","Ver�ffentlicht am"); // Published Date
define("_AM_GO","Los!");
define("_AM_EDITARTICLE","Bearbeite Artikel");
define("_AM_POSTNEWARTICLE","Neuen Artikel ver�ffentlichen");
define("_AM_ARTPUBLISHED","Dein Artikel wurde ver�ffentlicht!");
define("_AM_HELLO","Hallo %s,");
define("_AM_YOURARTPUB","Der von dir verfasste Artikel wurde ver�ffentlicht.");
define("_AM_TITLEC","Titel: ");
define("_AM_URLC","URL: ");
define("_AM_PUBLISHEDC","Ver�ffentlicht: ");
define("_AM_RUSUREDEL","Sind Sie sicher, dass Sie diesen Artikel und alle damit verbundenen Kommentare l�schen wollen?");
define("_AM_YES","Ja");
define("_AM_NO","Nein");
define("_AM_INTROTEXT","Einf�hrungstext");
define("_AM_EXTEXT","Erweiterter Text:");
define("_AM_ALLOWEDHTML","HTML-Tags erlauben:");
define("_AM_DISAMILEY","Smilies deaktivieren");
define("_AM_DISHTML","HTML deaktivieren");
define("_AM_APPROVE","Freigeben");
define("_AM_MOVETOTOP","Artikel nach oben verschieben");
define("_AM_CHANGEDATETIME","Datum/Uhrzeit der Ver�ffentlichung �ndern");
define("_AM_NOWSETTIME","Ver�ffentlichung ist eingestellt auf: %s"); // %s is datetime of publish
define("_AM_CURRENTTIME","Aktuelle Uhrzeit: %s");  // %s is the current datetime
define("_AM_SETDATETIME","<b>Datum/Uhrzeit der Ver�ffentlichung setzen:</b>");
define("_AM_MONTHC","Monat:");
define("_AM_DAYC","Tag:");
define("_AM_YEARC","Jahr:");
define("_AM_TIMEC","Uhrzeit:");
define("_AM_PREVIEW","Vorschau");
define("_AM_SAVE","Sichern");
define("_AM_PUBINHOME","Auf der Homepage anzeigen?");
define("_AM_ADD","Hinzuf�gen");

//%%%%%%	Admin Module Name  Topics 	%%%%%

define("_AM_ADDMTOPIC","Ein Hauptthema hinzuf�gen");
define("_AM_TOPICNAME","Thementitel");
// Warning, changed from 40 to 255 characters.
define("_AM_MAX40CHAR","(max. 255 Zeichen)");
define("_AM_TOPICIMG","Themenbild");
define("_AM_IMGNAEXLOC","Bildname + Dateiendung befinden sich in %s");
define("_AM_FEXAMPLE","z.B.: games.gif");
define("_AM_ADDSUBTOPIC","Ein Unterthema hinzuf�gen");
define("_AM_IN","in");
define("_AM_MODIFYTOPIC","Thema �ndern");
define("_AM_MODIFY","�ndern");
define("_AM_PARENTTOPIC","�bergeordnetes Thema");
define("_AM_SAVECHANGE","�nderungen sichern");
define("_AM_DEL","L�schen");
define("_AM_CANCEL","Abbrechen");
define("_AM_WAYSYWTDTTAL","WARNUNG: Sind Sie sicher, dass Sie dieses Thema und alle damit verbundenen Artikel und Kommentare l�schen wollen?");


// Added in Beta6
define("_AM_TOPICSMNGR","Themenmanager - Themenbereiche insgesamt ");
define("_AM_PEARTICLES","Artikel ver�ffentlichen / bearbeiten");
define("_AM_NEWSUB","Neuzug�nge");
define("_AM_POSTED","Ver�ffentlicht");
define("_AM_GENERALCONF","Modulkonfiguration");

// Added in RC2
define("_AM_TOPICDISPLAY","Themenbild anzeigen?");
define("_AM_TOPICALIGN","Position");
define("_AM_RIGHT","Rechts");
define("_AM_LEFT","Links");

define("_AM_EXPARTS","Abgelaufene Artikel");
define("_AM_EXPIRED","Abgelaufen");
define("_AM_CHANGEEXPDATETIME","Datum/Uhrzeit des Ablaufs �ndern");
define("_AM_SETEXPDATETIME","Datum/Uhrzeit des Ablaufs setzen: ");
define("_AM_NOWSETEXPTIME","Aktuell eingestellt auf: %s");

// Added in RC3
define("_AM_ERRORTOPICNAME","Sie m�ssen einen Themennamen angeben!");
define("_AM_EMPTYNODELETE","Nichts zu l�schen!");

// Added 240304 (Mithrandir)
define("_AM_GROUPPERM","Gruppenberechtigungen setzen");
define("_AM_SELFILE","Datei zum upload ausw�hlen");

// Added by Herv�
define("_AM_UPLOAD_DBERROR_SAVE","Fehler beim Anh�ngen der Datei zum Artikel");
define("_AM_UPLOAD_ERROR","Fehler beim Hochladen der Datei");
define("_AM_UPLOAD_ATTACHFILE","Angeh�ngte Datei(en)");
define("_AM_APPROVEFORM","Genehmigungs - berechtigungen");
define("_AM_SUBMITFORM","Schreib - berechtigungen");
define("_AM_VIEWFORM","Lese - berechtigungen");
define("_AM_APPROVEFORM_DESC","W�hlen, wer Artikel genehmigen darf");
define("_AM_SUBMITFORM_DESC","W�hlen, wer Artikel schreiben darf");
define("_AM_VIEWFORM_DESC","W�hlen, wer welche Themen sehen darf");
define("_AM_DELETE_SELFILES","L�sche ausgew�hlte Dateien");
define("_AM_TOPIC_PICTURE","Bild hochladen");
define("_AM_UPLOAD_WARNING","<B>Achtung, nicht vergessen die Schreibberechtigung f�r folgende Verzeichnisse einzurichten : %s</B>");

define("_AM_NEWS_UPGRADECOMPLETE","Upgrade abgeschlossen");
define("_AM_NEWS_UPDATEMODULE","Update Modul- templates und bl�cke");
define("_AM_NEWS_UPGRADEFAILED","Upgrade fehlgeschlagen");
define("_AM_NEWS_UPGRADE","Upgrade");
define("_AM_ADD_TOPIC","Ein Thema zuf�gen");
define("_AM_ADD_TOPIC_ERROR","Fehler, dieses Thema existiert schon!");
define("_AM_ADD_TOPIC_ERROR1","Fehler, dieses Thema kann nicht als �bergeordnetes Thema gew�hlt werden!");
define("_AM_SUB_MENU","Dieses Thema als Sub-Men� eintragen");
define("_AM_SUB_MENU_YESNO","Sub-Men�?");
define("_AM_HITS","Aufrufe");
define("_AM_CREATED","Erstellt");

define("_AM_TOPIC_DESCR","Themen Beschreibung");
define("_AM_USERS_LIST","Mitgliederliste");
define("_AM_PUBLISH_FRONTPAGE","Eintrag im Hauptmen�?");
define("_AM_NEWS_UPGRADEFAILED1","Konnte folgende Tabelle nicht erzeugen: stories_files");
define("_AM_NEWS_UPGRADEFAILED2","Konnte die Thementitell�nge (topic title's length) nicht �ndern");
define("_AM_NEWS_UPGRADEFAILED21","Konnte die neuen Felder in (topics table) nicht zuf�gen");
define("_AM_NEWS_UPGRADEFAILED3","Konnte folgende Tabelle nicht erzeugen: stories_votedata");
define("_AM_NEWS_UPGRADEFAILED4","Konnte die beiden Felder 'rating' and 'votes' in der Tabelle 'story' nicht zuf�gen");
define("_AM_NEWS_UPGRADEFAILED0","Bitte beachte die Warnmeldung(en). Versuche die Probleme mittels phpMyadmin und den sql Definitionen, die im 'sql' Ordner des news Moduls zu finden sind, zu beheben.");
define("_AM_NEWS_UPGR_ACCESS_ERROR","Fehler, es muss das upgrade script (mit Adminrechten f�r das Modul) ausgef�hrt werden.");
define("_AM_NEWS_PRUNE_BEFORE","Artikel aufr�umen, die ver�ffentlicht wurden vor:");
define("_AM_NEWS_PRUNE_EXPIREDONLY","Nur Artikel aufr�umen die abgelaufen sind.");
define("_AM_NEWS_PRUNE_CONFIRM","Warnung, alle Artikel (u. Kommentare zum Artikel) vor %s  <br />werden f�r immer gel�scht. Dies kann nicht r�ckg�ngig gemacht werden. <br />Es wurden %s Artikel f�r den Zeitraum gefunden.<br />Absolut sicher?");
define("_AM_NEWS_PRUNE_TOPICS","Ein oder mehrere Themenbereich(e) ausw�hlen");
define("_AM_NEWS_PRUNENEWS","Artikel aufr�umen");
define("_AM_NEWS_EXPORT_NEWS","Artikel exportieren");
define("_AM_NEWS_EXPORT_NOTHING","Es wurde kein Artikel zum exportieren gefunden. Bitte die Auswahl �berpr�fen.");
define("_AM_NEWS_PRUNE_DELETED","%d Artikel wurde(n) gel�scht");
define("_AM_NEWS_PERM_WARNING","<h2>Warnung, es gibt 3 Formulare mit jeweils eigenem 'abschicken' Knopf.</h2>");
define("_AM_NEWS_EXPORT_BETWEEN","Artikel exportieren zwischen");
define("_AM_NEWS_EXPORT_AND"," und ");
define("_AM_NEWS_EXPORT_PRUNE_DSC","Hier den / die Themenbereiche(e) ausw�hlen, auf die die Aktion angewendet wird.<br/>Wird kein Themengebiet gew�hlt, sind alle Themenbereiche automatisch gew�hlt.");
define("_AM_NEWS_EXPORT_INCTOPICS","Inklusive der Themenbeschreibung?");
define("_AM_NEWS_EXPORT_ERROR","Fehler beim erzeugen der Datei %s. Vorgang gestoppt.");
define("_AM_NEWS_EXPORT_READY","Die xml Exportdatei kann runter geladen werden. <br />Zum Runterladen, <a target='_blank' href='%s'>diesen link klicken</a>.<br />Nach Fertigstellung, nicht vergessen <a href='%s'>mit diesem link</a> zu l�schen.");
define("_AM_NEWS_RSS_URL","URL des RSS feed");
define("_AM_NEWS_NEWSLETTER","Newsletter");
define("_AM_NEWS_NEWSLETTER_BETWEEN","Artikel ausw�hlen die ver�ffentlicht wurden zwischen");
define("_AM_NEWS_NEWSLETTER_READY","Die Newsletterdatei kann runter geladen werden. <br />Zum Runterladen, <a target='_blank' href='%s'>diesen link klicken</a>.<br />Nach Fertigstellung, nicht vergessen <a href='%s'>mit diesem link</a> zu l�schen.");
define("_AM_NEWS_DELETED_OK","Datei erfolgreich gel�scht");
define("_AM_NEWS_DELETED_PB","Fehler, die Datei konnte nicht gel�scht werden.");
define("_AM_NEWS_STATS0","Themenstatistik");
define("_AM_NEWS_STATS","Statistiken");
define("_AM_NEWS_STATS1","Einzelne Autoren");
define("_AM_NEWS_STATS2","Gesamt");
define("_AM_NEWS_STATS3","Artikelstatistik");
define("_AM_NEWS_STATS4","Am h�ufigsten gelesene Artikel");
define("_AM_NEWS_STATS5","Am wenigsten gelesene Artikel");
define("_AM_NEWS_STATS6","Am besten bewertete Artikel");
define("_AM_NEWS_STATS7","Am h�ufigsten gelesene Autoren");
define("_AM_NEWS_STATS8","Am besten bewertete Autoren");
define("_AM_NEWS_STATS9","Haben am meisten geschrieben");
define("_AM_NEWS_STATS10","Autorenstatistik");
define("_AM_NEWS_STATS11","Anzahl der Artikel");
define("_AM_NEWS_HELP","Hilfe");
define("_AM_NEWS_MODULEADMIN","Modul- admin");
define("_AM_NEWS_GENERALSET","Modulkonfiguration");
define("_AM_NEWS_GOTOMOD","Zum Modul");
define("_AM_NEWS_NOTHING","Es wurde keine Datei zum runterladen gefunden. Bitte die Auswahl �berpr�fen.");
define("_AM_NEWS_NOTHING_PRUNE","Es wurde kein Artikel zum aufr�umen gefunden. Bitte die Auswahl �berpr�fen.");
define("_AM_NEWS_TOPIC_COLOR","Themenfarbe");
define("_AM_NEWS_COLOR","Farbe");
define("_AM_NEWS_REMOVE_BR","Den html tag &lt;br&gt; zu einer neuen Zeile konvertieren?");
// Added in 1.3 RC2
define("_AM_NEWS_PLEASE_UPGRADE","<a href='upgrade.php'><font color='#FF0000'>Bitte das Modul updaten!</font></a>");

// Added in verisn 1.50
define('_AM_NEWS_NEWSLETTER_HEADER', "Header");
define('_AM_NEWS_NEWSLETTER_FOOTER', "Footer");
define('_AM_NEWS_NEWSLETTER_HTML_TAGS', "Html Tags entfernen?");
define('_AM_NEWS_VERIFY_TABLES','Maintain tables');
define('_AM_NEWS_METAGEN',"Metagen");
define('_AM_NEWS_METAGEN_DESC',"Metagen ist ein System das Sie bei der Indexierung f�r Suchmaschinen unterst�tzt. <br />Bitte beachten Sie, wenn Sie selbst Keywords und Meta Daten eingeben, wird das System diese automatisch generieren.");
define('_AM_NEWS_BLACKLIST',"Blacklist");
define('_AM_NEWS_BLACKLIST_DESC',"Worte und Begriffe in dieser Liste werden nicht in Keywords und Mata Daten �bernommen");
define('_AM_NEWS_BLACKLIST_ADD',"Hinzuf�gen");
define('_AM_NEWS_BLACKLIST_ADD_DSC',"Begriff eintragen um zur Liste hinzuzuf�gen<br />(Jeder begriff in eine neue Zeile)");
define('_AM_NEWS_META_KEYWORDS_CNT',"Maximale Anzahl der Meta Keywords f�r das automatische genrieren ist erreicht.");
define('_AM_NEWS_META_KEYWORDS_ORDER',"Keywords Reihenfolge");
define('_AM_NEWS_META_KEYWORDS_INTEXT',"In der Reihenfolge erstellen, in der sie gelistet werden sollen.");
define('_AM_NEWS_META_KEYWORDS_FREQ1',"Reihenfolge der Wiederholung");
define('_AM_NEWS_META_KEYWORDS_FREQ2',"Zur�cksetzen der Reihenfolge");
?>
