create database projet_covoiturage;
use projet_covoiturage;

create table Internautes (
email varchar(50),
motDePasse varchar(50),
nom varchar(50),
prenom varchar(50),
telephone varchar(15)
);

create table Trajets (
idTrajet int auto_increment primary key,
villeDépart varchar(50),
villeArrivée varchar(50),
prixRecommandé decimal
);

create table Covoiturages (
idCovoiturage int auto_increment primary key,
idTrajet int,			/* (clef étrangère) */
Daate  date,
email varchar(50),		/* (clef étrangère correspondant au conducteur) */
nbPlaces int,  			/* (hors conducteur) */
foreign key(idTrajet) references Trajets(idTrajet),
foreign key (email) references Internautes(email)
);

create table Transports (
idTransport int auto_increment primary key,
idCovoiturage  int, 	/* clef étrangère */
email varchar(50), 		/* (clef étrangère correspondant à la personne transportée) */
foreign key (idCovoiturage) references Covoiturages(idCovoiturage), 
foreign key (email) references Internautes(email)
);

show databases;
show tables;
