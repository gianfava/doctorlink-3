CREATE TABLE agendamento (
    id INT AUTO_INCREMENT PRIMARY KEY,
    idUsuario INT,
    idMedico INT,
    dataHora DATETIME,
    FOREIGN KEY (idUsuario) REFERENCES usuario(id),
    FOREIGN KEY (idMedico) REFERENCES medico(id)
);