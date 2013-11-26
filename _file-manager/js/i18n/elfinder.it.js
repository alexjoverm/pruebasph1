/**
 * Italian translation
 * @author Alberto Tocci <alberto.tocci@gmail.com>
 * @version 2012-05-09
 */
if (elFinder && elFinder.prototype && typeof(elFinder.prototype.i18) == 'object') {
	elFinder.prototype.i18.it = {
		translator : 'Alberto Tocci (alberto.tocci@gmail.com)',
		language   : 'Italiano',
		direction  : 'ltr',
		dateFormat : 'd.m.Y H:i',
		fancyDateFormat : '$1 H:i',
		messages   : {

			/********************************** errors **********************************/
			'error'                : 'Errore',
			'errUnknown'           : 'Errore sconosciuto.',
			'errUnknownCmd'        : 'Comando sconosciuto.',
			'errJqui'              : 'Configurazione JQuery UI non valida. Devono essere inclusi i plugin Selectable, Draggable e Droppable.',
			'errNode'              : 'elFinder necessita dell\'elemento DOM per essere inizializzato.',
			'errURL'               : 'Configurazione non valida.Il parametro URL non è settato.',
			'errAccess'            : 'Accesso non consentito.',
			'errConnect'           : 'Impossibile collegarsi al backend.',
			'errAbort'             : 'Connessione terminata.',
			'errTimeout'           : 'Timeout di connessione.',
			'errNotFound'          : 'Backend non trovato.',
			'errResponse'          : 'Risposta non valida dal backend.',
			'errConf'              : 'Configurazione backend non valida.',
			'errJSON'              : 'Modulo PHP JSON non installato.',
			'errNoVolumes'         : 'Non è stato possibile leggere i volumi.',
			'errCmdParams'         : 'Parametri non validi per il comando "$1".',
			'errDataNotJSON'       : 'I dati non sono nel formato JSON.',
			'errDataEmpty'         : 'Stringa vuota.',
			'errCmdReq'            : 'Backend request requires command name.',
			'errOpen'              : 'Impossibile aprire "$1".',
			'errNotFolder'         : 'L\'oggetto non è una cartella..',
			'errNotFile'           : 'L\'oggetto non è un file.',
			'errRead'              : 'Impossibile leggere "$1".',
			'errWrite'             : 'Non è possibile scrivere in "$1".',
			'errPerm'              : 'Permesso negato.',
			'errLocked'            : '"$1" è bloccato e non può essere rinominato, spostato o eliminato.',
			'errExists'            : 'Il file "$1" è già esistente.',
			'errInvName'           : 'Nome file non valido.',
			'errFolderNotFound'    : 'Cartella non trovata.',
			'errFileNotFound'      : 'File non trovato.',
			'errTrgFolderNotFound' : 'La cartella di destinazione"$1" non è stata trovata.',
			'errPopup'             : 'Il tuo Browser non consente di aprire finestre di pop-up. Per aprire il file abilita questa opzione nelle impostazioni del tuo Browser.',
			'errMkdir'             : 'Impossibile creare la cartella "$1".',
			'errMkfile'            : 'Impossibile creare il file "$1".',
			'errRename'            : 'Impossibile rinominare "$1".',
			'errCopyFrom'          : 'Non è possibile copiare file da "$1".',
			'errCopyTo'            : 'Non è possibile copiare file in "$1".',
			'errUploadCommon'      : 'Errore di Caricamento.',
			'errUpload'            : 'Impossibile Caricare "$1".',
			'errUploadNoFiles'     : 'Non sono stati specificati file da caricare.',
			'errMaxSize'           : 'La dimensione totale dei file supera il limite massimo consentito.',
			'errFileMaxSize'       : 'Le dimensioni del file superano il massimo consentito.',
			'errUploadMime'        : 'FileType non consentito.',
			'errUploadTransfer'    : 'Trasferimento errato del file "$1".', 
			'errSave'              : 'Impossibile salvare "$1".',
			'errCopy'              : 'Impossibile copiare "$1".',
			'errMove'              : 'Impossibile spostare "$1".',
			'errCopyInItself'      : 'Sorgente e destinazione risultato essere uguali.',
			'errRm'                : 'Impossibile rimuovere "$1".',
			'errExtract'           : 'Impossibile estrarre file da "$1".',
			'errArchive'           : 'Impossibile creare archivio.',
			'errArcType'           : 'Tipo di archivio non supportato.',
			'errNoArchive'         : 'Il file non è un archivio o contiene file non supportati.',
			'errCmdNoSupport'      : 'Il Backend non supporta questo comando.',
			'errReplByChild'       : 'La cartella $1 non può essere sostituita da un oggetto in essa contenuto.',
			'errArcSymlinks'       : 'Per questioni di sicurezza non è possibile estrarre archivi che contengono collegamenti..',
			'errArcMaxSize'        : 'La dimensione dell\'archivio supera le massime dimensioni consentite.',
			'errResize'            : 'Impossibile ridimensionare "$1".',
			'errUsupportType'      : 'FileType non supportato.',

			/******************************* commands names ********************************/
			'cmdarchive'   : 'Crea Archivio',
			'cmdback'      : 'Indietro',
			'cmdcopy'      : 'Copia',
			'cmdcut'       : 'Taglia',
			'cmddownload'  : 'Download',
			'cmdduplicate' : 'Duplica',
			'cmdedit'      : 'Modifica File',
			'cmdextract'   : 'Estrai Archivio',
			'cmdforward'   : 'Avanti',
			'cmdgetfile'   : 'Seleziona File',
			'cmdhelp'      : 'About',
			'cmdhome'      : 'Home',
			'cmdinfo'      : 'Informazioni',
			'cmdmkdir'     : 'Nuova cartella',
			'cmdmkfile'    : 'Nuovo file di testo',
			'cmdopen'      : 'Apri',
			'cmdpaste'     : 'Incolla',
			'cmdquicklook' : 'Anteprima',
			'cmdreload'    : 'Ricarica',
			'cmdrename'    : 'Rinomina',
			'cmdrm'        : 'Cancella',
			'cmdsearch'    : 'Ricerca file',
			'cmdup'        : 'Vai alla directory padre',
			'cmdupload'    : 'Carica File',
			'cmdview'      : 'Visualizza',
			'cmdresize'    : 'Ridimensiona Immagine',
			'cmdsort'      : 'Ordina',

			/*********************************** buttons ***********************************/ 
			'btnClose'  : 'Chiudi',
			'btnSave'   : 'Salva',
			'btnRm'     : 'Rimuovi',
			'btnApply'  : 'Applica',
			'btnCancel' : 'Cancella',
			'btnNo'     : 'No',
			'btnYes'    : 'Si',

			/******************************** notifications ********************************/
			'ntfopen'     : 'Apri cartella',
			'ntffile'     : 'Apri file',
			'ntfreload'   : 'Ricarica il contenuto della cartella',
			'ntfmkdir'    : 'Creazione delle directory in corso',
			'ntfmkfile'   : 'Creazione dei files in corso',
			'ntfrm'       : 'Cancellazione files in corso',
			'ntfcopy'     : 'Copia file in corso',
			'ntfmove'     : 'Spostamento file in corso',
			'ntfprepare'  : 'Inizializzando la copia dei file.',
			'ntfrename'   : 'Sto rinominando i file',
			'ntfupload'   : 'Caricamento file in corso',
			'ntfdownload' : 'Downloading file in corso',
			'ntfsave'     : 'Salvataggio file in corso',
			'ntfarchive'  : 'Creazione archivio in corso',
			'ntfextract'  : 'Estrazione file dall\'archivio in corso',
			'ntfsearch'   : 'Ricerca files in corso',
			'ntfsmth'     : 'Operazione in corso. Attendere...',
			'ntfloadimg'  : 'Caricamento immagine in corso',

			/************************************ dates **********************************/
			'dateUnknown' : 'sconosciuto',
			'Today'       : 'Oggi',
			'Yesterday'   : 'Ieri',
			'Jan'         : 'Gen',
			'Feb'         : 'Feb',
			'Mar'         : 'Mar',
			'Apr'         : 'Apr',
			'May'         : 'Mag',
			'Jun'         : 'Giu',
			'Jul'         : 'Lug',
			'Aug'         : 'Ago',
			'Sep'         : 'Set',
			'Oct'         : 'Ott',
			'Nov'         : 'Nov',
			'Dec'         : 'Dic',
			'January'     : 'Gennaio',
			'February'    : 'Febbraio',
			'March'       : 'Marzo',
			'April'       : 'Aprile',
			'May'         : 'Maggio',
			'June'        : 'Giugno',
			'July'        : 'Luglio',
			'August'      : 'Agosto',
			'September'   : 'Settembre',
			'October'     : 'Ottobre',
			'November'    : 'Novembre',
			'December'    : 'Dicembre',
			'Sunday'      : 'Domenica', 
			'Monday'      : 'Lunedì', 
			'Tuesday'     : 'Martedì', 
			'Wednesday'   : 'Mercoledì', 
			'Thursday'    : 'Giovedì', 
			'Friday'      : 'Venerdì', 
			'Saturday'    : 'Sabato',
			'Sun'         : 'Dom', 
			'Mon'         : 'Lun', 
			'Tue'         : 'Mar', 
			'Wed'         : 'Mer', 
			'Thu'         : 'Gio', 
			'Fri'         : 'Ven', 
			'Sat'         : 'Sab',
			/******************************** sort variants ********************************/
			'sortnameDirsFirst' : 'per nome (cartelle in testa)', 
			'sortkindDirsFirst' : 'per tipo (cartelle in testa)', 
			'sortsizeDirsFirst' : 'per dimensione (cartelle in testa)', 
			'sortdateDirsFirst' : 'per data (cartelle in testa)', 
			'sortname'          : 'per nome', 
			'sortkind'          : 'per tipo', 
			'sortsize'          : 'per dimensione',
			'sortdate'          : 'per data',

			/********************************** messages **********************************/
			'confirmReq'      : 'Conferma richiesta',
			'confirmRm'       : 'Sei sicuro di voler rimuovere i file?<br />L\'operazione non è reversibile!',
			'confirmRepl'     : 'Sostituire i file ?',
			'apllyAll'        : 'Applica a tutti',
			'name'            : 'Nome',
			'size'            : 'Dimensione',
			'perms'           : 'Permessi',
			'modify'          : 'Modificato il',
			'kind'            : 'Tipo',
			'read'            : 'lettura',
			'write'           : 'scrittura',
			'noaccess'        : 'nessun accesso',
			'and'             : 'e',
			'unknown'         : 'sconosciuto',
			'selectall'       : 'Seleziona tutti i file',
			'selectfiles'     : 'Seleziona file',
			'selectffile'     : 'Seleziona il primo file',
			'selectlfile'     : 'Seleziona l\'ultimo file',
			'viewlist'        : 'Visualizza Elenco',
			'viewicons'       : 'Visualizza Icone',
			'places'          : 'Places',
			'calc'            : 'Calcola', 
			'path'            : 'Percorso',
			'aliasfor'        : 'Alias per',
			'locked'          : 'Bloccato',
			'dim'             : 'Dimensioni',
			'files'           : 'File',
			'folders'         : 'Cartelle',
			'items'           : 'Oggetti',
			'yes'             : 'si',
			'no'              : 'no',
			'link'            : 'Collegamento',
			'searcresult'     : 'Risultati ricerca',  
			'selected'        : 'oggetti selezionati',
			'about'           : 'About',
			'shortcuts'       : 'Scorciatoie',
			'help'            : 'Help',
			'webfm'           : 'Web file manager',
			'ver'             : 'Versione',
			'protocol'        : 'versione protocollo',
			'homepage'        : 'Home del progetto',
			'docs'            : 'Documentazione',
			'github'          : 'Seguici su Github',
			'twitter'         : 'Seguici su Twitter',
			'facebook'        : 'Seguici su Facebook',
			'team'            : 'Team',
			'chiefdev'        : 'sviluppatore capo',
			'developer'       : 'sviluppatore',
			'contributor'     : 'collaboratore',
			'maintainer'      : 'maintainer',
			'translator'      : 'traduttore',
			'icons'           : 'Icone',
			'dontforget'      : 'e non dimenticate di portare l\'asciugamano',
			'shortcutsof'     : 'Scorciatoie disabilitate',
			'dropFiles'       : 'Trascina i file qui',
			'or'              : 'o',
			'selectForUpload' : 'Seleziona file da caricare',
			'moveFiles'       : 'Sposta file',
			'copyFiles'       : 'Copia file',
			'rmFromPlaces'    : 'Rimuovi da places',
			'untitled folder' : 'cartella senza titolo',
			'untitled file.txt' : 'file senza titolo.txt',
			'aspectRatio'     : 'Proporzioni',
			'scale'           : 'Scala',
			'width'           : 'Larghezza',
			'height'          : 'Altezza',
			'mode'            : 'Modalità',
			'resize'          : 'Ridimensione',
			'crop'            : 'Ritaglia',
			'rotate'          : 'Ruota',
			'rotate-cw'       : 'Ruota di 90° in senso orario',
			'rotate-ccw'      : 'Ruota di 90° in senso antiorario',
			'degree'          : 'Gradi',

			/********************************** mimetypes **********************************/
			'kindUnknown'     : 'Sconosciuto',
			'kindFolder'      : 'Cartella',
			'kindAlias'       : 'Alias',
			'kindAliasBroken' : 'Alias guasto',
			// applications
			'kindApp'         : 'Applicazione',
			'kindPostscript'  : 'Documento Postscript',
			'kindMsOffice'    : 'Documento Microsoft Office',
			'kindMsWord'      : 'Documento Microsoft Word',
			'kindMsExcel'     : 'Documento Microsoft Excel',
			'kindMsPP'        : 'Presentazione Microsoft Powerpoint',
			'kindOO'          : 'Documento Open Office',
			'kindAppFlash'    : 'Applicazione Flash',
			'kindPDF'         : 'Documento PDF',
			'kindTorrent'     : 'File Bittorrent',
			'kind7z'          : 'Archivio 7z',
			'kindTAR'         : 'Archivio TAR',
			'kindGZIP'        : 'Archivio GZIP',
			'kindBZIP'        : 'Archivio BZIP',
			'kindZIP'         : 'Archivio ZIP',
			'kindRAR'         : 'Archivio RAR',
			'kindJAR'         : 'File Java JAR',
			'kindTTF'         : 'Font True Type',
			'kindOTF'         : 'Font Open Type',
			'kindRPM'         : 'Pacchetto RPM',
			// texts
			'kindText'        : 'Documento di testo',
			'kindTextPlain'   : 'Testo Semplice',
			'kindPHP'         : 'File PHP',
			'kindCSS'         : 'File CSS (Cascading Style Sheet)',
			'kindHTML'        : 'Documento HTML',
			'kindJS'          : 'File Javascript',
			'kindRTF'         : 'File RTF (Rich Text Format)',
			'kindC'           : 'File C',
			'kindCHeader'     : 'File C (header)',
			'kindCPP'         : 'File C++',
			'kindCPPHeader'   : 'File C++ (header)',
			'kindShell'       : 'Script Unix shell',
			'kindPython'      : 'File Python',
			'kindJava'        : 'File Java',
			'kindRuby'        : 'File Ruby',
			'kindPerl'        : 'File Perl',
			'kindSQL'         : 'File SQL',
			'kindXML'         : 'File XML',
			'kindAWK'         : 'File AWK',
			'kindCSV'         : 'File CSV (Comma separated values)',
			'kindDOCBOOK'     : 'File Docbook XML',
			// images
			'kindImage'       : 'Immagine',
			'kindBMP'         : 'Immagine BMP',
			'kindJPEG'        : 'Immagine JPEG',
			'kindGIF'         : 'Immagine GIF',
			'kindPNG'         : 'Immagine PNG',
			'kindTIFF'        : 'Immagine TIFF',
			'kindTGA'         : 'Immagine TGA',
			'kindPSD'         : 'Immagine Adobe Photoshop',
			'kindXBITMAP'     : 'Immagine X bitmap',
			'kindPXM'         : 'Immagine Pixelmator',
			// media
			'kindAudio'       : 'File Audio',
			'kindAudioMPEG'   : 'Audio MPEG',
			'kindAudioMPEG4'  : 'Audio MPEG-4',
			'kindAudioMIDI'   : 'Audio MIDI',
			'kindAudioOGG'    : 'Audio Ogg Vorbis',
			'kindAudioWAV'    : 'Audio WAV',
			'AudioPlaylist'   : 'Playlist MP3',
			'kindVideo'       : 'File Video',
			'kindVideoDV'     : 'Filmato DV',
			'kindVideoMPEG'   : 'Filmato MPEG',
			'kindVideoMPEG4'  : 'Filmato MPEG-4',
			'kindVideoAVI'    : 'Filmato AVI',
			'kindVideoMOV'    : 'Filmato Quick Time',
			'kindVideoWM'     : 'Filmato Windows Media',
			'kindVideoFlash'  : 'Filmato Flash',
			'kindVideoMKV'    : 'Filmato Matroska',
			'kindVideoOGG'    : 'Filmato Ogg'
		}
	}
}