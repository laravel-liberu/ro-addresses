<?php

use Illuminate\Database\Migrations\Migration;

class InsertAllLocalitiesForPH extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = 'INSERT INTO localities (county_id, township, name, created_at, updated_at) VALUES
            (32, "","Adunati", NOW(), NOW()),
            (32, "","Albesti-Paleologu", NOW(), NOW()),
            (32, "","Alunis", NOW(), NOW()),
            (32, "","Apostolache", NOW(), NOW()),
            (32, "","Aricestii Rahtivani", NOW(), NOW()),
            (32, "","Aricestii Zeletin", NOW(), NOW()),
            (32, "","Azuga", NOW(), NOW()),
            (32, "","Baba Ana", NOW(), NOW()),
            (32, "","Balta Doamnei", NOW(), NOW()),
            (32, "","Berceni", NOW(), NOW()),
            (32, "","Bertea", NOW(), NOW()),
            (32, "","Blejoi", NOW(), NOW()),
            (32, "","Boldesti-Scaeni", NOW(), NOW()),
            (32, "","Bucov", NOW(), NOW()),
            (32, "","Busteni", NOW(), NOW()),
            (32, "","Baicoi", NOW(), NOW()),
            (32, "","Baltesti", NOW(), NOW()),
            (32, "","Banesti", NOW(), NOW()),
            (32, "","Barcanesti", NOW(), NOW()),
            (32, "","Cerasu", NOW(), NOW()),
            (32, "","Chiojdeanca", NOW(), NOW()),
            (32, "","Cocorastii Mislii", NOW(), NOW()),
            (32, "","Colceag", NOW(), NOW()),
            (32, "","Comarnic", NOW(), NOW()),
            (32, "","Campina", NOW(), NOW()),
            (32, "","Calugareni", NOW(), NOW()),
            (32, "","Carbunesti", NOW(), NOW()),
            (32, "","Draganesti", NOW(), NOW()),
            (32, "","Dumbrava", NOW(), NOW()),
            (32, "","Dumbravesti", NOW(), NOW()),
            (32, "","Filipestii de Padure", NOW(), NOW()),
            (32, "","Filipestii de Targ", NOW(), NOW()),
            (32, "","Floresti", NOW(), NOW()),
            (32, "","Fantanele", NOW(), NOW()),
            (32, "","Gherghita", NOW(), NOW()),
            (32, "","Gorgota", NOW(), NOW()),
            (32, "","Gornet", NOW(), NOW()),
            (32, "","Gornet-Cricov", NOW(), NOW()),
            (32, "","Gura Vadului", NOW(), NOW()),
            (32, "","Gura Vitioarei", NOW(), NOW()),
            (32, "","Iordacheanu", NOW(), NOW()),
            (32, "","Izvoarele", NOW(), NOW()),
            (32, "","Jugureni", NOW(), NOW()),
            (32, "","Lapos", NOW(), NOW()),
            (32, "","Lipanesti", NOW(), NOW()),
            (32, "","Mizil", NOW(), NOW()),
            (32, "","Magurele", NOW(), NOW()),
            (32, "","Magureni", NOW(), NOW()),
            (32, "","Manesti", NOW(), NOW()),
            (32, "","Ploiesti", NOW(), NOW()),
            (32, "","Plopeni", NOW(), NOW()),
            (32, "","Plopu", NOW(), NOW()),
            (32, "","Podenii Noi", NOW(), NOW()),
            (32, "","Poiana Campina", NOW(), NOW()),
            (32, "","Poienarii Burchii", NOW(), NOW()),
            (32, "","Provita de Jos", NOW(), NOW()),
            (32, "","Provita de Sus", NOW(), NOW()),
            (32, "","Puchenii Mari", NOW(), NOW()),
            (32, "","Pacureti", NOW(), NOW()),
            (32, "","Paulesti", NOW(), NOW()),
            (32, "","Rafov", NOW(), NOW()),
            (32, "","Salcia", NOW(), NOW()),
            (32, "","Scorteni", NOW(), NOW()),
            (32, "","Secaria", NOW(), NOW()),
            (32, "","Sinaia", NOW(), NOW()),
            (32, "","Slanic", NOW(), NOW()),
            (32, "","Starchiojd", NOW(), NOW()),
            (32, "","Surani", NOW(), NOW()),
            (32, "","Sangeru", NOW(), NOW()),
            (32, "","Salciile", NOW(), NOW()),
            (32, "","Talea", NOW(), NOW()),
            (32, "","Teisani", NOW(), NOW()),
            (32, "","Telega", NOW(), NOW()),
            (32, "","Tinosu", NOW(), NOW()),
            (32, "","Tomsani", NOW(), NOW()),
            (32, "","Targsoru Vechi", NOW(), NOW()),
            (32, "","Tataru", NOW(), NOW()),
            (32, "","Urlati", NOW(), NOW()),
            (32, "","Valea Calugareasca", NOW(), NOW()),
            (32, "","Valcanesti", NOW(), NOW()),
            (32, "","Valenii de Munte", NOW(), NOW()),
            (32, "","Varbilau", NOW(), NOW()),
            (32, "","Sirna", NOW(), NOW()),
            (32, "","Soimari", NOW(), NOW()),
            (32, "","Sotrile", NOW(), NOW()),
            (32, "","Stefesti", NOW(), NOW()),
            (32, "Adunati","Ocina de Jos", NOW(), NOW()),
            (32, "Adunati","Ocina de Sus", NOW(), NOW()),
            (32, "Albesti-Paleologu","Albesti-Muru", NOW(), NOW()),
            (32, "Albesti-Paleologu","Cioceni", NOW(), NOW()),
            (32, "Albesti-Paleologu","Vadu Parului", NOW(), NOW()),
            (32, "Alunis","Ostrovu", NOW(), NOW()),
            (32, "Apostolache","Buzota", NOW(), NOW()),
            (32, "Apostolache","Marlogea", NOW(), NOW()),
            (32, "Apostolache","Udresti", NOW(), NOW()),
            (32, "Apostolache","Valea Cricovului", NOW(), NOW()),
            (32, "Aricestii Rahtivani","Buda", NOW(), NOW()),
            (32, "Aricestii Rahtivani","Nedelea", NOW(), NOW()),
            (32, "Aricestii Rahtivani","Stoenesti", NOW(), NOW()),
            (32, "Aricestii Rahtivani","Targsoru Nou", NOW(), NOW()),
            (32, "Aricestii Zeletin","Albinari", NOW(), NOW()),
            (32, "Baba Ana","Ciresanu", NOW(), NOW()),
            (32, "Baba Ana","Conduratu", NOW(), NOW()),
            (32, "Baba Ana","Crangurile", NOW(), NOW()),
            (32, "Baba Ana","Satu Nou", NOW(), NOW()),
            (32, "Baicoi","Dambu", NOW(), NOW()),
            (32, "Baicoi","Liliesti", NOW(), NOW()),
            (32, "Baicoi","Schela", NOW(), NOW()),
            (32, "Baicoi","Tufeni", NOW(), NOW()),
            (32, "Baicoi","Tintea", NOW(), NOW()),
            (32, "Balta Doamnei","Bara", NOW(), NOW()),
            (32, "Balta Doamnei","Curcubeu", NOW(), NOW()),
            (32, "Balta Doamnei","Lacu Turcului", NOW(), NOW()),
            (32, "Baltesti","Izesti", NOW(), NOW()),
            (32, "Baltesti","Podenii Vechi", NOW(), NOW()),
            (32, "Banesti","Urleta", NOW(), NOW()),
            (32, "Barcanesti","Ghighiu", NOW(), NOW()),
            (32, "Barcanesti","Puscasi", NOW(), NOW()),
            (32, "Barcanesti","Romanesti", NOW(), NOW()),
            (32, "Barcanesti","Tatarani", NOW(), NOW()),
            (32, "Berceni","Cartierul Dambu", NOW(), NOW()),
            (32, "Berceni","Corlatesti", NOW(), NOW()),
            (32, "Berceni","Catunu", NOW(), NOW()),
            (32, "Berceni","Moara Noua", NOW(), NOW()),
            (32, "Bertea","Lutu Rosu", NOW(), NOW()),
            (32, "Blejoi","Ploiestiori", NOW(), NOW()),
            (32, "Blejoi","Tantareni", NOW(), NOW()),
            (32, "Boldesti-Gradistea","Boldesti", NOW(), NOW()),
            (32, "Boldesti-Gradistea","Gradistea", NOW(), NOW()),
            (32, "Boldesti-Scaeni","Seciu", NOW(), NOW()),
            (32, "Brazi","Brazii de Jos", NOW(), NOW()),
            (32, "Brazi","Brazii de Sus", NOW(), NOW()),
            (32, "Brazi","Batesti", NOW(), NOW()),
            (32, "Brazi","Negoiesti", NOW(), NOW()),
            (32, "Brazi","Popesti", NOW(), NOW()),
            (32, "Brazi","Stejaru", NOW(), NOW()),
            (32, "Breaza","Breaza de Jos", NOW(), NOW()),
            (32, "Breaza","Breaza de Sus", NOW(), NOW()),
            (32, "Breaza","Frasinet", NOW(), NOW()),
            (32, "Breaza","Gura Beliei", NOW(), NOW()),
            (32, "Breaza","Irimesti", NOW(), NOW()),
            (32, "Breaza","Nistoresti", NOW(), NOW()),
            (32, "Breaza","Podu Corbului", NOW(), NOW()),
            (32, "Breaza","Podu Vadului", NOW(), NOW()),
            (32, "Breaza","Surdesti", NOW(), NOW()),
            (32, "Breaza","Valea Tarsei", NOW(), NOW()),
            (32, "Brebu","Brebu Megiesesc", NOW(), NOW()),
            (32, "Brebu","Brebu Manastirei", NOW(), NOW()),
            (32, "Brebu","Pietriceaua", NOW(), NOW()),
            (32, "Brebu","Podu Cheii", NOW(), NOW()),
            (32, "Bucov","Bighilin", NOW(), NOW()),
            (32, "Bucov","Chitorani", NOW(), NOW()),
            (32, "Bucov","Pleasa", NOW(), NOW()),
            (32, "Bucov","Valea Orlei", NOW(), NOW()),
            (32, "Busteni","Poiana Tapului", NOW(), NOW()),
            (32, "Calugareni","Valea Scheilor", NOW(), NOW()),
            (32, "Carbunesti","Gogeasca", NOW(), NOW()),
            (32, "Ceptura","Ceptura de Jos", NOW(), NOW()),
            (32, "Ceptura","Ceptura de Sus", NOW(), NOW()),
            (32, "Ceptura","Malu Rosu", NOW(), NOW()),
            (32, "Ceptura","Rotari", NOW(), NOW()),
            (32, "Ceptura","Soimesti", NOW(), NOW()),
            (32, "Cerasu","Slon", NOW(), NOW()),
            (32, "Cerasu","Valea Borului", NOW(), NOW()),
            (32, "Cerasu","Valea Bradetului", NOW(), NOW()),
            (32, "Cerasu","Valea Lespezii", NOW(), NOW()),
            (32, "Cerasu","Valea Tocii", NOW(), NOW()),
            (32, "Chiojdeanca","Nucet", NOW(), NOW()),
            (32, "Chiojdeanca","Trenu", NOW(), NOW()),
            (32, "Ciorani","Cioranii de Jos", NOW(), NOW()),
            (32, "Ciorani","Cioranii de Sus", NOW(), NOW()),
            (32, "Cocorastii Mislii","Goruna", NOW(), NOW()),
            (32, "Cocorastii Mislii","Tiparesti", NOW(), NOW()),
            (32, "Colceag","Inotesti", NOW(), NOW()),
            (32, "Colceag","Parepa-Rusani", NOW(), NOW()),
            (32, "Colceag","Valcelele", NOW(), NOW()),
            (32, "Comarnic","Ghiosesti", NOW(), NOW()),
            (32, "Comarnic","Podu Lung", NOW(), NOW()),
            (32, "Comarnic","Poiana", NOW(), NOW()),
            (32, "Comarnic","Posada", NOW(), NOW()),
            (32, "Cornu","Cornu de Jos", NOW(), NOW()),
            (32, "Cornu","Cornu de Sus", NOW(), NOW()),
            (32, "Cornu","Valea Oprii", NOW(), NOW()),
            (32, "Cosminele","Cosmina de Jos", NOW(), NOW()),
            (32, "Cosminele","Cosmina de Sus", NOW(), NOW()),
            (32, "Cosminele","Draghicesti", NOW(), NOW()),
            (32, "Cosminele","Poiana Trestiei", NOW(), NOW()),
            (32, "Draganesti","Belciug", NOW(), NOW()),
            (32, "Draganesti","Baraitaru", NOW(), NOW()),
            (32, "Draganesti","Cornu de Jos", NOW(), NOW()),
            (32, "Draganesti","Hatcarau", NOW(), NOW()),
            (32, "Draganesti","Meri", NOW(), NOW()),
            (32, "Draganesti","Tufani", NOW(), NOW()),
            (32, "Drajna","Ciocrac", NOW(), NOW()),
            (32, "Drajna","Catunu", NOW(), NOW()),
            (32, "Drajna","Drajna de Jos", NOW(), NOW()),
            (32, "Drajna","Drajna de Sus", NOW(), NOW()),
            (32, "Drajna","Faget", NOW(), NOW()),
            (32, "Drajna","Ogretin", NOW(), NOW()),
            (32, "Drajna","Piatra", NOW(), NOW()),
            (32, "Drajna","Pitigoi", NOW(), NOW()),
            (32, "Drajna","Plai", NOW(), NOW()),
            (32, "Drajna","Podurile", NOW(), NOW()),
            (32, "Drajna","Poiana Mierlei", NOW(), NOW()),
            (32, "Dumbrava","Ciupelnita", NOW(), NOW()),
            (32, "Dumbrava","Cornu de Sus", NOW(), NOW()),
            (32, "Dumbrava","Trestienii de Jos", NOW(), NOW()),
            (32, "Dumbrava","Trestienii de Sus", NOW(), NOW()),
            (32, "Dumbrava","Zanoaga", NOW(), NOW()),
            (32, "Dumbravesti","Gavanel", NOW(), NOW()),
            (32, "Dumbravesti","Malaestii de Jos", NOW(), NOW()),
            (32, "Dumbravesti","Malaestii de Sus", NOW(), NOW()),
            (32, "Dumbravesti","Plopeni", NOW(), NOW()),
            (32, "Dumbravesti","Sfarleanca", NOW(), NOW()),
            (32, "Fantanele","Bozieni", NOW(), NOW()),
            (32, "Fantanele","Ghinoaica", NOW(), NOW()),
            (32, "Fantanele","Ungureni", NOW(), NOW()),
            (32, "Fantanele","Vadu Sapat", NOW(), NOW()),
            (32, "Filipestii De Padure","Ditesti", NOW(), NOW()),
            (32, "Filipestii De Padure","Minieri", NOW(), NOW()),
            (32, "Filipestii De Padure","Silistea Dealului", NOW(), NOW()),
            (32, "Filipestii De Targ","Bratasanca", NOW(), NOW()),
            (32, "Filipestii De Targ","Ezeni", NOW(), NOW()),
            (32, "Filipestii De Targ","Marginenii de Jos", NOW(), NOW()),
            (32, "Filipestii De Targ","Ungureni", NOW(), NOW()),
            (32, "Floresti","Cap Rosu", NOW(), NOW()),
            (32, "Floresti","Calinesti", NOW(), NOW()),
            (32, "Floresti","Catina", NOW(), NOW()),
            (32, "Floresti","Novacesti", NOW(), NOW()),
            (32, "Fulga","Fulga de Jos", NOW(), NOW()),
            (32, "Fulga","Fulga de Sus", NOW(), NOW()),
            (32, "Gherghita","Fanari", NOW(), NOW()),
            (32, "Gherghita","Independenta", NOW(), NOW()),
            (32, "Gherghita","Malamuc", NOW(), NOW()),
            (32, "Gherghita","Olari", NOW(), NOW()),
            (32, "Gherghita","Olarii Vechi", NOW(), NOW()),
            (32, "Gherghita","Ungureni", NOW(), NOW()),
            (32, "Gorgota","Crivina", NOW(), NOW()),
            (32, "Gorgota","Fanari", NOW(), NOW()),
            (32, "Gorgota","Poienarii Apostoli", NOW(), NOW()),
            (32, "Gorgota","Potigrafu", NOW(), NOW()),
            (32, "Gornet","Bogdanesti", NOW(), NOW()),
            (32, "Gornet","Cuib", NOW(), NOW()),
            (32, "Gornet","Nucet", NOW(), NOW()),
            (32, "Gornet-Cricov","Coserele", NOW(), NOW()),
            (32, "Gornet-Cricov","Dobrota", NOW(), NOW()),
            (32, "Gornet-Cricov","Priseaca", NOW(), NOW()),
            (32, "Gornet-Cricov","Valea Seaca", NOW(), NOW()),
            (32, "Gornet-Cricov","Tarculesti", NOW(), NOW()),
            (32, "Gura Vadului","Persunari", NOW(), NOW()),
            (32, "Gura Vadului","Tohani", NOW(), NOW()),
            (32, "Gura Vitioarei","Bughea de Jos", NOW(), NOW()),
            (32, "Gura Vitioarei","Fundeni", NOW(), NOW()),
            (32, "Gura Vitioarei","Fagetu", NOW(), NOW()),
            (32, "Gura Vitioarei","Poiana Copaceni", NOW(), NOW()),
            (32, "Iordacheanu","Mocesti", NOW(), NOW()),
            (32, "Iordacheanu","Plavia", NOW(), NOW()),
            (32, "Iordacheanu","Straosti", NOW(), NOW()),
            (32, "Iordacheanu","Valea Cucului", NOW(), NOW()),
            (32, "Iordacheanu","Varbila", NOW(), NOW()),
            (32, "Izvoarele","Cernesti", NOW(), NOW()),
            (32, "Izvoarele","Chiritesti", NOW(), NOW()),
            (32, "Izvoarele","Homoraciu", NOW(), NOW()),
            (32, "Izvoarele","Malu Vanat", NOW(), NOW()),
            (32, "Izvoarele","Schiulesti", NOW(), NOW()),
            (32, "Jugureni","Boboci", NOW(), NOW()),
            (32, "Jugureni","Marginea Padurii", NOW(), NOW()),
            (32, "Jugureni","Valea Unghiului", NOW(), NOW()),
            (32, "Lapos","Glod", NOW(), NOW()),
            (32, "Lapos","Laposel", NOW(), NOW()),
            (32, "Lapos","Pietricica", NOW(), NOW()),
            (32, "Lipanesti","Satu Nou", NOW(), NOW()),
            (32, "Lipanesti","Zamfira", NOW(), NOW()),
            (32, "Lipanesti","Sipotu", NOW(), NOW()),
            (32, "Magurele","Coada Malului", NOW(), NOW()),
            (32, "Magurele","Iazu", NOW(), NOW()),
            (32, "Magureni","Cocorastii Caplii", NOW(), NOW()),
            (32, "Magureni","Lunca Prahovei", NOW(), NOW()),
            (32, "Maneciu","Cheia", NOW(), NOW()),
            (32, "Maneciu","Chiciureni", NOW(), NOW()),
            (32, "Maneciu","Costeni", NOW(), NOW()),
            (32, "Maneciu","Facaieni", NOW(), NOW()),
            (32, "Maneciu","Gheaba", NOW(), NOW()),
            (32, "Maneciu","Manastirea Suzana", NOW(), NOW()),
            (32, "Maneciu","Maneciu-Pamanteni", NOW(), NOW()),
            (32, "Maneciu","Maneciu-Ungureni", NOW(), NOW()),
            (32, "Maneciu","Plaietu", NOW(), NOW()),
            (32, "Manesti","Baltita", NOW(), NOW()),
            (32, "Manesti","Chesnoiu", NOW(), NOW()),
            (32, "Manesti","Coada Izvorului", NOW(), NOW()),
            (32, "Manesti","Cocorastii Colt", NOW(), NOW()),
            (32, "Manesti","Cocorastii Grind", NOW(), NOW()),
            (32, "Manesti","Coltu de Jos", NOW(), NOW()),
            (32, "Manesti","Ghioldum", NOW(), NOW()),
            (32, "Manesti","Gura Crivatului", NOW(), NOW()),
            (32, "Manesti","Persunari", NOW(), NOW()),
            (32, "Manesti","Piatra", NOW(), NOW()),
            (32, "Manesti","Satu de Sus", NOW(), NOW()),
            (32, "Manesti","Zalhanaua", NOW(), NOW()),
            (32, "Mizil","Fefelei", NOW(), NOW()),
            (32, "Pacureti","Barzila", NOW(), NOW()),
            (32, "Pacureti","Curmatura", NOW(), NOW()),
            (32, "Pacureti","Matita", NOW(), NOW()),
            (32, "Pacureti","Slavu", NOW(), NOW()),
            (32, "Paulesti","Cocosesti", NOW(), NOW()),
            (32, "Paulesti","Gageni", NOW(), NOW()),
            (32, "Paulesti","Paulestii Noi", NOW(), NOW()),
            (32, "Plopu","Galmeia", NOW(), NOW()),
            (32, "Plopu","Harsa", NOW(), NOW()),
            (32, "Plopu","Nisipoasa", NOW(), NOW()),
            (32, "Podenii Noi","Ghiocel", NOW(), NOW()),
            (32, "Podenii Noi","Mehedinta", NOW(), NOW()),
            (32, "Podenii Noi","Nevesteasca", NOW(), NOW()),
            (32, "Podenii Noi","Podu lui Galben", NOW(), NOW()),
            (32, "Podenii Noi","Popesti", NOW(), NOW()),
            (32, "Podenii Noi","Rahova", NOW(), NOW()),
            (32, "Podenii Noi","Sfacaru", NOW(), NOW()),
            (32, "Podenii Noi","Salcioara", NOW(), NOW()),
            (32, "Podenii Noi","Valea Dulce", NOW(), NOW()),
            (32, "Poiana Campina","Bobolia", NOW(), NOW()),
            (32, "Poiana Campina","Pietrisu", NOW(), NOW()),
            (32, "Poiana Campina","Ragman", NOW(), NOW()),
            (32, "Poienarii Burchii","Carbunari", NOW(), NOW()),
            (32, "Poienarii Burchii","Ologeni", NOW(), NOW()),
            (32, "Poienarii Burchii","Pioresti", NOW(), NOW()),
            (32, "Poienarii Burchii","Podu Valeni", NOW(), NOW()),
            (32, "Poienarii Burchii","Poienarii Rali", NOW(), NOW()),
            (32, "Poienarii Burchii","Poienarii Vechi", NOW(), NOW()),
            (32, "Poienarii Burchii","Tatarai", NOW(), NOW()),
            (32, "Posesti","Bodesti", NOW(), NOW()),
            (32, "Posesti","Merdeala", NOW(), NOW()),
            (32, "Posesti","Nucsoara de Jos", NOW(), NOW()),
            (32, "Posesti","Nucsoara de Sus", NOW(), NOW()),
            (32, "Posesti","Posestii Ungureni", NOW(), NOW()),
            (32, "Posesti","Posestii-Pamanteni", NOW(), NOW()),
            (32, "Posesti","Tarlesti", NOW(), NOW()),
            (32, "Posesti","Valea Plopului", NOW(), NOW()),
            (32, "Posesti","Valea Screzii", NOW(), NOW()),
            (32, "Posesti","Valea Stupinii", NOW(), NOW()),
            (32, "Predeal-Sarari","Bobicesti", NOW(), NOW()),
            (32, "Predeal-Sarari","Poienile", NOW(), NOW()),
            (32, "Predeal-Sarari","Predeal", NOW(), NOW()),
            (32, "Predeal-Sarari","Sarari", NOW(), NOW()),
            (32, "Predeal-Sarari","Saratel", NOW(), NOW()),
            (32, "Predeal-Sarari","Tulburea", NOW(), NOW()),
            (32, "Predeal-Sarari","Tulburea Valeni", NOW(), NOW()),
            (32, "Predeal-Sarari","Vitioara de Sus", NOW(), NOW()),
            (32, "Predeal-Sarari","Zambroaia", NOW(), NOW()),
            (32, "Provita De Jos","Draganeasa", NOW(), NOW()),
            (32, "Provita De Jos","Piatra", NOW(), NOW()),
            (32, "Provita De Sus","Izvoru", NOW(), NOW()),
            (32, "Provita De Sus","Plaiu", NOW(), NOW()),
            (32, "Provita De Sus","Valea Bradului", NOW(), NOW()),
            (32, "Puchenii Mari","Miroslavesti", NOW(), NOW()),
            (32, "Puchenii Mari","Moara", NOW(), NOW()),
            (32, "Puchenii Mari","Odaile", NOW(), NOW()),
            (32, "Puchenii Mari","Pietrosani", NOW(), NOW()),
            (32, "Puchenii Mari","Puchenii Mici", NOW(), NOW()),
            (32, "Puchenii Mari","Puchenii Mosneni", NOW(), NOW()),
            (32, "Rafov","Antofiloaia", NOW(), NOW()),
            (32, "Rafov","Buchilasi", NOW(), NOW()),
            (32, "Rafov","Buda", NOW(), NOW()),
            (32, "Rafov","Goga", NOW(), NOW()),
            (32, "Rafov","Moara Domneasca", NOW(), NOW()),
            (32, "Rafov","Malaiesti", NOW(), NOW()),
            (32, "Rafov","Palanca", NOW(), NOW()),
            (32, "Rafov","Sicrita", NOW(), NOW()),
            (32, "Sangeru","Butuci", NOW(), NOW()),
            (32, "Sangeru","Miresu Mare", NOW(), NOW()),
            (32, "Sangeru","Miresu Mic", NOW(), NOW()),
            (32, "Sangeru","Piatra Mica", NOW(), NOW()),
            (32, "Sangeru","Tisa", NOW(), NOW()),
            (32, "Scorteni","Bordenii Mari", NOW(), NOW()),
            (32, "Scorteni","Bordenii Mici", NOW(), NOW()),
            (32, "Scorteni","Mislea", NOW(), NOW()),
            (32, "Scorteni","Sarca", NOW(), NOW()),
            (32, "Sirna","Bratesti", NOW(), NOW()),
            (32, "Sirna","Coceana", NOW(), NOW()),
            (32, "Sirna","Habud", NOW(), NOW()),
            (32, "Sirna","Tariceni", NOW(), NOW()),
            (32, "Sirna","Varnita", NOW(), NOW()),
            (32, "Slanic","Grosani", NOW(), NOW()),
            (32, "Slanic","Prajani", NOW(), NOW()),
            (32, "Soimari","Lopatnita", NOW(), NOW()),
            (32, "Soimari","Magura", NOW(), NOW()),
            (32, "Sotrile","Lunca Mare", NOW(), NOW()),
            (32, "Sotrile","Plaiu Cornului", NOW(), NOW()),
            (32, "Sotrile","Plaiu Campinei", NOW(), NOW()),
            (32, "Sotrile","Seciuri", NOW(), NOW()),
            (32, "Sotrile","Vistieru", NOW(), NOW()),
            (32, "Starchiojd","Bradet", NOW(), NOW()),
            (32, "Starchiojd","Batrani", NOW(), NOW()),
            (32, "Starchiojd","Gresia", NOW(), NOW()),
            (32, "Starchiojd","Poiana Mare", NOW(), NOW()),
            (32, "Starchiojd","Rotarea", NOW(), NOW()),
            (32, "Starchiojd","Valea Anei", NOW(), NOW()),
            (32, "Starchiojd","Zmeuret", NOW(), NOW()),
            (32, "Stefesti","Scurtesti", NOW(), NOW()),
            (32, "Stefesti","Tarsoreni", NOW(), NOW()),
            (32, "Surani","Pacuri", NOW(), NOW()),
            (32, "Talea","Plaiu", NOW(), NOW()),
            (32, "Targsoru Vechi","Strejnicu", NOW(), NOW()),
            (32, "Targsoru Vechi","Stancesti", NOW(), NOW()),
            (32, "Targsoru Vechi","Zahanaua", NOW(), NOW()),
            (32, "Tataru","Podgoria", NOW(), NOW()),
            (32, "Tataru","Silistea", NOW(), NOW()),
            (32, "Teisani","Bugnea de Sus", NOW(), NOW()),
            (32, "Teisani","Olteni", NOW(), NOW()),
            (32, "Teisani","Valea Stalpului", NOW(), NOW()),
            (32, "Teisani","Stubeiu", NOW(), NOW()),
            (32, "Telega","Bosilcesti", NOW(), NOW()),
            (32, "Telega","Bustenari", NOW(), NOW()),
            (32, "Telega","Doftana", NOW(), NOW()),
            (32, "Telega","Melicesti", NOW(), NOW()),
            (32, "Telega","Tontesti", NOW(), NOW()),
            (32, "Tinosu","Pisculesti", NOW(), NOW()),
            (32, "Tinosu","Predesti", NOW(), NOW()),
            (32, "Tomsani","Loloiasca", NOW(), NOW()),
            (32, "Tomsani","Magula", NOW(), NOW()),
            (32, "Tomsani","Satucu", NOW(), NOW()),
            (32, "Urlati","Arionestii Noi", NOW(), NOW()),
            (32, "Urlati","Arionestii Vechi", NOW(), NOW()),
            (32, "Urlati","Cherba", NOW(), NOW()),
            (32, "Urlati","Jercalai", NOW(), NOW()),
            (32, "Urlati","Maruntis", NOW(), NOW()),
            (32, "Urlati","Orzoaia de Jos", NOW(), NOW()),
            (32, "Urlati","Orzoaia de Sus", NOW(), NOW()),
            (32, "Urlati","Schiau", NOW(), NOW()),
            (32, "Urlati","Ulmi", NOW(), NOW()),
            (32, "Urlati","Valea Bobului", NOW(), NOW()),
            (32, "Urlati","Valea Crangului", NOW(), NOW()),
            (32, "Urlati","Valea Mieilor", NOW(), NOW()),
            (32, "Urlati","Valea Nucetului", NOW(), NOW()),
            (32, "Urlati","Valea Pietrei", NOW(), NOW()),
            (32, "Urlati","Valea Seman", NOW(), NOW()),
            (32, "Urlati","Valea Urloii", NOW(), NOW()),
            (32, "Valcanesti","Carjari", NOW(), NOW()),
            (32, "Valcanesti","Trestioara", NOW(), NOW()),
            (32, "Valea Calugareasca","Arva", NOW(), NOW()),
            (32, "Valea Calugareasca","Coslegi", NOW(), NOW()),
            (32, "Valea Calugareasca","Darvari", NOW(), NOW()),
            (32, "Valea Calugareasca","Pantazi", NOW(), NOW()),
            (32, "Valea Calugareasca","Rachieri", NOW(), NOW()),
            (32, "Valea Calugareasca","Radila", NOW(), NOW()),
            (32, "Valea Calugareasca","Schiau", NOW(), NOW()),
            (32, "Valea Calugareasca","Valea Larga", NOW(), NOW()),
            (32, "Valea Calugareasca","Valea Mantei", NOW(), NOW()),
            (32, "Valea Calugareasca","Valea Nicovani", NOW(), NOW()),
            (32, "Valea Calugareasca","Valea Poienii", NOW(), NOW()),
            (32, "Valea Calugareasca","Valea Popii", NOW(), NOW()),
            (32, "Valea Calugareasca","Valea Ursoii", NOW(), NOW()),
            (32, "Valea Calugareasca","Varfurile", NOW(), NOW()),
            (32, "Valea Doftanei","Tesila", NOW(), NOW()),
            (32, "Valea Doftanei","Traisteni", NOW(), NOW()),
            (32, "Varbilau","Cotofenesti", NOW(), NOW()),
            (32, "Varbilau","Livadea", NOW(), NOW()),
            (32, "Varbilau","Podu Ursului", NOW(), NOW()),
            (32, "Varbilau","Poiana Varbilau", NOW(), NOW())
        ;';
        DB::connection()->getPdo()->exec($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $sql = 'DELETE FROM localities WHERE county_id=32;';
        DB::connection()->getPdo()->exec($sql);
    }
}
