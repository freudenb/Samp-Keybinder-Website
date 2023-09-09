SAMP KEYBINDER by MF2008
version: 0.2 Beta

Keybinder für GTA San Andreas Multiplayer.


Features:

- Befehle auf Hotkeys legen
- zwei Hotkeys kombinierbar
- mehrere Befehle aneinander reihen
- 24 Befehle anlegbar im GUI Modus
- verschiedene Keysets anlegen und speichern
- Keybinder starten und Samp Server joinen mit einem klick
- viele Hotkeys nutzbar, siehe HELP
- erkennt doppel Belegung und hebt diese farbig hervor
- GUI nach Start des Keybinders ausschaltbar
- dadurch praktisch kein Performance Verlust
- komplett im Konsolen Modus startbar
- Keysets manuell bearbeiten in der jeweiligen Ini-Datei




Hilfe:

KeySets:

Die Keysets .ini´s befinden sich im Ordner "KeySets"
Zum verwalten einfach auf den "Change" Button klicken
Ein neues Keyset anlegen ueber den "New" Button
Falls ein Keyset geloescht werden soll in den KeySet Ordner gehen und manuell die jeweilige Datei loeschen

Samp Connect:

Aktivieren ueber die Checkbox
Pfad zur samp.exe angeben
IP und Port des Servers eintragen auf den ihr connecten wollt (im Format: IP:PORT)



Hotkeys:

   ALT
   SPACE
   BACK
   TAB
   LCTRL
   RCTRL
   LALT
   RALT
   CLEAR
   PAUSE
   PAGEU
   PAGED
   END
   LEFT
   RIGHT
   UP
   DOWN
   PRINT
   INSERT
   DEL
   NUML
   NUM0
   NUM1
   NUM2
   NUM3
   NUM4
   NUM5
   NUM6
   NUM7
   NUM8
   NUM9
   MULT
   ADD
   SEP
   SUB
   DEC
   DIV
   F1
   F2
   F3
   F4
   F5
   F6
   F7
   F8
   F9
   F10
   F11
   F12
   0
   1
   2
   3
   4
   5
   6
   7
   8
   9




Mehrere Befehle aneinander reihen:

Zeichenfolge: {*}

Beispiel:  /befehl1{*}/befehl2{*}/befehl3....




Konsolen Modus:

Verknüpfung von der keybinder.exe erstellen und dort unter Eigenschaften im Textfeld "Ziel:" an das ende des Pfades zur Exe den Pfad zur gewuenschten Keyset Ini dran haengen

Beispiel:

Ziel:  "C:\Games\Keybinder\Keybinder.exe" "C:\Games\KeySet.ini"

WICHTIG: Anfuehrungszeichen setzen! 


KeySet Ini selbst bearbeiten:

[Command_0] 		//Command_i Nummer des Commands
0_cmd=/lv   		//Text der gesendet wird, wichtig: Leerzeilen mit _ ersetzen
0_key1=NUM0		//erster Hotkey
0_key2=-1  		//zweiter Hotkey, Wichtig falls zweiter Key nicht benutzt wird -1 einsetzen
0_isActive=false	// ob Aktiv, true oder false


Weitere Befehle anlegen:

Einfach die Zahlenfolge fortsetzen.
Fuer i immer die Nummer des naechsten Commands einsetzen

[Command_i]
i_cmd=/Hallo
i_key1=F10
i_key2=-1
i_isActive=false

Nutzungsbestimmungen:

Der SAMP Keybinder by mf2008 ist Freeware. Er darf kostenlos genutzt werden und kostenlos an andere weiter gegeben werden mit Verweis auf den Autor.
Es ist nicht gestattet die Software in irgendeiner Art zu modifizieren. Der Source Code ist nicht offen, dekompilieren ist untersagt.
Sie darf nicht kommerziell genutzt werden.

Haftungsbestimmungen: 

Der Autor übernimmt keine Haftung für eventuell entstandene Schäden.