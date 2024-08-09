CREATE TABLE tx_projects_domain_model_category (
	title varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_projects_domain_model_degreecourse (
	title varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_projects_domain_model_project (
	title varchar(255) NOT NULL DEFAULT '',
	teaser text NOT NULL DEFAULT '',
	description text NOT NULL DEFAULT '',
	studentsfreetext varchar(255) NOT NULL DEFAULT '',
	lecturersfreetext varchar(255) NOT NULL DEFAULT '',
	date datetime DEFAULT NULL,
	copartner varchar(255) NOT NULL DEFAULT '',
	copartnerlink varchar(255) NOT NULL DEFAULT '',
	topimage int(11) unsigned NOT NULL DEFAULT '0',
	media int(11) unsigned NOT NULL DEFAULT '0',
	thumbimage int(11) unsigned NOT NULL DEFAULT '0',
	lightboxstyle int(11) NOT NULL DEFAULT '0',
	path_segment varchar(255) NOT NULL DEFAULT '',
	category int(11) unsigned DEFAULT '0',
	degreecourse int(11) unsigned DEFAULT '0',
	semester int(11) unsigned DEFAULT '0',
	students int(11) unsigned NOT NULL DEFAULT '0',
	lecturers int(11) unsigned NOT NULL DEFAULT '0'
);

CREATE TABLE tx_projects_domain_model_semester (
	title varchar(255) NOT NULL DEFAULT ''
);
