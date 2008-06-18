<?php
// $Id: modinfo.php,v 1.21 2004/09/01 17:48:07 hthouzard Exp $
// Module Info

// The name of this module
define('_MI_NEWS_NAME', 'Nyheder');

// A brief description of this module
define('_MI_NEWS_DESC', 'Opretter en Slashdot lignende nyhedssektion, hvor brugerne kan skrive nyheder og kommentarer.');

// Names of blocks for this module (Not all module has blocks)
define('_MI_NEWS_BNAME1', 'Nyhedskategorier');
define('_MI_NEWS_BNAME3', 'Dagens Historie');
define('_MI_NEWS_BNAME4', 'Top Nyheder');
define('_MI_NEWS_BNAME5', 'Seneste Nyt');
define('_MI_NEWS_BNAME6', 'Mindre nyheder');
define('_MI_NEWS_BNAME7', 'Naviger gennem kategorier');

// Sub menus in main menu block
define('_MI_NEWS_SMNAME1', 'Indsend nyheder');
define('_MI_NEWS_SMNAME2', 'Arkiv');

// Names of admin menu items
define('_MI_NEWS_ADMENU2', 'Emne h�ndtering');
define('_MI_NEWS_ADMENU3', 'Skriv/Redig�r nyheder');
define('_MI_NEWS_GROUPPERMS', 'Rettigheder');
// Added by Herv� for prune option
define('_MI_NEWS_PRUNENEWS', 'Fjern nyheder');
// Added by Herv�
define('_MI_NEWS_EXPORT', 'Eksporter nyheder');

// Title of config items
define('_MI_STORYHOME', 'V�lg antallet af nyheder, der skal vises p� top-siden');
define('_MI_NOTIFYSUBMIT', 'V�lg ja for at sende en orient�ring til webmasteren, n�r der kommer en ny artikel');
define('_MI_DISPLAYNAV', 'V�lg ja for at vise en navigationsboks �verst p� hver nyhedsside');
define('_MI_AUTOAPPROVE', 'Godkend automatisk nyhedsartikler uden administrators indblanding?');
define('_MI_ALLOWEDSUBMITGROUPS', 'Grupper der kan indsende nyheder');
define('_MI_ALLOWEDAPPROVEGROUPS', 'Grupper der kan godkende nyheder');
define('_MI_NEWSDISPLAY', 'Nyhedsvisning indstillinger');
define('_MI_NAMEDISPLAY', 'Forfatters navn');
define('_MI_COLUMNMODE', 'Kolonner');
define('_MI_STORYCOUNTADMIN', 'Antal nye artikler der vises i admin omr�det (dette vil ogs� begr�nse antallet af kategorier der vises i admin omr�det og det vil blive benyttet i statistikken) : ');
define('_MI_UPLOADFILESIZE', 'Maksimum filst�rrelse p� upload (KB) 1048576 = 1 Meg');
define('_MI_UPLOADGROUPS', 'Grupper der m� uploade');


// Description of each config items
define('_MI_STORYHOMEDSC', '');
define('_MI_NOTIFYSUBMITDSC', '');
define('_MI_DISPLAYNAVDSC', '');
define('_MI_AUTOAPPROVEDSC', '');
define('_MI_ALLOWEDSUBMITGROUPSDESC', 'De valgte grupper vil kunne indsende nyheder');
define('_MI_ALLOWEDAPPROVEGROUPSDESC', 'De valgte grupper vil kunne godkende nyheder');
define('_MI_NEWSDISPLAYDESC', 'Classic viser alle nyheder i dateorden efter udgivelsesdato. Nyheder pr. kategori vil grupperes efter kategori, den seneste historie vil blive vist i fuld l�ngde - �vrige vil kun vises med overskrift.');
define('_MI_ADISPLAYNAMEDSC', 'V�lg hvordan forfatters navn skal vises.');
define('_MI_COLUMNMODE_DESC', 'Du kan v�lge antallet af kolonner for visning af artikel-liste');
define('_MI_STORYCOUNTADMIN_DESC', '');
define('_MI_UPLOADFILESIZE_DESC', '');
define('_MI_UPLOADGROUPS_DESC', 'V�lg hvilke grupper der kan uploade til serveren');

// Name of config item values
define('_MI_NEWSCLASSIC', 'Classic');
define('_MI_NEWSBYTOPIC', 'Efter kategori');
define('_MI_DISPLAYNAME1', 'Brugernavn');
define('_MI_DISPLAYNAME2', 'Rigtige navn');
define('_MI_DISPLAYNAME3', 'Vis ikke forfatter');
define('_MI_UPLOAD_GROUP1', 'Indsender og godkender');
define('_MI_UPLOAD_GROUP2', 'Kun godkender');
define('_MI_UPLOAD_GROUP3', 'Upload ikke muligt');

// Text for notifications

define('_MI_NEWS_GLOBAL_NOTIFY', 'Global');
define('_MI_NEWS_GLOBAL_NOTIFYDSC', 'Indstillinger for globale nyhedsorient�ringer.');

define('_MI_NEWS_STORY_NOTIFY', 'Artikel');
define('_MI_NEWS_STORY_NOTIFYDSC', 'Orient�ringsmuligheder for den aktuelle historie.');

define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY', 'Nyt emne');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Orient�r mig n�r et nyt emne bliver oprettet.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Modtag orient�ring n�r et nyt emne oprettes.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-orient�ring : Nyt nyhedsemne');

define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY', 'Ny artikel er blevet indsendt');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP', 'Orient�r mig n�r en nyhedsartikel (hvilken som helst) bliver indsendt (og afventer godkendelse).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC', 'Modtag orient�ring n�r en nyhedsartikel (hvilken som helst) bliver indsendt (og afventer godkendelse).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-orient�ring : Ny nyhedsartikel er blevet indsendt');

define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY', 'Ny artikel');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP', 'Orient�r mig n�r en nyhedsartikel (hvilken som helst) bliver udgivet.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC', 'Modtag orient�ring n�r en nyhedsartikel (hvilken som helst) bliver udgivetReceive notification when any new story is posted.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-orient�ring : Ny nyhedsartikel');

define('_MI_NEWS_STORY_APPROVE_NOTIFY', 'Artikel er blevet godkendt');
define('_MI_NEWS_STORY_APPROVE_NOTIFYCAP', 'Orient�r mig, n�r denne artikel bliver godkendt.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYDSC', 'Modtag orient�ring n�r denne artikel bliver godkendt.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-orient�ring : Artiklen er blevet godkendt');

define('_MI_RESTRICTINDEX', 'Begr�ns kategorier p� index siden?');
define('_MI_RESTRICTINDEXDSC', 'Hvis dette s�ttes til ja, vil brugerne kun se nyheder p� indexsiden, som de har rettigheder til.');

define('_MI_NEWSBYTHISAUTHOR', 'Nyheder af samme forfatter');
define('_MI_NEWSBYTHISAUTHORDSC', 'Hvis dette s�ttes til ja, et link \'artikler af denne forfatter\' vil blive synlig');

define('_MI_NEWS_PREVNEX_LINK', 'Vis forrige og n�ste link ?');
define('_MI_NEWS_PREVNEX_LINK_DESC', 'N�r denne s�ttes til \'Ja\', to nye links bliver synlige i bunden af hver artikel. Det er de link der benyttes til at g� til den forrige og den n�ste artikel, i forhold til udgivelsesdatoen');
define('_MI_NEWS_SUMMARY_SHOW', 'Vis resum� liste?');
define('_MI_NEWS_SUMMARY_SHOW_DESC', 'N�r dette benyttes, vises et resum� med links til alle tidligere udgivet artikler i bunden af hver artikel');
define('_MI_NEWS_AUTHOR_EDIT', 'M� forfatter redigerer deres egne poster ?');
define('_MI_NEWS_AUTHOR_EDIT_DESC', 'Hvis dette s�ttes til, kan forfatteren selv redigerer deres indsendelser.');
define('_MI_NEWS_RATE_NEWS', 'Lad brugerne bed�mme nyheder ?');
define('_MI_NEWS_TOPICS_RSS', 'Sl� RSS feeds til for kategorier ?');
define('_MI_NEWS_TOPICS_RSS_DESC', 'Hvis dette s�ttes til \'Ja\', vil indholdet af kategorierne blive tilg�ngelige som RSS feeds');
define('_MI_NEWS_DATEFORMAT', 'Dato format');
define('_MI_NEWS_DATEFORMAT_DESC', 'Se venligst i php dokumentationen (www.php.net/manual/da/function.date.php\') for mere information om brug af datoformat. Bem�rk, hvis du ikke angiver noget vil default format benyttes.');
define('_MI_NEWS_META_DATA', 'Enable meta datas (keywords and description) to be entered ?');
define('_MI_NEWS_META_DATA_DESC', 'Hvis du s�tter dette til \'Ja\' vil godkenderne v�re i stand til at angive f�lgende meta data: s�geord og beskrivelse');
define('_MI_NEWS_BNAME8', 'Tilf�ldig nyhed');
define('_MI_NEWS_NEWSLETTER', 'Nyhedsbrev');
define('_MI_NEWS_STATS', 'Statistik');
define('_MI_NEWS_FORM_OPTIONS', 'Form mulighed');
define('_MI_NEWS_FORM_COMPACT', 'Kompakt');
define('_MI_NEWS_FORM_DHTML', 'DHTML');
define('_MI_NEWS_FORM_SPAW', 'Spaw Editor');
define('_MI_NEWS_FORM_HTMLAREA', 'HtmlArea Editor');
define('_MI_NEWS_FORM_FCK', 'FCK Editor');
define('_MI_NEWS_FORM_KOIVI', 'Koivi Editor');
define('_MI_NEWS_FORM_OPTIONS_DESC', 'V�lg hvilken editor der benyttes. Hvis du har en normal installation (bare benytter xoops egen editor, som installeres sammen med xoops), s� skal du bare v�lge DHTML og kompakt');
define('_MI_NEWS_KEYWORDS_HIGH', 'Benyt s�geords fremh�vning ?');
define('_MI_NEWS_KEYWORDS_HIGH_DESC', 'Hvis du bentter dette vil s�geord blive fremh�vet i artiklerne');
define('_MI_NEWS_HIGH_COLOR', 'Farve til fremh�vede s�geord ?');
define('_MI_NEWS_HIGH_COLOR_DES', 'Brug kun denne mulighed, hvis du har valgt Ja i forrige mulighed.');
define('_MI_NEWS_INFOTIPS', 'Tooltips l�ngde');
define('_MI_NEWS_INFOTIPS_DES', 'Hvis du benytter dette, link relateret til nyheder vil indeholde de f�rste (n) karakterer fra artiklen. Hvis du s�tter v�rdien til 0 vil infotips v�re tomt');
define('_MI_NEWS_SITE_NAVBAR', 'Brug Mozilla og Opera side navigations bar ?');
define('_MI_NEWS_SITE_NAVBAR_DESC', 'Hvis du s�tter denne til Ja, vil brugerne v�re i stand til at benytte side navigationsbaren til navigering i dine artikler.');
define('_MI_NEWS_TABS_SKIN', 'V�lg hvilket udseende der skal bruges i faner');
define('_MI_NEWS_TABS_SKIN_DESC', 'Dette udseende vil blive benyttet i alle blokke der bruger faner');
define('_MI_NEWS_SKIN_1', 'Bar Style');
define('_MI_NEWS_SKIN_2', 'Afsk�ret');
define('_MI_NEWS_SKIN_3', 'Classic');
define('_MI_NEWS_SKIN_4', 'Folder');
define('_MI_NEWS_SKIN_5', 'MacOs');
define('_MI_NEWS_SKIN_6', 'Plain');
define('_MI_NEWS_SKIN_7', 'Afrundet');
define('_MI_NEWS_SKIN_8', 'ZDnet style');

// Added in version 1.50
define('_MI_NEWS_BNAME9', 'Archives');
define('_MI_NEWS_FORM_TINYEDITOR', 'TinyEditor');
define('_MI_NEWS_FOOTNOTES', 'Vis links i printversionen af dine artikler ?');
define('_MI_NEWS_DUBLINCORE', 'Aktiver Dublin Core Metadata ?');
define('_MI_NEWS_DUBLINCORE_DSC', 'For mere information, <a hreh=\'http:
define("_MI_NEWS_BOOKMARK_ME","Vis \'Bookmark denne artikel p� disse sider\' block ?');
define('_MI_NEWS_BOOKMARK_ME', 'Display a \'Bookmark this article at these sites\' block ?');
define('_MI_NEWS_BOOKMARK_ME_DSC', 'Denne blok vil v�re synlig p� artiklens side.');
define('_MI_NEWS_FF_MICROFORMAT', 'Aktiver FireFox 2 Micro summaries ?');
define('_MI_NEWS_FF_MICROFORMAT_DSC', 'For mere information, se <a href=\'http:define("_MI_NEWS_WHOS_WHO","Hvem er hvem"');
define('_MI_NEWS_WHOS_WHO', 'Who\'s Who');
define('_MI_NEWS_METAGEN', 'Metagen');
define('_MI_NEWS_TOPICS_DIRECTORY', 'Kategori liste');
define('_MI_NEWS_ADVERTISEMENT', 'Annonce');
define('_MI_NEWS_ADV_DESCR', 'Indtast tekst eller javescript kode, som skal vises i dine artikler');
define('_MI_NEWS_MIME_TYPES', 'Indtast tilladte filtyper, som er tilladt. (adskil med ny linie)');
define('_MI_NEWS_ENHANCED_PAGENAV', 'Brug for�get side navigering ? ');
define('_MI_NEWS_ENHANCED_PAGENAV_DSC', 'Med denne mulighed kan du adskille dine sider med noget i denne stil:
[pagebreak:page title], links til siderne bliver erstattet af dropdown lister og du kan benytte [sumary] til at oprette en kort appetitv�kker af dine sider.');
?>