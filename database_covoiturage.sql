create database projet_covoiturage;
use projet_covoiturage;

create table Internautes (
IdInternautes int not null auto_increment,
email varchar(50),
motDePasse varchar(50),
nom varchar(50),
prenom varchar(50),
telephone varchar(15),
constraint PK_INTER primary key (email,IdInternautes)
);
describe Internautes;

create table Trajets (
idTrajet int auto_increment primary key,
villeDépart varchar(50),
villeArrivée varchar(50),
prixRecommandé decimal
);
describe Trajets;

create table Covoiturages (
idCovoiturage int auto_increment primary key,
Trajet int,				/* (clef étrangère) */
Daate  date,
email varchar(50),		/* (clef étrangère correspondant au conducteur) */
nbPlaces int,  			/* (hors conducteur) */
constraint FK_0 foreign key(Trajet) references Trajets(idTrajet),
constraint FK_1 foreign key (email) references Internautes(email)
);
describe Covoiturages;

create table Transports (
idTransport int auto_increment primary key,
idCovoiturage  int, 	/* clef étrangère */
email varchar(50), 		/* (clef étrangère correspondant à la personne transportée) */
constraint FK_2 foreign key (idCovoiturage) references Covoiturages(idCovoiturage), 
constraint FK_3 foreign key (email) references Internautes(email)
);
describe Covoiturages;

show databases;
show tables;
