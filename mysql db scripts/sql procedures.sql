/* PROCEDIMIETO INSERT */

DELIMITER QQQ
CREATE PROCEDURE add_user(IN em varchar(25), IN usn varchar(25), IN pass varchar(50), IN na varchar(50), IN lna varchar(50), IN sid varchar(10))
BEGIN
	INSERT INTO users (email, user_name, password, name, last_name, school_id)
    VALUES(em, usn, pass, na, lna, sid);
END QQQ
DELIMITER ;



/* PROCEDIMIETO DELETE */

DELIMITER QQQ

CREATE PROCEDURE del_user (IN uid INT)
BEGIN
    DELETE FROM users WHERE user_id = uid;
END QQQ

DELIMITER ;



/* PROCEDIMIETO UPDATE */

DELIMITER QQQ
CREATE PROCEDURE up_user(IN uid INT, IN em varchar(25), IN usn varchar(25), IN pass varchar(50), IN na varchar(50), IN lna varchar(50), IN sid varchar(10))
BEGIN
	Update users Set email=em, user_name=usn, password=pass, name=na, last_name=lna, school_id=sid WHERE user_id = uid;
END QQQ
DELIMITER ;