<?php

$q=$_GET["q"];
if($q == "htu")
{
	echo "<h2>HOW TO USE</h2><br>
		<h3>Commands:</h3>
		<p>Type in the command textfield the command you want to map on a key. For example you want to map a teleporter command you just type in \"/ls\" without the quotes</p>
		<p>Bind two or more commands on one Hotkey. Just after every command type in \"{*}\" without the quotes.</p>
		<h3>Keys:</h3>
		<p>Choose a hotkey from the list of the valid hotkeys. Type it in the Key1 textfield exactly like it is spelled in the key list.</p>
		<p>If yo want to use two hotkeys type a hotkey in the Key2 textfield. Leave it blank if you want to use only one hotkey.</p>
		<p>If you define two hotkeys you have to press them at the same time to send the command.</p>
		<h3>Activate:</h3>
		<p>Just click on the checkbox if you would like to activate your command. The green background indicates that the command is active.</p>
		<p>If the keybinder is already running and you activate a hotkey after you started the Samp Keybinder it won´t work. You have to restart the Samp Keybinder</p>
		<h3>Save and Load Keysets:</h3>
		<p>Click on the \"Change\" Button to load a already created Keyset.</p>
		<p>Click on the \"Save\" Button to save your Keyset at any time.</p>
		<p>The Samp Keybinder will automatically save your Keyset when you start the Keybinder or when you close the window.</p>
		<p>To create a new Keyset click on \"new\".</p>
		<h3>Samp Connect</h3>
		<p>You can connect to your favorite server by just enter the IP and PORT.</p>
		<p>Use it like this: IP:PORT , 0.0.0.0:7777</p>
		<p>You have to link your samp.exe. To do that click on the change button an navigate to your samp.exe</p>
		<p>Now you can click on \"join\" to just join the server without starting the Samp Keybinder or click on \"connect + join\" to start SAMP and the Keybinder together.</p>
		<h3>For more advanced users:</h3><br>
		<h3>Console Mode:</h3>
		<p>Start the keybinder.exe with parameter. You have to add the path to one of your KeySet .ini as the parameter.</p>
		<p>Like:  \"C:\\Games\\Keybinder\keybinder.exe\" \"C:\\Desktop\\consolekeyset.ini\"</p>
		<p>Search google on how to add commandline parameters.</p>
		<h3>Configurate Keysets by yourself:</h3>
		<p>Open a keyset .ini file and you will see a structure like this:</p>
		<p>[Command_0] //Command_i Number of the command<br>
        0_cmd=/me_is_hungry //command which will be simulated, use _ for space<br>
		0_key1=NUM0 //first hotkey<br>
		0_key2=-1 //second hotkey, type in -1 if you won´t use it<br>
		0_isActive=false // active, true or false</p>
		<p> Change the parameters you like and save the file</p>
		<h3>To add more than 24 Commands:</h3>
		<p>Edit the the keyset .ini and copy more commands in at the bottom</p>
		<p>[Command_i]<br>
        i_cmd=/me_is_hungry<br>
		i_key1=NUM0<br>
		i_key2=-1<br>
		i_isActive=false</p>
		<p>instead of \"i\" type in the next command number<p>
		<p>Caution: do not load a keyset file with more than 24 commands with the GUI. It is not made for this. Use the console mode!<p>
		
	";

}
else if($q == "home")
{
	echo "<h2>Tired of typing the same command over and over again?</h2>
	<br>
    <h3>We got something for you! The SAMP Keybinder!</h3> <p><br> 
	With the Samp Keybinder created by MF2008 you can easily put commands on a hotkey you like.
	Its easy and fast, just type in the command and define a hotkey for it. 
	The Samp Keybinder will give you a big advantage. Normal players won't be that fast as you when you use the Samp Keybinder. 
	Its possible to create different keybinds and save and load them. The Samp Keybinder is able to manage your keybinds. So you are able to create different keybinds on every server you play.
	Its easy to use, start the Samp Keybinder and connect to your favorite server with just one click! Click <a onclick='getdata(\"features\")' href='#' >here</a> to get a list of all features the Samp Keybinder offers.
	<br><br>
	<a href='images/interface.png' rel='lightbox' title='Interface'><img src='images/interface.png' width='640px' height='425px'></img></a>
	<br></br>
	So you want to get your hands on?<br><br>
	Go to the <a onclick='getdata(\"download\")' href='#' >Download</a> section and download the latest version of the Samp Keybinder. Its completely free!
	<br><br>
	
	What is SAMP?
	<br><br>
	You don`t know SAMP? Thats a shame. 
	Samp is a multiplayer mod for Grand Theft Auto San Andreas. You can download it at sa-mp.com
	</p>
	<a href='http://www.sa-mp.com' target='_blank'><img src='images/samplogo.gif' width='200px' height='80px'></img></a>
	
	";

}
else if($q == "features")
{

	echo "<h2>Features</h2>
	<ul>
	<li>bind commands to hotkeys</li>
	<li>define two different hotkeys like \"LCTRL + NUM0\"</li>
	<li>concatenate multiple commands /cmd1{*}/cmd2{*}/cmd3</li>
	<li>up to 24 cmds in the GUI mode</li>
    <li>custom keysets save and load</li>
    <li>start keybinder and connect to a samp server with one click</li>
    <li>a lot of useable hotkeys(see list below)</li>
    <li>detects double keybinds and will notice you</li>
    <li>you can close the GUI after the start (runs in console window)</li>
    <li>no performance loss</li>
    <li>able to start in console mode only</li>
    <li>configure your keyset in the .ini file by yourself</li>
	</ul>
	<br>
	<h3>Interface:</h3>
	<a href='images/interface.png' rel='lightbox' title='Interface'><img src='images/interface.png' width='640px' height='425px'></img></a>
	<h3>Keyset management:</h3>
	<a href='images/changekeyset.png' rel='lightbox' title='change keyset'><img src='images/changekeyset.png' width='640px' height='425px'></img></a>
	<br>
	<a href='images/newkeyset.png' rel='lightbox' title='new keyset'><img src='images/newkeyset.png' width='640px' height='425px'></img></a>
	<h3>Samp Connect:</h3>
	<a href='images/sampconnect.png' rel='lightbox' title='Samp Connect'><img src='images/sampconnect.png' width='640px'></img></a>
	<h3>Keys:</h3>
	<a href='images/keys.png' rel='lightbox' title='Help'><img src='images/keys.png'></img></a>
	<h3>Console:</h3>
	<a href='images/console.png' rel='lightbox' title='new keyset'><img src='images/console.png' width='640px' height='341px'></img></a>

	
     ";
}
else if($q == "faq")
{

	echo "<h2>FAQ</h2>
	 <p><i>\"What is a Keybinder?\"</i></p>
	 <p>With a Keybinder you can define your own commands and place it on a hotkey you like.</p>
	 
	  <p><i>\"I want to use combinations like CTRL + NUM keys, does the Samp Keybinder support this?\"</i></p>
	 <p>Yes, you are able to use a lot of different hotkey combinations. Like LCTRL, RCTRL, LALT or RALT and so on</p>
	 
	  <p><i>\"How do i place multiple commands on one hotkey?\"</i></p>
	 <p>It´s pretty easy just type {*} between every command. Example: /freeze{*}/say You are under arrest!!</p>
	 
	  <p><i>\"How do i start the Keybinder?\"</i></p>
	 <p>Start the keybinder.jar file.</p>
	 
	 <p><i>\"The Samp Keybinder is totally free?\"</i></p>
	 <p>yes.</p>
	 
	 <p><i>\"Is it open source?\"</i></p>
	 <p>no.</p>
	 
	 <p><i>\"My Keybinder is broken, i can´t see the command bars!\"</i></p>
	 <p>He probably can´t find your keyset. Copy your keyset .ini in the \"KeySet\" folder or click on \"new\" and create a new one.</p>
	 
	 <p><i>\"Do i need something else?\"</i></p>
	 <p>You have to have installed JAVA 1.6 JRE. Grab it <a href='http://www.java.com'>here</a></p>
	 
	 <p><i>\"Which programming language was used to made the Samp Keybinder?\"</i></p>
	 <p>The GUI ist written in JAVA. The Keybinder in C++.</p>
	 
	<p><i>\"The start button is grey. I can´t start the Keybinder!\"</i></p>
	<p>You typed in the same hotkey you already use for another command. The red background will tell you which one is double binded.</p>
	
	<p><i>\"The console screen says a key is not a valid key!\"</i></p>
	<p>You tipped in a wrong key, click on \"help\" there you can see which keys are usable. You have to spell them correctly.</p>";


}
else if($q == "download")
{
	
	$myFile = "downloads.txt";
	$fh = fopen($myFile, 'r');
	$theData = fread($fh, filesize($myFile));
	fclose($fh);
	
	echo "<h2>Download</h2><br>
	    <h3> Latest Version:</h3>
		<p>Version 0.3 Beta</p>
		<p>This software is freeware. Use it at your own risk. Its for private purposes only. No commercial use. No modification allowed. Don´t upload the Samp Keybinder somewhere else.
		When you download this software you agree this regulations!</p>
		
			
		<p>We need your support. It would be really nice if you like us on Facebook ;)</p>
		<iframe src='http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fsamp-keybinder.com&amp;layout=button_count&amp;show_faces=true&amp;width=450&amp;action=like&amp;colorscheme=light&amp;height='80' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:100%; height:25px;' allowTransparency='true'></iframe>
		
		
	<p><input type='button' id='downloadbutton' value='Download' onclick='window.open(\"Samp_Keybinder_vers.0.3Beta_by_mf2008.zip\"); getdata(\"countdownload\")'></input><br>
		Downloads: <b>".$theData."</b>
		</p>
			
	
	";
}
else if($q == "countdownload")
{
	

	$myFile = "downloads.txt";
	$fh = fopen($myFile, 'r');
	$theData = fread($fh, filesize($myFile));
	fclose($fh);
	$theData++;
	$fw = fopen($myFile, 'w');
	fwrite($fw, $theData);
	fclose($fw);
	echo "<h2>Download</h2><br>
		<h3> Latest Version:</h3>
		<p>Version 0.3 Beta</p> 
		<p>This software is freeware. Use it at your own risk. Its for private purposes only. No commercial use. No modification allowed. Don´t upload the Samp Keybinder somewhere else
		When you download this software you agree this regulations!</p>
		
		<p>We need your support. It would be really nice if you like us on Facebook ;)</p>
		<iframe src='http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fsamp-keybinder.com&amp;layout=button_count&amp;show_faces=true&amp;width=450&amp;action=like&amp;colorscheme=light&amp;height='80' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:100%; height:25px;' allowTransparency='true'></iframe>
				
		<p><input type='button' id='downloadbutton' value='Download' onclick='window.open(\"Samp_Keybinder_vers.0.3Beta_by_mf2008.zip\"); getdata(\"countdownload\")'></input><br>
		Downloads: <b>".$theData."</b>
		</p>
	";
	
	$DownloaderFile = "downloader.txt";
	$fh2 = fopen($DownloaderFile, 'a');
	$dlinformations = "Download #".$theData." ";
	$dlinformations .=  date("d.m.y - G:i:s")."\r\n\r\n";
	$dlinformations .= $_SERVER['HTTP_USER_AGENT'];
	$dlinformations .= "\r\n\r\n";
	fwrite($fh2, $dlinformations);
	fclose($fh2);
}
else if($q == "CreateKeyset")
{
	$form = "";
	for($i = 0; $i < 24; $i=$i+2)
	{
				$j = $i+1;
				if($i < 10)
				{
					$form.="<p style='font-size:10pt'>Command ".$i.": &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Key 1:  Key 2:  &nbsp;&nbsp;&nbsp;&nbsp;Command ".$j.":  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Key 1:  Key 2:</p>
						<input id='".$i."_cmd' name='".$i."_cmd' type='text' size='20' maxlength='1000'>
						<input id='".$i."_key1' name='".$i."_key1' type='text' size='4' maxlength='20'>
						<input id='".$i."_key2' name='".$i."_key2' type='text' size='4' maxlength='20'>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input id='".$j."_cmd' name='".$j."_cmd' type='text' size='20' maxlength='1000'>
						<input id='".$j."_key1' name='".$j."_key1' type='text' size='4' maxlength='20'>
						<input id='".$j."_key2' name='".$j."_key2' type='text' size='4' maxlength='20'>
						
						
						
					";
				}
				else
				{
					$form.="<p style='font-size:10pt'>Command ".$i.": &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Key 1:  Key 2:  &nbsp;&nbsp;&nbsp;&nbsp;Command ".$j.": &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Key 1:  Key 2:</p>
						<input id='".$i."_cmd' name='".$i."_cmd' type='text' size='20' maxlength='1000'>
						<input id='".$i."_key1' name='".$i."_key1' type='text' size='4' maxlength='20'>
						<input id='".$i."_key2' name='".$i."_key2' type='text' size='4' maxlength='20'>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input id='".$j."_cmd' name='".$j."_cmd' type='text' size='20' maxlength='1000'>
						<input id='".$j."_key1' name='".$j."_key1' type='text' size='4' maxlength='20'>
						<input id='".$j."_key2' name='".$j."_key2' type='text' size='4' maxlength='20'>
						
						
						
					";
					
				}
				
				
			
			
	}
	
	
	
	echo "
			<h2>Create Keyset</h2>
			
			<p>Here you can share your created keysets with other people. For example if you are an samp server owner and want to provide your users
			a completely configured Keybinder. So here you can insert the commands you want and generate a download link which you can share with your users. 
			They can click on this link and download your configured keyset and then just copy it to the \"KeySets\" folder.<br><br> And remember use only the valid keys which can be found <a href='images/keys.png' target='_blank'>here</a>.</p>
			<form id='shareform' action='' method='get'>

			".$form."
			<p>Keyset Name:</p>
			<input id='name' name='name' type='text' size='20' maxlength='100'><br><br>
			<input id='createLinkButton' value='GET LINK' type='button' onclick='createLink()'>
			</form>
	
	
	
	
	";


}
else if($q == "impressum")
{
	

	
	echo "<p>Verantwortlich für den Inhalt dieser Webseite:
<br><br>
Martin Freudenberg<br>
Ringstraße 10<br>
99091 Erfurt<br>
samp-keybinder@hotmail.de<br>
www.samp-keybinder.com
<br><br><br>

Haftungsausschluss
<br><br>
1. Inhalt des Onlineangebotes<br>
Der Autor übernimmt keinerlei Gewähr für die Aktualität, Korrektheit, Vollständigkeit oder Qualität der bereitgestellten Informationen. Haftungsansprüche gegen den Autor, welche sich auf Schäden materieller oder ideeller Art beziehen, die durch die Nutzung oder Nichtnutzung der dargebotenen Informationen bzw. durch die Nutzung fehlerhafter und unvollständiger Informationen verursacht wurden, sind grundsätzlich ausgeschlossen, sofern seitens des Autors kein nachweislich vorsätzliches oder grob fahrlässiges Verschulden vorliegt.
Alle Angebote sind freibleibend und unverbindlich. Der Autor behält es sich ausdrücklich vor, Teile der Seiten oder das gesamte Angebot ohne gesonderte Ankündigung zu verändern, zu ergänzen, zu löschen oder die Veröffentlichung zeitweise oder endgültig einzustellen.
<br><br>
2. Verweise und Links<br>
Bei direkten oder indirekten Verweisen auf fremde Webseiten (Hyperlinks), die außerhalb des Verantwortungsbereiches des Autors liegen, würde eine Haftungsverpflichtung ausschließlich in dem Fall in Kraft treten, in dem der Autor von den Inhalten Kenntnis hat und es ihm technisch möglich und zumutbar wäre, die Nutzung im Falle rechtswidriger Inhalte zu verhindern.
Der Autor erklärt hiermit ausdrücklich, dass zum Zeitpunkt der Linksetzung keine illegalen Inhalte auf den zu verlinkenden Seiten erkennbar waren. Auf die aktuelle und zukünftige Gestaltung, die Inhalte oder die Urheberschaft der verlinkten/verknüpften Seiten hat der Autor keinerlei Einfluss. Deshalb distanziert er sich hiermit ausdrücklich von allen Inhalten aller verlinkten /verknüpften Seiten, die nach der Linksetzung verändert wurden. Diese Feststellung gilt für alle innerhalb des eigenen Internetangebotes gesetzten Links und Verweise sowie für Fremdeinträge in vom Autor eingerichteten Gästebüchern, Diskussionsforen, Linkverzeichnissen, Mailinglisten und in allen anderen Formen von Datenbanken, auf deren Inhalt externe Schreibzugriffe möglich sind. Für illegale, fehlerhafte oder unvollständige Inhalte und insbesondere für Schäden, die aus der Nutzung oder Nichtnutzung solcherart dargebotener Informationen entstehen, haftet allein der Anbieter der Seite, auf welche verwiesen wurde, nicht derjenige, der über Links auf die jeweilige Veröffentlichung lediglich verweist.
<br><br>
3. Urheber- und Kennzeichenrecht<br>
Der Autor ist bestrebt, in allen Publikationen die Urheberrechte der verwendeten Grafiken, Tondokumente, Videosequenzen und Texte zu beachten, von ihm selbst erstellte Grafiken, Tondokumente, Videosequenzen und Texte zu nutzen oder auf lizenzfreie Grafiken, Tondokumente, Videosequenzen und Texte zurückzugreifen.
Alle innerhalb des Internetangebotes genannten und ggf. durch Dritte geschützten Marken- und Warenzeichen unterliegen uneingeschränkt den Bestimmungen des jeweils gültigen Kennzeichenrechts und den Besitzrechten der jeweiligen eingetragenen Eigentümer. Allein aufgrund der bloßen Nennung ist nicht der Schluss zu ziehen, dass Markenzeichen nicht durch Rechte Dritter geschützt sind!
Das Copyright für veröffentlichte, vom Autor selbst erstellte Objekte bleibt allein beim Autor der Seiten. Eine Vervielfältigung oder Verwendung solcher Grafiken, Tondokumente, Videosequenzen und Texte in anderen elektronischen oder gedruckten Publikationen ist ohne ausdrückliche Zustimmung des Autors nicht gestattet.
<br><br>
4. Datenschutz<br>
Sofern innerhalb des Internetangebotes die Möglichkeit zur Eingabe persönlicher oder geschäftlicher Daten (Emailadressen, Namen, Anschriften) besteht, so erfolgt die Preisgabe dieser Daten seitens des Nutzers auf ausdrücklich freiwilliger Basis. Die Inanspruchnahme und Bezahlung aller angebotenen Dienste ist - soweit technisch möglich und zumutbar - auch ohne Angabe solcher Daten bzw. unter Angabe anonymisierter Daten oder eines Pseudonyms gestattet. Die Nutzung der im Rahmen des Impressums oder vergleichbarer Angaben veröffentlichten Kontaktdaten wie Postanschriften, Telefon- und Faxnummern sowie Emailadressen durch Dritte zur Übersendung von nicht ausdrücklich angeforderten Informationen ist nicht gestattet. Rechtliche Schritte gegen die Versender von sogenannten Spam-Mails bei Verstössen gegen dieses Verbot sind ausdrücklich vorbehalten.
<br><br>
5. Rechtswirksamkeit dieses Haftungsausschlusses
Dieser Haftungsausschluss ist als Teil des Internetangebotes zu betrachten, von dem aus auf diese Seite verwiesen wurde. Sofern Teile oder einzelne Formulierungen dieses Textes der geltenden Rechtslage nicht, nicht mehr oder nicht vollständig entsprechen sollten, bleiben die übrigen Teile des Dokumentes in ihrem Inhalt und ihrer Gültigkeit davon unberührt.
<br><br><br>

Disclaimer
<br><br>
1. Content<br>
The author reserves the right not to be responsible for the topicality, correctness, completeness or quality of the information provided. Liability claims regarding damage caused by the use of any information provided, including any kind of information which is incomplete or incorrect,will therefore be rejected.
All offers are not-binding and without obligation. Parts of the pages or the complete publication including all offers and information might be extended, changed or partly or completely deleted by the author without separate announcement.
<br><br>
2. Referrals and links<br>
The author is not responsible for any contents linked or referred to from his pages - unless he has full knowledge of illegal contents and would be able to prevent the visitors of his site fromviewing those pages. If any damage occurs by the use of information presented there, only the author of the respective pages might be liable, not the one who has linked to these pages. Furthermore the author is not liable for any postings or messages published by users of discussion boards, guestbooks or mailinglists provided on his page.
<br><br>
3. Copyright<br>
The author intended not to use any copyrighted material for the publication or, if not possible, to indicatethe copyright of the respective object.
The copyright for any material created by the author is reserved. Any duplication or use of objects such as diagrams, sounds or texts in other electronic or printed publications is not permitted without the author's agreement.
<br><br>
4. Privacy policy<br>
If the opportunity for the input of personal or business data (email addresses, name, addresses) is given, the input of these data takes place voluntarily. The use and payment of all offered services are permitted - if and so far technically possible and reasonable - without specification of any personal data or under specification of anonymized data or an alias. The use of published postal addresses, telephone or fax numbers and email addresses for marketing purposes is prohibited, offenders sending unwanted spam messages will be punished.
<br><br>
5. Legal validity of this disclaimer<br>
This disclaimer is to be regarded as part of the internet publication which you were referred from. If sections or individual terms of this statement are not legal or correct, the content or validity of the other parts remain uninfluenced by this fact. 
	</p>
	";

}




?>