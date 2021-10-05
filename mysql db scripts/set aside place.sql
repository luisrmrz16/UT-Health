/* DISPARADOR | TRIGGER */

delimiter //
create trigger reserve after insert on users
for each row begin
    insert into patients(patient_id) value (null);
end//
delimiter ;

INSERT INTO users VALUES (null, "mat_luis16@hotmail.com", "luisrmrz16", "58477", "Luis Ángel", "Ramírez Villanueva", "UTTI202045");