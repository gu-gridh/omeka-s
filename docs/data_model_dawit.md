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
