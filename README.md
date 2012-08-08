JSConnect-Codeigniter
=====================

A JSConnect Class for CodeIgniter

This contains two files:
- app/libraries/jsconnect.php
- app/controllers/auth.php

In order to get this to work on your installation you must:
- Install and configure Vanilla Forums
- Add the JsConnect Plugin to your forums from this address: 
 -- http://vanillaforums.org/addon/jsconnect-plugin
- I recommend this other plugin which does an auto sign-in:
 -- http://vanillaforums.org/addon/jsconnectautosignin-plugin

- Make sure you setup the Settings for the JsConnect plugin in the forums dashboard. If you 
have any problems, then look at the detailed instructions here:
 -- http://vanillaforums.org/docs/jsconnect

At this stage, you will integrate my code into your CodeIgniter project.
- Copy the library into your libraries folder. ( CI_Install_folder/application/libraries )
- Open the auth file included.
- Copy the load library line into your constructor (ie: $this->library->("jsconnect"); )
- Copy the "Vanilla" function over to wherever suits your authentication engine.
  -- This will determine your "Authentication URL" ( ie: http://website.com/auth_controller/vanilla/ )

- Add the details to your settings in JsConnect Plugin and then add your clientID and secret to the Codeigniter function.

At this point, you should be good to go! So, give it a try.
 