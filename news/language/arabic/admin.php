<?php
// $Id: admin.php,v 1.18 2004/07/26 17:51:25 hthouzard Exp $
//%%%%%%	Admin Module Name  Articles 	%%%%%
define("_AM_DBUPDATED","�� ����� ����� ��������");
define("_AM_CONFIG","������ �������");
define("_AM_AUTOARTICLES","��� ������ �������");
define("_AM_STORYID","��� �����");
define("_AM_TITLE","�������");
define("_AM_TOPIC","�����");
define("_AM_POSTER","������");
define("_AM_PROGRAMMED","��� ������� ������");
define("_AM_ACTION","������");
define("_AM_EDIT","�����");
define("_AM_DELETE","���");
define("_AM_LAST10ARTS","��� %d ���");
define("_AM_PUBLISHED","����� �����"); // Published Date
define("_AM_GO","����");
define("_AM_EDITARTICLE","����� �����");
define("_AM_POSTNEWARTICLE","����� ��� ����");
define("_AM_ARTPUBLISHED","�� �������� �����");
define("_AM_HELLO","������ ����� %s,");
define("_AM_YOURARTPUB","����� ���� ����� �� ������ �� ���� �����");
define("_AM_TITLEC","�������: ");
define("_AM_URLC","������� (������): ");
define("_AM_PUBLISHEDC","���: ");
define("_AM_RUSUREDEL","�� ��� ���� �� ��� ���� ��� ��� ����� �� ���� �������� �");
define("_AM_YES","���");
define("_AM_NO","��");
define("_AM_INTROTEXT","����� �����");
define("_AM_EXTEXT","����� �����");
define("_AM_ALLOWEDHTML","���� Html:");
define("_AM_DISAMILEY","����� ������ ���������");
define("_AM_DISHTML","����� ��� Html");
define("_AM_APPROVE","������ �����");
define("_AM_MOVETOTOP","��� ��� ����� ��� ������");
define("_AM_CHANGEDATETIME","����� ����� ���� ��� �����");
define("_AM_NOWSETTIME","��� ����� ������: %s"); // %s is datetime of publish
define("_AM_CURRENTTIME","����� ������: %s");  // %s is the current datetime
define("_AM_SETDATETIME","����� ����� ���� �����");
define("_AM_MONTHC","���:");
define("_AM_DAYC","���:");
define("_AM_YEARC","���:");
define("_AM_TIMEC","�����:");
define("_AM_PREVIEW","������");
define("_AM_SAVE","���");
define("_AM_PUBINHOME","��� �� ������ �������");
define("_AM_ADD","���");

//%%%%%%	Admin Module Name  Topics 	%%%%%

define("_AM_ADDMTOPIC","��� ��� �����");
define("_AM_TOPICNAME","��� �����");
// Warning, changed from 40 to 255 characters.
define("_AM_MAX40CHAR","(���� ������: 255 ���)");
define("_AM_TOPICIMG","���� �����");
define("_AM_IMGNAEXLOC","������ ��� �� ���� �� ������ %s");
define("_AM_FEXAMPLE","����: software.gif");
define("_AM_ADDSUBTOPIC","��� ��� ����");
define("_AM_IN","��");
define("_AM_MODIFYTOPIC","����� �����");
define("_AM_MODIFY","�����");
define("_AM_PARENTTOPIC","����� �������");
define("_AM_SAVECHANGE","��� ���������");
define("_AM_DEL","���");
define("_AM_CANCEL","�����");
define("_AM_WAYSYWTDTTAL","�� ��� ����� �� ��� ���� ��� ����� �� ���� ������ � �������� �");


// Added in Beta6
define("_AM_TOPICSMNGR","����� �������");
define("_AM_PEARTICLES","����� ������ �������");
define("_AM_NEWSUB","����� ����� �����");
define("_AM_POSTED","������");
define("_AM_GENERALCONF","������� ����");

// Added in RC2
define("_AM_TOPICDISPLAY","��� ���� �����");
define("_AM_TOPICALIGN","�������");
define("_AM_RIGHT","����");
define("_AM_LEFT","����");

define("_AM_EXPARTS","��� ����� ��������");
define("_AM_EXPIRED","����� ��������");
define("_AM_CHANGEEXPDATETIME","����� ����� ������ ������ �����");
define("_AM_SETEXPDATETIME","���� ����� ������ ������ �����");
define("_AM_NOWSETEXPTIME","��� �� ������� �� : %s");

// Added in RC3
define("_AM_ERRORTOPICNAME", "��� ����� ����� �����");
define("_AM_EMPTYNODELETE", "�� ���� ��� ����");

// Added 240304 (Mithrandir)
define('_AM_GROUPPERM', '������� �����/��������/�����');
define('_AM_SELFILE','���� ���');

// Added by Herv�
define('_AM_UPLOAD_DBERROR_SAVE','��� ��� �� ����� ����� �����');
define('_AM_UPLOAD_ERROR','���� ��� �� ����� �����');
define('_AM_UPLOAD_ATTACHFILE','����� ������ :');
define('_AM_APPROVEFORM', '������ �����');
define('_AM_SUBMITFORM', '������ �������');
define('_AM_VIEWFORM', '������ ��������');
define('_AM_APPROVEFORM_DESC', '���� �� ������ ��� �����');
define('_AM_SUBMITFORM_DESC', '���� �� ������ ����� �����');
define('_AM_VIEWFORM_DESC', '���� �� ������ ������ �����');
define('_AM_DELETE_SELFILES', '��� ����� ������');
define('_AM_TOPIC_PICTURE', '����� ����');
define('_AM_UPLOAD_WARNING', '<B>�����: �� ���� ����� ������ ������� ������ ������  : %s</B>');

define('_AM_NEWS_UPGRADECOMPLETE', '��� �������');
define('_AM_NEWS_UPDATEMODULE', '����� ����� ������� ���������');
define('_AM_NEWS_UPGRADEFAILED', '���� �������');
define('_AM_NEWS_UPGRADE', '�����');
define('_AM_ADD_TOPIC','����� ���');
define('_AM_ADD_TOPIC_ERROR','���, ����� ����� ����!');
define('_AM_ADD_TOPIC_ERROR1','���: ������ ������ ��� ������� ������� �������!');
define('_AM_SUB_MENU','��� ����� ������ �����');
define('_AM_SUB_MENU_YESNO','����� ����� �');
define('_AM_HITS', '��������');
define('_AM_CREATED', '����� �������');

define('_AM_TOPIC_DESCR', "��� �����");
define('_AM_USERS_LIST', "����� ����������");
define('_AM_PUBLISH_FRONTPAGE', "��� �� ������ ��������");
define('_AM_NEWS_UPGRADEFAILED1', '������ ����� ������ stories_files');
define('_AM_NEWS_UPGRADEFAILED2', "������ ����� ��� ����� �������");
define('_AM_NEWS_UPGRADEFAILED21', "�� ���� ����� ������ ������� ������ topics ");
define('_AM_NEWS_UPGRADEFAILED3', '������ ����� ������ stories_votedata');
define('_AM_NEWS_UPGRADEFAILED4', "������ ����� ������� 'rating' � 'votes' �� ���� 'story' ");
define('_AM_NEWS_UPGRADEFAILED0', "������ ���� ������� ����� ����� ��� ����� �� ������ phpMyadmin ����� ��� ����� ��sql �� ���� 'sql' �� ������� ������");
define('_AM_NEWS_UPGR_ACCESS_ERROR',"���, �������� ���� �������, ��� �� ���� �����");
define('_AM_NEWS_PRUNE_BEFORE',"��� ������� ���� ���� ���");
define('_AM_NEWS_PRUNE_EXPIREDONLY',"��� ������� ���� ����� �������� ���");
define('_AM_NEWS_PRUNE_CONFIRM',"�����, ��� ����� ���� ������� ���� ���� ��� %s ���� ����� ,(�� ������ ������� �� ��� ����� �����). ����� ��� %s ���.<br />�� ��� �����  ?");
define('_AM_NEWS_PRUNE_TOPICS',"��� ������� �������");
define('_AM_NEWS_PRUNENEWS', '����� �������');
define('_AM_NEWS_EXPORT_NEWS', '����� �������');
define('_AM_NEWS_EXPORT_NOTHING', "���� ���� ������ ��� �������,");
define('_AM_NEWS_PRUNE_DELETED', '%d �� ����');
define('_AM_NEWS_PERM_WARNING', '<h2>�����, ���� 3 ����� ��� ����� �� , ���� �� ����� �� ���� ��� ���</h2>');
define('_AM_NEWS_EXPORT_BETWEEN', '��� ������� �������� ���');
define('_AM_NEWS_EXPORT_AND', ' � ');
define('_AM_NEWS_EXPORT_PRUNE_DSC', "��� �� ���� ���� ���� ������� ��� �� �������");
define('_AM_NEWS_EXPORT_INCTOPICS', '����� ���������?');
define('_AM_NEWS_EXPORT_ERROR', '��� ����� ������ ����� ����� %s. �� ��� �������.');
define('_AM_NEWS_EXPORT_READY', "��� ���XML ���� �������. <br /><a href='%s'>���� ��� �������</a>.<br />������ <a href='%s'>���� ��� ��������</a> .");
define('_AM_NEWS_RSS_URL', "���� �����RSS ");
define('_AM_NEWS_NEWSLETTER', "������");
define('_AM_NEWS_NEWSLETTER_BETWEEN', '���� ������� �������� ���');
define('_AM_NEWS_NEWSLETTER_READY', "������ ����� ������� . <br /><a href='%s'>���� ��� �������</a>.<br />������ <a href='%s'>����� ��� ��������</a> .");
define('_AM_NEWS_DELETED_OK',"�� ��� ����� �����");
define('_AM_NEWS_DELETED_PB',"���� ����� ����� ��� �����");
define('_AM_NEWS_STATS0','�������� �������');
define('_AM_NEWS_STATS','����������');
define('_AM_NEWS_STATS1','�������� ���� ����');
define('_AM_NEWS_STATS2','��������');
define('_AM_NEWS_STATS3','�������� �������');
define('_AM_NEWS_STATS4','������� ������ �����');
define('_AM_NEWS_STATS5','������� ����� �����');
define('_AM_NEWS_STATS6','������� ������ ������');
define('_AM_NEWS_STATS7','�������� ������ �����');
define('_AM_NEWS_STATS8','�������� ���� ����� ��� ���� �����');
define('_AM_NEWS_STATS9','���� ���������');
define('_AM_NEWS_STATS10','�������� ��������');
define('_AM_NEWS_STATS11',"��� �������");
define('_AM_NEWS_HELP',"������");
define("_AM_NEWS_MODULEADMIN","����� ��������");
define("_AM_NEWS_GENERALSET", "������� ��������" );
define('_AM_NEWS_GOTOMOD','���� ��� ��������');
define('_AM_NEWS_NOTHING',"���� , ���� ������ ��� ������� !");
define('_AM_NEWS_NOTHING_PRUNE',"���� , ���� ������ ����� ��������, !");
define('_AM_NEWS_TOPIC_COLOR',"��� �����");
define('_AM_NEWS_COLOR',"�����");
define('_AM_NEWS_REMOVE_BR',"��� ���� ������  &lt;br&gt; ��� ��� ���� ?");
// Added in 1.3 RC2
define('_AM_NEWS_PLEASE_UPGRADE',"<a href='upgrade.php'><font color='#FF0000'>������ ��� �������� !</font></a>");

// Added in verisn 1.50
define('_AM_NEWS_NEWSLETTER_HEADER', "��������");
define('_AM_NEWS_NEWSLETTER_FOOTER', "�������");
define('_AM_NEWS_NEWSLETTER_HTML_TAGS', "����� ���� HTML �");
define('_AM_NEWS_VERIFY_TABLES','����� ������� ');
define('_AM_NEWS_METAGEN',"������ ������ �����");
define('_AM_NEWS_METAGEN_DESC',"���� Metagen �� ���� ������ ��� ����� ���� ����� ����� �� ����� ������ ����� ��������.<br />��� �� ��� ������ ������� ��������� � ����� ���� ���� ������ �������� ��������.");
define('_AM_NEWS_BLACKLIST',"������� ��������");
define('_AM_NEWS_BLACKLIST_DESC',"������� �� ��� ������� ��� �� ������ �� ����� ������� ���������");
define('_AM_NEWS_BLACKLIST_ADD',"����� ");
define('_AM_NEWS_BLACKLIST_ADD_DSC',"���� ������� ������ ������� �������<br />(���� ����� �� �� ���)");
define('_AM_NEWS_META_KEYWORDS_CNT',"���� ��� ������� ��������� �� ���� ������� ������");
define('_AM_NEWS_META_KEYWORDS_ORDER',"����� ������� ���������");
define('_AM_NEWS_META_KEYWORDS_INTEXT',"����� ������� ��� ������� �� ����");
define('_AM_NEWS_META_KEYWORDS_FREQ1',"����� ����� �������");
define('_AM_NEWS_META_KEYWORDS_FREQ2',"��� ����� ����� �������");
?>