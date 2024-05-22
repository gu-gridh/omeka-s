# Omeka S

Omeka S is a web publication system for universities, galleries, libraries, archives, and museums. It consists of a local network of independently curated exhibits sharing a collaboratively built pool of items, media, and their metadata.

See the [user manual](https://omeka.org/s/docs/user-manual) for more information.

## Installation

### Requirements
* Linux
* [Apache](https://www.apache.org/) (with [AllowOverride](https://httpd.apache.org/docs/2.4/mod/core.html#allowoverride) set to "All" and [mod_rewrite](http://httpd.apache.org/docs/current/mod/mod_rewrite.html) enabled)
* [MySQL](https://www.mysql.com/) 5.7.9+ (or [MariaDB](https://mariadb.org/) 10.2.6+)
* [PHP](https://www.php.net/) 7.4+ (latest stable version preferred, with [PDO](http://php.net/manual/en/intro.pdo.php), [pdo_mysql](http://php.net/manual/en/ref.pdo-mysql.php), and [xml](http://php.net/manual/en/intro.xml.php) extensions installed)

### Generating thumbnails
* The default library for generating thumbnails is [ImageMagick](https://imagemagick.org/index.php), at least version 6.7.5. Older versions will not correctly produce thumbnails. For alternative thumbnail options, see the [user manual](https://omeka.org/s/docs/user-manual/configuration/#thumbnails).

### Installing from GitHub

1. Make sure [Node.js](https://nodejs.org/) and [npm](https://nodejs.org/) are installed
1. Clone this repository in your Apache web directory:
   * `$ git clone https://github.com/omeka/omeka-s.git`
1. Change into the Omeka S directory:
   * `$ cd omeka-s`
1. Perform first-time setup:
   * `$ npm install`
   * `$ npx gulp init`
1. Open `config/database.ini` and add your MySQL username, password, database name, and host name. The user and database must be created before this step.
1. Make sure the `files/` directory is writable by Apache.
1. In your web browser, navigate to the omeka-s directory, where you can complete installation.

### Installing from released zip file

1. Download the latest release from the [release page](https://github.com/omeka/omeka-s/releases) (download the first asset listed)
1. Open `config/database.ini` and add your MySQL username, password, database name, and host name. The user and database must be created before this step.
1. Make sure the `files/` directory is writable by Apache.
1. In your web browser, navigate to the omeka-s directory, where you can complete installation.

You can find Omeka-specific code under `application/`.

## Updating

*Make a backup copy of your entire site and its database!*

### Updating from GitHub

1. `git pull` as usual. Use the `master` branch for the latest releases.
2. From the Omeka S root directory, run `npx gulp deps` to make sure dependencies are up to date.
3. Compare changes in `/config/local.config.php` and `/config/local.config.php.dist`. Some default configurations might have changed, so you might need to reconcile changes to the distributed configuration with your local configuration (e.g., a path to PHP specific to your server, dev mode settings, etc.)
4. In your web browser, go to your site and run any migrations that are needed.

### Updating from released zip file
1. Download the latest release from the [release page](https://github.com/omeka/omeka-s/releases)
2. Make a copy of your `/config` directory. You will need to restore your `local.config.php` and `database.ini` files from that copy.
3. Make a copy of your `/modules` and `/themes` directories.
4. Make a copy of your `/files` directory.
5. Remove all Omeka S files, and replace them with the files from the updated zip file.
6. Replace your original `/config/local.config.php` file, and the `/modules`, `/themes`, and `/files` directories that you copied.
7. In your web browser, go to your site and run any migrations that are needed.

## Creating a zipped release

Run `npx gulp zip` to create a zipped version of Omeka S and store it in `/build`. Use the `--no-dev` flag to omit Composer dev dependencies for a smaller package suitable for end-users. Official releases follow this same process from a new, clean checkout.

## Libraries

Omeka uses the following libraries, among others:

* [Laminas](https://getlaminas.org/)
* [Doctrine 2](http://www.doctrine-project.org/)
* [EasyRdf](http://www.easyrdf.org/)
* [PHPUnit](https://phpunit.de/)
* [jQuery](http://jquery.com/)

## Development Standards

Omeka development adheres to the [Laminas Coding Style Guide](https://docs.laminas.dev/laminas-coding-standard/v2/coding-style-guide/) and uses the [git-flow](http://nvie.com/posts/a-successful-git-branching-model/) branching model and the [Semantic Versioning 2.0.0](https:/semver.org/spec/v2.0.0.html) version scheme.

See the [developer documentation](https://omeka.org/s/docs/developer/) for more information.

## Fields used

### Concept DI

| Name (sv)          | Original name | Description  (sv)  | Field used     |
| -------------- | -------------- | -------------- | -------------- |
| Namn | Title | Typ av koncept | dcterms:title |
| Beskrivning | Description | En beskrivning av konceptet | dcterms:description |
| URI | uri | Länk till URI | bibo:uri |
| Intern anteckning | Note |  | skos:note |
| Typ: Koncept | has category of resource | Alltid Koncept | rdau:P60058 |

### Work DI

| Name (sv)          | Original name | Description  (sv)  | Field used     |
| -------------- | -------------- | -------------- | -------------- |
| Titel | Title | Verkets titel, lägg in på orginalspråk, engelska och eventuellt svenska. Glöm inte språkkod. | dcterms:title  |
| Translittererad titel | har parallel title proper | För titlar på icke-latinskt alfabet som translittererats | rdau:P60589 |
| Alternativ titel  | Alternative title  | Alternativ titel eller undertitel | dcterms:alternative |
| Contributer | Medverkande | Medverkande till verket. Annotera med roll. | dcterms:contributer |
| Skapelsedatum | Date created | Tidpunkt då verket skrev. För verk som ej getts ut förrän senare. | dcterms:created |
| Utgivningsland | Spatial coverage | Land där verket först gavs ut | dcterms:spatial |
| Orginalspråk | Language | Orginalspråk verket skrevs på |dcterms:language |
| Beskrivning | Description | Beskrivning av verket | dcterms:description |
| Genre/form  | Genre/form | Ange genre/form  |  bf:genreForm |
| Ämne | Subject | Ämnesord | dcterms:subject |
| Intern anteckning | Note | Anteckna om verket finns på DI-biblioteket |bf:note |
| Libris-länk | uri | Länk till Libris instans med flest bestånd | bibo:uri |
|  Målgrupp | has intended audience | Tilltänkt målgrupp | rdau:P60520 |

### Manifestation DI

| Name (sv)          | Original name | Description  (sv)  | Field used     |
| -------------- | -------------- | -------------- | -------------- |
| Titel | Title | Titel på verket i eventuell översättning | dcterms:title |
| Medverkande | Contributor | Medverkande till manifestationen, t.ex. översättare. Lägg annotation om roll. | dcterms:contributor |
| Språk för manifestationen | Language | Språk den censurerade manifestationen är utgiven på. | dcterms:language |
| Utgivningsår | Date Issued | Utgivningsår för manifestationen | dcterms:language |
| Utgivningsort | has place of publication | Manifestationens utgivningsort | rdau:P60163 |
| Instans av | Instance of | Koppla till verket | bf:instanceOf |
| Beskrivning | Description | Beskrivning av manifestationen | dcterms:description |
| Interna anteckningar | note | - | skos:note |
| Typ: Manifestation | has category of resource | Alltid Manifestation | rdau:P60058 |

### Event DI

| Name (sv)          | Original name | Description  (sv)  | Field used     |
| -------------- | -------------- | -------------- | -------------- |
| Namn på händelsen | Title | F.n. verkets titel + förbudet | dcterms:title | 
| Beskrivning av händelsen | Description | - | dcterms:description |
| Plats  för händelsen| Spatial Coverage | Plats där förbudet eller dylikt ägde rum | dcterms:spatial |
| Tidsperiod | Temporal Coverage | Tidpunkt eller tidsperiod där händelsen ägde rum. Lägg till annotering om typ av datum. | dcterms:temporal |
| Personer och/eller organisationer | Contributer | Personer och/eller organisationer som medverkat till händelsen | dcterms:contributer |
| Typ av censur/förbud | Type | -| dcterms:type |
| Skäl till förbud/censur | Anlass | Skäl till att verket har förbjudits/censurerats. | gndo:occasion |
| Relaterat verk/manifestation | Related resource | Relaterat verk eller manifestation | bf:relatedTo |
| Efterföljande händelse | has successor | En efterföljande relaterad händelse, t.ex. nytt förbud | rdau:P60686 |
| Referenser | References | Referenser till förbudet/censuren | dcterms:references |
| Anteckningar| note | Lägg olika typer av anteckningar i olika fält. Annotera med typ av anteckning.| skos:note |
| Typ: Händelse | has category of resource | Alltid Händelse | rdau:P60058 |

### Organisation DI

| Name (sv)          | Original name | Description  (sv)  | Field used     |
| -------------- | -------------- | -------------- | -------------- |
| Namn | Name | Organisationens namn | foaf:name |
| Alternativ namnform | alternative label | Förkortningar, andra namnformer etc. | skos:altLabel |
| Etableringsdatum | has date of establishment | Organisationens startdatum | rdau:P60524 |
| Avetableringsdatum | has date of termination | Datum då organisationen avetablerades | rdau:P60525 |
| Plats | Spatial Coverage | Plats där organisationen har/hade sitt huvudsäte | dcterms:spatial |
| Är del av | Is Part Of | Annan organisation som denna organisation tillhör | dcterms:isPartOf |
| Anteckningar om organisation | has note on agent | - | rdau:P60956 |
| Intern anteckning | note | - | skos:note |
| Typ: Organisation | has category of resource | Alltid Organisation | rdau:P60058 |

### Person DI

| Name (sv)          | Original name | Description  (sv)  | Field used     |
| -------------- | -------------- | -------------- | -------------- |
| Namn | Name | Efternamn, Förnamn  | foaf:name |
| Efternamn | familyName | - | foaf:familyName |
| Förnamn | Given name | - | foaf:givenname |
| Annan namnform | alternative label | Annan namnform för personen | skos:altLabel |
| Pseudonym | has alternate identity | Eventuell pseudonym för personen | rdau:P60036 |
| Yrke/Roll | has profession or occupation | t.ex. författare, redaktör eller illustratör | rdau:P60468 |
| Wikidata-URI | uri | Länk till personens Wikidatalänk | bibo:uri |
| Födelsedatum | has date of birth | Födelsedatum, annotera vid eventuell osäkerhet | rdau:P60599 |
| Dödsdatum | has date of death | Dödsdatum, annotera vid eventuell osäkerhet | rdau:P60598 |
| Födelseort | has place of birth | Länka till födelseort eller skriv i fritext om det saknas. | rdau:P60593 |
| Beskrivning | Description | Beskrivning av personen | dcterms:description |
| Exilort | Exilort | Personens exilort | gndo:placeOfExile |
| Tidsperiod | Temporal coverage | Här ex. tidsperiod för exil. Lägg annotering för typ av tidsperiod. | dcterms:temporal |
| Kön | gender | Författarens könstillhörighet | foaf:gender |
| Anteckningar| note | Lägg olika typer av anteckningar i olika fält. Annotera med typ av anteckning.| skos:note |
| Typ: Person | has category of resource | Alltid Person | rdau:P60058 |
|  |  |  | |

### Place DI

| Name (sv)          | Original name | Description  (sv)  | Field used     |
| -------------- | -------------- | -------------- | -------------- |
| Namn | Title | - | dcterms:title |
| Latitud och longitud | has longitude and latitude | - | rdau:P60345 |
| uri | uri | - | bibo:uri |
| Intern anteckning | note | - | skos:note |
| Typ: Ort | has catoegory of resource | Alltid Ort | rdau:P60058 |




### Finding aid Saga
| Name (sv)          | Original name | Description  (sv)  | Field used     |
| -------------- | -------------- | -------------- | -------------- |
| Arkiv-ID | Identifier | Arkiv-ID i Sagas, eller annat, arkiv | dcterms:identifier |
| Titel/Namn | Title | Namn på arkivet/arkivförteckningen | dcterms:title |
| Beskrivning | Description | Beskrivning av resursen | dcterms:description |
| Har del | Has Part | En relaterad resurs som är inkluderad, antingen fysiskt eller logiskt, i arkivförteckningen. | dcterms:hasPart |
| Anteckningar | note | Lägg olika typer av anteckningar i olika fält. Annotera med typ av anteckning.| skos:note |
| Typ: Arkivförteckning | has category of resource | Alltid Arkivförteckning | rdau:P60058 |



### Creative concept Saga

| Name (sv)          | Original name | Description  (sv)  | Field used     |
| -------------- | -------------- | -------------- | -------------- |
| Titel | Title | Titeln på svenska | dcterms:title | 
| Alternativ titel | Alternative title | Undertitel eller orginaltitel. Annotera typ av titel. | dcterms:alternative |
| Beskrivning | Description | Beskrivning av resursen. | dcterms:description |
| Orginalspråk | Language | Verkets orginalspråk | dcterms:language |
| Medverkande | Contributer | Medverkande till det kreativa konceptet,  lägg in annotering för roll. | dcterms:contributer |
| Anteckningar | note | Lägg olika typer av anteckningar i olika fält. Annotera med typ av anteckning.| skos:note |
| Typ: Verk | has category of resource | Alltid Verk | rdau:P60058 |

### Work Saga

| Name (sv)          | Original name | Description  (sv)  | Field used     |
| -------------- | -------------- | -------------- | -------------- |
| Titel | Title | Verkets titel | dcterms:title |
| Alternativ titel | Alternative title | Undertitel eller orginaltitel. Annotera typ av titel. | dcterms:alternative |
| Nummer | number | Nummer i Sagaserien | bibo:number |
| Är en del av | Is Part Of | Den relaterade publikationsserien som verket tillhör | dcterms:isPartOf |
| Beskrivning | Description | Beskrivning av verket. | dcterms:description |
| Relaterade resurser | Related resource | Relaterade verk eller sagatexter, t.ex. en annan samling med folksagor eller dylikt. | bf:relatedTo |
| Anteckningar | note | Lägg olika typer av anteckningar i olika fält. Annotera med typ av anteckning.| skos:note |
| Typ: Verk | has category of resource | Alltid Verk | rdau:P60058 |

### Edition Saga

| Name (sv)          | Original name | Description  (sv)  | Field used     |
| -------------- | -------------- | -------------- | -------------- |
| Arkiv-ID | Identifier | Ange internt arkiv-ID | dcterms:identifier |
| Titel | Title | Resursens namn | dcterms:title |
| Undertitel/Alternativ titel | Alternative Title | Undertitel eller orginaltitel. Annotera typ av titel. | dcterms:alternative |
| Format | Format | Utgåvans fysiska format | dcterms:format |
| Upplaga | edition | Ange nummer på upplagan | bibo:edition |
| Beskrivning | Description | Beskrivning av utgåvan. Lägg in omslagstext och baksides text. Annotera med typ av text. | dcterms:description |
| Utgivningsdatum | Date Issued | Utgivningsdatum eller år | dcterms:issued |
| ISBN | isbn | - | bibo:isbn |
| Medverkande | Contributer | Medverkande till utgåvan, lägg in annotering för roll. | dcterms:contributer |
| Antal sidor | number of pages | Antal sidor i utgåvan | bibo:numPages|
| Är del av | Is Part Of | Verket som utgåvan representerar. | dcterms:isPartOf |
| Libris-länk | uri | Fyll i Libris-länken för resursen | bibo:uri |
| Efterföljs av | is succeeded by | Efterföljande utgivning. Ex: utgåva 1 av Saga 4 efterföljs av utgåva 2 av Saga 4. | rdau:P60278 |
| Anteckningar | note | Lägg olika typer av anteckningar i olika fält. Annotera med typ av anteckning.| skos:note |
| Typ: Utgåva | has category of resource | Alltid utgåva | rdau:P60058 |
|  |  |  | |

### Sagatext Saga

| Name (sv)          | Original name | Description  (sv)  | Field used     |
| -------------- | -------------- | -------------- | -------------- |
| Arkiv-ID | Identifier | Arkiv-ID i Sagas, eller annat, arkiv | dcterms:identifier |
| Titel | Title | Sagatextens namn | dcterms:title |
| Undertitel/Alternativ titel | Alternative Title | Undertitel eller orginaltitel. Annotera typ av titel. | dcterms:alternative |
| Beskrivning | Description | Beskrivning av sagatexten | dcterms:description |
| Medverkande | Contributer | Medverkande till sagatexten, lägg in annotering för roll. | dcterms:contributer |
| Startsida | page start | Första paginerade sidan | bibo:pageStart |
| Slutsida | page end | Sista paginerade sidan | bibo:pageEnd |
| Antal sidor | number of pages | Totalt antal sidor för sagatexten | bibo:numPages |
| Har illustrationer | has illustrations | Länka till inkluderade illustrationer | rdau:P60182 |
| Del av  | Is Part Of | Länka till relaterad(e) resurs(er) där Sagatexten är publicerad | dcterms:isPartOf |
| Anteckningar | note | Lägg olika typer av anteckningar i olika fält. Annotera med typ av anteckning.| skos:note |
| Typ: Sagatext | has category of resource | Alltid sagatect | rdau:P60058 |

### Event Saga

| Name (sv)          | Original name | Description  (sv)  | Field used     |
| -------------- | -------------- | -------------- | -------------- |
| Namn | Title | Händelsens namn| dcterms:title | 
| Beskrivning | Description | Beskrivning av resursen. | dcterms:description |
| Typ av händelse | Type | Fyll i typ av händelse, t.ex. Tävling | dcterms:type |
| Medverkande | Contributer | Medverkande till/vid händelsen | dcterms:contributer |
| Tid | Temporal Coverage | Datum eller tidsintervall då händelsen ägde rum | dcterms:temporal |
| Plats | Spatial Coverage | Plats där händelsen ägde rum | dcterms:spatial |
| Anteckningar| note | Lägg olika typer av anteckningar i olika fält. Annotera med typ av anteckning.| skos:note |
| Typ: Händelse | has category of resource | Alltid Händelse | rdau:P60058 |

### Document Saga

| Name (sv)          | Original name | Description  (sv)  | Field used     |
| -------------- | -------------- | -------------- | -------------- |
| Arkiv-ID | Identifier | Arkiv-ID i Sagas, eller annat, arkiv | dcterms:identifier |
| Titel/Namn | Title | Handlingens namn/rubrik/titel | dcterms:title |
| Beskrivning | Description | Beskrivning av handlingen | dcterms:description |
| Del av | Is Part Of | En relaterad resurs som handlingen är en del av, logiskt eller fysiskt. | dcterms:isPartOf |
| Relaterade resurser | Relation | Relaterade resurser som handlingen länkas till, t.ex. ett verk som handlingen berör | dcterms:relation |
| Typ av handling | Type | Fyll i typ av handling, t.ex. Ekonomiska handlingar | dcterms:type |
| Tid | Temporal Coverage | Tidpunkt då handlingen upprättades | dcterms:temporal |
| Plats | Spatial coverage | Plats där handlingen upprättades | dcterms:spatial |
| Medverkande | Contributer | Medverkande till handlingen,  lägg in annotering för roll. | dcterms:contributor |
| Format | Format | Handlingens fysiska format, t.ex. dimensioner eller material. | dcterms:format |
| Sidor | pages | Antal sidor | bibo:pages |
| Anteckningar| note | Lägg olika typer av anteckningar i olika fält. Annotera med typ av anteckning.| skos:note |
| Ämne | Subject | Ämnen relaterade till handlingen | dcterms:subject |
| Åtkomsträttigheter | Access Rights | Information om vilka rättigheter som gäller för resursen | dcterms:accessRights |
| Typ: Handling | has category of resource | Alltid Handling | rdau:P60058 |

### Illustration Saga

| Name (sv)          | Original name | Description  (sv)  | Field used     |
| -------------- | -------------- | -------------- | -------------- |
| Arkiv-ID | Identifier | Arkiv-ID i Sagas, eller annat, arkiv | dcterms:identifier |
| Titel | Title | Illustrationens namn | dcterms:title |
| Beskrivning | Description | Beskrivning av illustrationen | dcterms:description |
| Färg, ja/nej | has colour |  | rdau:P61161 |
| Medverkande | Contributer | Skapare och medverkande till illustrationen. Annotera med roll. | dcterms:contributor  |
| Typ av illustration | Type | Fyll i typ av illustration, t.ex. akvarell | dcterms:type |
| Publiceringsstatus | status | Ange här om illustrationen är publicerad, är ett utkast eller dylikt | bibo:status |
| Åtkomsträttigheter | Access Rights | Information om vilka rättigheter som gäller för resursen | dcterms:accessRights |
| Versioner | Has Version | Åtkomsträttigheter | Access Rights | Information om vilka rättigheter som gäller för resursen | dcterms:accessRights | dcterms:accessRights |
| Anteckningar| note | Lägg olika typer av anteckningar i olika fält. Annotera med typ av anteckning.| skos:note |
| Typ: Illustration | has category of resource | Alltid Illustration | rdau:P60058 |

### Organisation Saga

| Name (sv)          | Original name | Description  (sv)  | Field used     |
| -------------- | -------------- | -------------- | -------------- |
| Namn | Name | Organisationens namn | foaf:name |
| alternative label | Andra namnformer | För t.ex. alternativa stavningar, förkortningar och förändrade namnformer. | skos:altLabel |
| Etableringsdatum | has date of establishment | Organisationens startdatum | rdau:P60524 |
| Avetableringsdatum | has date of termination | Datum då organisationen avetablerades | rdau:P60525 |
| Plats | Spatial Coverage | Plats där organisationen hade sitt huvudsäte | dcterms:spatial |
| Är del av | Is Part Of | Annan organisation som denna organisation tillhör | dcterms:isPartOf |
| Anteckningar| note | Lägg olika typer av anteckningar i olika fält. Annotera med typ av anteckning.| skos:note |
| Typ: Organisation | has category of resource | Alltid Organisation | rdau:P60058 |

### Person Saga

| Name (sv)          | Original name | Description  (sv)  | Field used     |
| -------------- | -------------- | -------------- | -------------- |
| Efternamn | familyName | Personens efternamn | foaf:familyName |
| Förnamn | Given name | Personens förnamn | foaf:givenname |
| Pseudonym | has alternate identity | Eventuell pseudonym för personen | rdau:P60036 |
| Yrke/Roll | has profession or occupation | t.ex. författare, redaktör eller illustratör | rdau:P60468 |
| Libris-URI | uri | Länk till personens Librispost | bibo:uri |
| Födelsedatum | has date of birth | Födelsedatum, annotera vid eventuell osäkerhet | rdau:P60599 |
| Dödsdatum | has date of death | Dödsdatum, annotera vid eventuell osäkerhet | rdau:P60598 |
| Anteckningar| note | Lägg olika typer av anteckningar i olika fält. Annotera med typ av anteckning.| skos:note |
| Typ: Person | has category of resource | Alltid Person | rdau:P60058 |
|  |  |  | |

### Publication series Saga

| Name (sv)          | Original name | Description  (sv)  | Field used     |
| -------------- | -------------- | -------------- | -------------- |
| Titel | Title | Publikationsseriens namn | dcterms:title |
| Undertitel/Alternativ titel | Alternative Title | Undertitel eller orginaltitel. Annotera typ av titel. | dcterms:alternative |
| Beskrivning | Description | Beskrivning av publikationsserien | dcterms:description |
| Förlag | Publisher | Förlag ansvarig för utgivningen | dcterms:publisher |
| Utgivningsperiod | Temporal Coverage | Tidsperiod då utgivningen skedde | dcterms:temporal |
| Utgivningsort | Spatial Coverage | Utgivningsort för publikationsserien | dcterms:spatial |
| Anteckningar| note | Lägg olika typer av anteckningar i olika fält. Annotera med typ av anteckning.| skos:note |
| Typ: Pubilkationsserie | has category of resource | Alltid Publikationsserie | rdau:P60058 |
|  |  |  | |

# Copyright

Omeka is Copyright © 2015-present Corporation for Digital Scholarship, Vienna, Virginia, USA http://digitalscholar.org

The Corporation for Digital Scholarship distributes the Omeka source code under the GNU General Public License, version 3 (GPLv3). The full text of this license is given in the license file.

The Omeka name is a registered trademark of the Corporation for Digital Scholarship.

Third-party copyright in this distribution is noted where applicable.

All rights not expressly granted are reserved.
