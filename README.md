# tiketapi

CREATE table member ( id INT NOT NULL AUTO_INCREMENT, nama VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id) );

CREATE table member_token ( id INT NOT NULL AUTO_INCREMENT, member_id INT NOT NULL, auth_key VARCHAR(255) NOT NULL, FOREIGN KEY (member_id) REFERENCES member(id) on update cascade on delete no action, PRIMARY KEY(id) );

-- CREATE table tiket
CREATE TABLE tiket (
    id INT NOT NULL AUTO_INCREMENT,
    nama_event VARCHAR(255) NOT NULL,
    harga INT NOT NULL,
    PRIMARY KEY(id)
);

-- CREATE table booking_tiket
CREATE TABLE booking_tiket (
    id INT NOT NULL AUTO_INCREMENT,
    member_id INT NOT NULL,
    tiket_id INT NOT NULL,
    jumlah INT NOT NULL,
    total_harga INT NOT NULL,
    FOREIGN KEY (member_id) REFERENCES member(id) ON UPDATE CASCADE ON DELETE NO ACTION,
    FOREIGN KEY (tiket_id) REFERENCES tiket(id) ON UPDATE CASCADE ON DELETE NO ACTION,
    PRIMARY KEY(id)
);
