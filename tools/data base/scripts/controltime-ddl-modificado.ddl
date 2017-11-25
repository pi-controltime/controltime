-- Generado por Oracle SQL Developer Data Modeler 17.3.0.261.1529
--   en:        2017-11-13 16:50:52 COT
--   sitio:      Oracle Database 11g
--   tipo:      Oracle Database 11g



CREATE TABLE areas (
    area_codigo            INT(3) NOT NULL,
    area_nombre            VARCHAR2(100) NOT NULL,
    area_fecharegistro     DATETIME NOT NULL,
    area_registradopor     VARCHAR2(100) NOT NULL,
    emple_identificacion   INT(15) NOT NULL
);

ALTER TABLE areas ADD CONSTRAINT areas_pk PRIMARY KEY ( area_codigo );

CREATE TABLE aud_areas (
    area_codigo            INT(3) NOT NULL,
    area_nombre            VARCHAR2(100) NOT NULL,
    area_fecharegistro     DATETIME NOT NULL,
    area_registradopor     VARCHAR2(100) NOT NULL,
    emple_identificacion   INT(15) NOT NULL,
    tregistro_areas        CHAR(2)
);

ALTER TABLE aud_areas ADD CONSTRAINT areasv1_pk PRIMARY KEY ( area_codigo );

CREATE TABLE aud_controlhoras (
    contro_horaingreso       DATETIME NOT NULL,
    contro_horasalida        DATETIME NOT NULL,
    contro_fecharegistro     DATETIME NOT NULL,
    contro_registradopor     VARCHAR2(100) NOT NULL,
    perso_cedula             INT(14) NOT NULL,
    tregistro_controlhoras   CHAR(2)
);

ALTER TABLE aud_controlhoras
    ADD CONSTRAINT controlhorasv1_pk PRIMARY KEY ( contro_horaingreso,
    contro_horasalida,
    perso_cedula );

CREATE TABLE aud_eps (
    eps_codigo          INT(2) NOT NULL,
    eps_nombre          VARCHAR2(100) NOT NULL,
    eps_fecharegistro   DATETIME NOT NULL,
    eps_registradopor   VARCHAR2(100) NOT NULL,
    tregistro_eps       CHAR(2)
);

ALTER TABLE aud_eps ADD CONSTRAINT epsv1_pk PRIMARY KEY ( eps_codigo );

CREATE TABLE aud_instituciones (
    insti_codigo              INT(3) NOT NULL,
    insti_nombreinstitucion   VARCHAR2(200) NOT NULL,
    insti_jefevoluntariado    VARCHAR2(100) NOT NULL,
    insti_telefono            INT(7),
    insti_celular             INT(10),
    insti_correoelectronico   VARCHAR2(100) NOT NULL,
    insti_fecharegistro       DATETIME NOT NULL,
    insti_registradopor       VARCHAR2(100) NOT NULL,
    tregistro_instituciones   CHAR(2)
);

ALTER TABLE aud_instituciones ADD CONSTRAINT institucionesv1_pk PRIMARY KEY ( insti_codigo );

CREATE TABLE aud_personas (
    perso_cedula          INT(14) NOT NULL,
    perso_tipo            VARCHAR2(20),
    perso_nombres         VARCHAR2(100) NOT NULL,
    perso_apellidos       VARCHAR2(100) NOT NULL,
    perso_telefonofijo    INT(7),
    perso_celular         INT(10) NOT NULL,
    perso_usermail        VARCHAR2(100) NOT NULL,
    perso_contrasena      VARCHAR2(250),
    perso_jefe            INT NOT NULL,
    perso_modalidad       VARCHAR2(50) NOT NULL,
    perso_estado          VARCHAR2(10),
    perso_fecharegistro   DATETIME NOT NULL,
    perso_registradopor   VARCHAR2(100) NOT NULL,
    eps_codigo            INT(2) NOT NULL,
    insti_codigo          INT(3) NOT NULL,
    tregistro_personas    CHAR(2)
);

ALTER TABLE aud_personas ADD CONSTRAINT personasv1_pk PRIMARY KEY ( perso_cedula );

CREATE TABLE aud_subareas (
    suba_codigo          INT(3) NOT NULL,
    suba_nombre          VARCHAR2(100) NOT NULL,
    suba_fecharegistro   DATETIME NOT NULL,
    suba_registradopor   VARCHAR2(100) NOT NULL,
    tregistro_subareas   CHAR(2)
);

ALTER TABLE aud_subareas ADD CONSTRAINT subareasv1_pk PRIMARY KEY ( suba_codigo );

CREATE TABLE controlhoras (
    contro_horaingreso     DATETIME NOT NULL,
    contro_horasalida      DATETIME NOT NULL,
    contro_fecharegistro   DATETIME NOT NULL,
    contro_registradopor   VARCHAR2(100) NOT NULL,
    perso_cedula           INT(14) NOT NULL
);

ALTER TABLE controlhoras
    ADD CONSTRAINT personas_horas_pk PRIMARY KEY ( contro_horaingreso,
    contro_horasalida,
    perso_cedula );

CREATE TABLE eps (
    eps_codigo          INT(2) NOT NULL,
    eps_nombre          VARCHAR2(100) NOT NULL,
    eps_fecharegistro   DATETIME NOT NULL,
    eps_registradopor   VARCHAR2(100) NOT NULL
);

ALTER TABLE eps ADD CONSTRAINT eps_pk PRIMARY KEY ( eps_codigo );

CREATE TABLE instituciones (
    insti_codigo              INT(3) NOT NULL,
    insti_nombreinstitucion   VARCHAR2(200) NOT NULL,
    insti_jefevoluntariado    VARCHAR2(100) NOT NULL,
    insti_telefono            INT(7),
    insti_celular             INT(10),
    insti_correoelectronico   VARCHAR2(100) NOT NULL,
    insti_fecharegistro       DATETIME NOT NULL,
    insti_registradopor       VARCHAR2(100) NOT NULL
);

ALTER TABLE instituciones ADD CONSTRAINT instituciones_pk PRIMARY KEY ( insti_codigo );

CREATE TABLE personas (
    perso_cedula          INT(14) NOT NULL,
    perso_tipo            VARCHAR2(20),
    perso_nombres         VARCHAR2(100) NOT NULL,
    perso_apellidos       VARCHAR2(100) NOT NULL,
    perso_telefonofijo    INT(7),
    perso_celular         INT(10) NOT NULL,
    perso_usermail        VARCHAR2(100) NOT NULL,
    perso_contrasena      VARCHAR2(250),
    perso_jefe            INT(14) NOT NULL,
    perso_modalidad       VARCHAR2(50) NOT NULL,
    perso_estado          VARCHAR2(10),
    perso_fecharegistro   DATETIME NOT NULL,
    perso_registradopor   VARCHAR2(100) NOT NULL,
<<<<<<< HEAD:tools/data base/scripts/controltime-ddl-modificado.ddl
    eps_codigo            NUMBER(2) NOT NULL,
    insti_codigo          NUMBER(3) NOT NULL,
    suba_codigo           NUMBER(3) NOT NULL,
    perso_canthoras       NUMBER(4)
=======
    eps_codigo            INT(2) NOT NULL,
    insti_codigo          INT(3) NOT NULL,
    suba_codigo           INT(3) NOT NULL
>>>>>>> 6ca5519d673a7d0c901b030aec3da57e924718a3:tools/data base/ddl_controltime_v2_ok.ddl
);

ALTER TABLE personas ADD CONSTRAINT personas_pk PRIMARY KEY ( perso_cedula );

CREATE TABLE subareas (
    suba_codigo          INT(3) NOT NULL,
    suba_nombre          VARCHAR2(100) NOT NULL,
    suba_fecharegistro   DATETIME NOT NULL,
    suba_registradopor   VARCHAR2(100) NOT NULL,
    area_codigo          INT(3) NOT NULL
);

ALTER TABLE subareas ADD CONSTRAINT subareas_pk PRIMARY KEY ( suba_codigo );

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



-- Informe de Resumen de Oracle SQL Developer Data Modeler: 
-- 
-- CREATE TABLE                            12
-- CREATE INDEX                             0
-- ALTER TABLE                             18
-- CREATE VIEW                              0
-- ALTER VIEW                               0
-- CREATE PACKAGE                           0
-- CREATE PACKAGE BODY                      0
-- CREATE PROCEDURE                         0
-- CREATE FUNCTION                          0
-- CREATE TRIGGER                           0
-- ALTER TRIGGER                            0
-- CREATE COLLECTION TYPE                   0
-- CREATE STRUCTURED TYPE                   0
-- CREATE STRUCTURED TYPE BODY              0
-- CREATE CLUSTER                           0
-- CREATE CONTEXT                           0
-- CREATE DATABASE                          0
-- CREATE DIMENSION                         0
-- CREATE DIRECTORY                         0
-- CREATE DISK GROUP                        0
-- CREATE ROLE                              0
-- CREATE ROLLBACK SEGMENT                  0
-- CREATE SEQUENCE                          0
-- CREATE MATERIALIZED VIEW                 0
-- CREATE SYNONYM                           0
-- CREATE TABLESPACE                        0
-- CREATE USER                              0
-- 
-- DROP TABLESPACE                          0
-- DROP DATABASE                            0
-- 
-- REDACTION POLICY                         0
-- 
-- ORDS DROP SCHEMA                         0
-- ORDS ENABLE SCHEMA                       0
-- ORDS ENABLE OBJECT                       0
-- 
-- ERRORS                                   0
-- WARNINGS                                 0
