<?php
/* $Id$ */

$charset = 'iso-8859-1';
$left_font_family = 'verdana, helvetica, arial, geneva, sans-serif';
$right_font_family = 'helvetica, arial, geneva, sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = ',';
$byteUnits = array('bytes', 'kB', 'MB', 'GB');

$day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';


$strAccessDenied = '�tkomst nekad';
$strAction = 'Handling';
$strAddDeleteColumn = 'L�gg till/ta bort f�ltkolumner';
$strAddDeleteRow = 'L�gg till/ta bort kriteriumrader';
$strAddNewField = 'L�gg till nytt f�lt';
$strAddPriv = 'L�gg till ett nytt privilegie';
$strAddPrivMessage = 'Du har lagt till ett nytt privilegie.';
$strAddSearchConditions = 'L�gg till s�kkriterier (uttryck i "where"-sats):';
$strAddUser = 'L�gg till ny anv�ndare';
$strAddUserMessage = 'Du har lagt till en ny anv�ndare.';
$strAffectedRows = 'P�verkade rader:';
$strAfter = 'Efter';
$strAll = 'Alla';
$strAlterOrderBy = 'Sortera om tabellen efter';
$strAnalyzeTable = 'Analysera tabell';
$strAnd = 'Och';
$strAny = 'Any'; //to translate
$strAnyColumn = 'Any Column'; //to translate
$strAnyDatabase = 'Any database'; //to translate
$strAnyHost = 'Any host'; //to translate
$strAnyTable = 'Any table'; //to translate
$strAnyUser = 'Any user'; //to translate
$strAscending = 'Stigande';
$strAtBeginningOfTable = 'I b�rjan av tabellen';
$strAtEndOfTable = 'I slutet av tabellen';
$strAttr = 'Attribut';

$strBack = 'Bak�t';
$strBinary = 'Bin�r';
$strBinaryDoNotEdit = 'Bin�r - �ndra inte';
$strBookmarkLabel = 'Etikett';
$strBookmarkQuery = 'Bokm�rkt SQL-fr�ga';
$strBookmarkThis = 'Skapa bokm�rke f�r den h�r SQL-fr�gan';
$strBookmarkView = 'View only'; //to translate
$strBrowse = 'Visa';
$strBzip = '"bzippad"';

$strCantLoadMySQL = 'kan inte ladda MySQL-till�gg,<br />var god och kontrollera PHP-konfigurationen.';
$strCarriage = 'Vagnretur: \\r';
$strChange = '�ndra';
$strCheckAll = 'Markera alla';
$strCheckDbPriv = 'Check Database Privileges'; //to translate
$strCheckTable = 'Kontrollera tabell';
$strColumn = 'Kolumn';
$strColumnEmpty = 'Kolumn-namnen �r tomma!';
$strColumnNames = 'Kolumn-namn';
$strCompleteInserts = 'Kompletta infogningar';
$strConfirm = 'Vill du verkligen g�ra det?';
$strCopyTable = 'Kopiera tabellen till';
$strCopyTableOK = 'Tabellen %s har kopierats till %s.';
$strCreate = 'Skapa';
$strCreateNewDatabase = 'Skapa ny databas';
$strCreateNewTable = 'Skapa ny tabell i databas ';
$strCriteria = 'Kriterium';

$strData = 'Data';
$strDatabase = 'Databas ';
$strDatabases = 'databaser';
$strDatabasesStats = 'Databas-statistik';
$strDataOnly = 'Enbart data';
$strDbEmpty = 'Databasen �r tom!';
$strDefault = 'Standard';
$strDelete = 'Radera';
$strDeleted = 'Raden har raderats';
$strDeletedRows = 'Raderade rader';
$strDeleteFailed = 'Raderingen misslyckades!';
$strDelPassMessage = 'Du har raderat l�senordet f�r';
$strDescending = 'Fallande';
$strDisplay = 'Visa';
$strDisplayOrder = 'Visningsordning:';
$strDoAQuery = 'Utf�r en "query by example" (wildcard: "%")';
$strDocu = 'Dokumentation';
$strDoYouReally = 'Vill du verkligen ';
$strDrop = 'Radera';
$strDropDB = 'Radera databas ';
$strDropTable = 'Radera tabell';
$strDumpingData = 'Raderar data i tabell';
$strDynamic = 'dynamisk';

$strEdit = '�ndra';
$strEditPrivileges = '�ndra privilegier';
$strEffective = 'Effektivt';
$strEmpty = 'T�m';
$strEmptyResultSet = 'MySQL skickade tillbaka ett tomt resultat (dvs inga rader).';
$strEnclosedBy = 'omges av';
$strEnd = 'Slut';
$strEnglishPrivileges = ' Viktigt: MySQL-privilegienamn anges p� engelska ';
$strError = 'Fel';
$strEscapedBy = 'med specialtecken';
$strExtendedInserts = 'Ut�kade infogningar';
$strExtra = 'Extra';

$strField = 'F�lt';
$strFields = 'F�lt';
$strFieldsEmpty = ' Antalet f�lt �r noll! ';
$strFixed = 'fast';
$strFormat = 'Format';
$strFormEmpty = 'V�rde saknas i formul�ret!';
$strFullText = 'Fullst�ndiga texter';
$strFunction = 'Funktion';

$strGenTime = 'Skapad';
$strGo = 'K�r';
$strGrants = 'Grants'; //to translate
$strGzip = '"gzippad"';

$strHasBeenAltered = 'har �ndrats.';
$strHasBeenCreated = 'har skapats.';
$strHome = 'Hem';
$strHomepageOfficial = 'phpMyAdmin:s officiella hemsida';
$strHomepageSourceforge = 'phpMyAdmin Sourceforge-nedladdningssida';
$strHost = 'V�rd';
$strHostEmpty = 'V�rdnamnet �r ej satt!';

$strIfYouWish = 'Om du vill ladda enbart n�gra av tabellens kolumner, ange en kommaseparerad f�ltlista.';
$strIndex = 'Index';
$strIndexes = 'Index';
$strInsert = 'Infoga';
$strInsertAsNewRow = 'L�gg till som ny rad';
$strInsertedRows = 'Tillagda rader:';
$strInsertIntoTable = 'Infoga i tabell';
$strInsertNewRow = 'Infoga ny rad';
$strInsertTextfiles = 'Importera textfil till tabellen';
$strInstructions = 'Instruktioner';
$strInUse = 'anv�nds';
$strInvalidName = '"%s" �r ett reserverat ord, du kan inte anv�nda det som ett namn p� en databas/tabell/f�lt.';

$strKeyname = 'Nyckel';;
$strKill = 'D�da';

$strLength = 'L�ngd';
$strLengthSet = 'L�ngd/V�rden*';
$strLimitNumRows = 'rader per sida';
$strLineFeed = 'Radframmatning: \\n';
$strLines = 'Rader';
$strLocationTextfile = 'Textfilens plats';
$strLogin = ''; //to translate, but its not in use ...
$strLogout = 'Logga ut';

$strModifications = '�ndringarna har sparats';
$strModify = '�ndra';
$strMySQLReloaded = 'MySQL har laddats om.';
$strMySQLSaid = 'MySQL sa: ';
$strMySQLShowProcess = 'Visa processer';
$strMySQLShowStatus = 'Visa MySQL-k�rningsinformation';
$strMySQLShowVars = 'Visa MySQL:s systemvariabler';

$strName = 'Namn';
$strNbRecords = 'Antal rader';
$strNext = 'N�sta';
$strNo = 'Nej';
$strNoDatabases = 'Inga databaser';
$strNoDropDatabases = '"DROP DATABASE"-instruktioner �r avst�ngda.';
$strNoModification = 'Ingen f�r�ndring';
$strNoPassword = 'Inget l�senord';
$strNoPrivileges = 'Inga privilegier';
$strNoRights = 'Du har inte nog med beh�righet f�r att vara h�r!';
$strNoTablesFound = 'Fann inga tabeller i databasen.';
$strNotNumber = 'Det �r inte ett nummer!';
$strNotValidNumber = ' �r inte ett giltigt radnummer!';
$strNoUsersFound = 'Fann ingen anv�ndare.';
$strNull = 'Null';
$strNumberIndexes = ' Antal avancerade index ';

$strOftenQuotation = 'Ofta citattecken. Frivilligt betyder att bara \'char\' och \'varchar\' f�lten omgivs av det angivna tecken.';
$strOptimizeTable = 'Optimera tabell';
$strOptionalControls = 'Frivilligt. Styr hur l�sning och skrivning av specialtecken utf�rs.';
$strOptionally = 'Frivilligt';
$strOr = 'Eller';
$strOverhead = 'Overhead'; //to translate

$strPartialText = 'Avkortade texter';
$strPassword = 'L�senord';
$strPasswordEmpty = 'L�senordet �r tomt!';
$strPasswordNotSame = 'L�senorden �r inte lika!';
$strPHPVersion = 'PHP-version';
$strPmaDocumentation = 'phpMyAdmin dokumentation';
$strPos1 = 'B�rja';
$strPrevious = 'F�reg�ende';
$strPrimary = 'Prim�r';
$strPrimaryKey = 'Prim�rnyckel';
$strPrinterFriendly = 'Utskriftsv�nlig visning av tabellen ovan';
$strPrintView = 'Skriv ut ovanst�ende';
$strPrivileges = 'Privilegier';
$strProducedAnError = '�tergav ett fel.';
$strProperties = 'Inst�llningar';

$strQBE = 'Skapa fr�ga mha formul�r (Query by Example)';
$strQBEDel = 'Ta bort';
$strQBEIns = 'Infoga';
$strQueryOnDb = 'SQL-query on database ';

$strReadTheDocs = 'L�s manualen';
$strRecords = 'Rader';
$strReloadFailed = 'Omladdning av MySQL misslyckades.';
$strReloadMySQL = 'Ladda om MySQL';
$strRememberReload = 'Kom ih�g att ladda om servern.';
$strRenameTable = 'D�p om tabellen till';
$strRenameTableOK = 'Tabell %s har d�pts om till %s';
$strRepairTable = 'Reparera tabell';
$strReplace = 'Ers�tt';
$strReplaceTable = 'Ers�tt tabelldata med fil';
$strReset = 'Nollst�ll';
$strReType = 'Skriv om';
$strRevoke = 'Revoke'; //to translate
$strRevokeGrant = 'Revoke Grant'; //to translate
$strRevokeGrantMessage = 'You have revoked the Grant privilege for'; //to translate
$strRevokeMessage = 'You have revoked the privileges for'; //to translate
$strRevokePriv = 'Revoke Privileges'; //to translate
$strRowLength = 'Radl�ngd';
$strRows = 'Rader';
$strRowsFrom = 'rader med b�rjan fr�n';
$strRowSize = ' Radstorlek ';
$strRowsStatistic = 'Radstatistik';
$strRunning = 'k�rs p� ';
$strRunQuery = 'K�r fr�ga';

$strSave = 'Spara';
$strSelect = 'V�lj';
$strSelectFields = 'V�lj f�lt (minst ett):';
$strSelectNumRows = 'i fr�ga';
$strSend = 'Skicka';
$strSequence = 'Sekv.';
$strServerChoice = 'Serverval';
$strServerVersion = 'Serverversion';
$strSetEnumVal = 'Om en f�lttyp �r "enum" eller "set", var god ange v�rden enligt f�ljande format: \'a\',\'b\',\'c\'...<br />Om du beh�ver l�gga till ett bak�tstreck ("\") eller ett enkelcitat ("\'") i v�rdena, skriv ett bak�tstreck f�re tecknet (till exempel \'\\\\xyz\' eller \'a\\\'b\').';
$strShow = 'Visa';
$strShowingRecords = 'Visar rader ';
$strShowPHPInfo = 'Visa PHP-information';
$strShowThisQuery = ' Visa den h�r fr�gan igen ';
$strSingly = '(singly)'; //to translate
$strSize = 'Storlek';
$strSort = 'Sortering';
$strSpaceUsage = 'Utrymmesanv�ndning';
$strSQLQuery = 'SQL-fr�ga';
$strStatement = 'Uppgift';
$strStrucCSV = 'CSV-data';
$strStrucData = 'Struktur och data';
$strStrucDrop = 'L�gg till \'radera tabell\'';
$strStrucExcelCSV = 'CSV f�r Ms Excel-data';
$strStrucOnly = 'Enbart struktur';
$strSubmit = 'S�nd';
$strSuccess = 'Din SQL-fr�ga utf�rdes korrekt';
$strSum = 'Summa';

$strTable = 'tabell ';
$strTableComments = 'Tabellkommentarer';
$strTableEmpty = 'Tabellnamnet �r tomt!';
$strTableMaintenance = 'Tabellunderh�ll';
$strTables = '%s tabell(er)';
$strTableStructure = 'Tabellstruktur f�r tabell';
$strTableType = 'Tabelltyp';
$strTerminatedBy = 'avslutas med';
$strTextAreaLength = ' P� grund av dess l�ngd,<br /> kanske detta f�lt inte kan redigeras ';
$strTheContent = 'Filens inneh�ll har importerats.';
$strTheContents = 'Filens inneh�ll ers�tter den valda tabellens rader som har identiska prim�ra eller unika nycklar.';
$strTheTerminator = 'F�ltavslutare.';
$strTotal = 'totalt';
$strType = 'Typ';

$strUncheckAll = 'Avmarkera alla';
$strUnique = 'Unik';
$strUpdateQuery = 'Uppdatera fr�ga';
$strUsage = 'Anv�ndning';
$strUseBackquotes = 'Anv�nd bak�tcitat i tabeller och f�ltnamn';
$strUser = 'Anv�ndare';
$strUserEmpty = 'Anv�ndarnamnet �r tomt!';
$strUserName = 'Anv�ndarnamn';
$strUsers = 'Anv�ndare';
$strUseTables = 'Anv�nd tabeller';

$strValue = 'V�rde';
$strViewDump = 'Visa dump(-schema) av tabellen';
$strViewDumpDB = 'Visa dump(-schema) av databas';

$strWelcome = 'V�lkommen till ';
$strWithChecked = 'Med markerade:';
$strWrongUser = 'Fel anv�ndarnamn/l�senord. �tkomst nekad.';

$strYes = 'Ja';

// To translate
$strAPrimaryKey = 'A primary key has been added on %s';//to translate
$strAnIndex = 'An index has been added on %s';//to translate
$strDeleteUserMessage = 'You have deleted the user %s.';//to translate
$strFieldHasBeenDropped = 'Field %s has been dropped';//to translate
$strFieldsEnclosedBy = 'Fields enclosed by';//to translate
$strFieldsEscapedBy = 'Fields escaped by';//to translate
$strFieldsTerminatedBy = 'Fields terminated by';//to translate
$strIdxFulltext = 'Fulltext';  //to translate 
$strIndexHasBeenDropped = 'Index %s has been dropped';//to translate
$strKeepPass = 'Do not change the password';//to translate
$strLinesTerminatedBy = 'Lines terminated by';//to translate
$strPrimaryKeyHasBeenDropped = 'The primary key has been dropped';//to translate
$strRunningAs = 'as';
$strRunSQLQuery = 'Run SQL query/queries on database %s';//to translate
$strShowAll = 'Show all'; // to translate
$strShowCols = 'Show columns';
$strShowTables = 'Show tables';
$strStartingRecord = 'Starting record';//to translate
$strTableHasBeenDropped = 'Table %s has been dropped';//to translate
$strTableHasBeenEmptied = 'Table %s has been emptied';//to translate
$strUpdatePrivMessage = 'You have updated the privileges for %s.';//to translate
$strUpdateProfile = 'Update profile:';//to translate
$strUpdateProfileMessage = 'The profile has been updated.';//to translate
$strDatabaseHasBeenDropped=" Database %s has been dropped ";  //to translate
?>
