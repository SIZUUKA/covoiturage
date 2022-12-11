create database projet_covoiturage;
use projet_covoiturage;

create table Internautes (
email varchar(50) primary key,
motDePasse varchar(50),
nom varchar(50),
prenom varchar(50),
telephone varchar(15)
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
foreign key(Trajet) references Trajets(idTrajet),
foreign key (email) references Internautes(email)
);
describe Covoiturages;

create table Transports (
idTransport int auto_increment primary key,
idCovoiturage  int, 	/* clef étrangère */
email varchar(50), 		/* (clef étrangère correspondant à la personne transportée) */
foreign key (idCovoiturage) references Covoiturages(idCovoiturage), 
foreign key (email) references Internautes(email)
);
describe Covoiturages;

show databases;
show tables;
