CREATE DATABASE paises;
USE paises;
CREATE TABLE paises (
    id INTEGER AUTO_INCREMENT PRIMARY KEY
    ,nome VARCHAR(50)
    ,capital VARCHAR(50)
    ,idioma VARCHAR(50)
    ,continente VARCHAR(50)
    ,populacao VARCHAR(50)
    ,lider_politico VARCHAR(50)
    ,religiao_dominante VARCHAR(50)
    ,PIB VARCHAR(50)
    ,IDH FLOAT
);

INSERT INTO paises ( 
    nome , capital, idioma, continente , populacao ,lider_politico ,religiao_dominante ,PIB ,IDH 
) VALUES (
     'Brasil'
    , 'Brasilia'
    , 'Português'
    ,'America do Sul'
    ,'218.5 M'
    ,'Luis Inácio Lula da Silva'
    ,'Cristianismo'
    ,'1,609 trilhão USD'
    , 0.754
);


INSERT INTO paises ( 
    nome , capital, idioma, continente , populacao ,lider_politico ,religiao_dominante ,PIB ,IDH  
) VALUES (
     'EUA'
    , 'Washington, D.C.'
    , 'Inglês' 
    ,'America do Norte'
    ,'331.9 M'
    ,'Joe Biden'
    ,'Cristianismo'
    ,'23,32 trilhão USD'
    , 0.902
);


INSERT INTO paises ( 
    nome , capital, idioma, continente , populacao ,lider_politico ,religiao_dominante ,PIB ,IDH 
) VALUES (
     'China'
    , 'Pequim'
    , 'Mandarim'
    ,'Ásia'
    ,'1.425 B'
    ,'Xi Jinping'
    ,'Sem Religião'
    ,'17,73 trilhões USD'
    , 0.752
);


INSERT INTO paises ( 
    nome , capital, idioma, continente , populacao ,lider_politico ,religiao_dominante ,PIB ,IDH 
) VALUES (
     'Índia'
    , 'Nova Delhi'
    , 'Hindu, Inglês'
    ,'Ásia'
    ,'1.428 B'
    ,'Draupadi Murmu'
    ,'Hinduísmo'
    ,'3,176 trilhões USD'
    , 0.633
);



