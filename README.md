# CF iVoox: cfivoox
Joomla! Custom Field to integrate iVoox podcast into your Joomla articles
[GitHub Web](https://sergiois.github.io/cfivoox.html "CF iVoox")

## Installation and Usage
* Install the plugin using Joomla! Extension Manager
* Add the field (CFIVOOX) to your component using com_fields

## How to get the podcast ID
To integrate the podcast in the article you can enter the id of the podcast or paste the full iVoox URL:
* Go to the podcast URL
`Example: https://www.ivoox.com/3-como-empezamos-joomla-audios-mp3_rf_19463115_1.html`
* Select the number between "rf_" and "_1.html"
`Example: 19463115`
* This is the ID you can enter in the field. Full iVoox URLs are also accepted.

The default player uses the current iVoox iframe format:
`https://www.ivoox.com/player_ej_ID_6_1.html`

## Player interface formats
The field includes an interface format selector:

* Current iVoox player: full-width current iVoox iframe, with configurable color.
* Classic wide player: legacy wide iframe format.
* Mini horizontal player: compact iframe format.
* Simple iVoox link: no embedded iframe, only a clean external link to iVoox.

* * *

# Changelogs

### Version 1.0.0 [2017-06-27]
* **[Added]** Iframe option without customization

### Version 1.0.1 [2017-06-29]
* **[Added]** Iframe option with customization: You can select the color of the player
* **[Changed]** Language files

### Version 1.0.2 [2017-07-17]
* **[Added]** HTML5 and HTML5 mini options with customization: You can select the type of the player
* **[Changed]** Language files

### Version 1.0.3 [2019-01-20]
* **[Added]** Changes to upload plugin to the JED
* **[Changed]** Language files

### Version 1.1.0 [2023-01-07]
* **[Added]** Joomla 4 compatibility

### Version 2.0.0 [2026-06-11]
* **[Added]** Joomla 6 compatible plugin structure with namespaced extension class and service provider.
* **[Changed]** Default player output to the current iVoox `player_ej_ID_6_1.html` iframe format.
* **[Added]** Field values can now be either an iVoox ID or a full iVoox URL.
* **[Changed]** Player output now escapes IDs and color values before rendering.
* **[Added]** Interface format selector with current, classic wide, mini horizontal and simple link modes.

* * *

## Copyright & License
This custom field is licensed under GNU LESSER GENERAL PUBLIC LICENSE.
Copyright (C) 2017 [Sergio Iglesias](https://sergioiglesias.net) - All rights reserved.
