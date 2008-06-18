<?php
// $Id: admin.php,v 1.18 2004/07/26 17:51:25 hthouzard Exp $
//%%%%%%	Admin Module Name  Articles 	%%%%%
define("_AM_DBUPDATED","Базата е обновена успешно!");
define("_AM_CONFIG","Конфигуриране на новините");
define("_AM_AUTOARTICLES","Автоматизирани статии");
define("_AM_STORYID","ID на новина");
define("_AM_TITLE","Заглавие");
define("_AM_TOPIC","Тема");
define("_AM_POSTER","Автор");
define("_AM_PROGRAMMED","Програмирана дата/време");
define("_AM_ACTION","Действие");
define("_AM_EDIT","Редактира");
define("_AM_DELETE","Изтрива");
define("_AM_LAST10ARTS","Последните %d статии");
define("_AM_PUBLISHED","Публикувана"); // Published Date
define("_AM_GO","Напред!");
define("_AM_EDITARTICLE","Редактира статията");
define("_AM_POSTNEWARTICLE","Публикувай новина");
define("_AM_ARTPUBLISHED","Вашата статия е публикувана!");
define("_AM_HELLO","Здравей %s,");
define("_AM_YOURARTPUB","Статията Ви е публикувана на сайта ни.");
define("_AM_TITLEC","Заглавие: ");
define("_AM_URLC","URL: ");
define("_AM_PUBLISHEDC","Публикувана: ");
define("_AM_RUSUREDEL","Сигурен ли сте, че искате да изтриете тази статия с коментарите и?");
define("_AM_YES","ДА");
define("_AM_NO","НЕ");
define("_AM_INTROTEXT","Уводен текст");
define("_AM_EXTEXT","Цял текст");
define("_AM_ALLOWEDHTML","Разрешава HTML:");
define("_AM_DISAMILEY","Забранява усмивките");
define("_AM_DISHTML","Забранява HTML");
define("_AM_APPROVE","Одобрява");
define("_AM_MOVETOTOP","Премести новината в началото");
define("_AM_CHANGEDATETIME","Семни дата/време на публикацията");
define("_AM_NOWSETTIME","В момента е настроена за: %s"); // %s is datetime of publish
define("_AM_CURRENTTIME","В момента часа е: %s");  // %s is the current datetime
define("_AM_SETDATETIME","Настройва дата/време на публикацията");
define("_AM_MONTHC","Месец:");
define("_AM_DAYC","Ден:");
define("_AM_YEARC","Година:");
define("_AM_TIMEC","Време:");
define("_AM_PREVIEW","Преглед");
define("_AM_SAVE","Запазва");
define("_AM_PUBINHOME","Да публикува ли на главната страница?");
define("_AM_ADD","Добави");

//%%%%%%	Admin Module Name  Topics 	%%%%%

define("_AM_ADDMTOPIC","Добавя ГЛАВНА тема");
define("_AM_TOPICNAME","Име на темата");
// Warning, changed from 40 to 255 characters.
define("_AM_MAX40CHAR","(макс: 255 знака)");
define("_AM_TOPICIMG","Картинка за темата");
define("_AM_IMGNAEXLOC","име на картинката + разширението трябва да се намира в %s");
define("_AM_FEXAMPLE","пример: games.gif");
define("_AM_ADDSUBTOPIC","Добави ПОД-тема");
define("_AM_IN","в");
define("_AM_MODIFYTOPIC","Промени тема");
define("_AM_MODIFY","Промени");
define("_AM_PARENTTOPIC","Главна тема");
define("_AM_SAVECHANGE","Запазва промените");
define("_AM_DEL","Изтрива");
define("_AM_CANCEL","Отказва");
define("_AM_WAYSYWTDTTAL","ВНИМАНИЕ: Сигурен ли сте, че искате да изтриете тази тема, с всичките новини и коментарите към тях?");


// Added in Beta6
define("_AM_TOPICSMNGR","Управление на темите");
define("_AM_PEARTICLES","Публикува/Редактира статии");
define("_AM_NEWSUB","Нови добавени");
define("_AM_POSTED","Публикувани");
define("_AM_GENERALCONF","Обща конфигурация");

// Added in RC2
define("_AM_TOPICDISPLAY","Да показва ли картинка към темата?");
define("_AM_TOPICALIGN","Позиция");
define("_AM_RIGHT","Дясно");
define("_AM_LEFT","Ляво");

define("_AM_EXPARTS","Приключили статии");
define("_AM_EXPIRED","Приключили");
define("_AM_CHANGEEXPDATETIME","Смяна на дата/време за приклюване");
define("_AM_SETEXPDATETIME","Настройва дата/време за приключване");
define("_AM_NOWSETEXPTIME","Настроено е за: %s");

// Added in RC3
define("_AM_ERRORTOPICNAME", "Трябва да въведете име на темата!");
define("_AM_EMPTYNODELETE", "Няма нищо за триене!");

// Added 240304 (Mithrandir)
define('_AM_GROUPPERM', 'Права за Добава/Одобрява/Чете');
define('_AM_SELFILE','Изберете файл за качване');

// Added by Herv�
define('_AM_UPLOAD_DBERROR_SAVE','Грешка при закачването на файл към новината');
define('_AM_UPLOAD_ERROR','грешка при качването на файл');
define('_AM_UPLOAD_ATTACHFILE','Прикачен файл(ове)');
define('_AM_APPROVEFORM', 'Права за одобрение');
define('_AM_SUBMITFORM', 'Права за добавяне');
define('_AM_VIEWFORM', 'Права за четене');
define('_AM_APPROVEFORM_DESC', 'Изберете, кои могат да одобряват');
define('_AM_SUBMITFORM_DESC', 'Изберете, кои могат да добавят');
define('_AM_VIEWFORM_DESC', 'Изберете, кои могат да четат');
define('_AM_DELETE_SELFILES', 'Изтрива избраните файлове');
define('_AM_TOPIC_PICTURE', 'Качи картинка');
define('_AM_UPLOAD_WARNING', '<B>ВНИМАНИЕ, да не забравите да укажете права за запис за тази папка : %s</B>');

define('_AM_NEWS_UPGRADECOMPLETE', 'Обновяването приключи');
define('_AM_NEWS_UPDATEMODULE', 'Обновява структурата на модула и блоковете');
define('_AM_NEWS_UPGRADEFAILED', 'Обновяването пропадна');
define('_AM_NEWS_UPGRADE', 'Обновява');
define('_AM_ADD_TOPIC','Добавя тема');
define('_AM_ADD_TOPIC_ERROR','Грешка, темата вече съществува!');
define('_AM_ADD_TOPIC_ERROR1','ГРЕШКА: Неможете да изберете тази тема за главна!');
define('_AM_SUB_MENU','Да публикува ли темата като под меню');
define('_AM_SUB_MENU_YESNO','Под-меню?');
define('_AM_HITS', 'Посещения');
define('_AM_CREATED', 'Създадена');

define('_AM_TOPIC_DESCR', "Описание на темата");
define('_AM_USERS_LIST', "Списък с потребители");
define('_AM_PUBLISH_FRONTPAGE', "Да публикува ли на главната страница ?");
define('_AM_NEWS_UPGRADEFAILED1', 'Невъзможно създаване на table stories_files');
define('_AM_NEWS_UPGRADEFAILED2', "Невъзможна смяна на дължината на topic title");
define('_AM_NEWS_UPGRADEFAILED21', "Невъзможно добавяне на нови полета в таблицата с темите");
define('_AM_NEWS_UPGRADEFAILED3', 'Невъзможно създаване на таблицата stories_votedata');
define('_AM_NEWS_UPGRADEFAILED4', "Невъзможно създаване на полетата 'оценка' и 'гласувания' за таблицата 'новина'");
define('_AM_NEWS_UPGRADEFAILED0', "Опитайте се да отстраните проблема с phpMyadmin sql дефинициите за този модул");
define('_AM_NEWS_UPGR_ACCESS_ERROR',"ГРЕШКА, за да ползвате скрипта за обновяване трябва да сте Администратор");
define('_AM_NEWS_PRUNE_BEFORE',"Изчиства статии публикувани преди");
define('_AM_NEWS_PRUNE_EXPIREDONLY',"Изчиства статиите само които са изтекли");
define('_AM_NEWS_PRUNE_CONFIRM',"Внимание, Вие ще изтриете новините публикувани преди %s (това неможе да бъде възтановено). <br />Сигурен ли сте ?");
define('_AM_NEWS_PRUNE_TOPICS',"Ограничи до следните теми");
define('_AM_NEWS_PRUNENEWS', 'Изчиства новините');
define('_AM_NEWS_EXPORT_NEWS', 'Експортира новините');
define('_AM_NEWS_EXPORT_NOTHING', "Съжаляваме, но няма нищо за експорт, проверете вашите критерии");
define('_AM_NEWS_PRUNE_DELETED', '%d новини бяха изтрити');
define('_AM_NEWS_PERM_WARNING', '<h2>ВНИМАНИЕ, Вие имате 3 форми и съответно трябва три пъти да напрвите промените</h2>');
define('_AM_NEWS_EXPORT_BETWEEN', 'Експортира новини публикувани от');
define('_AM_NEWS_EXPORT_AND', ' до ');
define('_AM_NEWS_EXPORT_PRUNE_DSC', "Ако не сте избрали нищо, ще бъдат ползвани всички теми<br/> иначе ще бъдат ползвани само избраните теми");
define('_AM_NEWS_EXPORT_INCTOPICS', 'Да включва ли описание на темите ?');
define('_AM_NEWS_EXPORT_ERROR', 'Грешка при създаването на файла %s. Операцията е прекратена.');
define('_AM_NEWS_EXPORT_READY', "Вашият xml експортен файл е готов за сваляне. <br /><a href='%s'>Щракнете на тази връзка за да го свалите</a>.<br />Да не забравите <a href='%s'>да го изтриете</a> след като сте пшриключили с него.");
define('_AM_NEWS_RSS_URL', "URL за RSS синдикация");
define('_AM_NEWS_NEWSLETTER', "Вестник");
define('_AM_NEWS_NEWSLETTER_BETWEEN', 'Избира новините публикувани между');
define('_AM_NEWS_NEWSLETTER_READY', "Вашият вестник е готов за сваляне. <br /><a href='%s'>Щракнете на тази връзка за да го свалите</a>.<br />Не забравяйте <a href='%s'>да го изтриете</a> след като приключите.");
define('_AM_NEWS_DELETED_OK',"Файла е изтрит успешно");
define('_AM_NEWS_DELETED_PB',"Има проблем с изтриването на файла");
define('_AM_NEWS_STATS0','Статистика за темите');
define('_AM_NEWS_STATS','Статистики');
define('_AM_NEWS_STATS1','Уникални автори');
define('_AM_NEWS_STATS2','Общо');
define('_AM_NEWS_STATS3','Статитики за статиите');
define('_AM_NEWS_STATS4','Най-четените статии');
define('_AM_NEWS_STATS5','Най-малко четените статии');
define('_AM_NEWS_STATS6','Най-оценяваните статии');
define('_AM_NEWS_STATS7','Най-четените автори');
define('_AM_NEWS_STATS8','Най-оценяваните автори');
define('_AM_NEWS_STATS9','Големите дарителите');
define('_AM_NEWS_STATS10','Статистики за авторите');
define('_AM_NEWS_STATS11',"Брояч на статиите");
define('_AM_NEWS_HELP',"Помощ");
define("_AM_NEWS_MODULEADMIN","Админ. на модула");
define("_AM_NEWS_GENERALSET", "Настройки на модула" );
define('_AM_NEWS_GOTOMOD','Зареди модула');
define('_AM_NEWS_NOTHING',"Съжаляваме, но няма нищо за сваляне, проверете критериите си !");
define('_AM_NEWS_NOTHING_PRUNE',"Съжаляваме, но няма нищо за изчистване, проверете критериите си !");
define('_AM_NEWS_TOPIC_COLOR',"Цвят за темата");
define('_AM_NEWS_COLOR',"Цвят");
define('_AM_NEWS_REMOVE_BR',"Да конвертира html &lt;br&gt; тага за нова линия ?");
// Added in 1.3 RC2
define('_AM_NEWS_PLEASE_UPGRADE',"<a href='upgrade.php'><font color='#FF0000'>Моля, обновете модула !</font></a>");
?>