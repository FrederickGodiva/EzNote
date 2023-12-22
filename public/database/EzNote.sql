create table users (
	id_user serial not null,
	username varchar(100) not null,
	password text not null,
	primary key (id_user)
);

create table notes (
	id_note serial not null,
	id_user integer not null,
	note_title text not null,
	note text not null,
	last_modified timestamp with time zone default current_timestamp not null,
	primary key (id_note),
	constraint fk_notes_users foreign key (id_user) references users (id_user)
);

create table pictures (
	id_picture serial not null,
	id_user integer not null,
	picture text not null,
	last_modified timestamp with time zone default current_timestamp not null,
	primary key (id_picture),
	constraint fk_pictures_users foreign key (id_user) references users (id_user)
);





select * from users;

select * from notes;

select * from pictures;