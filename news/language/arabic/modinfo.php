<?php
// $Id: modinfo.php,v 1.21 2004/09/01 17:48:07 hthouzard Exp $
// Module Info

// The name of this module
define('_MI_NEWS_NAME','�������');

// A brief description of this module
define('_MI_NEWS_DESC',"��� ��� ��� ������� ����� ������ ����� ����� ������ ����� �� �����");

// Names of blocks for this module (Not all module has blocks)
define('_MI_NEWS_BNAME1','����� �������');
define('_MI_NEWS_BNAME3','����� �������');
define('_MI_NEWS_BNAME4','��� �������');
define('_MI_NEWS_BNAME5','����� �����');
define('_MI_NEWS_BNAME6','����� ��� �����');
define('_MI_NEWS_BNAME7','���� �������');

// Sub menus in main menu block
define('_MI_NEWS_SMNAME1','��� ����');
define('_MI_NEWS_SMNAME2','�������');

// Names of admin menu items
define('_MI_NEWS_ADMENU2', '����� �������');
define('_MI_NEWS_ADMENU3', '����� � ����� �������');
define('_MI_NEWS_GROUPPERMS', '���������');
// Added by Herv� for prune option
define('_MI_NEWS_PRUNENEWS', '����� �������');
// Added by Herv�
define('_MI_NEWS_EXPORT', '����� �������');

// Title of config items
define('_MI_STORYHOME', '��� ��� ������� �� ������ ��������');
define('_MI_NOTIFYSUBMIT', '���� ��� ������ ������ ��� ����� ��� ����');
define('_MI_DISPLAYNAV', '���� �� ��� ���� ��� ���� ������ ������ ��� �������');
define('_MI_AUTOAPPROVE','��� ������� �������� ��� ������ ������ �');
define("_MI_ALLOWEDSUBMITGROUPS", "�������� ���� ������ ����� �������");
define("_MI_ALLOWEDAPPROVEGROUPS", "�������� ���� ������ ����� ����� ��� �������");
define("_MI_NEWSDISPLAY", "���� �������");
define("_MI_NAMEDISPLAY","��� ������");
define("_MI_COLUMNMODE","�������");
define("_MI_STORYCOUNTADMIN","��� ������� ���� ���� �� ���� ������ : ");
define('_MI_UPLOADFILESIZE', '���� ������ ���� ����� ������ 1048576 = 1 ����');
define("_MI_UPLOADGROUPS","�������� ���� ������ ����� ��������");


// Description of each config items
define('_MI_STORYHOMEDSC', '');
define('_MI_NOTIFYSUBMITDSC', '');
define('_MI_DISPLAYNAVDSC', '');
define('_MI_AUTOAPPROVEDSC', '');
define("_MI_ALLOWEDSUBMITGROUPSDESC", "�������� ������� ������ ����� �������");
define("_MI_ALLOWEDAPPROVEGROUPSDESC", "�������� ������� ������ ��� ������� �������");
define("_MI_NEWSDISPLAYDESC", "������� ���������� ���� ��� ������� ���� ������ ��� ��� ����� ����� . ����� ��� ������� �� ��� ��� ��� ����� �� ��� �������� ������ �� �� ���");
define('_MI_ADISPLAYNAMEDSC', '���� ����� ��� ���� �����');
define("_MI_COLUMNMODE_DESC","����� ������ ��� ������� ���� ����� �������");
define("_MI_STORYCOUNTADMIN_DESC","");
define("_MI_UPLOADFILESIZE_DESC","");
define("_MI_UPLOADGROUPS_DESC","������ �������� ���� ������ ����� ���");

// Name of config item values
define("_MI_NEWSCLASSIC", "����������");
define("_MI_NEWSBYTOPIC", "��� �������");
define("_MI_DISPLAYNAME1", "��� ��������");
define("_MI_DISPLAYNAME2", "����� �������");
define("_MI_DISPLAYNAME3", "��� ��� ������");
define("_MI_UPLOAD_GROUP1","������ �������");
define("_MI_UPLOAD_GROUP2","��� ������");
define("_MI_UPLOAD_GROUP3","����� ������� �������");

// Text for notifications

define('_MI_NEWS_GLOBAL_NOTIFY', '�����');
define('_MI_NEWS_GLOBAL_NOTIFYDSC', '������ ������� ������');

define('_MI_NEWS_STORY_NOTIFY', '�������');
define('_MI_NEWS_STORY_NOTIFYDSC', '��������� ������� �� �������');

define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY', '��� ����');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP', '������ �� ����� ��� ����');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC', '������� ����� ��� ��� ��� ����');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} ����� ������ : ��� ����');

define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY', '��� ����');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP', '������ ��� ����� ��� ����� ����� �����');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC', '������� ����� �� ��� ����� ��� ����� �����.');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} ����� ������ : ��� ����� �����');

define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY', '��� ����');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP', '������ ��� ��� �� ���');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC', '������� ����� ��� ��� �� ��� ����');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} ����� ������: ��� ����');

define('_MI_NEWS_STORY_APPROVE_NOTIFY', '����� ��� �����');
define('_MI_NEWS_STORY_APPROVE_NOTIFYCAP', '������ ��� ����� ����� ��� �����');
define('_MI_NEWS_STORY_APPROVE_NOTIFYDSC', '������� ����� ��� ����� ����� ��� �����');
define('_MI_NEWS_STORY_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} ����� ������: �� ����� ����� ��� �����');

define('_MI_RESTRICTINDEX', '����� ����� �� ������ �������� �');
define('_MI_RESTRICTINDEXDSC', '��� ����� ��� ���� ���� ��� ����� ����� ������� ��� ��������� ���� ������ ���������');

define('_MI_NEWSBYTHISAUTHOR', '����� ���� ���� ������');
define('_MI_NEWSBYTHISAUTHORDSC', '��� ����� ���, ����� ���� \'������ ���� ��������\' �����');

define('_MI_NEWS_PREVNEX_LINK','����� ���� ����� ������ ������ ������ �');
define('_MI_NEWS_PREVNEX_LINK_DESC','�� ���� ������ \'���\', ���� ���� ������ ������ �� ���� �����. ��� ������� ������� �������� ��� ����� ������ �� ������ ��� ����� �����');
define('_MI_NEWS_SUMMARY_SHOW','��� ������� �');
define('_MI_NEWS_SUMMARY_SHOW_DESC',' ����� ��� ������� ������� �������� ����� �� ���� �����');
define('_MI_NEWS_AUTHOR_EDIT','����� ������� �� ����� ��������� �');
define('_MI_NEWS_AUTHOR_EDIT_DESC','������ ������ ������� ������ ���������');
define('_MI_NEWS_RATE_NEWS','����� ������� �� ����� �������');
define('_MI_NEWS_TOPICS_RSS','����� ����� ������� RSS ��� ��� �');
define('_MI_NEWS_TOPICS_RSS_DESC',"�� ���� ������ '���' ���� ���� ������� ������� ����� ����� �� ������� ������ �� ���� ����� RSS");
define('_MI_NEWS_DATEFORMAT', "����� �������");
define('_MI_NEWS_DATEFORMAT_DESC',"������ ������ ��� ���� (http://fr.php.net/manual/en/function.date.php) ������ �� ��������� �� ����� ������ ����� �������. �����ɡ �� ���� ��� ����� �� ����� ���� ��� ������� ������� ���������");
define('_MI_NEWS_META_DATA', "����� �������� �������� ����� (������� ������ �������) ���� ������ ���� ������ �����  �");
define('_MI_NEWS_META_DATA_DESC', "�� ���� ������ '���' ���� ����� �� ���� �������� �� ����� ������ ������ ����� : ������� ��������� � �����");
define('_MI_NEWS_BNAME8','����� �������');
define('_MI_NEWS_NEWSLETTER','������');
define('_MI_NEWS_STATS','����������');
define("_MI_NEWS_FORM_OPTIONS","������ �������");
define("_MI_NEWS_FORM_COMPACT","������");
define("_MI_NEWS_FORM_DHTML","DHTML");
define("_MI_NEWS_FORM_SPAW","Spaw ����");
define("_MI_NEWS_FORM_HTMLAREA","HtmlArea ����");
define("_MI_NEWS_FORM_FCK","FCK ����");
define("_MI_NEWS_FORM_KOIVI","Koivi ����");
define("_MI_NEWS_FORM_OPTIONS_DESC","���� ���� ������ ��� ��� ��������. �� ���� �� ����� ���� ( ����� ��� �� ��� ������ �� ������ ���� ������ ��� ��� ������ ����� ������� �������� ���������� DHTML � ������ ).");
define("_MI_NEWS_KEYWORDS_HIGH","����� ������� ��������� �");
define("_MI_NEWS_KEYWORDS_HIGH_DESC","���� ����� ������� ��������� ���� ������� ���� �����");
define("_MI_NEWS_HIGH_COLOR","��� ������� (�� ��� �� ������ ����� �������)�");
define("_MI_NEWS_HIGH_COLOR_DES","������ ��� ������ ��� �� ���� ������ ��� �� ������ ������");
define("_MI_NEWS_INFOTIPS","��� ����� ��������");
define("_MI_NEWS_INFOTIPS_DES","�� ����������� ��� �����ɡ ��� ���� ������� �������� ��� ���� ������ ������ �� �����. �� ���� ��� 0 ��� ����� �������� ��� ���� ������");
define("_MI_NEWS_SITE_NAVBAR","������ ���� ������ ����� ������ ������ �����ǿ");
define("_MI_NEWS_SITE_NAVBAR_DESC","�� ���� ����� ��� ������ ��� ���� ����� �������� ������� ���� ���� ������� ������ ������� �� �����.");
define("_MI_NEWS_TABS_SKIN","���� ����� �������");
define("_MI_NEWS_TABS_SKIN_DESC","��� ������� ��� ������ �� ���� �������� ���� ��� �����");
define("_MI_NEWS_SKIN_1","��� ������");
define("_MI_NEWS_SKIN_2","����");
define("_MI_NEWS_SKIN_3","�������");
define("_MI_NEWS_SKIN_4","������");
define("_MI_NEWS_SKIN_5","MacOs");
define("_MI_NEWS_SKIN_6","����");
define("_MI_NEWS_SKIN_7","���� ������");
define("_MI_NEWS_SKIN_8","ZDnet ����� ����");

// Added in version 1.50
define('_MI_NEWS_BNAME9','�������');
define("_MI_NEWS_FORM_TINYEDITOR","���� TinyEditor");
define("_MI_NEWS_FOOTNOTES","��� ������� �� ���� ����� ����� �");
define("_MI_NEWS_DUBLINCORE","����� ���� ���� �");
define("_MI_NEWS_DUBLINCORE_DSC","������ �� ��������ʡ <a href='http://dublincore.org/'>�� ������ ��� ������</a>");
define("_MI_NEWS_BOOKMARK_ME","��� ���� ����� ����� ��� ������� ������� �");
define("_MI_NEWS_BOOKMARK_ME_DSC","��� ������ ��� ���� ���� �� ���� �����");
define("_MI_NEWS_FF_MICROFORMAT","����� ������ ����� ������� 2 �");
define("_MI_NEWS_FF_MICROFORMAT_DSC","������ �� ��������� �� ������ <a href='http://wiki.mozilla.org/Microsummaries' target='_blank'>��� ������</a>");
define("_MI_NEWS_WHOS_WHO","����� ������");
define("_MI_NEWS_METAGEN","������ ������ �����");
define("_MI_NEWS_TOPICS_DIRECTORY","���� �������");
define("_MI_NEWS_ADVERTISEMENT","�������");
define("_MI_NEWS_ADV_DESCR","���� �� �� ����� ���� ����� ���� �����");
define("_MI_NEWS_MIME_TYPES","���� �������� ������� ������ ������� (���� ����� ����)");
define("_MI_NEWS_ENHANCED_PAGENAV","������� ������ ������� ������� �");
define("_MI_NEWS_ENHANCED_PAGENAV_DSC","���� ������ ������ ��� ������� ������� : [pagebreak:����� ������], ������� ��� ������� ��� ������ ������ ������ � ����� ����� ������� [summary] ������ ������ ������� �������");

// Added in version 1.54
define('_MI_NEWS_CATEGORY_NOTIFY','�����');
define('_MI_NEWS_CATEGORY_NOTIFYDSC','������ ������� ���� ��� ��� ����� ������');

define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFY', '��� ���� ����');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYCAP', '������ ��� ����� �� ��� ���� �� ��� �����');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYDSC', '������� ������� ��� ����� ��� ���� �� ��� �����');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} ����� ������ : ��� ����');
?>