
CREATE TABLE areas (
    area_codigo            INT(3) NOT NULL ,
    area_nombre            VARCHAR(100) NOT NULL,
    area_fecharegistro     DATETIME NOT NULL,
    area_registradopor     VARCHAR(100) NOT NULL
);

ALTER TABLE areas ADD CONSTRAINT areas_pk PRIMARY KEY ( area_codigo );
ALTER TABLE areas CHANGE area_codigo area_codigo INT(3) NOT NULL AUTO_INCREMENT;

CREATE TABLE aud_areas (
    area_codigo            INT(3) NOT NULL,
    area_nombre            VARCHAR(100) NOT NULL,
    area_fecharegistro     DATETIME NOT NULL,
    area_registradopor     VARCHAR(100) NOT NULL,
    emple_identificacion   INT(15) NOT NULL,
    tregistro_areas        CHAR(2)
);

ALTER TABLE aud_areas ADD CONSTRAINT areasv1_pk PRIMARY KEY ( area_codigo );

CREATE TABLE aud_controlhoras (
    contro_horaingreso       DATETIME NOT NULL,
    contro_horasalida        DATETIME NOT NULL,
    contro_fecharegistro     DATETIME NOT NULL,
    contro_registradopor     VARCHAR(100) NOT NULL,
    perso_cedula             INT(14) NOT NULL,
    tregistro_controlhoras   CHAR(2)
);

ALTER TABLE aud_controlhoras
    ADD CONSTRAINT controlhorasv1_pk PRIMARY KEY ( contro_horaingreso,
    contro_horasalida,
    perso_cedula );

CREATE TABLE aud_eps (
    eps_codigo          INT(2) NOT NULL,
    eps_nombre          VARCHAR(100) NOT NULL,
    eps_fecharegistro   DATETIME NOT NULL,
    eps_registradopor   VARCHAR(100) NOT NULL,
    tregistro_eps       CHAR(2)
);

ALTER TABLE aud_eps ADD CONSTRAINT epsv1_pk PRIMARY KEY ( eps_codigo );

CREATE TABLE aud_instituciones (
    insti_codigo              INT(3) NOT NULL,
    insti_nombreinstitucion   VARCHAR(200) NOT NULL,
    insti_jefevoluntariado    VARCHAR(100) NOT NULL,
    insti_telefono            INT(7),
    insti_celular             INT(10),
    insti_correoelectronico   VARCHAR(100) NOT NULL,
    insti_fecharegistro       DATETIME NOT NULL,
    insti_registradopor       VARCHAR(100) NOT NULL,
    tregistro_instituciones   CHAR(2)
);

ALTER TABLE aud_instituciones ADD CONSTRAINT institucionesv1_pk PRIMARY KEY ( insti_codigo );

CREATE TABLE aud_personas (
    perso_cedula          INT(14) NOT NULL,
    perso_tipo            VARCHAR(20),
    perso_nombres         VARCHAR(100) NOT NULL,
    perso_apellidos       VARCHAR(100) NOT NULL,
    perso_telefonofijo    INT(7) NULL,
    perso_celular         INT(10) NULL,
    perso_usermail        VARCHAR(100) NOT NULL,
    perso_contrasena      VARCHAR(250),
    perso_jefe            INT(14) NULL,
    perso_modalidad       VARCHAR(50) NOT NULL,
    perso_estado          VARCHAR(10),
    perso_canthoras       INT(4) NOT NULL,
    perso_estudiosencurso VARCHAR(100) NOT NULL,
    perso_fecharegistro   DATETIME NOT NULL,
    perso_registradopor   VARCHAR(100) NOT NULL,
    eps_codigo            INT(2) NOT NULL,
    insti_codigo          INT(3) NOT NULL,
    tregistro_personas    CHAR(2)
);

ALTER TABLE aud_personas ADD CONSTRAINT personasv1_pk PRIMARY KEY ( perso_cedula );

CREATE TABLE aud_subareas (
    suba_codigo          INT(3) NOT NULL,
    suba_nombre          VARCHAR(100) NOT NULL,
    suba_fecharegistro   DATETIME NOT NULL,
    suba_registradopor   VARCHAR(100) NOT NULL,
    tregistro_subareas   CHAR(2)
);

ALTER TABLE aud_subareas ADD CONSTRAINT subareasv1_pk PRIMARY KEY ( suba_codigo );

CREATE TABLE controlhoras (
    contro_horaingreso     DATETIME NOT NULL,
    contro_horasalida      DATETIME NOT NULL,
    contro_fecharegistro   DATETIME NOT NULL,
    contro_registradopor   VARCHAR(100) NOT NULL,
    perso_cedula           INT(14) NOT NULL
);

ALTER TABLE controlhoras
    ADD CONSTRAINT personas_horas_pk PRIMARY KEY ( contro_horaingreso,
    contro_horasalida,
    perso_cedula );

CREATE TABLE eps (
    eps_codigo          INT(2) NOT NULL,
    eps_nombre          VARCHAR(100) NOT NULL,
    eps_fecharegistro   DATETIME NOT NULL,
    eps_registradopor   VARCHAR(100) NOT NULL
);

ALTER TABLE eps ADD CONSTRAINT eps_pk PRIMARY KEY ( eps_codigo );
ALTER TABLE eps CHANGE eps_codigo eps_codigo INT(2) NOT NULL AUTO_INCREMENT;

CREATE TABLE instituciones (
    insti_codigo              INT(3) NOT NULL,
    insti_nombreinstitucion   VARCHAR(200) NOT NULL,
    insti_jefevoluntariado    VARCHAR(100) NOT NULL,
    insti_telefono            INT(7),
    insti_celular             INT(10),
    insti_correoelectronico   VARCHAR(100) NOT NULL,
    insti_fecharegistro       DATETIME NOT NULL,
    insti_registradopor       VARCHAR(100) NOT NULL
);

ALTER TABLE instituciones ADD CONSTRAINT instituciones_pk PRIMARY KEY ( insti_codigo );
ALTER TABLE instituciones CHANGE insti_codigo insti_codigo INT(3) NOT NULL AUTO_INCREMENT;

CREATE TABLE personas (
    perso_cedula          INT(14) NOT NULL,
    perso_tipo            VARCHAR(20),
    perso_nombres         VARCHAR(100) NOT NULL,
    perso_apellidos       VARCHAR(100) NOT NULL,
    perso_telefonofijo    INT(7) NULL,
    perso_celular         INT(10) NULL,
    perso_usermail        VARCHAR(100) NOT NULL,
    perso_contrasena      VARCHAR(250),
    perso_jefe            INT(14) NULL,
    perso_modalidad       VARCHAR(50) NOT NULL,
    perso_estado          VARCHAR(10),
    perso_canthoras       INT(4) NOT NULL,
    perso_estudiosencurso VARCHAR(100) NOT NULL,
    perso_fecharegistro   DATETIME NOT NULL,
    perso_registradopor   VARCHAR(100) NOT NULL,
    eps_codigo            INT(2) NOT NULL,
    insti_codigo          INT(3) NOT NULL,
    suba_codigo           INT(3) NOT NULL
);

ALTER TABLE personas ADD CONSTRAINT personas_pk PRIMARY KEY ( perso_cedula );

CREATE TABLE subareas (
    suba_codigo          INT(3) NOT NULL,
    suba_nombre          VARCHAR(100) NOT NULL,
    suba_fecharegistro   DATETIME NOT NULL,
    suba_registradopor   VARCHAR(100) NOT NULL,
    area_codigo          INT(3) NOT NULL
);

ALTER TABLE subareas ADD CONSTRAINT subareas_pk PRIMARY KEY ( suba_codigo );
ALTER TABLE subareas CHANGE suba_codigo suba_codigo INT(3) NOT NULL AUTO_INCREMENT;

ALTER TABLE controlhoras
    ADD CONSTRAINT controlhoras_personas_fk FOREIGN KEY ( perso_cedula )
        REFERENCES personas ( perso_cedula );

ALTER TABLE personas
    ADD CONSTRAINT personas_eps_fk FOREIGN KEY ( eps_codigo )
        REFERENCES eps ( eps_codigo );

ALTER TABLE personas
    ADD CONSTRAINT personas_instituciones_fk FOREIGN KEY ( insti_codigo )
        REFERENCES instituciones ( insti_codigo );

ALTER TABLE personas
    ADD CONSTRAINT personas_personas_fk FOREIGN KEY ( perso_jefe )
        REFERENCES personas ( perso_cedula );

ALTER TABLE personas
    ADD CONSTRAINT personas_subareas_fk FOREIGN KEY ( suba_codigo )
        REFERENCES subareas ( suba_codigo );

ALTER TABLE subareas
    ADD CONSTRAINT subareas_areas_fk FOREIGN KEY ( area_codigo )
        REFERENCES areas ( area_codigo );

