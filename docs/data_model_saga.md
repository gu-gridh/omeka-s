## Fields used
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
