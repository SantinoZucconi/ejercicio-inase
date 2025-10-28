CREATE TABLE muestras (
    codigo_de_muestra INT PRIMARY KEY,
    numero_precinto INT NOT NULL,
    empresa VARCHAR(32) NOT NULL,
    especie VARCHAR(32) NOT NULL,
    cantidad_de_semillas INT NOT NULL
);

CREATE TABLE resultados (
    id_muestra INT PRIMARY KEY,
    poder_germinativo DECIMAL(5,2),
    pureza DECIMAL(5,2),
    materiales_inertes VARCHAR(32),
    CONSTRAINT fk_resultados_muestras
        FOREIGN KEY (id_muestra) REFERENCES muestras(codigo_de_muestra)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

-- Para poder ver los reportes

SELECT
    m.codigo_de_muestra,
    m.empresa,
    m.especie,
    r.poder_germinativo,
    r.pureza,
    r.materiales_inertes
FROM muestras AS m
INNER JOIN resultados AS r ON m.codigo_de_muestra = r.id_muestra;
