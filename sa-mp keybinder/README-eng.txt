SAMP KEYBINDER by MF2008
version: 0.2 Beta



Features:

- binding commands on hotkeys
- define two different hotkeys like "LCTRL + NUM0"
- concatenate multiple commands /cmd1{*}/cmd2{*}/cmd3
- up to 24 cmds in the gui mode
- custom keysets save and load
- start keybinder and connect to a samp server with one click
- a lot of useable hotkeys(see list below)
- detects double keybinds and notice you
- you an close the gui after the start (runs in console window)
- no performance loss
- able to start in console mode only
- configure your keyset in the .ini data by yourself




Usage:

KeySets:

Keysets .ini´s are located in the KeySet folder
load new keyset click on the "change" button
create a new keyset use the "new" button
if you want to delete the keyset go to the KeySet folder an the delete the .ini you like to delete

Samp Connect:

activate the checkbox on the left upper corner
type in the path to your samp.exe
type in the the IP and port of the server you would like to connect (IP:PORT)



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


Multiple Commands on one hotkey:

String: {*}

Example:  /cmd1{*}/cmd2{*}/cmd3....



Console Mode:

you have to start the keybinder.exe with a parameter
the parameter should be the path to your keyset ini file

Example:

Target:  "C:\Games\Keybinder\Keybinder.exe" "C:\Games\KeySet.ini"



Configure the Keyset by yourself:

[Command_0] 		//Command_i Number of the command
0_cmd=/me_is_hungry   	//command which will be simulated, use _ for space
0_key1=NUM0		//first hotkey
0_key2=-1  		//second hotkey, type in -1 if you won´t use it
0_isActive=false	// active, true or false


Create more than 24 commands(only in console mode):

copy more commands into your .ini you would like to use
insert instead of "i" type in the next command number

[Command_i]
i_cmd=/Hello
i_key1=F10
i_key2=-1
i_isActive=false

Userlicense:

This Software is Freeware. Use it at your own risk. Don´t modify it and do not claim it as your own. This Software is free to use.
No commercial use. Do not decompile it!